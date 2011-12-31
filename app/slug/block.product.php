<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2075 $
 */
 function smarty_block_product($params, $content, &$smarty, &$repeat) {
	$conditions = array();
	$param_count = count($smarty->_tag_stack);
	if(empty($params['name'])) $params['name'] = "product";
	if (class_exists("Products")) {
		$product = new Products();
		$product_controller = new Product();
	}else{
		uses("product");
		$product = new Products();
		$product_controller = new Product();
	}
	$conditions[] = "p.status=1 AND p.state=1";
	if(isset($params['type'])) {
		$type = explode(",", $params['type']);
		$type = array_unique($type);
		foreach ($type as $val) {
			switch ($val) {
				case 'image':
					$conditions[] = "p.picture!=''";
					break;
				case 'commend':
					$conditions[] = "p.ifcommend>0";
					break;
				case 'brand':
					$conditions[] = "p.brand_id>0";
					break;
				case 'hot':
					$orderbys[] = "clicked DESC";
					break;
				default:
					break;
			}
		}
	}
	if (isset($params['state'])) {
		$conditions[] ="p.state='".intval($params['state'])."'";
	}
	if (isset($params['companyid'])) {
		$conditions[] = "p.company_id=".$params['companyid'];
	}
	if (isset($params['memberid'])) {
		$conditions[] = "p.member_id=".$params['memberid'];
	}
	if (isset($params['sortid'])) {
		$conditions[] = "p.sort_id='".$params['sortid']."'";
	}
	if (isset($params['typeid'])) {
		$conditions[] = "p.producttype_id=".$params['typeid'];
	}
	if (isset($params['brandid'])) {
		$conditions[] = "p.brand_id=".$params['brandid'];
	}	
	if (!empty($params['industryid'])) {
		$conditions['industry'] = "p.industry_id='".$params['industryid']."'";
	}
	if (!empty($params['areaid'])) {
		$conditions['area'] = "p.area_id='".$params['areaid']."'";
	}
	if (!empty($_GET['industryid'])) {
		$conditions['industry'] = "p.industry_id=".intval($_GET['industryid']);
	}
	if (!empty($_GET['areaid'])) {
		$conditions['area'] = "p.area_id=".intval($_GET['areaid']);
	}
	$orderby = null;
	if (!empty($orderbys)) {
		$orderby.=" ORDER BY ".implode(",", $orderbys);
	}
	if (isset($params['orderby'])) {
		$orderby = " ORDER BY ".implode(",", array(trim($params['orderby']), $orderby))." ";
	}
	if(empty($orderby)){
		$orderby = " ORDER BY id DESC ";
	}
	$product->setCondition($conditions);
	$limit = $offset = 0;
	if (isset($params['row'])) {
		$limit = $params['row'];
	}
	if (isset($params['start'])) {
		$offset = $params['start'];
	}
	if (isset($_GET['pos'])) {
		$limit = $GLOBALS['limit'];
		$offset = intval($_GET['pos']);
	}
	$product->setLimitOffset($offset, $limit);
	$mysql_limit = $product->getLimitOffset();
	if (isset($params['limit'])) {
		$mysql_limit = " ".trim($params['limit']);
	}
	$sql = "SELECT p.*,p.id as productid,p.name as names,p.name as title,cache_companyname as companyname FROM {$product->table_prefix}products p ".$product->getCondition()."{$orderby}".$mysql_limit;

	if(empty($smarty->blockvars[$param_count])) {
		$smarty->blockvars[$param_count] = $product->GetArray($sql);
		if(!$smarty->blockvars[$param_count]) return $repeat = false;
	}
	if(list($key, $item) = each($smarty->blockvars[$param_count])) {
		$repeat = true;
		$item['rownum'] = $key;
		$item['iteration'] = ++$key;
		$url = $product->getPermaLink($item['id']);
		$item['url'] = $url;
		if (isset($params['titlelen'])) {
	    	$item['names'] = $item['title'] = mb_substr($item['name'], 0, $params['titlelen']);
	    	$item['companynames'] = mb_substr($item['companyname'], 0, $params['titlelen']);
		}
		$item['company'] = $item['companyname'];
		$item['link'] = '<a title="'.$item['name'].'" href="'.$url.'">'.$item['names'].'</a>';
		$item['hits'] = number_format($item['clicked']);
		$item['pubdate'] = @date("m-d", $item['created']);
		$item['thumb'] = $item['src'] = "attachment/".$item['picture'].".small.jpg";
		$smarty->assign($params['name'], $item);
	}
	else {
		$repeat = false;
		reset($smarty->blockvars[$param_count]);
	}
	if(!is_null($content)) print $content;
	if(!$repeat) $smarty->blockvars[$param_count] = array();
}
?>