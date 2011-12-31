<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2075 $
 */
function smarty_block_feed($params, $content, &$smarty, &$repeat) {
	$conditions = array();
	$param_count = count($smarty->_tag_stack);
	if(empty($params['name'])) $params['name'] = "feed";
	if (class_exists("Services")) {
		$service = new Services();
		$service_controller = new Service();
	}else{
	    uses("service");
	    $service = new Services();
		$service_controller = new Service();
	}
	$orderby = array();
	require(CACHE_PATH. "cache_type.php");
	if(isset($params['type'])) {
		$conditions[] = "type='".$params['type']."'";
	}
	if (isset($params['typeid'])) {
		$conditions[] = "type_id='".$params['typeid']."'";
	}
	if (isset($params['id'])) {
		$conditions[] = "id='".$params['id']."'";
	}
	if (isset($params['orderby'])) {
		$orderby[] = trim($params['orderby']);
	}else{
		$orderby[] = "id DESC ";
	}
	$service->setOrderby($orderby);
	$service->setCondition($conditions);
	$limit = $offset = 0;
	if (isset($params['row'])) {
		$limit = $params['row'];
	}
	if (isset($params['start'])) {
		$offset = $params['start'];
	}
	$service->setLimitOffset($offset, $limit);
	$sql = "SELECT * FROM {$service->table_prefix}feeds  ".$service->getCondition().$service->getOrderby().$service->getLimitOffset();
	$result = $service->GetArray($sql);
	$return = $link_title = null;
	if (!empty($result)) {
		$i_count = count($result);
		for ($i=0; $i<$i_count; $i++){
			$data = unserialize($result[$i]['data']);
			foreach ($data as $val) {
				$link_title.=$val;
			}
			$return.= str_replace(array("[link:title]"), array($link_title), $content);
		}
	}
	return $return;
}
?>