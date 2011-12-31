<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2048 $
 */
if(!defined('IN_PHPB2B')) exit('Not A Valid Entry Point');
uses("job","typeoption");
$job = new Jobs();
$conditions = "Job.status=1 AND company_id=".$company->info['id'];
if (isset($_GET['nid'])) {
	$id = intval(($_GET['nid']));
	if ($id) {
		$info = $job->read("*", $id, null, $conditions);
		if (empty($info)) {
			flash('data_not_exists', null, 0);
		}
		$sql = "UPDATE {$tb_prefix}jobs SET clicked=clicked+1 WHERE id=".$id." AND status=1 AND company_id='".$company->info['id']."'";
		$pdb->Execute($sql);
		$tpl_file = "job_detail";
		setvar("item",$info);
		$space->render($tpl_file);
		exit;
	}
}
$amount = $job->findCount(null, $conditions,"id");
setvar("paging", array('total'=>$amount));
$space->render("job");
?>