<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2048 $
 */
if(!defined('IN_PHPB2B')) exit('Not A Valid Entry Point');
uses("trade", "tradefield");
$trade = new Trades();
$trade_controller = new Trade();
$conditions = array();
$conditions[]= "Trade.status=1";
if (!empty($member->info['id'])) {
	$conditions[] = "Trade.member_id='".$member->info['id']."'";
}
if (!empty($company->info['id'])) {
	$conditions[] = "Trade.company_id='".$company->info['id']."'";
}
$amount = $trade->findCount(null, $conditions,"Trade.id");
setvar("TradeTypes", $tradetypes = $trade_controller->getTradeTypes());
setvar("TradeNames", $tradenames = $trade_controller->getTradeTypeNames());
setvar("paging", array('total'=>$amount));
$space->render("offer");
?>