<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2075 $
 */
function smarty_block_friendlink($params, $content, &$smarty, &$repeat) {
	$conditions = array();
	$conditions[] = "status='1'";
	$param_count = count($smarty->_tag_stack);
	if(empty($params['name'])) $params['name'] = "link";
	if (!class_exists("Friendlinks")) {
		uses("friendlink");
		$friendlink = new Friendlinks();
	}else{
	    $friendlink = new Friendlinks();
	}
	$show_logo = false;
	if (isset($params['type'])) {
		if ($params['type']=='image') {
			$conditions[] = "logo!=''";
		}
	}
	if (isset($params['typeid'])) {
		$conditions[] = "friendlinktype_id='".$params['typeid']."'";
	}
	if (isset($params['seperate'])) {
		$seperate = $params['seperate'];
	}
	if (isset($params['sep'])) {
		$seperate = $params['sep'];
	}
	if (isset($params['exclode'])) {
		$conditions[] = "id NOT IN (".$params['exclode'].")";
	}
	$friendlink->setCondition($conditions);
	$sql = "SELECT *,logo AS image FROM ".$friendlink->table_prefix."friendlinks ".$friendlink->getCondition()." ORDER BY priority ASC";
	if(empty($smarty->blockvars[$param_count])) {
		$smarty->blockvars[$param_count] = $friendlink->GetArray($sql);
		if(!$smarty->blockvars[$param_count]) return $repeat = false;
	}
	$counts = count($smarty->blockvars[$param_count]);
	if(list($key, $item) = each($smarty->blockvars[$param_count])) {
		$repeat = true;
		if (empty($item['url'])) {
			$item['url'] = URL;
		}
		$url = $item['url'];
		if($seperate) $item['title'] = ($key==$counts-1)?$item['title']:$item['title'].$seperate;
		if (!empty($item['image'])) {
			$item['link'] = '<a title="'.strip_tags($item['title']).'" href="'.$url.'" target="_blank" linkf="friendlink"><img src="'.$item['image'].'"</a>';
		}else{
			$item['link'] = '<a title="'.strip_tags($item['title']).'" href="'.$url.'" target="_blank" linkf="friendlink">'.$item['title'].'</a>';
		}
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