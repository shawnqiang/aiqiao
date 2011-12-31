<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2075 $
 */
function smarty_block_keyword($params, $content, &$smarty, &$repeat) {
	$conditions = array();
	$param_count = count($smarty->_tag_stack);
	if(empty($params['name'])) $params['name'] = "keyword";
	if (!class_exists("Keywords")) {
		uses("keyword");
		$keyword = new Keywords();
		$keyword_controller = new Keyword();
	}else{
		$keyword = new Keywords();
		$keyword_controller = new Keyword();
	}
	$conditions[] = "status=1";
	if (isset($params['typeid'])) {
	        $conditions[] = "type='".intval($params['typeid'])."'";
	}
	if (isset($params['orderby'])) {
		$orderby = " ORDER BY ".trim($params['orderby'])." ";
	}else{
		$orderby = " ORDER BY id DESC";
	}
	$keyword->setCondition($conditions);
	$orderby = null;
	$limit = $offset = 0;
	if (isset($params['row'])) {
		$limit = $params['row'];
	}
	if (isset($params['start'])) {
		$offset = $params['start'];
	}
	$keyword->setLimitOffset($offset, $limit);
	$sql = "SELECT id,name,name AS title,name AS fulltitle FROM {$keyword->table_prefix}keywords ".$keyword->getCondition()."{$orderby}".$keyword->getLimitOffset();
	$result = $keyword->GetArray($sql);
	$return = null;
	if (!empty($result)) {
		$i_count = count($result);
		for ($i=0; $i<$i_count; $i++){
			if (isset($params['titlelen'])) {
	    		$result[$i]['title'] = mb_substr($result[$i]['title'], 0, $params['titlelen']);
	    	}
	    	$url = $keyword->getPermaLink($result[$i]['id']);
			$return.= str_replace(array("[field:title]", "[field:fulltitle]", "[field:id]", "[link:title]"), array($result[$i]['title'], $result[$i]['fulltitle'], $result[$i]['id'], $url), $content);
		}
	}
	return $return;
}
?>