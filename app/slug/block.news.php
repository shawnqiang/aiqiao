<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2254 $
 */
function smarty_block_news($params, $content, &$smarty, &$repeat) {
	$conditions = array();
	$param_count = count($smarty->_tag_stack);
	if(empty($params['name'])) $params['name'] = "news";
	if (class_exists("News")) {
		$news = new Newses();
		$news_controller = new News();
	}else{
	    uses("news");
	    $news = new Newses();
		$news_controller = new News();
	}
	$orderby = array();
	require(CACHE_PATH. "cache_type.php");
	$conditions[] = "n.status='1'";
	if(isset($params['type'])) {
		$type = explode(",", $params['type']);
		$type = array_unique($type);
		foreach ($type as $val) {
			switch ($val) {
				case 'image':
					$conditions[] = "n.picture!=''";
					break;
				case 'commend':
					$conditions[] = "if_commend>0";
					break;
				case 'hot':
					$orderby[] = 'clicked DESC';
					break;
				case 'focus':
					$orderby[] = 'n.if_focus DESC';
//					$conditions[] = 'n.if_focus>0';
					break;
				default:
					break;
			}
		}
	}
	if (isset($params['flag'])) {
		$conditions[] = "n.flag='".$params['flag']."'";
	}
	if (isset($params['tag'])) {
		$conditions[] = "n.title like '%".$params['tag']."%'";
	}
	if (!empty($params['typeid'])) {
		$conditions[] = "n.type_id=".$params['typeid'];
	}
	if (!empty($params['id'])) {
		$conditions[] = "n.id='".$params['id']."'";
	}
	if (!empty($params['dateline'])) {
		$dates = explode("-", $params['dateline']);
		$time_from = mktime(0,0,0,$dates[1],$dates[2],$dates[0]);
		$conditions[] = "n.created>'".$time_from."'";
	}
	if (isset($params['orderby'])) {
		$orderby[] = trim($params['orderby']);
	}else{
		$orderby[] = "id DESC ";
	}
	if (!empty($params['industryid'])) {
		$conditions['industry'] = "n.industry_id='".$params['industryid']."'";
	}
	if (!empty($params['areaid'])) {
		$conditions['area'] = "n.area_id='".$params['areaid']."'";
	}
	if (!empty($_GET['industryid'])) {
		$conditions['industry'] = "n.industry_id=".intval($_GET['industryid']);
	}
	if (!empty($_GET['areaid'])) {
		$conditions['area'] = "n.area_id=".intval($_GET['areaid']);
	}
	$news->setOrderby($orderby);
	$news->setCondition($conditions);
	$limit = $offset = 0;
	if (isset($params['row'])) {
		$limit = $params['row'];
	}
	if (isset($params['start'])) {
		$offset = $params['start'];
	}
	$news->setLimitOffset($offset, $limit);
	$mysql_limit = $news->getLimitOffset();
	if (isset($params['limit'])) {
		$mysql_limit = " ".trim($params['limit']);
	}
	$sql = "SELECT *,title as fulltitle,content as fullcontent FROM {$news->table_prefix}newses n ".$news->getCondition().$news->getOrderby().$mysql_limit;
	$news->Execute("UPDATE ".$news->table_prefix."newses SET status='1' WHERE start_time>='".date("Y-m-d")."'");
	if(empty($smarty->blockvars[$param_count])) {
		$smarty->blockvars[$param_count] = $news->GetArray($sql);
		if(!$smarty->blockvars[$param_count]) return $repeat = false;
	}
	if(list($key, $item) = each($smarty->blockvars[$param_count])) {
		$repeat = true;
		$item['rownum'] = $key;
		$url = $news->getPermaLink($item['id']);
		$item['url'] = $url;
		$item['content'] = strip_tags($item['content']);
		if (isset($params['titlelen'])) {
	    	$item['title'] = mb_substr(strip_tags($item['title']), 0, $params['titlelen']);
		}
		$image_type = isset($params['imagetype'])?trim($params['imagetype']):"small";
		$item['thumb'] = (empty($item['picture']))?pb_get_attachmenturl('', '', $image_type):pb_get_attachmenturl($item['picture'], '', $image_type);
		$item['src'] = $item['thumb'];
		$item['link'] = '<a title="'.strip_tags($item['fulltitle']).'" href="'.$url.'">'.$item['title'].'</a>';
		if (isset($params['infolen'])) {
			if(isset($item['content'])) $item['content'] = mb_substr(pb_strip_spaces($item['content']),0, $params['infolen']);
		}
		$item['typename'] = $item['type_id']?$_PB_CACHE['newstype'][$item['type_id']]:L("undefined_sort", "tpl");
		$item['pubdate'] = df($item['created']);
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