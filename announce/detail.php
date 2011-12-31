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
$announce = new Announcements();
$announce_controller = new Announcement();
$viewhelper->setTitle(L("announce", "tpl"));
$types = cache_read("type");
$viewhelper->setPosition(L("announce", "tpl"), "announce/");
if (isset($_GET['title'])) {
	$title = rawurldecode(trim($_GET['title']));
	$res = $announce->findBySubject($title);
	$id = $res['id'];
}
if (isset($_GET['id'])) {
	$id = intval($_GET['id']);
}
if(!empty($id)){
	$result = $announce->findById($id);
	if (!empty($result)) {
		$result['message'] = nl2br($result['message']);
		$viewhelper->setPosition($types['announcementtype'][$result['announcetype_id']], "announce/?do=search&typeid=".$result['announcetype_id']);
		$viewhelper->setTitle($result['subject']);
		$viewhelper->setPosition($result['subject']);
		$viewhelper->setMetaDescription($result['message']);
		$result['title'] = $result['subject'];
		$result['content'] = $result['message'];
		$result['typename'] = $types['announcementtype'][$result['announcetype_id']];
		$result['pubdate'] = df($result['created']);
		$neighbour_info = $announce->getNeighbour($id, "id,subject AS title,subject");
		if (!empty($neighbour_info['prev'])) {
			$result['prev_link'] = "<a href='".$announce->getPermaLink($neighbour_info['prev']['id'], 'announce')."'>".$neighbour_info['prev']['title']."</a>";
			$result['prev_title'] = $neighbour_info['prev']['title'];
		}else{
			$result['prev_link'] = L("nothing", "tpl");
		}
		if (!empty($neighbour_info['next'])) {
			$result['next_link'] = "<a href='".$announce->getPermaLink($neighbour_info['next']['id'], 'announce')."'>".$neighbour_info['next']['title']."</a>";
			$result['next_title'] = $neighbour_info['next']['title'];
		}else{
			$result['next_link'] = L("nothing", "tpl");
		}
		setvar("item", $result);
		setvar("PageTitle", strip_tags($result['subject']));
		render("detail.default", true);
	}
}else{
	flash();
}
?>