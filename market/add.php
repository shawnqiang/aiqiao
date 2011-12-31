<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2048 $
 */
define('CURSCRIPT', 'add');
require("../libraries/common.inc.php");
require("../share.inc.php");
uses("market");
$market = new Markets();
if (isset($_POST['do']) && !empty($_POST['data']['market']['name'])) {
	pb_submit_check("data");
	$market->setParams();
    $market->params['data']['market']['industry_id'] = PbController::getMultiId($_POST['industry']['id']);
    $market->params['data']['market']['area_id'] = PbController::getMultiId($_POST['area']['id']);
	$result = $market->Add();
	if ($result) {
		flash('thanks_for_adding_market');
	}else {
		pheader("location:add.php");
	}
}
$viewhelper->setPosition(L("added_market_info", "tpl"));
render("market/add");
?>