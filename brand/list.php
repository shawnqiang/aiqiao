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
uses("brand", "brandtype");
$brand = new Brands();
$brandtype = new Brandtypes();
$condition = null;
$conditions = array();
$viewhelper->setTitle(L("brands", "tpl"));
$viewhelper->setPosition(L("brands", "tpl"), "brand.php");
if (isset($_GET['catid'])) {
	$typeid = intval($_GET['catid']);
	//$conditions[] = "type_id='".$typeid."'";//after 4.0.1
	$type_info = $pdb->GetRow("SELECT * FROM {$tb_prefix}brandtypes WHERE id='".$typeid."'");
	if (!empty($type_info)) {
		$type_ids = $pdb->GetArray("SELECT id FROM {$tb_prefix}brandtypes WHERE parent_id='".$typeid."' OR id='".$typeid."'");
		foreach ($type_ids as $key=>$val) {
			$tmp[] = $val['id'];
		}
		if (!empty($tmp)) {
			$conditions[] = "type_id IN (".implode(",", $tmp).")";
		}
	}
	$type_name = $type_info['name'];
	$viewhelper->setTitle($type_name);
	$viewhelper->setPosition($type_name, "brand/list.php?catid=".$typeid);
	$rs = $pdb->GetArray("SELECT id,name FROM {$tb_prefix}brandtypes WHERE parent_id='".$typeid."'");
}
if (empty($rs)) {
	$rs = $pdb->GetArray("SELECT id,name FROM {$tb_prefix}brandtypes WHERE parent_id=0");
}
if (isset($_GET['do'])) {
	$do = trim($_GET['do']);
	if ($do == "search") {
		if (isset($_GET['q'])) {
			$searchkeywords = urldecode($_GET['q']);
			$conditions[] = "name like '%".$searchkeywords."%'";
		}
		if (isset($_GET['letter'])) {
			$viewhelper->setTitle(L("brands_with_letter", "tpl", $_GET['letter']));
			$viewhelper->setPosition(L("brands_with_letter", "tpl", $_GET['letter']));
			$conditions[] = "letter='".trim($_GET['letter'])."'";
		}
	}
}
$brand->setCondition($conditions);
$amount = $brand->findCount(null, $conditions);
$sql = "SELECT * FROM {$tb_prefix}brands".$brand->getCondition()." LIMIT ".$pos.",".$limit;
$result = $pdb->GetArray($sql);
$result = $brand->formatResult($result);
setvar('items', $result);
setvar('Types',$rs);
setvar("paging", array('total'=>$amount));
render("brand/list");
?>