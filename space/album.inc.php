<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2048 $
 */
if(!defined('IN_PHPB2B')) exit('Not A Valid Entry Point');
uses("album");
$album = new Albums();
$joins[] = "LEFT JOIN {$tb_prefix}attachments a ON a.id=Album.attachment_id";
$result = $album->findAll("a.title,a.description,Album.id,a.attachment as thumb", $joins, "Album.member_id='".$member->info['id']."'", "Album.id desc");
if (!empty($result)) {
	$count = count($result);
	for($i=0; $i<$count; $i++){
		$result[$i]['image'] = URL. pb_get_attachmenturl($result[$i]['thumb'], '', 'small');
		$result[$i]['middleimage'] = URL. pb_get_attachmenturl($result[$i]['thumb']);
	}
}
setvar("Items", $result);
$space->render("album");
?>