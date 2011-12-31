<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2075 $
 */
$theme_name = "default";
$limit = 10;//site every page set.
$pos = 0;
if (isset($_GET['pos'])) {
	$pos = intval($_GET['pos']);
}
$style_name = (isset($_PB_CACHE['setting']['theme']) && !empty($_PB_CACHE['setting']['theme']))?$_PB_CACHE['setting']['theme']:"default";
require(CACHE_LANG_PATH.'lang_site.php');
require(CACHE_PATH. 'cache_nav.php');
setvar("navs", $_PB_CACHE['nav']['navs']);
$ADODB_CACHE_DIR = DATA_PATH.'dbcache';
$smarty->flash_layout = $theme_name."/flash";
$smarty->assign("theme_img_path", "templates/".$theme_name."/");
$smarty->assign("theme_style_path", "templates/".$style_name."/");
$smarty->assign('theme_name', $theme_name);
$smarty->setCompileDir("site".DS.$theme_name.DS);
if (!empty($arrTemplate)) {
    $smarty->assign($arrTemplate);
}
?>