<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2244 $
 */
function smarty_function_the_url($params){
	$do = null;
	extract($params);
	global $subdomain_support, $topleveldomain_support, $rewrite_able, $rewrite_compatible;
	$return = "##";
	if (!empty($module)) {
		switch ($module) {
			case "producttype":
				if ($rewrite_able) {
					$return = URL."space/".$userid."/product/list-".$typeid."-".intval($page).".html";
				}else{
					$return = URL."space/?userid=".$userid."&do=product&typeid=".$typeid."&page=".$page;
				}
				break;
			case "space":
				if (!class_exists('Space')) {
					uses("space");
				}
				$space_controller = new Space();
				$return = $space_controller->rewrite($userid, $id, $do);
				break;
			case "offer":
				if (!class_exists('Trade')) {
					uses("trade");
				}
				$trade_controller = new Trade();
				if ($rewrite_able) {
					$return = "offer/".$trade_controller->getModulenameById($typeid)."/detail/".$id.".html";
				}else{
					$return = "offer/detail.php?id=".$id;
				}
				break;
			case "list":
				$extra_param = array();
				if (!empty($extra)) {
					if(strpos($extra, "|")>0){
						$tmp = explode("|", $extra);
						foreach ($tmp as $k=>$v) {
							$tmp_p = explode(",", $v);
							$extra_param[$tmp_p[0]] = $tmp_p[1];
						}
					}else{
						$tmp = explode(",", $extra);
						$extra_param[$tmp[0]] = $tmp[1];
					}
				}
				$param = http_build_query($extra_param + $_GET);
				$return = $GLOBALS['php_self']."?".$param;
				break;
			case "special":
				if ($rewrite_able) {
					if ($type=="topic") {
						//name first alias_name
						$return = "topic/".$name."/";
					}else{
						$return = "topic/".$type."/".$id."/?do=".$do;
					}
				}else{
					if ($type=="topic") {
						//name first alias_name
						$return = "special/?type=".$type."&name=".$name;
					}else{
						$return = "special/?type=".$type."&do=".$do."&id=".$id;
					}
				}
				break;
			case "page":
				if ($rewrite_able) {
					$return = "page/".urlencode($title)."/";
				}else{
					$return = "page.php?title=".urlencode($title);
				}
				break;
			case "search":
				$return = "search/?do=".$do."&pos=".$pos;
				if (!empty($q)) {
					$return.="&q=".$q;
				}
				if (!empty($typeid)) {
					$return.="&typeid=".intval($typeid);
				}
				if (!empty($areaid)) {
					$return.="&areaid=".$areaid;
				}
				if (!empty($industryid)) {
					$return.="&industryid=".$industryid;
				}
				if (!empty($type)) {
					$return.="&type=".$type;
				}
				break;
			case "wap":
				if($do){
					$return = "?do=".$do;
				}else{
					$return = URL."wap/";
				}
				break;
			case "tag":
				if ($rewrite_able) {
					$return = "tag/".$do."-".$q."/";
				}else{
					$return = smarty_function_the_url(array("do"=>$do, "q"=>$q, "module"=>"search"));
				}
				break;
			default:
				if (!empty($id)) {
					if ($rewrite_able) {
						$return = URL.$module."/detail/".$id.".html";
					}else{
						$return = URL.$module."/detail.php?id=".$id;
					}
				}
				break;
		}
	}
	return $return;
}
?>