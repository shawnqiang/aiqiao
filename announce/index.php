<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2048 $
 */
define('CURSCRIPT', 'announce');
require("../libraries/common.inc.php");
require("../share.inc.php");
uses("announcement");
$conditions = array();
$announce = new Announcements();
$announce_controller = new Announcement();
$viewhelper->setTitle(L("announce", "tpl"));
$types = cache_read("type");
$viewhelper->setPosition(L("announce", "tpl"), "announce/");
if (!empty($_GET['typeid'])) {
	$conditions[] = "announcetype_id=".intval($_GET['typeid']);
}
$result = $announce->findAll("*", null, $conditions, "display_order ASC,id DESC");
if (!empty($result)) {
	for($i=0; $i<count($result); $i++){
		if (!empty($result[$i]['created'])) {
			$result[$i]['pubdate'] = date("Y-m-d", $result[$i]['created']);
			$result[$i]['title'] = $result[$i]['subject'];
			$result[$i]['typename'] = $types['announcementtype'][$result[$i]['announcetype_id']];
			$result[$i]['type_id'] = $result[$i]['announcetype_id'];
		}
	}
	setvar("module", "announce");
	setvar("items", $result);
}
render("list.default");
?>