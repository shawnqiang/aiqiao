<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2048 $
 */
define('CURSCRIPT', 'quote');
require("../libraries/common.inc.php");
require("../share.inc.php");
uses("quote");
$quote = new Quotes();
$condition = null;
$conditions = array();
$tpl_file = "market/quote";
$viewhelper->setTitle(L("price_quotes", "tpl"));
$viewhelper->setPosition(L("price_quotes", "tpl"), "market/quote.php");
if (isset($_GET['id'])) {
	$id = intval($_GET['id']);
}
if (isset($_GET['action'])) {
	$action = trim($_GET['action']);
	switch ($action) {
		case "data":
			if (!empty($_GET['type'])) {
				$type = trim($_GET['type']);
				if ($type=="price") {
					$info = $pdb->GetRow("SELECT * FROM ".$tb_prefix."productprices WHERE id=".$id);
					$time_limit = strtotime("-1 month");
					if (!empty($info)) {
						$result = $pdb->GetArray("SELECT FROM_UNIXTIME(created, '%m-%d') AS pubdate,price from ".$tb_prefix."productprices WHERE product_id=".intval($info['product_id'])." AND created>=".$time_limit);
						foreach ($result as $key=>$val) {
							$xy_data['x'][] = $val['pubdate'];
							$xy_data['y'][] = $val['price'];
						}
						setvar("title", $info['title']);
						setvar("trend_x", $xy_data['x']);
						setvar("trend_y", $xy_data['y']);
						setvar("x_label", $info['title']);
					}
				}
			}else{
				$info = $pdb->GetRow("SELECT * FROM ".$tb_prefix."quotes WHERE id=".$id);
				if (!empty($info['trend_data'])) {
					$xy_data = unserialize($info['trend_data']);
					setvar("title", $info['title']);
					setvar("trend_x", $xy_data['x']);
					setvar("trend_y", $xy_data['y']);
				}
			}
			header('Content-type: text/xml');
			echo pack("C3",0xef,0xbb,0xbf);
			$op = $smarty->fetch($theme_name."/elements/charts/line.html", null, null, true);
			exit;
			break;
		case "chart":
			if (empty($id)) {
				flash("pls_input_product_name", "market/quote.php");
			}
			$info = $pdb->GetRow("SELECT * FROM ".$tb_prefix."quotes WHERE id=".$id);
			$pdb->Execute("UPDATE ".$tb_prefix."quotes SET hits=hits+1 WHERE id=".$id);
			$info['pubdate'] = df($info['created']);
			$info['clicked'] = $info['hits'];
			//neighbour
			$neighbour_info = $quote->getNeighbour($id, "id,title");
			if (!empty($neighbour_info['prev'])) {
				$info['prev_link'] = "<a href='".$quote->getPermaLink($neighbour_info['prev']['id'], 'market/quote.php?action=chart')."'>".$neighbour_info['prev']['title']."</a>";
				$info['prev_title'] = $neighbour_info['prev']['title'];
			}else{
				$info['prev_link'] = L("nothing", "tpl");
			}
			if (!empty($neighbour_info['next'])) {
				$info['next_link'] = "<a href='".$quote->getPermaLink($neighbour_info['next']['id'], 'market/quote.php?action=chart')."'>".$neighbour_info['next']['title']."</a>";
				$info['next_title'] = $neighbour_info['next']['title'];
			}else{
				$info['next_link'] = L("nothing", "tpl");
			}
			setvar("item", $info);
			$tpl_file = "detail.default";
			render($tpl_file, true);
			break;
		case "search":
			if (!empty($_GET['title'])) {
				$conditions[] = "title LIKE '%".pb_addslashes($_GET['title'])."%'";
			}
			break;
		default:
			break;
	}
}
if (isset($_GET['catid'])) {
	$type_id = intval($_GET['catid']);
	$conditions[] = "Quote.type_id='".$type_id."'";
	$viewhelper->setTitle("The industry ".$type_id);
}
$quote->setCondition($conditions);
$amount = $quote->findCount(null, $conditions);
$fields = "Quote.*,Quote.created AS pubdate,ROUND((Quote.min_price+Quote.max_price)/2,2) AS price";
$result = $quote->findAll($fields, $joins, $conditions,"Quote.id DESC",$pos,$limit);
setvar("items", $result);
uaAssign(array("QuoteSearchFrom"=>date("Y-m-d", strtotime("last month")), "QuoteSearchTo"=>date("Y-m-d")));
setvar("paging", array('total'=>$amount));
render($tpl_file);
?>