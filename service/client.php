<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2048 $
 */
define('CURSCRIPT', 'index');
chdir('../');
require("libraries/common.inc.php");
require("share.inc.php");
uses("service");
setvar("item", $_PB_CACHE['setting']);
$service = new Services();
$viewhelper->setTitle(L("customer_service_center", "tpl"));
$viewhelper->setPosition(L("customer_service_center", "tpl"), "service.php");
$viewhelper->setTitle(L("service_client", "tpl"));
$viewhelper->setPosition(L("service_client", "tpl"));
render("service/client");
?>