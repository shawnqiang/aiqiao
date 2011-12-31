<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2048 $
 */
define('CURSCRIPT', 'detail');
require("../libraries/common.inc.php");
require("../share.inc.php");
uses("brand", "brandtype");
$brand = new Brands();
$brandtype = new Brandtypes();
$condition = null;
$conditions = array();
$viewhelper->setPosition(L("brands", "tpl"), "brand.php");
if (isset($_GET['name'])) {
	$brand_name = trim(rawurldecode($_GET['name']));
	$id = $pdb->GetOne("SELECT id FROM {$tb_prefix}brands WHERE name='".$brand_name."'");
}
if (isset($_GET['id'])) {
	$id = intval($_GET['id']);
}
if(!empty($id))	{
	$result = $pdb->GetRow("SELECT * FROM {$tb_prefix}brands WHERE id='".$id."'");
	if(!empty($result)){
		$result['img'] = pb_get_attachmenturl($result['picture']);
		$result['title'] = $result['name'];
		$viewhelper->setPosition($pdb->GetOne("SELECT name FROM ".$tb_prefix."brandtypes WHERE id=".$result['type_id']), "brand/list.php?catid=".$result['type_id']);
		$viewhelper->setTitle($result['title']);
		$viewhelper->setPosition($result['title']);
	}
}else{
	L("data_not_exists");
}
setvar("item",$result);
render("brand/detail");
?>