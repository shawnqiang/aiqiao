<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2048 $
 */
define('CURSCRIPT', 'list');
require("../libraries/common.inc.php");
require("../share.inc.php");
uses("trade","industry","area","tradefield","form");
require(CACHE_PATH. 'cache_trusttype.php');
require(CACHE_PATH. 'cache_country.php');
require(CACHE_PATH. 'cache_membergroup.php');
$area = new Areas();
$offer = new Tradefields();
$trade = new Trades();
$trade_controller = new Trade();
$form = new Forms();
$industry = new Industries();
$conditions = array();
$industry_id = $area_id = 0;
$conditions[]= "t.status=1";
if (isset($_GET['navid'])) {
	setvar("nav_id", intval($_GET['navid']));
}
uses("tag");
$tag = new Tags();
$viewhelper->setTitle(L('offer', 'tpl'));
$viewhelper->setPosition(L('offer', 'tpl'), "offer/");
if (isset($_GET['typeid'])) {
	$type_id = intval($_GET['typeid']);
	$conditions[]= "t.type_id='".$type_id."'";
	setvar("typeid", $type_id);
	$trade_controller->setTypeInfo($type_id);
	$type_name = $trade_controller->type_info['name'];
	$viewhelper->setTitle($type_name);
	$viewhelper->setPosition($type_name, "offer/list.php?typeid=".$type_id);
}
if (isset($_GET['industryid'])) {
	$industry_id = intval($_GET['industryid']);
	$tmp_info = $industry->setInfo($industry_id);
	if (!empty($tmp_info)) {
		$sub_ids = $industry->getSubDatas($tmp_info['id']);
		$sub_ids = array_keys($sub_ids);
		$conditions[] = "t.industry_id IN (".implode(",", $sub_ids).")";
		$viewhelper->setTitle($tmp_info['name']);
		$viewhelper->setPosition($tmp_info['name'], "offer/list.php?industryid=".$tmp_info['id']);
	}
}
if (isset($_GET['areaid'])) {
	$area_id = intval($_GET['areaid']);
	$tmp_info = $area->setInfo($area_id);
	if (!empty($tmp_info)) {
		$sub_ids = $area->getSubDatas($tmp_info['id']);
		$sub_ids = array_keys($sub_ids);
		$conditions[] = "t.area_id IN (".implode(",", $sub_ids).")";
		$viewhelper->setTitle($tmp_info['name']);
		$viewhelper->setPosition($tmp_info['name'], "offer/list.php?areaid=".$tmp_info['id']);
	}
}
if (isset($_GET['type'])) {
	if($_GET['type']=="urgent"){
		$conditions[]="t.if_urgent='1'";
	}
}
if (!empty($_GET['price_start']) || !empty($_GET['price_end'])) {
	$conditions[] = "t.price BETWEEN ".intval($_GET['price_start'])." AND ".intval($_GET['price_end']);
}
if (!empty($_GET['picture'])) {
	$conditions[] = "t.picture!=''";
}
if (!empty($_GET['urgent'])) {
	$conditions[] = "t.if_urgent=1";
}
if (!empty($_GET['commend'])) {
	$conditions[] = "t.if_commend=1";
}
if (!empty($_GET['country'])) {
	$conditions[] = "t.country_id='".intval($_GET['country'])."'";
}
if (!empty($_GET['sure'])) {
	$conditions[] = "m.trusttype_ids='".intval($_GET['sure'])."'";
}
if (!empty($_GET['date'])) {
	$d = intval($_GET['date']);
	if ($d<=7948800) {
		$conditions[] = "t.submit_time<='".intval($_GET['date'])."'";
	}
}
if (isset($_GET['do'])) {
	$do = trim($_GET['do']);
	if ($do == "search") {
		if (isset($_GET['q'])) {
			$searchkeywords = urldecode($_GET['q']);
			$viewhelper->setTitle(L("search_in_keyword", "tpl", $searchkeywords));
			$viewhelper->setPosition(L("search_in_keyword", "tpl", $searchkeywords));
			$conditions[]= "t.title like '%".$searchkeywords."%'";
			setvar("highlight_str", $searchkeywords);
		}
	}
	if (isset($_GET['pubdate'])) {
		switch ($_GET['pubdate']) {
			case "l3":
				$conditions[] = "t.submit_time>".($time_stamp-3*86400);
				break;
			case "l10":
				$conditions[] = "t.submit_time>".($time_stamp-10*86400);
				break;
			case "l30":
				$conditions[] = "t.submit_time>".($time_stamp-30*86400);
				break;
			default:
				break;
		}
	}
}
if ($_PB_CACHE['setting']['offer_expire_method']==2 || $_PB_CACHE['setting']['offer_expire_method']==3) {
	$conditions[] = "t.expire_time>".$time_stamp;
}
$amount = $trade->findCount(null, $conditions, null, "t");
$result = $trade->getRenderDatas($conditions, $_PB_CACHE['setting']['offer_filter']);
$important_result = $trade->getStickyDatas();
if (!empty($important_result)) {
	setvar("StickyItems", $important_result);
}
setvar('items', $result);
setvar('trusttype', $_PB_CACHE['trusttype']);
setvar('country', $_PB_CACHE['country']);
setvar("paging", array('total'=>$amount));
render("offer/list");
?>