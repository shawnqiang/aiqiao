<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2075 $
 */
define('CURSCRIPT', 'friendlink');
require("libraries/common.inc.php");
require("share.inc.php");
uses("setting", "message", "friendlink");
$pms = new Messages();
$friendlink = new Friendlinks();
$setting = new Settings();
if (isset($_POST['do']) && !empty($_POST['friendlink'])) {
	pb_submit_check('friendlink');
	$data = $_POST['friendlink'];
	$result = false;
	$data['status'] = 0;
	$data['created'] = $data['modified'] = $time_stamp;
	$result = $friendlink->save($data);
	if ($result) {
		$pms->SendToAdmin('', array(
		"title"=>$data['title'].L("apply_friendlink"),
		"content"=>$data['title'].L("apply_friendlink")."\n".$_POST['data']['email']."\n".$data['description'],
		));
		$smarty->flash('wait_apply', URL);
	}
}
$viewhelper->setPosition(L("apply_friendlink", "tpl"));
formhash();
render("friendlink");
?>