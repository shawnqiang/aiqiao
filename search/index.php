<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2048 $
 */
chdir('../');
define('CURSCRIPT', 'search');
require("libraries/common.inc.php");
require("share.inc.php");
$pos = 0;
if (isset($_GET['pos'])) {
	$pos = intval($_GET['pos']);
}
$conditions = array();
$tpl_file = "search";
$cache_types = cache_read("type");
if (isset($_GET['q'])) {
	$_GET['q'] = urldecode(strip_tags(htmlspecialchars($_GET['q'])));
	//Todo:charset check.
//	if($charset=="utf-8") $_GET['q']=iconv("gbk", $charset, $_GET['q']);
	setvar('highlight_str', $_GET['q']);
}
$viewhelper->setTitle(L("advanced_search", 'tpl'));
if (isset($_GET['act'])) {
	if ($_GET['act']=="direct") {
		$result = $pdb->GetRow("SELECT * FROM ".$tb_prefix."companies WHERE adwords='".$_GET['q']."' OR name='".$_GET['q']."'");
		if (!empty($result)) {
			pheader("Location:".URL."space/?id=".$result['id']);
			exit;
		}
	}
}
if (isset($_GET['do']) && (!empty($_GET['q']) || !empty($_GET['industryid']) || !empty($_GET['areaid']) || !empty($_GET['typeid']) || !empty($_GET['type']))) {
	$do = trim(strtolower($_GET['do']));
	$allowed_search = array("dictionary"=>"dict", "help"=>"help", "market"=>"market", "info"=>"news", "offer"=>"offer", "fair"=>"fair", "product"=>"product", "yellow_page"=>"company");
	if (in_array($do, $allowed_search)) {
		$tpl_file = "search.list";
		switch ($do) {
			case "fair":
				$do = "expo";
				$option = "fair";
				break;
			case "offer":
				$option = "offer";
				$do = "trade";
				break;
			default:
				$option = $do;
				break;
		}
		$search_controller = new PbController();
		$model_name = htmlspecialchars($do, ENT_QUOTES);
		uses($model_name);
		$model_name = $search_controller->pluralize(ucwords($model_name));
		$model_object = new $model_name(); 	
		$model_object->initSearch();
		$result = array();
		if($model_object->amount>0)
		$result = $model_object->Search($pos, $limit);
		//lft cat nav
		switch ($do) {
			case "product":
				$typeoption = "productsort";
				break;
			case "trade":
				$typeoption = "offertype";
				break;
			default:
				$typeoption = $do."type";
				break;
		}
		if ($do == "company") {
			$cache_options = cache_read('typeoption');
			$types = $cache_options['manage_type'];
		}else{
			$types = $cache_types[$typeoption];
		}
		if (!empty($types)) {
			setvar("cats", $types);
		}
		foreach ($allowed_search as $k=>$v) {
			$modules[$v] = L(array_search($v, $allowed_search));
		}
		ksort($modules);
		setvar("top_modules", $modules);
		unset($modules[$option]);
		array_unshift($modules, L(array_search($option, $allowed_search)));
		setvar("modules", $modules);
		//similar
		require(LIB_PATH. "segment.class.php");
		$segment = new Segments();
		$search_q = $similar_result = '';
		if (isset($_GET['q'])) {
			$search_q = trim($_GET['q']);
		}
		$similar_q = $segment->Split($search_q);
		if (!empty($similar_q)) {
			$similar_result = $similar_q;
		}elseif(!empty($search_q)){
			$similar_result = $model_object->GetArray("SELECT *,name AS title FROM ".$tb_prefix."tags WHERE name like '%".$search_q."%' ORDER BY id DESC LIMIT 0,10");
		}
		setvar("similar_search", $similar_result);
		setvar("items", $result);
		$from = ($pos==0)?0:$pos+1;
		setvar("paging", array('total'=>$model_object->amount, 'from'=>$from, 'to'=>($to = $pos+$limit)>$model_object->amount?$model_object->amount:$to));
		setvar("TimeSpend", number_format((getmicrotime()-$time_start), 3));
		$tpl = $theme_name.DS.$option.DS.'list'.$smarty->tpl_ext;
		$viewhelper->setTitle(L(array_search($option, $allowed_search),'tpl'));
		if($search_q) $viewhelper->setTitle($search_q);
		setvar("no_result_tip", L("no_search_result_for_you", "tpl", $search_q));
		if (isset($_GET['typeid'])) {
			$viewhelper->setTitle($types[$_GET['typeid']]);
		}
	}else{
		unset($_GET);
	}
}
//check if have the private template
render($tpl_file);
?>