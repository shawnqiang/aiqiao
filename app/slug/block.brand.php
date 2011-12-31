<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2075 $
 */
function smarty_block_brand($params, $content, &$smarty, &$repeat) {
	$conditions = array();
	$param_count = count($smarty->_tag_stack);
	if(empty($params['name'])) $params['name'] = "brand";
	if (class_exists("Brands")) {
		$brand = new Brands();
		$brand_controller = new Brand();
	}else{
		uses("brand");
		$brand = new Brands();
		$brand_controller = new Brand();
	}
		if(isset($params['type'])) {
		$type = explode(",", $params['type']);
		$type = array_unique($type);
		foreach ($type as $val) {
			switch ($val) {
				case 'image':
					$conditions[] = "picture!=''";
					break;
				case 'hot':
					$orderbys[] = "hits DESC";
					break;
				case 'commend':
					$conditions[] = "if_commend='1'";
					break;
				default:
					break;
			}
		}
	}
    if (isset($params['companyid'])) {
		$conditions[] = "b.company_id=".$params['companyid'];
	}
	if (isset($params['memberid'])) {
		$conditions[] = "b.member_id=".$params['memberid'];
	}
	if (isset($params['typeid'])) {
		$conditions[] = "b.type_id=".$params['typeid'];
	}
	if (isset($params['removal'])) {
		$conditions[] = "b.id!=".$params['removal'];
	}
	$orderby = null;
	if (!empty($orderbys)) {
		$orderby.=" ORDER BY ".implode(",", $orderbys);
	}
	if (isset($params['orderby'])) {
		$orderby = " ORDER BY ".implode(",", array(trim($params['orderby']), $orderby))." ";
	}
	if(empty($orderby)){
		$orderby = " ORDER BY id DESC ";
	}
	$brand->setCondition($conditions);
	$limit = $offset = 0;
	if (isset($params['row'])) {
		$limit = $params['row'];
	}
	if (isset($params['start'])) {
		$offset = $params['start'];
	}
	$brand->setLimitOffset($offset, $limit);
	$sql = "SELECT id,name,name as title,picture,alias_name,description,description as content FROM {$brand->table_prefix}brands b ".$brand->getCondition()."{$orderby}".$brand->getLimitOffset();
	if(empty($smarty->blockvars[$param_count])) {
		$smarty->blockvars[$param_count] = $brand->GetArray($sql);
		if(!$smarty->blockvars[$param_count]) return $repeat = false;
	}
	if(list($key, $item) = each($smarty->blockvars[$param_count])) {
		$repeat = true;
		$url = $brand->getPermaLink($item['id']);
		$item['url'] = $url;
		$item['content'] = strip_tags($item['content']);
		if (isset($params['titlelen'])) {
	    	$item['title'] = mb_substr(strip_tags($item['name']), 0, $params['titlelen']);
		}
		$item['link'] = '<a title="'.$item['name'].'" href="'.$url.'">'.$item['title'].'</a>';
		if (isset($params['infolen'])) {
			if(isset($item['content'])) $item['content'] = mb_substr(pb_strip_spaces($item['description']),0, $params['infolen']);
		}
		$item['src'] = $item['thumb'] = "attachment/".$item['picture'].".small.jpg";
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