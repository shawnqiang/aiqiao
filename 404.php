<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2075 $
 */
define('CURSCRIPT', 'redirect');
require("libraries/common.inc.php");
require("share.inc.php");
uses("url");
$url = new Url(404);
$url->redirect();
?>