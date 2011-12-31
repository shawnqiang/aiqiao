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
uses("company", "area","industry");
$area = new Areas();
$industry = new Industries();
$tpl_file = "company/detail";
$viewhelper->setTitle(L("yellow_page", "tpl"));
$viewhelper->setPosition(L("yellow_page", "tpl"), "company/");
if (isset($_GET['id'])) {
	$id = intval($_GET['id']);
	$result = $pdb->GetRow("SELECT * FROM {$tb_prefix}companies WHERE id='".$id."'");
	if (!empty($result)) {
		$login_check = 1;//default open
		if(isset($_PB_CACHE['setting']['company_logincheck'])) $login_check = $_PB_CACHE['setting']['company_logincheck'];
		$viewhelper->setTitle($result['name']);
		$viewhelper->setPosition($result['name']);
		$result['tel'] = preg_replace('/\((.+?)\)/i', '', $result['tel']);
		$result['fax'] = preg_replace('/\((.+?)\)/i', '', $result['fax']);
		$result['industry_names'] = $industry->disSubNames($result['industry_id'], null, true, "company");
		$result['area_names'] = $area->disSubNames($result['area_id'], null, true, "company");
		setvar("item", $result);
		setvar("LoginCheck", $login_check);
	}
}
render($tpl_file);
?>