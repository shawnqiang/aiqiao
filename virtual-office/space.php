<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2075 $
 */
require("../libraries/common.inc.php");
require("room.share.php");
uses("templet");
check_permission("space");
$templet = new Templets();
if (!$company->Validate($companyinfo)) {
	flash("pls_complete_company_info", "company.php", 0);
}
if (isset($_POST['updateSpaceName']) && !empty($_POST['data']['space_name'])) {
	$space_name = trim($_POST['data']['space_name']);
	$i18n = new L10n();
	$space_name = $i18n->translateSpaceName($space_name);
	$result = $member->updateSpaceName(array("id"=>$the_memberid), $space_name);
	if ($result) {
		$member->clearCache($the_memberid);
		$member->updateMemberCaches($the_memberid);
		flash("success");
	}
}
if (isset($_POST['save']) && !empty($_POST['data']['member']['styleid'])) {
	$templet_id = intval($_POST['data']['member']['styleid']);
	$pdb->Execute("UPDATE {$tb_prefix}members SET templet_id=".$templet_id." WHERE id=".$the_memberid);
	$member->clearCache($the_memberid);
	$member->updateMemberCaches($the_memberid);
	flash("success");
}
setvar("templet_id", $memberinfo['templet_id']);
$result = $templet->getInstalled($memberinfo['membergroup_id'], $memberinfo['membertype_id']);
setvar("Items", $result);
template("space");
?>