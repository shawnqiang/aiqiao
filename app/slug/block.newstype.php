<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2075 $
 */
function smarty_block_newstype($params, $content, &$smarty, &$repeat) {
	$param_count = count($smarty->_tag_stack);
	if(empty($params['name'])) $params['name'] = "newstype";
	$conditions = array();
	$orderby = array();
	if(isset($params['id'])){
		$conditions[] = "id = ".$params['id'];
	}
	if (class_exists("Newstype")) {
		$newstype = new Newstypes();
		$newstype_controller = new Newstype();
	}else{
		uses("newstype");
		$newstype = new Newstypes();
		$newstype_controller = new Newstype();
	}
	if(isset($params['exclude'])){
		$conditions[] = "id NOT IN (".$params['exclude'].")";
	}
	if(isset($params['include'])){
		$conditions[] = "id IN(".$params['include'].")";
	}
	if (isset($params['level'])) {
		$conditions[] = "level_id='".$params['level']."'";
	}
	if (isset($params['parentid'])) {
		$conditions[] = "parent_id='".$params['parentid']."'";
	}
	if (isset($params['orderby'])) {
		$orderby[] = trim($params['orderby']);
	}else{
		$orderby[] = "id DESC ";
	}
	$newstype->setOrderby($orderby);
	$newstype->setCondition($conditions);
	$limit = $offset = 0;
	if (isset($params['row'])) {
		$limit = $params['row'];
	}
	if (isset($params['start'])) {
		$offset = $params['start'];
	}
	$newstype->setLimitOffset($offset, $limit);
	if (isset($params['exclude'])) $conditions[] = $newstype->getExcludeIds($params['exclude']);
	if (isset($params['include'])) $conditions[] = $newstype->getIncludeIds($params['include']);
	$sql = "SELECT * FROM {$newstype->table_prefix}newstypes ".$newstype->getCondition().$newstype->getOrderby().$newstype->getLimitOffset();
	$res = $newstype->GetArray($sql);
	if(empty($smarty->blockvars[$param_count])) {
		$smarty->blockvars[$param_count] = $res;
		if(!$smarty->blockvars[$param_count]) return $repeat = false;
	}
	if (!function_exists("smarty_function_the_url")) {
		require("function.the_url.php");
	}
	if(list($key, $item) = each($smarty->blockvars[$param_count])) {
		$repeat = true;
		$url = smarty_function_the_url(array("module"=>"search", "typeid"=>$item['id'], "do"=>"news"));
		$item['url'] = $url;
		$item['rownum'] = $key;
		$item['title'] = $item['name'];
		if (isset($params['titlelen'])) {
	    	$item['title'] = mb_substr(strip_tags($item['title']), 0, $params['titlelen']);
		}
		$item['link'] = '<a title="'.strip_tags($item['name']).'" href="'.$url.'">'.$item['title'].'</a>';
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