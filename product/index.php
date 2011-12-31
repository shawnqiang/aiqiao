<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2048 $
 */
define('CURSCRIPT', 'index');
require("../libraries/common.inc.php");
require("../share.inc.php");
require(CACHE_PATH. "cache_industry.php");
require(CACHE_PATH. 'cache_type.php');
$index_latest_industry_ids = 10;
$data = array();
uses("product","industry");
$product = new Products();
$industry = new Industries();
$ProductSorts = $_PB_CACHE['productsort'];
$result = $product->GetArray($sql = "SELECT distinct industry_id AS iid FROM {$tb_prefix}products WHERE status=1 ORDER BY id DESC LIMIT 0,{$index_latest_industry_ids}");
if (!empty($result)) {
	foreach ($result as $key=>$val) {
		$data[$val['iid']]['id'] = $val['iid'];
		if(isset($_PB_CACHE['industry'][1][$val['iid']])) $data[$val['iid']]['name'] = $_PB_CACHE['industry'][1][$val['iid']];
		$tmp_result = $pdb->GetArray("SELECT id,name,picture,sort_id,industry_id FROM {$tb_prefix}products WHERE status=1 AND industry_id=".$val['iid']." ORDER BY id DESC LIMIT 0,5");
		if (!empty($tmp_result)) {
			foreach ($tmp_result as $key1=>$val1) {
				$data[$val['iid']]['sub'][$val1['id']]['id'] = $val1['id'];
				$data[$val['iid']]['sub'][$val1['id']]['name'] = $val1['name'];
				$data[$val['iid']]['sub'][$val1['id']]['sort'] = $ProductSorts[$val1['sort_id']];
				$data[$val['iid']]['sub'][$val1['id']]['image'] = pb_get_attachmenturl($val1['picture'], '', 'small');
			}
		}
	}
	setvar("IndustryProducts", $data);
}
render("product/index");
?>