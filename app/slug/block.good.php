<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2075 $
 */
function smarty_block_good($params, $content, &$smarty, &$repeat) {
	$conditions = array();
	$param_count = count($smarty->_tag_stack);
	if(empty($params['name'])) $params['name'] = "good";
	if (class_exists("Goods")) {
		$good = new Goods();
		$good_controller = new Good();
	}else{
		uses("good");
		$good_controller = new Good();
		$good = new Goods();
	}
	if(!empty($params['typeid'])) {
		$conditions[] = "type_id=".$params['typeid'];
	}
	if (!empty($params['id'])) {
		$conditions[] = "id=".$params['id'];
	}
	if (isset($params['orderby'])) {
		$orderby = " ORDER BY ".trim($params['orderby'])." ";
	}else{
		$orderby = " ORDER BY id DESC";
	}
	$good->setCondition($conditions);
	$orderby = null;
	$limit = $offset = 0;
	if (isset($params['row'])) {
		$limit = $params['row'];
	}
	if (isset($params['start'])) {
		$offset = $params['start'];
	}
	$good->setLimitOffset($offset, $limit);
	if ($limit == "-1"){
		$good->limit_offset = 0;
	}
	$mysql_limit = $good->getLimitOffset();
	if (isset($params['limit'])) {
		$mysql_limit = " ".trim($params['limit']);
	}
	$sql = "SELECT *,name AS title,description AS content FROM {$good->table_prefix}goods ".$good->getCondition()."{$orderby}".$mysql_limit."";
	if(empty($smarty->blockvars[$param_count])) {
		$smarty->blockvars[$param_count] = $good->GetArray($sql);
		if(!$smarty->blockvars[$param_count]) return $repeat = false;
	}
	if(list($key, $item) = each($smarty->blockvars[$param_count])) {
		$repeat = true;
		if (isset($params['titlelen'])) {
	    	$item['title'] = mb_substr(strip_tags($item['title']), 0, $params['titlelen']);
		}
		if (isset($params['infolen'])) {
			$item['content'] = strip_tags($item['content']);
			if(isset($item['content'])) $item['content'] = mb_substr(pb_strip_spaces($item['content']),0, $params['infolen']);
		}
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