<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2075 $
 */
function smarty_block_adword($params, $content, &$smarty, &$repeat) {
	$conditions = array();
	$param_count = count($smarty->_tag_stack);
	if(empty($params['name'])) $params['name'] = "adword";
	if (class_exists("Spreads")) {
		$spread = new Spreads();
		$spread_controller = new Spread();
	}else{
		uses("spread");
		$spread = new Spreads();
		$spread_controller = new Spread();
	}
	$conditions[] = "status=1 AND expiration>".$spread->timestamp;
	if (!empty($params['id'])) {
		$conditions[] = "id=".$params['id'];
	}
	if (isset($params['orderby'])) {
		$orderby = " ORDER BY ".trim($params['orderby'])." ";
	}else{
		$orderby = " ORDER BY id DESC";
	}
	if(!empty($_GET['q'])){
		$conditions[] = "keyword_name='".strip_tags($_GET['q'])."'";
	}
	$spread->setCondition($conditions);
	$orderby = null;
	$limit = $offset = 0;
	if (isset($params['row'])) {
		$limit = $params['row'];
	}
	if (isset($params['start'])) {
		$offset = $params['start'];
	}
	$spread->setLimitOffset($offset, $limit);
	if ($limit == "-1"){
		$spread->limit_offset = 0;
	}
	$mysql_limit = $spread->getLimitOffset();
	if (isset($params['limit'])) {
		$mysql_limit = " ".trim($params['limit']);
	}
	$sql = "SELECT * FROM {$spread->table_prefix}spreads ".$spread->getCondition()."{$orderby}".$mysql_limit."";
	if(empty($smarty->blockvars[$param_count])) {
		$smarty->blockvars[$param_count] = $spread->GetArray($sql);
		if(!$smarty->blockvars[$param_count]) return $repeat = false;
	}
	if(list($key, $item) = each($smarty->blockvars[$param_count])) {
		$repeat = true;
		$url = $item['target_url'];
		if (isset($params['titlelen'])) {
	    	$item['name'] = mb_substr($item['title'], 0, $params['titlelen']);
		}
		$item['link'] = '<a title="'.$item['title'].'" href="'.$url.'">'.$item['name'].'</a>';
		$item['pubdate'] = df($item['created']);
		$item['url'] = str_replace(array("http://", "https://"), "", $url);
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