<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2173 $
 */
session_start();
require("../libraries/common.inc.php");
require(CACHE_LANG_PATH.'lang_admin.php');
require(DATA_PATH.'phpb2b_version.php');
uses("adminfield","setting", "member");
$adminer = new Adminfields();
$member = new Members();
$setting = new Settings();
if (isset($_GET['action'])) {
	if ($_GET['action']=="dereg") {
		usetcookie("admin", "");
		unset($_SESSION['last_adminer_time']);
	}
}
capt_check("capt_login_admin");
if (isset($_POST['do'])) {
	$do = trim($_POST['do']);
	if ($do == "login") {
		pb_submit_check('data');
	    if (!empty($_POST['data']['username']) && (!empty($_POST['data']['userpass']))) {
	    	$checked = false;
	    	$uname = $_POST['data']['username'];
	    	$upass = $_POST['data']['userpass'];
	    	$checked = $adminer->checkUserLogin($uname,$upass);
	    	if($checked > 0){
	    		pheader("Location:index.php");
	    	}else{
	    		setvar("LoginError",$adminer->error);
	    	}
	    }
	}
}
$smarty->template_dir = "template/";
$smarty->setCompileDir("pb-admin".DS);
if (!empty($arrTemplate)) {
    $smarty->assign($arrTemplate);
}
template("login");
exit;
?>