<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2048 $
 */
if(!defined('IN_PHPB2B')) exit('Not A Valid Entry Point');
uses("product");
$product = new Products();
$tpl_file = "product";
$conditions = null;
$conditions[] = "Product.status=1 AND Product.company_id='".$company->info['id']."'";
if (isset($_GET['typeid'])) {
	$conditions[]= "producttype_id=".intval($_GET['typeid']);
}
if (isset($_GET['new']) && $_GET['new'] == 1) {
	$conditions[]= "ifnew=1";
}
$amount = $product->findCount(null, $conditions,"id");
setvar("paging", array('total'=>$amount));
$space->render($tpl_file);
?>