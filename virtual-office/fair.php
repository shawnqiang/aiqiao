<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2253 $
 */
require("../libraries/common.inc.php");
require("room.share.php");
if (empty($company_id)) {
	flash("no_company_perm");
}
uses("expo");
$fair = new Expos();
if(isset($_POST['do']) && isset($_POST['id'])){
	pb_submit_check('do');
	if ($fair->checkExist($_POST['id']) && !$fair->GetOne("SELECT id FROM ".$tb_prefix."expos WHERE member_id='".$the_memberid."' AND expo_id='".$_POST['id']."'")) {
		$sql = "INSERT INTO {$tb_prefix}expomembers (expo_id,member_id,company_id,created,modified) VALUE (".$_POST['id'].",".$the_memberid.",".$company_id.",".$time_stamp.",".$time_stamp.")";
		$result = $pdb->Execute($sql);
	}
	if($result){
		if (isset($_POST['is_ajax']) && $_POST['is_ajax']) {
			die("<img src='images/check_right.gif'/>".L("action_successfully"));
		}
		echo "<script language='javascript'>window.close();</script>";
		exit;
	}else {
		if (isset($_POST['is_ajax']) && $_POST['is_ajax']) {
			die("<img src='images/check_error.gif'/>".L("action_failed"));
		}
		flash("action_failed", '', 0);
	}
}
?>