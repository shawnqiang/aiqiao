<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2048 $
 */
define('CURSCRIPT', 'post');
chdir('../');
require("libraries/common.inc.php");
require("share.inc.php");
require(LIB_PATH. "validation.class.php");
uses("service");
$validate = new Validation();
$service = new Services();
if (isset($_POST['save_service'])) {
	pb_submit_check('service');
	$vals = array();
	$vals['status'] = 0;
	$vals['member_id'] = 0;
	$vals['content'] = $_POST['service']['content'];
	if(isset($_POST['service']['nick_name'])) $vals['nick_name'] = $_POST['service']['nick_name'];
	$vals['email'] = $_POST['service']['email'];
	$vals['type_id'] = $_POST['service']['type_id'];
	$vals['created'] = $time_stamp;
	$vals['user_ip'] = pb_get_client_ip();
	$vals['title'] = $_POST['service']['title'];
	$service->doValidation($vals);
	if (!empty($service->validationErrors)) {
		setvar("item", $vals);
		setvar("Errors", $validate->show($service));
		render("service/index");
	}else{
		if (empty($vals['title'])) {
			$vals['title'] = L("comments_and_suggestions", "tpl");
		}
		if($service->save($vals)){
			flash('thanks_for_advise', URL);
		}else {
			flash();
		}
	}
}else{
	flash("pls_enter_your_advise", "index.php");
}
?>