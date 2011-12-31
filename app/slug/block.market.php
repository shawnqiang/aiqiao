<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2116 $
 */
function smarty_block_market($params, $content, &$smarty, &$repeat) {
	$conditions = array();
	$param_count = count($smarty->_tag_stack);
	if(empty($params['name'])) $params['name'] = "market";
	if (class_exists("Markets")) {
		$market = new Markets();
		$market_controller = new Market();
	}else{
		uses("market");
		$market = new Markets();
		$market_controller = new Market();
	}
	if(isset($params['type'])) {
		$type = explode(",", $params['type']);
		$type = array_unique($type);
		foreach ($type as $val) {
			switch ($val) {
				case 'image':
					$conditions[] = "picture!=''";
					break;
				case 'commend':
					$conditions[] = "if_commend>0";
					break;
				default:
					break;
			}
		}
	}	
	if (isset($params['areaid'])) {
		$conditions[] = "area_id=".$params['areaid'];
	}	
	if (isset($params['industryid'])) {
		$conditions[] = "industry_id=".$params['industryid'];
	}
	if (isset($params['id'])) {
		$conditions[] = "id=".$params['id'];
	}
	$orderby = null;
	if (isset($params['orderby'])) {
		$orderby = " ORDER BY ".trim($params['orderby'])." ";
	}else{
		$orderby = " ORDER BY id DESC";
	}
	$market->setCondition($conditions);
	$limit = $offset = 0;
	if (isset($params['row'])) {
		$limit = $params['row'];
	}
	if (isset($_GET['pos'])) {
		$offset = intval($_GET['pos']);
	}
	if (isset($params['start'])) {
		$offset = $params['start'];
	}
	$market->setLimitOffset($offset, $limit);
	$mysql_limit = $market->getLimitOffset();
	if (isset($params['limit'])) {
		$mysql_limit = " ".trim($params['limit']);
	}
	$sql = "SELECT *,name as title FROM {$market->table_prefix}markets ".$market->getCondition()."{$orderby}".$mysql_limit;
	if(empty($smarty->blockvars[$param_count])) {
		$smarty->blockvars[$param_count] = $market->GetArray($sql);
		if(!$smarty->blockvars[$param_count]) return $repeat = false;
	}
	if(list($key, $item) = each($smarty->blockvars[$param_count])) {
		$repeat = true;
		$url = $market->getPermaLink($item['id']);
		$item['url'] = $url;
		$item['content'] = strip_tags($item['content']);
		if (isset($params['titlelen'])) {
	    	$item['title'] = mb_substr(strip_tags($item['subject']), 0, $params['titlelen']);
		}
		$image_type = isset($params['imagetype'])?trim($params['imagetype']):"";
		$item['src'] = $item['thumb'] = (empty($item['picture']))?pb_get_attachmenturl('', '', $image_type):pb_get_attachmenturl($item['picture'], '', $image_type);
		$item['link'] = '<a title="'.strip_tags($item['name']).'" href="'.$url.'">'.$item['title'].'</a>';
		if (isset($params['infolen'])) {
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