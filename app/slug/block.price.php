<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2075 $
 */
 function smarty_block_price($params, $content, &$smarty, &$repeat) {
	$conditions = array();
	$param_count = count($smarty->_tag_stack);
	if(empty($params['name'])) $params['name'] = "price";
	if (class_exists("Productprice")) {
		$productprice = new Productprices();
		$productprice_controller = new Productprice();
	}else{
		uses("productprice");
		$productprice = new Productprices();
		$productprice_controller = new Productprice();
	}
	if (isset($params['productid'])) {
		$conditions[] ="p.product_id='".intval($params['productid'])."'";
	}
	if (isset($params['companyid'])) {
		$conditions[] = "p.company_id=".$params['companyid'];
	}
	if (isset($params['memberid'])) {
		$conditions[] = "p.member_id=".$params['memberid'];
	}
	if (isset($params['typeid'])) {
		$conditions[] = "p.type_id='".$params['typeid']."'";
	}
	if (!empty($params['areaid'])) {
		$conditions[] = "p.area_id='".$params['areaid']."'";
	}
	$orderby = null;
	if (isset($params['orderby'])) {
		$orderby = " ORDER BY ".trim($params['orderby'])." ";
	}else{
		$orderby = " ORDER BY id DESC ";
	}
	$productprice->setCondition($conditions);
	$limit = $offset = 0;
	if (isset($params['row'])) {
		$limit = $params['row'];
	}
	if (isset($params['start'])) {
		$offset = $params['start'];
	}
	$productprice->setLimitOffset($offset, $limit);
	$sql = "SELECT id,title,description,description as content,price,units,currency,created FROM {$productprice->table_prefix}productprices  p ".$productprice->getCondition()."{$orderby}".$productprice->getLimitOffset();
	if(empty($smarty->blockvars[$param_count])) {
		$smarty->blockvars[$param_count] = $productprice->GetArray($sql);
		if(!$smarty->blockvars[$param_count]) return $repeat = false;
	}
	if(list($key, $item) = each($smarty->blockvars[$param_count])) {
		$repeat = true;
		$url = $productprice->getPermaLink($item['id'], 'product/price.php');
		$item['url'] = $url;
		if (isset($params['titlelen'])) {
	    	$item['title'] = mb_substr(strip_tags($item['title']), 0, $params['titlelen']);
		}
		$item['pubdate'] = @date("m/d", $item['created']);
		$item['link'] = '<a title="'.$item['title'].'" href="'.$url.'">'.$item['title'].'</a>';
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