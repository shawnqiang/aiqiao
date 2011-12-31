<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2048 $
 */
define('CURSCRIPT', 'search');
require("../libraries/common.inc.php");
require("../share.inc.php");
uses("job", "industry", "area");
$job = new Jobs();
$area = new Areas();
$industry = new Industries();
$conditions[] = "Job.status=1";
$viewhelper->setTitle(L("hr_information", "tpl"));
$viewhelper->setPosition(L("hr_information", "tpl"), "hr/");
if (isset($_GET['do'])) {
	$do = trim($_GET['do']);
	if ($do == "search") {
		if(!empty($_GET['q'])){
			$title = trim($_GET['q']);
			$conditions[]= "Job.name like '%".$title."%'";
		}
		if (!empty($_GET['data']['salary_id'])) {
			$conditions[] = "Job.salary_id=".intval($_GET['data']['salary_id']);
		}
		if (!empty($_GET['data']['area_id'])) {
			$conditions[] = "Job.area_id=".intval($_GET['data']['area_id']);
		}
	}
}
if (isset($_GET['industryid'])) {
	$industry_id = intval($_GET['industryid']);
	$tmp_info = $industry->setInfo($industry_id);
	if (!empty($tmp_info)) {
		$conditions[] = "Job.industry_id=".$tmp_info['id'];
		$viewhelper->setTitle($tmp_info['name']);
		$viewhelper->setPosition($tmp_info['name'], "hr/list.php?industryid=".$tmp_info['id']);
	}
}
if (isset($_GET['areaid'])) {
	$area_id = intval($_GET['areaid']);
	$tmp_info = $area->setInfo($area_id);
	if (!empty($tmp_info)) {
		$conditions[] = "Job.area_id=".$tmp_info['id'];
		$viewhelper->setTitle($tmp_info['name']);
		$viewhelper->setPosition($tmp_info['name'], "hr/list.php?areaid=".$tmp_info['id']);
	}
}
$amount = $job->findCount(null, $conditions, "Job.id");
$result = $job->findAll("Job.*,Job.cache_spacename AS userid,Job.created AS pubdate,(select Company.name from ".$tb_prefix."companies Company where Company.id=Job.id) AS companyname", null, $conditions, "Job.id DESC", $pos, $limit);
$viewhelper->setTitle(L("search", "tpl"));
$viewhelper->setPosition(L("search", "tpl"));
setvar("items", $result);
setvar("paging", array('total'=>$amount));
render("job/list");
?>