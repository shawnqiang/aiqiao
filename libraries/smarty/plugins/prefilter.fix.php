<?php
/**
 * PHPB2B :  Opensource B2B Script (http://www.phpb2b.com/)
 * Copyright (C) 2007-2011, Ualink Inc. All Rights Reserved.
 * 
 * Licensed under The Languages Packages Licenses.
 * Support : phpb2b@hotmail.com
 * 
 * Install:  Drop into the plugin directory, call
 *           <code>$smarty->load_filter('pre','fix');</code>
 *           from application.
 * @version $Revision: 1075 $
 * @since 4.0
 */
function smarty_prefilter_fix($tpl_source,&$smarty)
{
	$pattern = array(
		"/\<\!\-\-\\s*{(.+?)\}\s*\-\-\>/s",
		"/{(lang)+\s*(.+?)}/s",
		"/<!--#.*-->/U"
		);
	$replace = array(
		"{\\1}",
		"{\$_\\2}",
		""
		);
    $tpl_source = preg_replace($pattern, $replace, $tpl_source);
    $tpl_source = str_replace("pb:", "", $tpl_source);
    return $tpl_source;
}
?>