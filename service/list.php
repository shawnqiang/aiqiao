<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2048 $
 */
define('CURSCRIPT', 'list');
chdir('../');
require("libraries/common.inc.php");
require("share.inc.php");
require(CACHE_PATH. "cache_typeoption.php");
uses("service");
$service = new Services();
$conditions[] = "status=1";
$viewhelper->setPosition(L("customer_service_center", "tpl"), "service.php");
$viewhelper->setTitle(L("customer_service_center", "tpl"));
if (isset($_GET['typeid'])) {
	$type_id = intval($_GET['typeid']);
	$conditions[] = "type_id=".$type_id;
	setvar("TypeName", $_PB_CACHE['service_type'][$type_id]);
	$viewhelper->setPosition($_PB_CACHE['service_type'][$type_id]);
	$viewhelper->setTitle($_PB_CACHE['service_type'][$type_id]);
}
$amount = $service->findCount(null, $conditions,"id");
$result = $service->findAll("id,title,created,revert_content,revert_date,type_id", null, $conditions, "id DESC", $pos, $limit);
setvar("items", $service->formatResult($result));
setvar("ServiceTypes", $_PB_CACHE['service_type']);
setvar("paging", array('total'=>$amount));
render("service/list");
?>