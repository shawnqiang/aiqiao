<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2075 $
 */
function smarty_block_help($params, $content, &$smarty, &$repeat) {
	$conditions = array();
	$param_count = count($smarty->_tag_stack);
	if(empty($params['name'])) $params['name'] = "help";
	if (class_exists("Helps")) {
		$help = new Helps();
		$help_controller = new Help();
	}else{
		uses("help");
		$help_controller = new Help();
		$help = new Helps();
	}
	if(!empty($params['typeid'])) {
		$conditions[] = "helptype_id=".$params['typeid'];
	}
	if (!empty($params['id'])) {
		$conditions[] = "id=".$params['id'];
	}
	if (isset($params['orderby'])) {
		$orderby = " ORDER BY ".trim($params['orderby'])." ";
	}else{
		$orderby = " ORDER BY id DESC";
	}
	$help->setCondition($conditions);
	$orderby = null;
	$limit = $offset = 0;
	if (isset($params['row'])) {
		$limit = $params['row'];
	}
	if (isset($params['start'])) {
		$offset = $params['start'];
	}
	$help->setLimitOffset($offset, $limit);
	$sql = "SELECT id,title,title as fulltitle,highlight FROM {$help->table_prefix}helps ".$help->getCondition()."{$orderby}".$help->getLimitOffset()."";
	if(empty($smarty->blockvars[$param_count])) {
		$smarty->blockvars[$param_count] = $help->GetArray($sql);
		if(!$smarty->blockvars[$param_count]) return $repeat = false;
	}
	if(list($key, $item) = each($smarty->blockvars[$param_count])) {
		$repeat = true;
		$item['iteration'] = ++$key;
		$url = $help->getPermaLink($item['id']);
		$item['url'] = $url;
		if (isset($params['titlelen'])) {
	    	$item['title'] = mb_substr(strip_tags($item['title']), 0, $params['titlelen']);
		}
		$item['style'] = parse_highlight($item['highlight']);
		$item['link'] = '<a title="'.strip_tags($item['name']).'" href="'.$url.'" target="_blank">'.$item['title'].'</a>';
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