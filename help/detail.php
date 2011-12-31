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
$tpl_file = "help/detail";
$viewhelper->setTitle(L("help_center", "tpl"));
$viewhelper->setPosition(L("help_center", "tpl"), "help/");
if (isset($_GET['id'])) {
	$id = intval($_GET['id']);
	$help_result = $pdb->GetRow("SELECT * FROM {$tb_prefix}helps WHERE id='".$id."'");
	if (!empty($help_result)) {
		$viewhelper->setTitle($help_result['title']);
		$viewhelper->setPosition($help_result['title']);		
		setvar("item", $help_result);
	}
}
render($tpl_file);
?>