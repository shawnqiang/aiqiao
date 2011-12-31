<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2048 $
 */
define('CURSCRIPT', 'index');
require("../libraries/common.inc.php");
require("../share.inc.php");
require("common.inc.php");
$tpl_file = "help/index";
$viewhelper->setPosition(L("help_center", "tpl"), "help/index.php");
$viewhelper->setTitle(L("help_center", "tpl"));
if(isset($_GET['typeid'])) {
	$type_id = intval($_GET['typeid']);
	$conditions[] = "helptype_id=".$type_id;
	$type_name = $pdb->GetOne("SELECT title FROM {$tb_prefix}helptypes WHERE id='".$type_id."'");
	$viewhelper->setTitle($type_name);
	$viewhelper->setPosition($type_name, "help/index.php?typeid=".$type_id);
}
if (isset($_GET['action'])) {
	if (!empty($_GET['q'])) {
		$conditions[] = "title like '%".trim($_GET['q'])."%'";
	}
}
$result = $help->findAll("id,title", null, $conditions, "id DESC");
setvar("Items", $result);
render($tpl_file);
?>