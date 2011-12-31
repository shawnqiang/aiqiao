<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2048 $
 */
define('APP_PATH', PHPB2B_ROOT .'app'.DS);
//Cache sets
define('DATA_PATH', PHPB2B_ROOT."data".DS);
define('CACHE_ROOT', PHPB2B_ROOT."data".DS."cache".DS);
define('API_PATH', PHPB2B_ROOT."api".DS);
if (!defined('PHP5')) {
	define('PHP5', (PHP_VERSION >= 5));
}
if(!defined('SOURCE_PATH')) define('SOURCE_PATH',PHPB2B_ROOT.'libraries'.DS);
if(!defined('LIB_PATH')) define('LIB_PATH',PHPB2B_ROOT.'libraries'.DS);
define('JSMIN_AS_LIB', true); // prevents auto-run on include
?>