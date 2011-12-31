<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2048 $
 */
define('CURSCRIPT', 'detail');
chdir('../');
require("libraries/common.inc.php");
require("share.inc.php");
require(CACHE_PATH. "cache_typeoption.php");
uses("service");
$service = new Services();
$viewhelper->setTitle(L("customer_service_center", "tpl"));
$viewhelper->setPosition(L("customer_service_center", "tpl"), "service.php");
if (isset($_GET['id'])) {
	$id = intval($_GET['id']);
	$result = $service->findById($id);
	if (!empty($result)) {
		$result['revertdate'] = date("Y-m-d H:i", $result['revert_date']);
		$viewhelper->setPosition($_PB_CACHE['service_type'][$result['type_id']], "service/list.php?typeid=".$result['type_id']);
		$viewhelper->setTitle($result['title']);
		$viewhelper->setPosition($result['title']);
		setvar("item", $result);
		render("service/detail", true);
	}
}
render("service/index");
?>