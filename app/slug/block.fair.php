<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2075 $
 */
function smarty_block_fair($params, $content, &$smarty, &$repeat) {
	global $rewrite_able;
	$conditions = $orderby = array();
	$param_count = count($smarty->_tag_stack);
	if(empty($params['name'])) $params['name'] = "fair";
	require(CACHE_PATH."cache_type.php");
	require(CACHE_PATH."cache_area.php");
	if (class_exists("Expos")) {
		$fair = new Expos();
		$fair_controller = new Expo();
	}else{
		uses("expo");
		$fair_controller = new Expo();
		$fair = new Expos();
	}
	$conditions[] = "status=1";
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
				case 'commend':
					$conditions[] = "if_commend>0";
					break;
				case 'hot':
					$orderby[] = "hits DESC";
				default:
					break;
			}
		}
	}
	if (!empty($_GET['industryid'])) {
		$conditions['industry'] = "industry_id=".intval($_GET['industryid']);
	}
	if (!empty($_GET['areaid'])) {
		$conditions['area'] = "area_id=".intval($_GET['areaid']);
	}
	if (isset($params['typeid'])) {
		$conditions[] = "expotype_id=".$params['typeid'];
	}
	if(isset($params['expday'])){
		$conditions[] = "end_time<'".($params['expday']*86400+$fair->time_stamp)."'";
	}
	if(isset($params['subday'])){
		$conditions[] = "begin_time>'".($fair->time_stamp-$params['subday']*86400)."'";
	}
	if (isset($params['orderby'])) {
		$orderby[] = trim($params['orderby']);
	}else{
		$orderby[] = "id DESC";
	}
	$fair->setOrderby($orderby);
	$fair->setCondition($conditions);
	$orderby = null;
	$limit = $offset = 0;
	if (isset($params['row'])) {
		$limit = $params['row'];
	}
	if (isset($params['start'])) {
		$offset = $params['start'];
	}
	$fair->setLimitOffset($offset, $limit);
	$mysql_limit = $fair->getLimitOffset();
	if (isset($params['limit'])) {
		$mysql_limit = " ".trim($params['limit']);
	}
	$sql = "SELECT *,name AS title,description as content FROM {$fair->table_prefix}expos ".$fair->getCondition().$fair->getOrderby().$mysql_limit;
	if(empty($smarty->blockvars[$param_count])) {
		$smarty->blockvars[$param_count] = $fair->GetArray($sql);
		if(!$smarty->blockvars[$param_count]) return $repeat = false;
	}
	if(list($key, $item) = each($smarty->blockvars[$param_count])) {
		$repeat = true;
		$url = $fair->getPermaLink($item['id'], null, 'fair');
		$item['url'] = $url;
		$item['rownum'] = $key;
		$item['content'] = strip_tags($item['content']);
		if (isset($params['titlelen'])) {
	    	$item['title'] = mb_substr(strip_tags($item['name']), 0, $params['titlelen']);
		}
		if (!$item['begin_time']) {
			$item['pubdate'] = L("invalid_datetime");
		}else{
			$item['pubdate'] = df($item['begin_time']);
		}
		$image_type = isset($params['imagetype'])?trim($params['imagetype']):"small";
		$item['thumb'] = $item['src'] = (empty($item['picture']))?pb_get_attachmenturl('', '', $image_type):pb_get_attachmenturl($item['picture'], '', $image_type);
		$item['link'] = '<a title="'.strip_tags($item['name']).'" href="'.$url.'">'.$item['title'].'</a>';
		if (isset($params['infolen'])) {
			if(isset($item['content'])) $item['content'] = mb_substr(pb_strip_spaces($item['content']),0, $params['infolen'])."...";
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