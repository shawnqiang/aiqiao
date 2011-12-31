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
if (isset($_GET['mod'])) {
	$mod = htmlspecialchars(trim($_GET['mod']));
	//if the template exists
	if($smarty->template_exists($theme_name.DS."offer".DS.$mod.$smarty->tpl_ext)){
		render("offer/".$mod, true);
	}else{
		render("offer/list", true);
	}
}
render("offer/index");
?>