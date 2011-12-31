<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2075 $
 */
function smarty_block_member($params, $content, &$smarty, &$repeat) {
	$conditions = array();
	$param_count = count($smarty->_tag_stack);
	if(empty($params['name'])) $params['name'] = "member";
	if (class_exists("Members")) {
		$member = new Members();
		$member_controller = new Member();
	}else{
	    uses("member");
	    $member = new Members();
		$member_controller = new Member();
	}
	if (isset($params['id'])) {
		$conditions[] = "id=".$params['id'];
	}
	$limit = $offset = 0;
	if (isset($params['row'])) {
		$limit = $params['row'];
	}
	if (isset($params['start'])) {
		$offset = $params['start'];
	}
	$orderby = null;
	if (isset($params['orderby'])) {
		$orderby = " ORDER BY ".trim($params['orderby'])." ";
	}else{
		$orderby = " ORDER BY m.id DESC";
	}
	$member->setCondition($conditions);
	$member->setLimitOffset($offset, $limit);
	if ($params['type']=="resume") {
		$conditions[] = "p.resume_status=1";
		$member->setCondition($conditions);
		$sql = "SELECT m.*,p.max_education,mf.* FROM {$member->table_prefix}members m  LEFT JOIN {$member->table_prefix}personals p ON p.member_id=m.id LEFT JOIN {$member->table_prefix}memberfields mf ON mf.member_id=m.id ".$member->getCondition()."{$orderby}".$member->getLimitOffset()."";
	}else{
		$sql = "SELECT * FROM {$member->table_prefix}members m ".$member->getCondition()."{$orderby}".$member->getLimitOffset()."";
	}
	if(empty($smarty->blockvars[$param_count])) {
		$smarty->blockvars[$param_count] = $member->GetArray($sql);
		if(!$smarty->blockvars[$param_count]) return $repeat = false;
	}
	if(list($key, $item) = each($smarty->blockvars[$param_count])) {
		$repeat = true;
		$image_type = isset($params['imagetype'])?trim($params['imagetype']):"small";
		$item['thumb'] = $item['src'] = (empty($item['photo']))?pb_get_attachmenturl('', '', $image_type):pb_get_attachmenturl($item['photo'], '', $image_type);
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