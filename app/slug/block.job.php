<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2075 $
 */
function smarty_block_job($params, $content, &$smarty, &$repeat) {
	$conditions = array();
	$param_count = count($smarty->_tag_stack);
	if(empty($params['name'])) $params['name'] = "job";
	if (class_exists("Jobs")) {
		$job = new Jobs();
	}else{
		uses("job");
		$job = new Jobs();
	}
	if (!class_exists('Space')) {
		uses("space");
	}
	$space_controller = new Space();
	if(isset($params['companyid'])) {
		$conditions[] = "company_id=".$params['companyid'];
	}
	if(isset($params['status'])) {
		$conditions[] = "j.status='".$params['status']."'";
	}
	if(isset($params['memberid'])) {
		$conditions[] = "member_id=".$params['memberid'];
	}	
	if (isset($params['id'])) {
		$conditions[] = "j.id=".$params['id'];
	}
	$orderby = null;
	if (isset($params['orderby'])) {
		$orderby = " ORDER BY ".trim($params['orderby'])." ";
	}else{
		$orderby = " ORDER BY id DESC";
	}
	$job->setCondition($conditions);
	$limit = $offset = 0;
	if (isset($params['row'])) {
		$limit = $params['row'];
	}
	if (isset($params['start'])) {
		$offset = $params['start'];
	}
	$job->setLimitOffset($offset, $limit);
	$sql = "SELECT j.id,j.content,j.name,j.name as title,c.name AS companyname,c.cache_spacename AS userid FROM {$job->table_prefix}jobs j LEFT JOIN {$job->table_prefix}companies c ON c.id=j.company_id ".$job->getCondition()."{$orderby}".$job->getLimitOffset();
	if(empty($smarty->blockvars[$param_count])) {
		$smarty->blockvars[$param_count] = $job->GetArray($sql);
		if(!$smarty->blockvars[$param_count]) return $repeat = false;
	}
	if(list($key, $item) = each($smarty->blockvars[$param_count])) {
		$repeat = true;
		$space_controller->setBaseUrlByUserId($item['userid'], "job");
		$url = $space_controller->rewriteDetail("job", $item['id']);
		$item['url'] = $url;
		$item['space_url'] = $space_controller->rewrite($item['userid'], $item['company_id']);
		$item['content'] = strip_tags($item['content']);
		if (isset($params['titlelen'])) {
	    	$item['title'] = mb_substr(strip_tags($item['title']), 0, $params['titlelen']);
		}
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