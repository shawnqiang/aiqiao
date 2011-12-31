<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2053 $
 */
function smarty_function_the_map($params){
	extract($params);
	global $company;
	$longti = $lati = $width = $height = 0;
	$longti = "39.908682835132836";
	$lati = "116.39748573303222";
	if (!empty($company->info['map_latitude']) && !empty($company->info['map_longitude'])) {
		$longti = $company->info['map_longitude'];
		$lati = $company->info['map_latitude'];
	}
	if(!empty($params['longti'])) $longti = $params['longti'];
	if(!empty($params['lati'])) $lati = $params['lati'];
	$width = (!empty($params['width']))?str_replace("px", "", $params['width'])."px":"500px";
	$height = (!empty($params['height']))?str_replace("px", "", $params['height'])."px":"300px";
	$op = '<script type="text/javascript" src="'.URL.'/scripts/googlemap.js"></script>
<script type="text/javascript" src="'.URL.'scripts/map_init.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  	buildMap();
  	pressEnter();
});
</script>
<input type="hidden" name="mapaddress" id="address" value="'.$longti.','.$lati.'"/>
<DIV id="mainmap" style="width:'.$width.';height:'.$height.';border:1px solid #000;"></DIV>';
	return $op;
}
?>