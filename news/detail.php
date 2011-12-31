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
uses("news","tag","meta");
$news = new Newses();
$tag = new Tags();
$meta = new Metas();
$conditions = array();
$viewhelper->setTitle(L("info", "tpl"));
$viewhelper->setPosition(L("info", "tpl"), "news/");
if (isset($_GET['title'])) {
	$title = rawurldecode(trim($_GET['title']));
	$res = $news->findByTitle($title);
	$id = $res['id'];
}
if (isset($_GET['id'])) {
	$id = intval($_GET['id']);
}
if (!empty($id)) {
    require(CACHE_PATH."cache_type.php");
	$news->clicked($id);
	$info = $news->read("*",$id);
	if (empty($info) or !$info) {
		flash("data_not_exists", '', 0);
	}
	if (!function_exists("smarty_function_the_url")) {
		require(APP_PATH.'slug'.DS.'function.the_url.php');
	}
	if(!empty($info['tag_ids'])){
    	$the_tags = $tag->getTagsByIds($info['tag_ids'], true);
    	$tmp = null;
    	$info['tag'] = $tag->tag;
    	foreach ($the_tags as $key=>$val) {
    		$tmp.="<a href='".smarty_function_the_url(array("module"=>"search", "do"=>"news", "q"=>urlencode($val)))."'>".$val."</a> ";
    	}
    	$info['tag_link'] = $tmp;
	}
	if (!empty($info['picture'])) {
		$info['image'] = pb_get_attachmenturl($info['picture'], '', 'small');
	}
	$info['pubdate'] = df($info['created']);
	$info['typename'] = $_PB_CACHE['newstype'][$info['type_id']];
	$viewhelper->setTitle($info['typename']);
	$viewhelper->setPosition($info['typename'], smarty_function_the_url(array("module"=>"search", "do"=>"news", "typeid"=>$info['type_id'])));
	//seo info
	$meta_info = $meta->getSEOById($id, 'news', false);
	empty($meta_info['title'])?$viewhelper->setTitle($info['title']):$viewhelper->setTitle($meta_info['title']);
empty($meta_info['description'])?$viewhelper->setMetaDescription($info['content']):$viewhelper->setMetaDescription($meta_info['description']);
	if($meta_info['keyword']) $viewhelper->setMetaKeyword($meta_info['keyword']);
//	$viewhelper->setTitle($info['title']);
//	$viewhelper->setMetaDescription($info['content']);
	$viewhelper->setPosition($info['title']);
	if (!empty($info['require_membertype'])) {
		$require_ids = explode(",", $info['require_membertype']);
		if (!empty($pb_userinfo)) {
			$membertype_id = $pdb->GetOne("SELECT membertype_id FROM {$tb_prefix}members WHERE id='".$pb_user['pb_userid']."'");
			if (!in_array($membertype_id, $require_ids)) {
				$info['content'] = L("news_membertype_not_allowed", "tpl");
			}
		}else{
			$info['content'] = L("news_membertype_not_allowed", "tpl");
		}
	}
	if ($info['type'] == 1) {
		$info['source'] = L("company_news", "tpl");
		$info['content'] = "<a href='".$info['content']."'>".$info['content']."</a>";
	}
	if (!empty($info['picture'])) {
		$info['image_url'] = pb_get_attachmenturl($info['picture']);
	}
	$neighbour_info = $news->getNeighbour($id, "id,title");
	if (!empty($neighbour_info['prev'])) {
		$info['prev_link'] = "<a href='".smarty_function_the_url(array("module"=>"news", "id"=>$neighbour_info['prev']['id']))."'>".$neighbour_info['prev']['title']."</a>";
		$info['prev_title'] = $neighbour_info['prev']['title'];
	}else{
		$info['prev_link'] = L("nothing", "tpl");
	}
	if (!empty($neighbour_info['next'])) {
		$info['next_link'] = "<a href='".smarty_function_the_url(array("module"=>"news", "id"=>$neighbour_info['next']['id']))."'>".$neighbour_info['next']['title']."</a>";
		$info['next_title'] = $neighbour_info['next']['title'];
	}else{
		$info['next_link'] = L("nothing", "tpl");
	}
	setvar("item",$info);
}else{
    flash();
}
setvar("Newstypes",$_PB_CACHE['newstype']);
render("detail.default");
?>