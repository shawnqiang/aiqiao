<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2048 $
 */
define('CURSCRIPT', 'index');
chdir("../");
require("libraries/common.inc.php");
require("share.inc.php");
require(DATA_PATH. "phpb2b_version.php");
$do = trim(strtolower($_GET['do']));
$allowed_search = array("info"=>"news", "offer"=>"offer", "product"=>"product", "yellow_page"=>"company");
$tpl_file = "wap/index";
$search_word = !empty($_GET['q']) ? htmlspecialchars(trim($_GET['q']), ENT_QUOTES) : '';
if (in_array($do, $allowed_search)) {
	$option = $do;
	switch ($do) {
		case "company":
			$condition[] = 'status=1';
			if (!empty($search_word))  $condition[] = "name LIKE '%{$search_word}%'";
			$extra = ",name AS title,description AS content";
			break;
		case "offer":
			$condition[] = 'status=1';
			if (!empty($search_word))  $condition[] = "title LIKE '%{$search_word}%'";
			$option = "offer";
			$do = "trade";
			break;
		case "product":
			$condition[] = 'status=1';
			if (!empty($search_word))  $condition[] = "name LIKE '%{$search_word}%'";
			$extra = ",name AS title";
			break;
		default:
			$condition[] = 'status=1';
			if (!empty($search_word))  $condition[] = "title LIKE '%{$search_word}%'";
			break;
	}
	$search_controller = new PbController();
	$model_name = htmlspecialchars($do, ENT_QUOTES);
	$model_name = strtolower($search_controller->pluralize(ucwords($model_name)));
	if (!empty($_GET['id'])) {
		$id = intval($_GET['id']);
		$result = $pdb->GetRow("SELECT *".$extra." FROM ".$tb_prefix.$model_name." WHERE id=".$id);
		setvar("item", $result);
		$tpl_file = "wap/detail";
	}else{
		$model_common = new PbModel();
		$model_common->setCondition($condition);
		//pager
		$pagesize = 10;
		$page = isset($_GET["page"])?intval($_GET["page"]):1;
		$total = $pdb->GetOne("SELECT count(id) FROM ".$tb_prefix.$model_name.$model_common->getCondition());
		$pagecount = ceil($total/$pagesize);
		if ($page>$pagecount){
		    $page = $pagecount;
		}
		if ($page<=0){
		    $page = 1;
		}
		$offset = ($page-1)*$pagesize;
		$pre = $page-1;
		$next = $page+1;
		$first = 1;
		$last = $pagecount;
		$op = null;
		if($page>1) $op.='<a href="?do='.$option.'&page=1">'.L("first_page","tpl").'</a> <a href="?do='.$option.'&page='.$pre.'">'.L("prev_page","tpl").'</a> ';
		if($page<$last) $op.= '<a href="?do='.$option.'&page='.$next.'">'.L("next_page","tpl").'</a> <a href="?do='.$option.'&page='.$last.'">'.L("last_page","tpl").'</a> ';
		$op.='<strong>'.$page.'</strong>/'.$last;
		setvar("pages", $op);
		//:~
		$result = $pdb->GetArray("SELECT *".$extra." FROM ".$tb_prefix.$model_name.$model_common->getCondition()." ORDER BY id DESC LIMIT ".$offset.",".$pagesize);
		$title = L(array_search($option, $allowed_search),'tpl');
		$viewhelper->setTitle($title);
		setvar("do_title", $title);
		setvar("items", $result);
		$tpl_file = "wap/list";
	}
}
$smarty->setCompileDir("wap".DS);
render($tpl_file);
?>