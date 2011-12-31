<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2075 $
 */
function smarty_block_announce($params, $content, &$smarty, &$repeat) {
	$conditions = array();
	$param_count = count($smarty->_tag_stack);
	if(empty($params['name'])) $params['name'] = "announce";
	if (!class_exists("Announcements")) {
		uses("announcement");
		$announce = new Announcements();
		$announce_controller = new Announcement();
	}else{
	    $announce = new Announcements();
		$announce_controller = new Announcement();
	}
	$i_count = 1;
	if (isset($params['row'])) {
		$i_count = intval($params['row']);
	}
	if (isset($params['typeid'])) {
		$conditions[] = "announcetype_id=".$params['typeid'];
	}
	if (isset($params['type'])) {
		$type = explode(",", $params['type']);
		$type = array_unique($type);
		foreach ($type as $val) {
			switch ($val) {
				case 'new':
					$conditions[] = "display_expiration>".$announce->timestamp;
					break;
				default:
					break;
			}
		}		
	}
	$announce->setCondition($conditions);
	$orderby = null;
	if (isset($params['orderby'])) {
		$orderby = " ORDER BY ".trim($params['orderby'])." ";
	}else{
		$orderby = " ORDER BY id DESC ";
	}
	$limit = $offset = 0;
	if (isset($params['row'])) {
		$limit = $params['row'];
	}
	if (isset($params['start'])) {
		$offset = $params['start'];
	}
	$announce->setLimitOffset($offset, $limit);
	$orderby = " ORDER BY display_order ASC,id DESC";
	$sql = "SELECT *,subject AS title,message AS content FROM {$announce->table_prefix}announcements ".$announce->getCondition()."{$orderby}".$announce->getLimitOffset()."";
	if(empty($smarty->blockvars[$param_count])) {
		$smarty->blockvars[$param_count] = $announce->GetArray($sql);
		if(!$smarty->blockvars[$param_count]) return $repeat = false;
	}
	if(list($key, $item) = each($smarty->blockvars[$param_count])) {
		$repeat = true;
		$url = $announce->getPermaLink($item['id'], 'announce');
		$item['url'] = $url;
		$item['content'] = strip_tags($item['content']);
		if (isset($params['titlelen'])) {
	    	$item['title'] = mb_substr(strip_tags($item['subject']), 0, $params['titlelen']);
		}
		$item['link'] = '<a title="'.strip_tags($item['subject']).'" href="'.$url.'">'.$item['title'].'</a>';
		if (isset($params['infolen'])) {
			if(isset($item['content'])) $item['content'] = mb_substr(pb_strip_spaces($item['message']),0, $params['infolen']);
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