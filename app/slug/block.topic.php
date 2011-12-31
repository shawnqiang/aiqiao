<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2075 $
 */
function smarty_block_topic($params, $content, &$smarty, &$repeat) {
	$conditions = array();
	$param_count = count($smarty->_tag_stack);
	if(empty($params['name'])) $params['name'] = "topic";
	if (class_exists("Topics")) {
		$topic = new Topics();
		$topic_controller = new Topic();
	}else{
		uses("topic");
		$topic = new Topics();
		$topic_controller = new Topic();
	}
	if (isset($params['id'])) {
		$conditions[] = "id=".$params['id'];
	}	
	if(isset($params['type'])) {
		$type = explode(",", $params['type']);
		$type = array_unique($type);
		foreach ($type as $val) {
			switch ($val) {
				case 'image':
					$conditions[] = "picture!=''";
					break;
				case 'news':
					$url_fix = "news/list.php?";
				default:
					break;
			}
		}
	}
	$orderby = null;
	if (isset($params['orderby'])) {
		$orderby = " ORDER BY ".trim($params['orderby'])." ";
	}else{
		$orderby = " ORDER BY id DESC";
	}
	$topic->setCondition($conditions);
	$limit = $offset = 0;
	if (isset($params['row'])) {
		$limit = $params['row'];
	}
	if (isset($params['start'])) {
		$offset = $params['start'];
	}
	$topic->setLimitOffset($offset, $limit);
	$sql = "SELECT * FROM {$topic->table_prefix}topics ".$topic->getCondition()."{$orderby}".$topic->getLimitOffset()."";
	if(empty($smarty->blockvars[$param_count])) {
		$smarty->blockvars[$param_count] = $topic->GetArray($sql);
		if(!$smarty->blockvars[$param_count]) return $repeat = false;
	}
	if (!function_exists("smarty_function_the_url")) {
		require("function.the_url.php");
	}
	if(list($key, $item) = each($smarty->blockvars[$param_count])) {
		$repeat = true;
		//Todo:news/topic/topic-name.html
		//$item['url'] = $url_fix."topicid=".$item['id'];
		if (!empty($item['alias_name'])) {
			$name = trim($item['alias_name']);
		}else{
			$name = trim($item['title']);
		}
		$item['url'] = smarty_function_the_url(array("module"=>"special", "type"=>"topic", "name"=>urlencode($name)));
		if (isset($params['titlelen'])) {
	    	$item['title'] = mb_substr(strip_tags($item['title']), 0, $params['titlelen']);
		}
		$item['thumb'] = $item['src'] = pb_get_attachmenturl($item['picture'], '', 'small');
		$item['link'] = '<a title="'.$item['title'].'" href="'.$item['url'].'">'.$item['title'].'</a>';
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