<?php

/*
	[UCenter] (C)2001-2009 Comsenz Inc.
	The contents of this file are subject to the License; you may not use this file except in compliance with the License. 

	$Id: cache.php 753 2008-11-14 06:48:25Z cnteacher $
*/

!defined('IN_UC') && exit('Access Denied');

class cachecontrol extends base {

	function __construct() {
		$this->cachecontrol();
	}

	function cachecontrol() {
		parent::__construct();
	}

	function onupdate($arr) {
		$this->load("cache");
		$_ENV['cache']->updatedata();
	}

}

?>