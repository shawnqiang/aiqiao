<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2075 $
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