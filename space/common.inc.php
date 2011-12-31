<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2048 $
 */
if(!defined('IN_PHPB2B')) exit('Not A Valid Entry Point');
require(CACHE_LANG_PATH.'lang_space.php');
require(CACHE_PATH. 'cache_membergroup.php');
uses("templet","member","company","membertype","space");
$member = new Members();
$space = new Space();
$membertype= new Membertypes();
$company = new Companies();
$templet = new Templets();
$space_name = '';
if (empty($theme_name)) {
	$theme_name = "default";
	$style_name = (isset($_PB_CACHE['setting']['theme']) && !empty($_PB_CACHE['setting']['theme']))?$_PB_CACHE['setting']['theme']:"default";
	$ADODB_CACHE_DIR = DATA_PATH.'dbcache';
}
$pdb->setFetchMode(ADODB_FETCH_ASSOC);
$smarty->flash_layout = $theme_name."/flash";
$smarty->assign("theme_img_path", "templates/".$theme_name."/");
$smarty->assign('ThemeName', $theme_name);
//if caches
$space_cache_cycle = 86400;
$cache_data = $push_data = array();
$pdb->Execute("DELETE FROM {$tb_prefix}spacecaches WHERE expiration<".$time_stamp);
if (!empty($userid)) {
	$userid = rawurldecode($userid);
	$cache_data = $pdb->GetRow("SELECT data1 AS info FROM {$tb_prefix}spacecaches WHERE cache_spacename='".$userid."'");
	if (!empty($cache_data)) {
		$info = @unserialize($cache_data['info']);
		$company->info = $info['company'];
		$member->info = $info['member'];
		//re else below.
		if (empty($company->info) || !is_array($company->info)) {
			$member->setInfoBySpaceName($userid);
			if(!empty($member->info['id'])) {
				$company->setInfoByMemberId($member->info['id']);
			}else{
				$company->setInfoBySpaceName($userid);
			}
			$push_data['company'] = $company->info;
			$push_data['member'] = $member->info;
			if(!empty($company->info))
			$pdb->Execute("REPLACE INTO {$tb_prefix}spacecaches (cache_spacename,company_id,data1,data2,expiration) VALUE ('".$userid."','".$company->info['id']."','".@serialize($push_data)."','',".($time_stamp+$space_cache_cycle).")");
		}		
	}else{
		$member->setInfoBySpaceName($userid);
		if(!empty($member->info['id'])) {
			$company->setInfoByMemberId($member->info['id']);
		}else{
			$company->setInfoBySpaceName($userid);
		}
		$push_data['company'] = $company->info;
		$push_data['member'] = $member->info;
		if(!empty($company->info))
		$pdb->Execute("REPLACE INTO {$tb_prefix}spacecaches (cache_spacename,company_id,data1,data2,expiration) VALUE ('".$userid."','".$company->info['id']."','".@serialize($push_data)."','',".($time_stamp+$space_cache_cycle).")");
	}
}elseif(!empty($_GET['id'])) {
	$id = intval($_GET['id']);
	$cache_data = $pdb->GetRow("SELECT data1 info FROM {$tb_prefix}spacecaches WHERE company_id='".$id."'");
	if (!empty($result)) {
		$info = @unserialize($cache_data['info']);
		$company->info = $info['company'];
		$member->info = $info['member'];
	}else{
		$company->setId($id);
		if (!empty($company->info['member_id'])) {
			$member->setId($company->info['member_id']);
		}
		$push_data['company'] = $company->info;
		$push_data['member'] = $member->info;
		if(!empty($company->info))
		$pdb->Execute("REPLACE INTO {$tb_prefix}spacecaches (cache_spacename,company_id,data1,data2,expiration) VALUE ('".$company->info['cache_spacename']."','".$id."','".@serialize($push_data)."','',".($time_stamp+$space_cache_cycle).")");
	}
}
if (isset($company->info['status']) && $company->info['status']===0) {
    header_sent(L('company_checking'));
    exit;
}elseif (empty($company->info) || !$company->info) {
	header_sent(L('data_not_exists'));
	exit;
}
if(!empty($company->info['created'])){
	$time_tmp = $time_stamp-$company->info['created'];
	$company->info['year_sep'] = $time_tmp = ceil($time_tmp/(3600*24*365));
}
if (empty($company->info['email'])) {
	$company->info['email'] = $_PB_CACHE['setting']['service_email'];
}
if (empty($company->info['picture'])) {
	$company->info['logo'] = $absolute_uri.pb_get_attachmenturl('', '', 'big');
}else{
	$company->info['logo'] = $absolute_uri.$attachment_url.$company->info['picture'];
}
$pdb->setFetchMode(ADODB_FETCH_BOTH);
$company->info['description'] = nl2br(strip_tags($company->info['description']));
$member_templet_id = $member->info['templet_id'];
if (isset($_GET['force_templet_id'])) {
	$member_templet_id = intval($_GET['force_templet_id']);
}
if(!empty($member_templet_id)){
	$skin_path_info = $pdb->GetRow("SELECT name,directory FROM {$tb_prefix}templets WHERE type='user' AND status='1' AND id='".$member_templet_id."'");
}
if (empty($skin_path_info)) {
	$skin_path_info = $pdb->GetRow("SELECT name,directory FROM {$tb_prefix}templets WHERE type='user' AND is_default='1'");
	if (empty($skin_path_info)) {
		$skin_path_info = array();
		$skin_path_info[] = "default";
		$skin_path_info[] = "skins/default/";
	}
}
list($skin_path, $skin_dir) = $skin_path_info;
uaAssign(array(
"SkinName"=>$skin_path,
"ThemeName"=>$skin_path,
"SkinPath"=>$skin_dir,
"COMPANY"=>$company->info,
"MEMBER"=>$member->info,
));
$smarty->template_dir = PHPB2B_ROOT ."skins".DS;
$smarty->flash_layout = $skin_path."/flash";
if (!$smarty->template_exists($skin_path."flash")) {
	setvar("SkinName", "default");
	$smarty->template_dir = PHPB2B_ROOT ."skins".DS;
	$smarty->flash_layout = 'default/flash';
}
$smarty->setCompileDir();
$smarty->setCompileDir("skin".DS.$skin_path.DS);
if(isset($member->info['id'])) $space->setLinks($member->info['id']);
$space->setMenu($company->info['cache_spacename'], $space_actions);
$product_types = $pdb->CacheGetArray("SELECT *,id as typeid,name as typename FROM {$tb_prefix}producttypes WHERE company_id=".$company->info['id']);//set and get db cache
setvar("ProductTypes",$product_types);
$group_info = array();
$group_info['year'] = $time_tmp;
if (!empty($member->info['membergroup_id']['name'])) {
	$group_info['name'] = $_PB_CACHE['membergroup'][$member->info['membergroup_id']]['name'];
}else{
	$group_info['name'] = L("undefined_image", "tpl");
}
if (!empty($member->info['membergroup_id']['avatar'])) {
	$group_info['image'] = $absolute_uri."images/group/".$_PB_CACHE['membergroup'][$member->info['membergroup_id']]['avatar'];
}else{
	$group_info['image'] = $absolute_uri."images/group/formal.gif";
}
setvar("GROUP", $group_info);
//for old version
if(isset($member->info['membergroup_id']['name'])) setvar("GroupName", $_PB_CACHE['membergroup'][$member->info['membergroup_id']]['name']);
if(isset($member->info['membergroup_id']['avatar'])) setvar("GroupImage", $absolute_uri."images/group/".$_PB_CACHE['membergroup'][$member->info['membergroup_id']]['avatar']);
//:~
setvar("Menus", $space->getMenu());
setvar("Links", $space->getLinks());
$space_url = $space->rewrite($company->info['cache_spacename'], $company->info['id']);
setvar("space_url", $space_url);
setvar("SpaceUrl", $absolute_uri.$skin_dir);
setvar("BASEMAP", $absolute_uri.$skin_dir);
$pdb->Execute("UPDATE {$tb_prefix}companies SET clicked=clicked+1 WHERE id='".$company->info['id']."'");
if (!empty($arrTemplate)) {
    $smarty->assign($arrTemplate);
}
?>