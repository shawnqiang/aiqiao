<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2075 $
 */
function smarty_block_userpage($params, $content, &$smarty, &$repeat) {
	global $rewrite_able;
	$conditions = array();
	$param_count = count($smarty->_tag_stack);
	if(empty($params['name'])) $params['name'] = "page";
	if (!class_exists("Userpages")) {
		uses("userpage");
		$userpage = new Userpages();
		$userpage_controller = new Userpage();
	}else{
	    $userpage = new Userpages();
		$userpage_controller = new Userpage();
	}
	if (isset($params['seperate'])) {
		$seperate = $params['seperate'];
	}
	if (isset($params['sep'])) {
		$seperate = $params['sep'];
	}
	require(CACHE_PATH. "cache_userpage.php");
	$result = $_PB_CACHE['userpage'];
	if (isset($params['exclude'])) {
		if (strpos($params['exclude'], ",")>0) {
			$tmp_str = explode(",", $params['exclude']);
			if (!empty($tmp_str)) {
				foreach ($tmp_str as $id_val) {
					unset($result[$id_val]);
				}
			}
		}else{
			unset($params['exclude']);
		}
	}
	if(empty($smarty->blockvars[$param_count])) {
		$smarty->blockvars[$param_count] = $result;
		if(!$smarty->blockvars[$param_count]) return $repeat = false;
	}
	if (!function_exists("smarty_function_the_url")) {
		require("function.the_url.php");
	}
	$counts = count($smarty->blockvars[$param_count]);
	if(list($key, $item) = each($smarty->blockvars[$param_count])) {
		$repeat = true;
		if(empty($item['url'])) $item['url'] = smarty_function_the_url(array("module"=>"page", "title"=>$item['title'], "id"=>$item['id']));
		$url = $item['url'];
		$item['tip'] = $item['title'];
		if($seperate) $sep = ($key==$counts-1)?'':$seperate;
		$item['link'] = '<a title="'.$item['title'].'" href="'.$url.'">'.$item['title'].'</a>'.$sep;
		$smarty->assign($params['name'], $item);
	}
	else {
		$repeat = false;
		reset($smarty->blockvars[$param_count]);
	}
	if(!is_null($content)) print $content;
	if(!$repeat) $smarty->blockvars[$param_count] = array();
}
?>