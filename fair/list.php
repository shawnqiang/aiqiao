<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2048 $
 */
define('CURSCRIPT', 'list');
require("../libraries/common.inc.php");
require("../share.inc.php");
require(CACHE_PATH. "cache_type.php");
include(CACHE_PATH. "cache_industry.php");
include(CACHE_PATH. "cache_area.php");
uses("expo","area");
$expo = new Expos();
$area = new Areas();
$conditions = array();
$viewhelper->setTitle(L("fair", "tpl"));
$viewhelper->setPosition(L("fair", "tpl"), "fair/");
if (isset($_GET['action'])) {
	$do = trim($_GET['action']);
	if ($do == "search") {
		if (!empty($_GET['q'])) {
			$conditions[] = "name like '%".$_GET['q']."%'";
		}
	}
}
if (!empty($_GET['type'])) {
	if ($_GET['type']=="commend") {
		$conditions[] = "if_commend=1";
	}
}
if(!empty($_GET['typeid'])){
	$type_id = intval($_GET['typeid']);
	$conditions[] = "expotype_id=".$type_id;
	$type_name = $_PB_CACHE['expotype'][$type_id];
	$viewhelper->setTitle($type_name);
	$viewhelper->setPosition($type_name, "fair/list.php?typeid=".$type_id);
}
if (isset($_GET['areaid'])) {
	$area_id = intval($_GET['areaid']);
	$tmp_info = $area->setInfo($area_id);
	if (!empty($tmp_info)) {
		$conditions[] = "area_id".$tmp_info['level']."=".$tmp_info['id'];
		$viewhelper->setTitle($tmp_info['name']);
		$viewhelper->setPosition($tmp_info['name'], "fair/list.php?areaid=".$tmp_info['id']);
	}
}
$amount = $expo->findCount(null, $conditions);
$result = $expo->findAll("*", null, $conditions, "id desc", $pos, $limit);
if (!empty($result)) {
	for ($i=0; $i<count($result); $i++){
		if($result[$i]['begin_time']) $result[$i]['begin_date'] = df($result[$i]['begin_time']);
		if($result[$i]['end_time']) $result[$i]['end_date'] = df($result[$i]['end_time']);
		$result[$i]['description'] = mb_substr(strip_tags(trim($result[$i]['description'])), 0, 100);
		$result[$i]['typename'] = $_PB_CACHE['expotype'][$result[$i]['expotype_id']];
		$result[$i]['title'] = $result[$i]['name'];
		if(isset($result[$i]['picture'])) $result[$i]['image'] = pb_get_attachmenturl($result[$i]['picture'], '', 'small');
		if(!empty($result[$i]['area_id'])){
			$result[$i]['area'] = "(".$_PB_CACHE['area'][1][$result[$i]['area_id']].")";
		}
	}
	setvar("items", $result);
}
setvar("Areas", $_PB_CACHE['area']);	
setvar("Type",$_PB_CACHE['expotype']);
$viewhelper->setTitle(L("search", "tpl"));
$viewhelper->setPosition(L("search", "tpl"));
setvar("paging", array('total'=>$amount));
render("fair/list");
?>