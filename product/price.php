<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2048 $
 */
define('CURSCRIPT', 'price');
require("../libraries/common.inc.php");
require("../share.inc.php");
require(CACHE_PATH. "cache_typeoption.php");
require(CACHE_PATH. "cache_type.php");
require(CACHE_PATH. "cache_area.php");
uses("productprice","productcategory","area");
$price = new Productprices();
$productcategory = new Productcategories();
$area = new Areas();
$conditions = array();
setvar("PriceTypes", $_PB_CACHE['price_type']);
setvar("Productcategory",$_PB_CACHE['productcategory']);
setvar("Measuries", $_PB_CACHE['measuring']);
setvar("Monetaries", $_PB_CACHE['monetary']);
setvar("Areas",am($_PB_CACHE['area'][1], $_PB_CACHE['area'][2], $_PB_CACHE['area'][3]));
$tpl_file = "product/price";
$viewhelper->setTitle(L("product_prices", "tpl"));
$viewhelper->setPosition(L("product_prices", "tpl"), "product/price.php");
if (isset($_GET['action'])) {
	$action = trim($_GET['action']);
	switch ($action) {
		case "search":
			if (isset($_GET['catid'])) {
				$cat_id = intval($_GET['catid']);
			}
			if (isset($_GET['typeid'])) {
				$type_id = intval($_GET['typeid']);
			}
			if (isset($_GET['areaid'])) {
				$area_id = intval($_GET['areaid']);
			}
			$viewhelper->setTitle(L("prices", "tpl"));
			$viewhelper->setPosition(L("prices", "tpl"), "product/price.php");
			$tpl_file = "product/price.list";
			if($type_id){
				$viewhelper->setTitle($_PB_CACHE['price_type'][$type_id]);
				$conditions[] = "Productprice.type_id=".$type_id;
			}
			if($cat_id){
				$viewhelper->setTitle($cat_name = $pdb->GetOne("SELECT name FROM ".$tb_prefix."productcategories WHERE id=".$cat_id));
				$viewhelper->setPosition($cat_name, "product/price.php?do=search&catid=".$cat_id);
				$conditions[] = "Productprice.category_id=".$cat_id;
			}
			if($area_id){
				$viewhelper->setTitle($area_name = $pdb->GetOne("SELECT name FROM ".$tb_prefix."areas WHERE id=".$area_id));
				$viewhelper->setPosition($area_name);
//				$conditions[] = "Productprice.area_id=".$area_id;
				$sub_ids = $area->getSubDatas($area_id);
				$sub_ids = array_keys($sub_ids);
				$conditions[] = "Productprice.area_id IN (".implode(",", $sub_ids).")";
			}
			$amount = $price->findCount(null, $conditions, null);
			$joins[] = "LEFT JOIN {$tb_prefix}members m ON Productprice.member_id=m.id";
			$joins[] = "LEFT JOIN {$tb_prefix}companies c ON Productprice.company_id=c.id";
			$joins[] = "LEFT JOIN {$tb_prefix}productcategories pc ON Productprice.category_id=pc.id";
			$fields = "Productprice.*,m.username AS username,c.name AS companyname,pc.name AS categoryname";
			$result = $price->findAll($fields, $joins, $conditions,"Productprice.id DESC",$pos,$limit);
			setvar("paging", array('total'=>$amount));
			setvar("Prices",$result);
			render($tpl_file, true);
			break;
		default:
			break;
	}
}
if (isset($_GET['id'])) {
	$id = intval($_GET['id']);
	$result = $price->read("*", $id);
	if (!empty($result)) {
		$viewhelper->setTitle($result['title']);
		$viewhelper->setPosition($result['title']);
		$result['pubdate'] = df($result['created']);
		$result['typename'] = $_PB_CACHE['price_type'][$result['type_id']];
		$result['content'] = $result['description'];
		setvar("quote_type", 'price');
		$result['trend_data'] = true;
		$neighbour_info = $price->getNeighbour($id, "id,title");
		if (!empty($neighbour_info['prev'])) {
			$result['prev_link'] = "<a href='".$price->getPermaLink($neighbour_info['prev']['id'], 'product/price.php')."'>".$neighbour_info['prev']['title']."</a>";
			$result['prev_title'] = $neighbour_info['prev']['title'];
		}else{
			$result['prev_link'] = L("nothing", "tpl");
		}
		if (!empty($neighbour_info['next'])) {
			$result['next_link'] = "<a href='".$price->getPermaLink($neighbour_info['next']['id'], 'product/price.php')."'>".$neighbour_info['next']['title']."</a>";
			$result['next_title'] = $neighbour_info['next']['title'];
		}else{
			$result['next_link'] = L("nothing", "tpl");
		}
		setvar("item", $result);
		$tpl_file = "detail.default";
	}else{
		flash("data_not_exists");
	}
}
/**types**/
$price->findIt("productcategories");
if (!empty($price->params['data'])) {
	setvar("Items", $price->params['data'][1]);
}
/**types**/
$alphabet_sorts = $cats = array();
foreach ($price->params['result'] as $key1=>$val1) {
	$tmp_str = L10n::getinitial($val1['name']);
	$alphabet_sorts[$tmp_str][$val1['id']] = $val1['name'];
	if($val1['parent_id'] == 0){
		$cats[$val1['id']]['id'] = $val1['id'];
		$cats[$val1['id']]['title'] = $val1['name'];
		foreach ($price->params['result'] as $key2=>$val2) {
			if ($val2['parent_id'] == $val1['id']) {
				$cats[$val1['id']]['child'][$val2['id']]['id'] = $price->params['result'][$key2]['id'];
				$cats[$val1['id']]['child'][$val2['id']]['title'] = $price->params['result'][$key2]['name'];
				foreach ($price->params['result'] as $key3=>$val3) {
					if ($val3['parent_id'] == $val2['id']) {
						$cats[$val1['id']]['child'][$val2['id']]['child'][$val3['id']] = $price->params['result'][$key3];
					}
				}
			}
		}
	}
}
ksort($alphabet_sorts);
if (!empty($alphabet_sorts)) {
	unset($alphabet_sorts['~']);
	setvar("AlphabetSorts", $alphabet_sorts);
}
setvar("Cats", $cats);
render($tpl_file);
?>