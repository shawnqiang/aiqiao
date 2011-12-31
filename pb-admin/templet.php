<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2075 $
 */
define('CURSCRIPT', 'templet');
require("../libraries/common.inc.php");
uses("templet","typeoption","setting");
require("session_cp.inc.php");
require(LIB_PATH. "cache.class.php");
include(CACHE_PATH. "cache_membergroup.php");
include(CACHE_PATH. "cache_type.php");
$cache = new Caches();
$setting = new Settings();
$templet = new Templets();
$typeoption = new Typeoption();
$templet_controller = new Templet();
$conditions = null;
$tpl_file = "templet";
setvar("AskAction", $typeoption->get_cache_type("common_option"));
if (isset($_POST['save']) && !empty($_POST['data']['templet']['title'])) {
	$vals = array();
	$vals = $_POST['data']['templet'];
	if(!in_array(0, $_POST['data']['require_membertype']) && !empty($_POST['data']['require_membertype'])){
		$res = "[".implode("][", $_POST['data']['require_membertype'])."]";
		$vals['require_membertype'] = $res;
	}elseif(!empty($_POST['data']['require_membertype'])){
		$vals['require_membertype'] = 0;
	}
	if(!in_array(0, $_POST['data']['require_membergroups']) && !empty($_POST['data']['require_membergroups'])){
		$res = "[".implode("][", $_POST['data']['require_membergroups'])."]";
		$vals['require_membergroups'] = $res;
	}elseif(!empty($_POST['data']['require_membergroups'])){
		$vals['require_membergroups'] = 0;
	}
	if (isset($_POST['id'])) {
		$id = intval($_POST['id']);
	}
	if(!empty($id)){
		$result = $templet->save($vals, "update", $id);
		if ($_POST['data']['templet']['is_default']==1) {
			$pdb->Execute("UPDATE {$tb_prefix}templets SET is_default='0'");
			$pdb->Execute("UPDATE {$tb_prefix}templets SET is_default='1' WHERE id='".$_POST['id']."'");
		}
	}else{
		$result = $templet->save($vals);
	}
	if(!$result){
		flash();
	}else{
		flash("success", "templet.php?type=".$_POST['type']);
	}
}
if(isset($_GET['do'])){
	$do = trim($_GET['do']);
	if (!empty($_GET['id'])) {
		$id = intval($_GET['id']);
	}
	if ($do == "uninstall" && !empty($id)) {
		$templet->del($id);
	}
	if ($do == "install" && !empty($_GET['entry'])) {
		$entry = trim($_GET['entry']);
		$templet_controller->install($entry);
		flash("tpl_installed_ok", "templet.php?type=".$_GET['type']);
	}
	if ($do == "setup" && !empty($_GET['name']) && ($pdb->GetRow("SELECT * FROM {$tb_prefix}templets WHERE id=".$id))) {
		$the_theme = trim($_GET['name']);
		$setting->replace(array("theme"=>$the_theme));
		$result = $cache->writeCache("setting", "setting");
		if ($result) {
			$templet->exchangeDefault($id);
			flash("success", "templet.php?type=system");
		}else{
			flash();
		}
	}
	if($do == "edit"){
		if (!empty($id)) {
			setvar("item",$templet->read("*", $id));
		}
		$user_types = array();
		foreach ($_PB_CACHE['membergroup'] as $key=>$val) {
			$user_types[$key] = $val['name'];
		}
		setvar("Membergroups", $user_types);
		setvar("Membertypes", $_PB_CACHE['membertype']);
		$tpl_file = "templet.edit";
		template($tpl_file);
		exit;
	}
}
if (isset($_POST['del']) && is_array($_POST['id'])) {
	$ids = array_filter($_POST['id']);
	$result = $templet->del($ids);
}

if (isset($_POST['install']) && is_array($_POST['id'])) {
	for ($i=0; $i<count($_POST['id']); $i++) {
		$entry = $_POST['entry'][$i];
		if(!empty($entry))
		$templet_controller->install($entry);
	}
	flash("tpl_installed_ok", "templet.php?type=".$_POST['type']);
}
$result = $templet_controller->getTemplate();
setvar("Items", $result);
template("templet");
?>