<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2048 $
 */
define('CURSCRIPT', 'service');
chdir('../');
require("libraries/common.inc.php");
require("share.inc.php");
require(CACHE_PATH. "cache_typeoption.php");
uses("service");
$service = new Services();
$answered_result = $service->findAll("id,title,created,revert_content,revert_date,type_id", null, "status=1 AND revert_content!=''", "id DESC", 0, 15);
$result = $service->findAll("id,title,created,revert_content,revert_date,type_id", null, "status=1", "id DESC", 0, 15);
setvar("AnsweredService", $service->formatResult($answered_result));
setvar("LatestService", $service->formatResult($result));
setvar("ServiceTypes", $_PB_CACHE['service_type']);
render("service/index");
?>