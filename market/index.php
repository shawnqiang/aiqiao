<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2048 $
 */
define('CURSCRIPT', 'index');
require("../libraries/common.inc.php");
require("../share.inc.php");
uses("market");
$market = new Markets();
$conditions = "picture!=''";
$market->setCondition($conditions);
$amount = $market->findCount(null, $conditions);
setvar("paging", array('total'=>$amount));
render("market/index");
?>