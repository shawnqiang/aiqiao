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
uses("dicttype","dict");
$conditions = array();
$dict = new Dicts();
$dicttype = new Dicttypes();
$viewhelper->setPosition(L("dictionary", "tpl"), "dict/");
$viewhelper->setTitle(L("dictionary", "tpl"));
if (isset($_GET['do'])) {
	$do = trim($_GET['do']);
	if ($do == "search") {
		if (!empty($_GET['q'])) {
			$conditions[] = "word like '%".$_GET['q']."%'";
		}
		if (isset($_GET['typeid'])) {
			$type_id = intval($_GET['typeid']);
			$conditions[] = "dicttype_id='".$type_id."'";
		}
		$amount = $dict->findCount(null, $conditions);
		$result = $dict->findAll("Dict.*,dp.name AS typename", array("LEFT JOIN {$tb_prefix}dicttypes dp ON dp.id=Dict.dicttype_id"), $conditions, "Dict.id DESC", $pos, $limit);
		if (!empty($result)) {
			setvar("items", $result);
			setvar("paging", array('total'=>$amount));
		}
		render("dict/list");
		exit;
	}
}
//get dictionary types.
$dict_types = $dicttype->getAllTypes();
setvar("Dictypes", $dict_types);
render("dict/index");
?>