<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2048 $
 */
define('CURSCRIPT', 'sitemap');
require("../libraries/common.inc.php");
require("../share.inc.php");
require(CACHE_PATH. "cache_type.php");
uses("standard");
$standard = new Standards();
$tpl_file = "list.default";
$viewhelper->setTitle(L("standards", "tpl"));
$viewhelper->setPosition(L("standards", "tpl"), "standard/");
if (isset($_GET['do'])) {
	$do = trim($_GET['do']);
}
if (isset($_GET['typeid'])) {
	$typeid = intval($_GET['typeid']);
	$conditions[] = "type_id='".$typeid."'";
	$viewhelper->setTitle($type_name = $pdb->GetOne("SELECT name FROM {$tb_prefix}standardtypes WHERE id='".$typeid."'"));
	$viewhelper->setPosition($type_name, "standard/?do=search&typeid=".$typeid);
	setvar("TypeName", $type_name);
}
if (isset($_GET['filter'])) {
	$filter = intval($_GET['filter']);
	$conditions[] = "created>".($time_stamp-$filter);
}
if (isset($_GET['action'])) {
	$action = trim($_GET['action']);
	if ($action == "search") {
		if (isset($_GET['q'])) {
			$searchkeywords = urldecode($_GET['q']);
			$conditions[] = "title like '%".$searchkeywords."%'";
		}
	}
}
$standard->setCondition($conditions);
$amount = $standard->findCount(null, $conditions);
$sql = "SELECT sd.* FROM {$tb_prefix}standards sd ".$standard->getCondition()." LIMIT ".$pos.",".$limit;
$result = $pdb->GetArray($sql);
if(!empty($result)){
	$count = count($result);
	for ($i=0; $i<$count; $i++){
		$result[$i]['pubdate'] = df($result[$i]['created']);
		$result[$i]['typename'] = $_PB_CACHE['standardtype'][$result[$i]['type_id']];
		$result[$i]['typeid'] = $result[$i]['type_id'];
	}
}
setvar("module", "standard");
setvar('paging', array('total'=>$amount));
setvar('items', $result);
render($tpl_file);
?>