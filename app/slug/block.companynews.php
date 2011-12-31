<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2075 $
 */
function smarty_block_companynews($params, $content, &$smarty, &$repeat) {
	$param_count = count($smarty->_tag_stack);
	if(empty($params['name'])) $params['name'] = "companynews";
   if (class_exists("Companynews")) {
		$companynews = new Companynewses();
		$companynews_controller = new Companynews();
	}else{
	    uses("companynews");
	    $companynews = new Companynewses();
		$companynews_controller = new Companynews();
	}
   if (class_exists("Space")) {
		$space_controller = new Space();
	}else{
	    uses("space");
		$space_controller = new Space();
	}
	$conditions = array();
	$orderby = array();
	$conditions[] = "cn.status=1";
	if(isset($params['type'])) {
		$type = explode(",", $params['type']);
		$type = array_unique($type);
		foreach ($type as $val) {
			switch ($val) {
				case 'image':
					$conditions[] = "cn.picture!=''";
					break;
				case 'hot':
					$orderby[] = 'clicked DESC';
				default:
					break;
			}
		}
	}
	if (isset($params['tag'])) {
		$conditions[] = "cn.title like '%".$params['tag']."%'";
	}
	if (!empty($params['companyid'])) {
		$conditions[] = "cn.company_id='".$params['companyid']."'";
	}
	if (!empty($params['memberid'])) {
		$conditions[] = "cn.member_id='".$params['memberid']."'";
	}
	if (isset($params['orderby'])) {
		$orderby[] = trim($params['orderby']);
	}else{
		$orderby[] = "cn.id DESC ";
	}
	$limit = $offset = 0;
	if (isset($params['row'])) {
		$limit = $params['row'];
	}
	if (isset($params['start'])) {
		$offset = $params['start'];
	}
	if (isset($_GET['pos'])) {
		$offset = intval($_GET['pos']);
	}
	$companynews->setOrderby($orderby);
	$companynews->setCondition($conditions);
	$companynews->setLimitOffset($offset, $limit);
	$sql = "SELECT cn.id,cn.company_id,cn.title as fulltitle,cn.title,cn.picture,cn.created,cn.content as fullcontent,cn.content,m.username AS userid FROM {$companynews->table_prefix}companynewses cn LEFT JOIN {$companynews->table_prefix}members m ON m.id=cn.member_id ".$companynews->getCondition().$companynews->getOrderby().$companynews->getLimitOffset();
	if(empty($smarty->blockvars[$param_count])) {
		$smarty->blockvars[$param_count] = $companynews->GetArray($sql);
		if(!$smarty->blockvars[$param_count]) return $repeat = false;
	}
	if(list($key, $item) = each($smarty->blockvars[$param_count])) {
		$repeat = true;
		$space_controller->setBaseUrlByUserId($item['userid'], "news");
		$url = $space_controller->rewriteDetail("news", $item['id']);
		$item['url'] = $url;
		$item['content'] = strip_tags($item['content']);
		if (isset($params['titlelen'])) {
	    	$item['title'] = mb_substr(strip_tags($item['title']), 0, $params['titlelen']);
		}
		$item['link'] = '<a title="'.strip_tags($item['subject']).'" href="'.$url.'">'.$item['title'].'</a>';
		if (isset($params['infolen'])) {
			if(isset($item['content'])) $item['content'] = mb_substr(pb_strip_spaces($item['content']),0, $params['infolen']);
		}
		$item['thumb'] = $item['src'] = "attachment/".$item['picture'].".small.jpg";
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