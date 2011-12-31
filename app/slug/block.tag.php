<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2075 $
 */
function smarty_block_tag($params, $content, &$smarty, &$repeat) {
	global $cookiepre, $tb_prefix;
	$conditions = array();
	$param_count = count($smarty->_tag_stack);
	if(empty($params['name'])) $params['name'] = "tag";
	if (!class_exists("Tags")) {
		uses("tag");
		$tag = new Tags();
		$tag_controller = new Tag();
	}else{
		$tag = new Tags();
		$tag_controller = new Tag();
	}
	$conditions[] = "closed=0";
	if (isset($params['typeid'])) {
		$conditions[] = "type='".intval($params['typeid'])."'";
	}
	if (isset($params['flag'])) {
		$conditions[] = "flag='".$params['flag']."'";
	}
	$orderby = null;
	if (isset($params['orderby'])) {
		$orderby = " ORDER BY ".trim($params['orderby'])." ";
	}else{
		$orderby = " ORDER BY id DESC";
	}
	$tag->setCondition($conditions);
	$limit = $offset = 0;
	if (isset($params['row'])) {
		$limit = $params['row'];
	}
	if (isset($params['start'])) {
		$offset = $params['start'];
	}
	$tag->setLimitOffset($offset, $limit);
	$sql = "SELECT id,name,name AS title FROM {$tag->table_prefix}tags ".$tag->getCondition()."{$orderby}".$tag->getLimitOffset();
	if(empty($smarty->blockvars[$param_count])) {
		$smarty->blockvars[$param_count] = $tag->dbstuff->CacheGetArray($sql);
		if(!$smarty->blockvars[$param_count]) return $repeat = false;
	}
	if (!function_exists("smarty_function_the_url")) {
		require("function.the_url.php");
	}
	if(list($key, $item) = each($smarty->blockvars[$param_count])) {
		$repeat = true;
		$item['title'] = preg_replace('#https?://[\w\.\?&/=]+#is', '', strip_tags($item['title']));
		if (isset($params['titlelen'])) {
	    	$item['title'] = mb_substr($item['title'], 0, $params['titlelen']);
		}
		$do = !empty($params['do'])?trim($params['do']):"product";
		$url = smarty_function_the_url(array("module"=>"tag", "q"=>urlencode($item['title']), "do"=>$do));
		$item['url'] = $url;
		$item['link'] = '<a title="'.$item['name'].'" href="'.$url.'" target="_blank">'.$item['title'].'</a>';
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