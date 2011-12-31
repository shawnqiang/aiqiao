<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2115 $
 */
function smarty_block_company($params, $content, &$smarty, &$repeat) {
	global $_PB_CACHE;
	$conditions = array();
	$param_count = count($smarty->_tag_stack);
	if(empty($params['name'])) $params['name'] = "company";
	require(CACHE_PATH."cache_area.php");
	require(CACHE_PATH."cache_membergroup.php");
	if (class_exists("Companies")) {
		$company = new Companies();
		$company_controller = new Company();
	}else{
	    uses("company");
	    $company = new Companies();
		$company_controller = new Company();
	}
	if (class_exists("Spaces")) {
		$space_controller = new Space();
	}else{
	    uses("space");
	    $space_controller = new Space();
	}	
	$conditions[] = "c.status=1";
	if(isset($params['type'])) {
		$type = explode(",", $params['type']);
		$type = array_unique($type);
		foreach ($type as $val) {
			switch ($val) {
				case 'image':
					$conditions[] = "c.picture!=''";
					break;
				case 'commend':
					$conditions[] = "c.if_commend>0";
					break;
				case 'hot':
					break;
				default:
					break;
			}
		}
	}
	if (isset($params['typeid'])) {
		$conditions[] = "c.type_id=".$params['typeid'];
	}
	if (isset($params['id'])) {
		$conditions[] = "c.id=".$params['id'];
	}
	if(isset($params['industryid'])){
		if(strpos($params['industryid'], ",")){
			$conditions['industry'] = "c.industry_id IN (".$params['industryid'].")";
		}else{
			$industry_id = intval($params['industryid']);
			if($industry_id) $conditions['industry'] = "c.industry_id=".$industry_id;
		}
	}
	if(isset($params['areaid'])){
		if(strpos($params['areaid'], ",")){
			$conditions['area'] = "c.area_id IN (".$params['areaid'].")";
		}else{
			$area_id = intval($params['areaid']);
			if($area_id) $conditions['area'] = "c.area_id=".$area_id;
		}
	}
	if (!empty($_GET['industryid'])) {
		$conditions['industry'] = "c.industry_id=".intval($_GET['industryid']);
	}
	if (!empty($_GET['areaid'])) {
		$conditions['area'] = "c.area_id=".intval($_GET['areaid']);
	}
	if (isset($params['groupid'])) {
		$conditions[] = "c.cache_membergroupid=".$params['groupid'];
	}
	$limit = $offset = 0;
	if (isset($params['row'])) {
		$limit = $params['row'];
	}
	if (isset($params['start'])) {
		$offset = $params['start'];
	}
	$orderby = null;
	if (isset($params['orderby'])) {
		if ($params['orderby']=="rand" || $params['orderby']=="rand()") {
			$sql = "SELECT max(id) AS max_id,min(id) AS min_id FROM ".$company->table_prefix."companies";
			$result = $company->GetRow($sql);
			for($i=0; $i<=$limit; $i++){
				$ids[] = mt_rand($result['min_id'], $result['max_id']);
			}
			$conditions[] = "id IN (".implode(",", $ids).")";
		}else{
			$orderby = " ORDER BY ".trim($params['orderby'])." ";
		}
	}else{
		$orderby = " ORDER BY id DESC ";
	}
	$company->setCondition($conditions);
	$company->setLimitOffset($offset, $limit);
	$mysql_limit = $company->getLimitOffset();
	if (isset($params['limit'])) {
		$mysql_limit = " ".trim($params['limit']);
	}
	$sql = "SELECT c.id as companyid,c.name as companyname,c.name as title,cache_spacename as userid,c.* FROM {$company->table_prefix}companies c ".$company->getCondition()."{$orderby}".$mysql_limit."";

	if(empty($smarty->blockvars[$param_count])) {
		$smarty->blockvars[$param_count] = $company->GetArray($sql);
		if(!$smarty->blockvars[$param_count]) return $repeat = false;
	}
	if (!function_exists("smarty_function_the_url")) {
		require("function.the_url.php");
	}
	if(list($key, $item) = each($smarty->blockvars[$param_count])) {
		$repeat = true;
		$item['rownum'] = $key;
		$item['iteration'] = ++$key;
		if (!empty($item['userid']) && $item['member_id']>0) {
			$url = $space_controller->rewrite($item['userid']);
		}else{
			$url = smarty_function_the_url(array("id"=>$item['id'], "module"=>"company"));
		}
		$item['url'] = $url;
		if (isset($params['titlelen'])) {
	    	$item['companyname'] = mb_substr($item['name'], 0, $params['titlelen']);
		}
		if (!empty($item['cache_membergroupid'])) {
			$item['avatar'] = $item['groupavatar'] = "images/group/".$_PB_CACHE['membergroup'][$item['cache_membergroupid']]['avatar'];
		}
		if (!empty($item['picture'])) {
			$item['logo'] = pb_get_attachmenturl($item['picture'], '', 'small');
		}
		$item['areaid'] = $item['area_id'];
		$areas = $company_controller->array_multi2single($_PB_CACHE['area']);
		if (!empty($areas[$item['area_id']])) {
			$item['areaname'] = $areas[$item['area_id']];
		}
		if (!empty($_PB_CACHE['membergroup'][$item['cache_membergroupid']]['name'])) {
			$item['groupname'] = $_PB_CACHE['membergroup'][$item['cache_membergroupid']]['name'];
		}
		$item['link'] = '<a title="'.$item['name'].'" href="'.$url.'">'.$item['companyname'].'</a>';
		$item['thumb'] = $item['src'] = $item['logo'];
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