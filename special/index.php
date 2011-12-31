<?php 
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2048 $
 */
define('CURSCRIPT', 'index');
//define('SMARTY_CACHE', 1);
require("../libraries/common.inc.php");
require("../share.inc.php");
$viewhelper->setPosition(L("sub_special", "tpl"), "special/");
$viewhelper->setTitle(L("sub_special", "tpl"));
$types = cache_read("type");
$tpl_file = "special/index";
$special_controller = new PbController();
if (isset($_GET['type'])) {
	$mod = stripslashes($_GET['type']);
	if (!in_array($mod, array('area', 'industry', 'topic'))) {
		flash("data_not_exists", URL);
	}
	if ($mod == "topic") {
		//topic exists
		$name = trim(urldecode($_GET['name']));
		$name = htmlspecialchars($name, ENT_QUOTES);
		$topic_info = $pdb->GetRow("SELECT * FROM ".$tb_prefix."topics WHERE alias_name='".$name."' OR title='".$name."' OR id='".$name."'");
		if (!empty($topic_info['templet'])) {
			//delete .ext
			$name_count = strpos($topic_info['templet'], ".");
			if ($name_count>0){
				$tf = "special/".substr($topic_info['templet'], 0, $name_count);
			}else{
				$tf = "special/".$topic_info['templet'];
			}
			if ($smarty->template_exists($smarty->template_dir.$theme_name.DS.$tf.$smarty->tpl_ext)) {
				
			$tpl_file = $tf;
			}
		}
		$viewhelper->setTitle($topic_info['title']);
		$viewhelper->setMetaDescription(mb_substr($topic_info['description'], 0, 100));
		$viewhelper->setMetaKeyword($topic_info['title']);
		setvar("topic", $topic_info);
	}else{
		if (isset($_GET['id'])) {
			$model_name = htmlspecialchars($mod, ENT_QUOTES);
			uses($model_name);
			$model_name = $special_controller->pluralize(ucwords($model_name));
			$model_object = new $model_name();
			$mod_id = intval($_GET['id']);
			//for sub-station
			setvar($mod."_id", $mod_id);
			$model_object->setInfo($mod_id);
			if (!empty($model_object->info)) {
				$cache_id = $mod_id;
				$viewhelper->setTitle($model_object->info['name'].L("sub_".$mod, "tpl"));
				if (empty($model_object->info['description'])) {
					$model_object->info['description'] = nl2br(L("sub_default_desc", "tpl", $model_object->info['name']));
				}
				$viewhelper->setMetaDescription($model_object->info['description']);
				$viewhelper->setMetaKeyword(implode(",", array($model_object->info['name'].L("offer", "tpl"), $model_object->info['name'].L("market", "tpl"), $model_object->info['name'].L("product_center", "tpl"), $model_object->info['name'].L("yellow_page", "tpl"), $model_object->info['name'].L("info", "tpl"))));
				setvar("item", $model_object->info);
			}
		}else{
			$datas = cache_read($mod);
			$datas = $special_controller->array_multi2single($datas);
			$alphabet_sorts = array();
			foreach ($datas as $key=>$val) {
				$letter =  strtoupper(L10n::getinitial($val));
				$alphabet_sorts[$letter]['child'][$key]['id'] = $key;
				$alphabet_sorts[$letter]['child'][$key]['title'] = $val;
			}
			ksort($alphabet_sorts);
			setvar("alpha_datas", $alphabet_sorts);
			setvar("type", $mod);
			setvar("station_name", L("sub_".$mod, "tpl"));
			unset($datas, $alphabet_sorts);
			$tpl_file = "special/list";
			$viewhelper->setTitle(L("sub_".$mod, "tpl"));
		}
	}
}
$membertypes = cache_read("type", "membertype");
setvar("member_types", $membertypes);
render($tpl_file);
?>