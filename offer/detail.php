<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2048 $
 */
define('CURSCRIPT', 'detail');
require("../libraries/common.inc.php");
require("../share.inc.php");
$positions = $titles = array();
uses("trade","member","company","tradefield","form","typeoption","industry","area","meta");
$offer = new Tradefields();
$area = new Areas();
$meta = new Metas();
$industry = new Industries();
$company = new Companies();
$trade = new Trade();
$trade_model = new Trades();
$member = new Members();
$typeoption = new Typeoption();
$form = new Forms();
setvar("Genders", $typeoption->get_cache_type('gender'));
setvar("PhoneTypes", $typeoption->get_cache_type('phone_type'));
$viewhelper->setTitle(L("offer", "tpl"));
$viewhelper->setPosition(L("offer", "tpl"), "offer/");
if (isset($_GET['title'])) {
	$title = rawurldecode(trim($_GET['title']));
	$res = $trade_model->findByTitle($title);
	$id = $res['id'];
}
if (isset($_GET['id'])) {
	$id = intval($_GET['id']);
}
if(!empty($id)){
	$trade->setInfoById($id);
	$info = $trade->info;
	if (empty($info['id'])) {
		flash("data_not_exists", '', 0);
	}
	$info['title_clear'] = $info['title'];
	$info['title'].=(($_PB_CACHE['setting']['offer_expire_method']==1||$_PB_CACHE['setting']['offer_expire_method']==3) && $info['expdate']<$time_stamp)?"[".L("has_expired", "tpl")."]":'';
	$info['title'].=(!empty($info['if_urgent']))?"[".L("urgent_buy", "tpl")."]":'';
	if ($info['expdate']<$time_stamp && $_PB_CACHE['setting']['offer_expire_method']==2) {
		flash("has_been_expired", URL, 0, $info['title']);
	}
}else{
	flash("data_not_exists", '', 0);
}
if ($info['status']!=1) {
	flash("under_checking", null, 0, $info['title']);
}
$trade_types = $trade->getTradeTypes();
$viewhelper->setTitle($trade_types[$info['type_id']]);
$viewhelper->setPosition($trade_types[$info['type_id']], "offer/list.php?typeid=".$info['type_id']);
$trade_model->clicked($id);
if ($info['require_point']>0) {
	//check member points
	if (empty($pb_user)) {
		flash("please_login_first", URL."logging.php");
	}
	$point = $member->field("points", "id='".$pb_user['pb_userid']."'");
	if ($point<$info['require_point']) {
		flash("not_enough_points", URL, 0, $info['require_point']);
	}
}
if (isset($info['formattribute_ids'])) {
	$form_vars = $form->getAttributes(explode(",", $info['formattribute_ids']));
	setvar("ObjectParams", $form_vars);
}
$info['pubdate'] = df($info['pubdate']);
$info['expdate'] = df($info['expdate']);
$info['image'] = pb_get_attachmenturl($info['picture']);
$login_check = 1;
if ($info['type_id']==1) {
	$login_check = $_PB_CACHE['setting']['buy_logincheck'];
}elseif ($info['type_id']==2){
	$login_check = $_PB_CACHE['setting']['sell_logincheck'];
}
if (!empty($info['member_id'])) {
	$member_info = $member->getInfoById($info['member_id']);
	$info['link_people'] = $member_info['last_name'];
	$info['space_name'] = $member_info['space_name'];
	$info['tel'] = $member_info['tel'];
	$info['address'] = $member_info['address'];
	$info['zipcode'] = $member_info['zipcode'];
	$info['fax'] = $member_info['fax'];
	$info['site_url'] = $member_info['site_url'];
	setvar("MEMBER", $member_info);
}
if (!empty($info['company_id'])) {
	$company_info = $company->getInfoById($info['company_id']);
	$info['companyname'] = $company_info['name'];
	$info['link_people'] = $company_info['link_man'];
	$info['address'] = $company_info['address'];
	$info['zipcode'] = $company_info['zipcode'];
	$info['site_url'] = $company_info['site_url'];
	$info['tel'] = $company_info['tel'];
	$info['fax'] = $company_info['fax'];
	setvar("COMPANY", $company_info);
}
setvar("LoginCheck", $login_check);
$info['title'] = strip_tags($info['title']);
$info['industry_names'] = $industry->disSubNames($info['industry_id'], null, true, "offer");
$info['area_names'] = $area->disSubNames($info['area_id'], null, true, "offer");
//delete the pre num.2011.9.1
$info['tel'] = preg_replace('/\((.+?)\)/i', '', $info['tel']);
$info['fax'] = preg_replace('/\((.+?)\)/i', '', $info['fax']);
setvar("item",$info);
$meta_info = $meta->getSEOById($id, 'trade', false);
empty($meta_info['title'])?$viewhelper->setTitle($info['title'], $info['picture']):$viewhelper->setTitle($meta_info['title']);
empty($meta_info['description'])?$viewhelper->setMetaDescription($info['content']):$viewhelper->setMetaDescription($meta_info['description']);
$viewhelper->setPosition($info['title_clear']);
$viewhelper->setMetaKeyword($meta_info['keyword']);
setvar("forward", "offer/detail.php?id=".$id);
render("offer/detail");
?>