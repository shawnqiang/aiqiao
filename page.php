<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2090 $
 */
define('CURSCRIPT', 'page');
require("libraries/common.inc.php");
require("share.inc.php");
uses("userpage");
$userpage = new Userpages();
$conditions = array();
$tpl_file = "pages/default";
if (isset($_GET['id'])) {
	$id = intval($_GET['id']);
	$conditions[] = "id=".$id;
}
if (!empty($_GET['name'])) {
	$conditions[] = "name='".trim(urldecode($_GET['name']))."' OR title='".trim(urldecode($_GET['name']))."'";
}
if (!empty($_GET['title'])) {
	$conditions[] = "title='".trim(urldecode($_GET['title']))."' OR name='".trim(urldecode($_GET['title']))."'";
}
$userpage->setCondition($conditions);
$result = $pdb->GetRow("SELECT * FROM {$tb_prefix}userpages ".$userpage->getCondition());
if (!empty($result)) {
	$viewhelper->setTitle($result['title']);
	$viewhelper->setPosition($result['title']);
	if (!empty($result['templet_name'])) {
		$tpl_file = "pages/".$result['templet_name'];
	}elseif ($smarty->template_exists($smarty->template_dir.$theme_name.DS."pages/".$result['name'].$smarty->tpl_ext)){
		$tpl_file = "pages/".$result['name'];
	}
	setvar("item", $result);
	render($tpl_file);
}else{
	setvar("item", array());
}
?>