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
uses("market");
$market = new Markets();
$viewhelper->setTitle(L("market", "tpl"));
$viewhelper->setPosition(L("market", "tpl"), "market/");
if (isset($_GET['id'])) {
	$id = intval($_GET['id']);
	$sql = "select * from {$tb_prefix}markets m where id={$id}";
	$item = $pdb->GetRow($sql);
}
if (!empty($item)) {
	$viewhelper->setMetaDescription($item['content']);
	$item['content'] = nl2br($item['content']);
	$viewhelper->setTitle($item['name']);
	$viewhelper->setPosition($item['name']);
	if (isset($item['status'])) {
		if($item['status']==0){
			$item['content'] = L('under_checking', 'msg', $item['name']);
		}
	}
	$item['image'] = pb_get_attachmenturl($item['picture']);
	setvar("item",$item);	
}else{
	flash("data_not_exists");
}
render("market/detail");
?>