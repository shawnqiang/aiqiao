<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2075 $
 */
function smarty_block_quote($params, $content, &$smarty, &$repeat) {
	$conditions = array();
	$param_count = count($smarty->_tag_stack);
	if(empty($params['name'])) $params['name'] = "quote";
	if (class_exists("Quotes")) {
		$quote = new Quotes();
		$quote_controller = new Quote();
	}else{
		uses("quote");
		$quote = new Quotes();
		$quote_controller = new Quote();
	}
	if (!empty($params['productid'])) {
		$conditions[] ="q.product_id='".intval($params['productid'])."'";
	}
	if (!empty($params['marketid'])) {
		$conditions[] = "q.market_id=".$params['marketid'];
	}
	if (!empty($params['areaid'])) {
		$conditions[] = "q.area_id='".$params['areaid']."'";
	}
	$orderby = null;
	if (isset($params['orderby'])) {
		$orderby = " ORDER BY ".trim($params['orderby'])." ";
	}else{
		$orderby = " ORDER BY id DESC ";
	}
	$quote->setCondition($conditions);
	$limit = $offset = 0;
	if (isset($params['row'])) {
		$limit = $params['row'];
	}
	if (isset($params['start'])) {
		$offset = $params['start'];
	}
	$quote->setLimitOffset($offset, $limit);
	$sql = "SELECT id,title,content,max_price,min_price,created FROM {$quote->table_prefix}quotes q ".$quote->getCondition()."{$orderby}".$quote->getLimitOffset();
	if(empty($smarty->blockvars[$param_count])) {
		$smarty->blockvars[$param_count] = $quote->GetArray($sql);
		if(!$smarty->blockvars[$param_count]) return $repeat = false;
	}
	if(list($key, $item) = each($smarty->blockvars[$param_count])) {
		$repeat = true;
		$url = $quote->getPermaLink($item['id'], 'market/quote.php');
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