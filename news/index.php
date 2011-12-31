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
require(CACHE_PATH. "cache_type.php");
uses("news","newstype");
$news = new Newses();
$newstype = new Newstypes();
$title = L("industry_info", "tpl");
//cal
require("../libraries/calendar.class.php");
$cal = new Calendar;
$cal->setMonthNames(explode(",", L("month_unit", "tpl")));
$cal->setDayNames(explode(",", L("week_unit", "tpl")));
$d = getdate(time());
$day = $_GET['day'];
if ($day=="") {
	$day = $d['mday'];
}
$month = $_GET['month'];
if ($month == "")
{
    $month = $d["mon"];
}
$year = $_GET['year'];
if ($year == "")
{
    $year = $d["year"];
}
if(isset($_GET['year']) && isset($_GET['month']) && isset($_GET['day'])){
	$title.=L("journal", "tpl", $year.$month.$day);
	setvar("date_line", $year."-".$month."-".$day);
}
$viewhelper->setTitle($title);
setvar("Calendar", $cal->getMonthView($month, $year));
$cache_id = $year.$month.$day;
//end cal
render("news/index");
?>