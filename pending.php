<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2258 $
 */
define('CURSCRIPT', 'pending');
require("libraries/common.inc.php");
require("share.inc.php");
uses("member");
$member = new Members();
$hash = null;
if(isset($_GET['hash'])) $hash = trim($_GET['hash']);
if (isset($_GET['do'])) {
	$do = trim($_GET['do']);
	if ($do=="reactive") {
		if (!empty($_GET['em'])) {
			//check em
			$email = rawurldecode($_GET['em']);
			$result = $member->checkUserExistsByEmail($email);
			if (!$result) {
				flash("member_not_exists", null, 0);
			}else{
				$member_reg_auth = $_PB_CACHE['setting']['new_userauth'];
				$id = $member->field("id", "email='".$email."'");
				$member_info = $member->getInfoById($id);
				require(PHPB2B_ROOT."libraries/sendmail.inc.php");
				require(CACHE_LANG_PATH."lang_emails.php");
				if ($member_reg_auth == 1) {
					$if_need_check = true;
					$exp_time = $time_stamp+86400;
					$tmp_username = $member_info['username'];
					$hash = authcode("{$tmp_username}\t".$exp_time, "ENCODE");
					$hash = str_replace(array("+", "|"), array("|", "_"), $hash);
					$hash = rawurlencode($hash);
					setvar("hash", $hash);
					setvar("expire_date", date("Y-m-d",strtotime("+1 day")));
					$sended = pb_sendmail(array($email, $member_info['username']), $member_info['username'].",".L("pls_active_your_account", "tpl"), "activite");
					if (empty($_PB_CACHE['setting']['reg_filename'])) {
						$gopage = URL.'register.php?action=done&em='.urlencode($email);
					}else{
						$gopage = URL.$_PB_CACHE['setting']['reg_filename'].'?action=done&em='.urlencode($email);
					}
					pheader("location:".$gopage);
				}
			}
		}else{
			flash("invalid_request", null, 0);
		}
	}
}
if (empty($hash)) {
	flash("invalid_request", null, 0);
}
$validate_str = rawurldecode(authcode($hash, "DECODE"));
$validate_str = str_replace(array("|", "_"), array("+", "|"), $validate_str);
if (empty($validate_str)) {
	flash("invalid_request", null, 0);
}
if (!empty($validate_str)) {
	list($tmp_username, $exp_time) = explode("\t", $validate_str);
    if ($exp_time<$time_stamp) {
    	flash("auth_expired", null, 0);
    }
    $user_exists = $member->checkUserExist($tmp_username, true);
    if ($user_exists && isset($_GET['action'])) {
    	switch ($_GET['action']) {
    		case "activate":
    			$result = $member->updateUserStatus($member->info['id']);
    			if ($result) {
    				flash("actived_and_login", "logging.php");
    			}
    			break;
    		case "getpasswd":
    			setvar("username", $member->info['username']);
    			$viewhelper->setPosition(L("reset_your_password", "tpl"));
    			render("getpasswd.pending");
    			break;
    		default:
    			break;
    	}
    }else{
        flash("member_not_exists", null, 0);
    }
}else{
	flash("invalid_request", null, 0);
}
?>