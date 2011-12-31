<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2214 $
 */
function smarty_block_offer($params, $content, &$smarty, &$repeat) {
	global $_PB_CACHE;
	$conditions[] = "t.status='1'";
	$param_count = count($smarty->_tag_stack);
	if(empty($params['name'])) $params['name'] = "offer";
	if (!class_exists("Trades")) {
		uses("trade");
		$trade = new Trades();
		$trade_controller = new Trade();
	}else{
	    $trade = new Trades();
	    $trade_controller = new Trade();
	}
	if ($_PB_CACHE['setting']['offer_expire_method']) {
		switch ($_PB_CACHE['setting']['offer_expire_method']) {
			case "2":
				$conditions[] = "t.expire_time>".$trade->timestamp;
				break;
			case "3":
				$conditions[] = "t.expire_time>".$trade->timestamp;
				break;
			default:
				break;
		}
	}
	if (isset($params['type'])) {
		$type = explode(",", $params['type']);
		$type = array_unique($type);
		foreach ($type as $val) {
			switch ($val) {
				case 'image':
					$conditions[] = "t.picture!=''";
					break;
				case 'urgent':
					$conditions[] = "t.if_urgent='1'";
					break;
				case 'company':
					$conditions[] = "t.company_id>0";
					break;
				case 'commend':
					$conditions[] = "t.if_commend>0";
					break;
				default:
					break;
			}
		}
	}
	if (isset($params['industryid'])) {
		if (isset($params['depth'])) {
			$depth = intval($params['depth']);
			if ($depth) {
				if (class_exists("Industries")) {
					$industry = new Industries();
					$industry_controller = new Industry();
				}else{
					uses("industry");
					$industry = new Industries();
					$industry_controller = new Industry();
				}
				$ids_s = $industry->getConditionIds($params['industryid']);
				if (is_array($ids_s)) {
					$ids_s = array_filter($ids_s);
					$conditions['industry'] = "t.industry_id IN (".implode(",", $ids_s).")";
				}else{
					$conditions['industry'] = "t.industry_id='".$ids_s."'";
				}
			}
		}else{
			$conditions[] = "t.industry_id = '".$params['industryid']."'";
		}
	}
	if (isset($params['areaid'])) {
		if (isset($params['depth'])) {
			$depth = intval($params['depth']);
			if ($depth) {
				global $industry;
				$ids_s = $industry->getConditionIds($params['areaid']);
				if (is_array($ids_s)) {
					$ids_s = array_filter($ids_s);
					$conditions['area'] = "t.area_id IN (".implode(",", $ids_s).")";
				}else{
					$conditions['area'] = "t.area_id='".$ids_s."'";
				}
			}
		}else{
			$conditions['area'] = "t.area_id = '".$params['areaid']."'";
		}
	}
	if (!empty($_GET['industryid'])) {
		global $industry;
		if (!isset($industry)) {
			require_once(LIB_PATH. "core/models/industry.php");
			$industry = new Industries();
		}
		$ids_s = $industry->getSubDatas($_GET['industryid']);
		if (is_array($ids_s)) {
			$ids_s = array_keys($ids_s);
			$conditions['industry'] = "t.industry_id IN (".implode(",", $ids_s).")";
		}else{
			$conditions['industry'] = "t.industry_id=".intval($_GET['industryid']);
		}
	}
	if (!empty($_GET['areaid'])) {
		global $area;
		if (!isset($area)) {
			require_once(LIB_PATH. "core/models/area.php");
			$area = new Areas();
		}
		$ids_s = $area->getSubDatas($_GET['areaid']);
		if (is_array($ids_s)) {
			$ids_s = array_keys($ids_s);
			$conditions['area'] = "t.area_id IN (".implode(",", $ids_s).")";
		}else{
			$conditions['area'] = "t.area_id=".intval($_GET['areaid']);
		}
	}
	if (isset($params['exclude'])) $conditions[] = $trade->getExcludeIds($params['exclude']);
	if (isset($params['include'])) $conditions[] = $trade->getIncludeIds($params['include']);
	if (isset($params['country_id'])) $conditions[] = "t.country_id='".$params['country_id']."'";
	if(isset($params['expday'])) $conditions[] = "t.expire_time<'".($params['expday']*86400+$trade->timestamp)."'";
	if(isset($params['subday'])) $conditions[] = "t.submit_time>'".($trade->timestamp-$params['expireday']*86400)."'";
	if (isset($params['typeid'])) {
		if(!empty($params['typeid'])){
			if (strpos($params['typeid'], ",")>0) {
				$tmp_ids = explode(",", $params['typeid']);
				$conditions[] = "t.type_id in ('".implode("','", $tmp_ids)."')";
			}else{
				$conditions[] = "t.type_id='".$params['typeid']."'";
			}
		}
	}
	if (isset($params['urgent'])) $conditions[] = "t.if_urgent='1'";
	if (!empty($params['memberid'])) $conditions[] = "t.member_id='".$params['memberid']."'";
	if (!empty($params['companyid'])) $conditions[] = "t.company_id='".$params['companyid']."'";
	if (isset($params['cash'])) $conditions[] = "t.require_point>0";
	$trade->setCondition($conditions);
	$orderby = null;
	$orderby = (isset($params['orderby']))?" ORDER BY ".trim($params['orderby'])." ":" ORDER BY modified DESC";
	$limit = $offset = 0;
	if (isset($params['row'])) {
		$limit = $params['row'];
	}
	if (isset($params['start'])) {
		$offset = $params['start'];
	}
	if (isset($_GET['pos'])) {
		$offset = intval($_GET['pos']);
	}
	$trade->setLimitOffset($offset, $limit);
	$mysql_limit = $trade->getLimitOffset();
	if (isset($params['limit'])) {
		$mysql_limit = " ".trim($params['limit']);
	}
	if (!$params['recursive']) {
		$sql = "SELECT *,title as name,title as fulltitle,content as fullcontent FROM {$trade->table_prefix}trades t ".$trade->getCondition()."{$orderby}".$mysql_limit;
	}else{
		$sql = "SELECT *,content as fullcontent FROM {$trade->table_prefix}trades t ".$trade->getCondition()." ORDER BY t.display_order ASC,t.id DESC".$mysql_limit;
		
	}
	$offer_typenames = $trade_controller->getTradeTypes();
	if(empty($smarty->blockvars[$param_count])) {
		$smarty->blockvars[$param_count] = $trade->GetArray($sql);
		if(!$smarty->blockvars[$param_count]) return $repeat = false;
	}
	if (!function_exists("smarty_function_the_url")) {
		require("function.the_url.php");
	}
	if(list($key, $item) = each($smarty->blockvars[$param_count])) {
		$repeat = true;
		$item['rownum'] = $key;
		$item['iteration'] = ++$key;
		$url = smarty_function_the_url(array("id"=>$item['id'], "typeid"=>$item['type_id'], "module"=>"offer"));
		$item['url'] = $url;
		$item['title'] = strip_tags($item['title']);
		$item['content'] = strip_tags($item['content']);
		if (isset($params['titlelen'])) $item['title'] = mb_substr($item['title'], 0, $params['titlelen']);
		if (isset($params['infolen'])) $item['content'] = mb_substr($item['content'], 0, $params['infolen']);
		if (isset($params['titlestart'])) $item['title'] = $params['titlestart'].$item['title'];
		$item['pubdate'] = df($item['submit_time']);
		$item['typeid'] = $item['type_id'];
		$item['typename'] = $offer_typenames[$item['type_id']];
		$item['src'] = $item['thumb'] = URL."attachment/".$item['picture'].".small.jpg";
		$item['link'] = '<a title="'.$item['fulltitle'].'" href="'.$url.'">'.$item['title'].'</a>';
		$item['style'] = parse_highlight($item['highlight']);
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