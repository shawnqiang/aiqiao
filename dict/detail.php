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
uses("dicttype","dict");
$dict = new Dicts();
$dicttype = new Dicttypes();
$id = $wd = '';
$viewhelper->setPosition(L("dictionary", "tpl"), "dict/");
$viewhelper->setTitle(L("dictionary", "tpl"));
if (isset($_GET['id'])) {
	$id = intval($_GET['id']);
}
if (isset($_GET['wd'])) {
	$wd = trim($_GET['wd']);
}
$result = $dict->getInfo($id, $wd);
if (!empty($result)) {
	$viewhelper->setPosition($result['typename'], "dict/list.php?typeid=".$result['dicttype_id']);
	$viewhelper->setTitle($result['word']);
	$viewhelper->setPosition($result['word']);
	setvar("item", $result);
	$pdb->Execute("UPDATE {$tb_prefix}dicts SET hits=hits+1 WHERE id='".$id."'");
	render("dict/detail");
}else{
	flash("data_not_exists");
}
?>