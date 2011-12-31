<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2075 $
 */
function smarty_block_standard($params, $content, &$smarty, &$repeat) {
	$conditions = array();
	$param_count = count($smarty->_tag_stack);
	//set variable
	if(empty($params['name'])) $params['name'] = "standard";
	if (class_exists("Standards")) {
		$standard = new Standards();
		$standard_controller = new Standard();
	}else{
	    uses("standard");
	    $standard = new Standards();
		$standard_controller = new Standard();
	}
	$orderby = array();
	if (isset($params['typeid'])) {
		$conditions[] = "type_id=".$params['typeid'];
	}
	if (isset($params['id'])) {
		$conditions[] = "id='".$params['id']."'";
	}
	if (isset($params['orderby'])) {
		$orderby[] = trim($params['orderby']);
	}else{
		$orderby[] = "id DESC ";
	}
	$standard->setOrderby($orderby);
	$standard->setCondition($conditions);
	$limit = $offset = 0;
	if (isset($params['row'])) {
		$limit = $params['row'];
	}
	if (isset($params['start'])) {
		$offset = $params['start'];
	}
	$standard->setLimitOffset($offset, $limit);
	$sql = "SELECT *,title as name FROM {$standard->table_prefix}standards ".$standard->getCondition().$standard->getOrderby().$standard->getLimitOffset();
	if(empty($smarty->blockvars[$param_count])) {
		$smarty->blockvars[$param_count] = $standard->GetArray($sql);
		if(!$smarty->blockvars[$param_count]) return $repeat = false;
	}
	if(list($key, $item) = each($smarty->blockvars[$param_count])) {
		$repeat = true;
		$url = $standard->getPermaLink($item['id']);
		$item['url'] = $url;
		if (isset($params['titlelen'])) {
	    	$item['name'] = mb_substr($item['title'], 0, $params['titlelen']);
		}
		$item['link'] = '<a title="'.$item['title'].'" href="'.$url.'">'.$item['name'].'</a>';
		$item['pubdate'] = df($item['created']);
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