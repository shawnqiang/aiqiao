<?php

/*
	[UCenter] (C)2001-2009 Comsenz Inc.
	The contents of this file are subject to the License; you may not use this file except in compliance with the License. 

	$Id: app.php 846 2008-12-08 05:37:05Z zhaoxiongfei $
*/

!defined('IN_UC') && exit('Access Denied');

class appmodel {

	var $db;
	var $base;

	function __construct(&$base) {
		$this->appmodel($base);
	}

	function appmodel(&$base) {
		$this->base = $base;
		$this->db = $base->db;
	}

	function get_apps($col = '*', $where = '') {
		$arr = $this->db->fetch_all("SELECT $col FROM ".UC_DBTABLEPRE."applications".($where ? ' WHERE '.$where : ''), 'appid');
		foreach($arr as $k => $v) {
			isset($v['extra']) && !empty($v['extra']) && $v['extra'] = unserialize($v['extra']);
			unset($v['authkey']);
			$arr[$k] = $v;
		}
		return $arr;
	}
}
?>