<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2075 $
 */
function smarty_block_dict($params, $content, &$smarty, &$repeat) {
	$conditions = array();
	$param_count = count($smarty->_tag_stack);
	if(empty($params['name'])) $params['name'] = "dict";
	if (class_exists("Dicts")) {
		$dict = new Dicts();
		$dict_controller = new Dict();
	}else{
		uses("dict");
		$dict = new Dicts();
		$dict_controller = new Dict();
	}
	if(isset($params['type'])) {
		$type = explode(",", $params['type']);
		$type = array_unique($type);
		foreach ($type as $val) {
			switch ($val) {
				case 'commend':
					$conditions[] = "if_commend>0";
					break;
				default:
					break;
			}
		}
	}	
	if (isset($params['id'])) {
		$conditions[] = "id=".$params['id'];
	}
	if (!empty($params['typeid'])) {
		$conditions[] = "type_id='".$params['typeid']."'";
	}
	$orderby = null;
	if (isset($params['orderby'])) {
		$orderby = " ORDER BY ".trim($params['orderby'])." ";
	}else{
		$orderby = " ORDER BY id DESC";
	}
	$dict->setOrderby($orderby);
	$dict->setCondition($conditions);
	$limit = $offset = 0;
	if (isset($params['row'])) {
		$limit = $params['row'];
	}
	if (isset($params['start'])) {
		$offset = $params['start'];
	}
	$dict->setLimitOffset($offset, $limit);
	$sql = "SELECT id,word,word AS name,word_name,if_commend,digest FROM {$dict->table_prefix}dicts ".$dict->getCondition()."{$orderby}".$dict->getLimitOffset();
	if(empty($smarty->blockvars[$param_count])) {
		$smarty->blockvars[$param_count] = $dict->GetArray($sql);
		if(!$smarty->blockvars[$param_count]) return $repeat = false;
	}
	if(list($key, $item) = each($smarty->blockvars[$param_count])) {
		$repeat = true;
		$url = $dict->getPermaLink($item['id']);
		$item['url'] = $url;
		if (isset($params['titlelen'])) {
	    	$item['name'] = mb_substr($item['word'], 0, $params['titlelen']);
		}
		$item['link'] = '<a title="'.$item['word'].'" href="'.$url.'">'.$item['name'].'</a>';
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