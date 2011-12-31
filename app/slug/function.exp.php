<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2075 $
 */
function smarty_function_exp($params, &$smarty){
	extract($params);
	$return = '';
	if (empty($sep)) {
		$sep = ",";
	}
	if (!empty($vars)) {
		if (!empty($data)) {
			$tmp = explode(",", $vars);
			foreach ($tmp as $key=>$val){
				$return[] = $data[$val];
			}
			$return = implode($sep, $return);
		}
	}
	return $return;
}
?>