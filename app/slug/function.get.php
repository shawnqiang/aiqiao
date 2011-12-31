<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2214 $
 */
function smarty_function_get($params, &$smarty)
{
	extract($params);
	global $tb_prefix, $pdb;
	if (empty($var)) {
		$var = "item";
	}
	//depth
	if (class_exists("Industries")) {
		$industry = new Industries();
		$obj_controller = new Industry();
	}else{
		uses("industry");
		$industry = new Industries();
		$obj_controller = new Industry();
	}
	switch ($from) {
		case "market":
			$num = 4;
			if (isset($params['row'])) {
				$num = intval($params['row']);
			}
			$latest_commend_markets = $industry->GetArray("SELECT * FROM ".$tb_prefix."markets WHERE if_commend='1' AND status='1' AND picture!='' ORDER BY id DESC LIMIT ".$num);
			$urls = $infos = $images = array();
			if (!empty($latest_commend_markets)) {
				while (list($key, $val) = each($latest_commend_markets)) {
					$urls[] = $industry->getPermaLink($val['id'], null, 'market');
					$infos[] = $val['name'];
					$images[] = pb_get_attachmenturl($val['picture'], '', $size);
				}
				$items['url'] = implode("|", $urls);
				$items['info'] = implode("|", $infos);
				$items['image'] = implode("|", $images);
				$return = $items;
			}
			break;
		case "area":
			if (class_exists("Areas")) {
				$area = new Areas();
			}else{
				uses("area");
				$area = new Areas();
			}
			$return = $area->getLevelAreas();
			break;
		case "industry":
			$return = $industry->getCacheIndustry();
			break;
		case "type":
			if(!empty($name)){
				$name = $obj_controller->pluralize($name);
				$industry->findIt($name);
				$return = $industry->params['data'][1];
				if (isset($multi)) {
					$return = $obj_controller->flatten_array($return);
				}
				if (empty($var)) {
					$var = "Items";
				}
			}
			break;
		default:
			$return = cache_read($name, $key);
			break;
	}
	if (!empty($sql)) {
		//replace table prefix
		$pdb->setFetchMode(ADODB_FETCH_ASSOC);
		$sql = str_replace("pb_", $tb_prefix, $sql);
		//for secure
		if (eregi('insert|update|delete|union|into|load_file|outfile|replace', $sql)) {
			trigger_error('no supported sql.');
		}
		//mysql_escape_string()
		$return = $industry->GetArray($sql);
	}
	$smarty->assign($var, $return);
	unset($return, $from, $item);
}
?>