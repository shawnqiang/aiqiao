<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2048 $
 */
define('CURSCRIPT', 'content');
require("../libraries/common.inc.php");
require("../share.inc.php");
uses("product","company","member","form", "tag","area","industry","meta");
$company = new Companies();
$area = new Areas();
$meta = new Metas();
$industry = new Industries();
$tag = new Tags();
$member = new Members();
$product = new Products();
$form = new Forms();
$tmp_status = explode(",",L('product_status', 'tpl'));
$viewhelper->setPosition(L("product_center", 'tpl'), 'product/');
$viewhelper->setTitle(L("product_center", 'tpl'));
if (isset($_GET['title'])) {
	$title = rawurldecode(trim($_GET['title']));
	$res = $product->findByName($title);
	$id = $res['id'];
}
if (isset($_GET['id'])) {
	$id = intval($_GET['id']);
}
$info = $product->getProductById($id);
if(empty($info) || !$info){
	flash("data_not_exists", '', 0);
}
if (isset($info['formattribute_ids'])) {
	$form_vars = $form->getAttributes(explode(",", $info['formattribute_ids']),2);
	setvar("ObjectParams", $form_vars);
}
if (!function_exists("smarty_function_the_url")) {
	require(PHPB2B_ROOT."app/slug/function.the_url.php");
}
if (!empty($info['tag_ids'])) {
	$tag_res = $tag->getTagsByIds($info['tag_ids']);
	if (!empty($tag_res)) {
		$tags = null;
		foreach ($tag_res as $key=>$val){
			$tags.='<a href="'.smarty_function_the_url(array("module"=>"tag", "do"=>"product", "q"=>$val)).'" target="_blank">'.$val.'</a>&nbsp;';
		}
		$info['tag'] = $tags;
		unset($tags, $tag_res, $tag);
	}
}
if ($info['state']!=1) {
	flash("unvalid_product", '', 0);
}
if($info['status']!=1){
	$tmp_key = intval($info['status']);
	flash("wait_apply", '', 0);
}
if (!empty($info['member_id'])) {
	$member_info = $member->getInfoById($info['member_id']);
	$info['space_name'] = $member_info['space_name'];
	setvar("MEMBER", $member_info);
}
if (!empty($info['company_id'])) {
	$company_info = $company->getInfoById($info['company_id']);
	if (!empty($company_info)) {
	$info['companyname'] = $company_info['name'];
	$info['link_people'] = $company_info['link_man'];
	$info['address'] = $company_info['address'];
	$info['zipcode'] = $company_info['zipcode'];
	$info['site_url'] = $company_info['site_url'];
	$info['tel'] = $company_info['tel'];
	$info['fax'] = $company_info['fax'];
	setvar("COMPANY", $company_info);
	}
}
$meta_info = $meta->getSEOById($id, 'product', false);
empty($meta_info['title'])?$viewhelper->setTitle($info['name'], $info['picture']):$viewhelper->setTitle($meta_info['title']);
empty($meta_info['description'])?$viewhelper->setMetaDescription($info['content']):$viewhelper->setMetaDescription($meta_info['description']);
$viewhelper->setMetaKeyword($meta_info['keyword']);
$viewhelper->setPosition($info['name']);
$info['industry_names'] = $industry->disSubNames($info['industry_id'], null, true, "product");
$info['area_names'] = $area->disSubNames($info['area_id'], null, true, "product");
$info['title'] = strip_tags($info['name']);
//delete the pre num.2011.9.1
$info['tel'] = preg_replace('/\((.+?)\)/i', '', $info['tel']);
$info['fax'] = preg_replace('/\((.+?)\)/i', '', $info['fax']);
setvar("item", $info);
$product->clicked($id);
render("product/detail");
?>