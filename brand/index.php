<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2048 $
 */
define('CURSCRIPT', 'brand');
chdir('../');
require("libraries/common.inc.php");
require("share.inc.php");
uses("brand", "brandtype");
$brand = new Brands();
$brandtype = new Brandtypes();
//get cats
$latest_brands = $pdb->GetArray("SELECT DISTINCT type_id FROM ".$tb_prefix."brands");
if (!empty($latest_brands)) {
	while (list($key, $item) = each($latest_brands)) {
		$sql = "select id,name,picture from ".$tb_prefix."brands where type_id=".$item['type_id']." order by id desc limit 7";
		$latest_brands[$key]['brands'] = $pdb->GetArray($sql);
	}
}
setvar("LatestBrands", $latest_brands);
render("brand/index");
?>