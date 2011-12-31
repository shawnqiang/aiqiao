<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2075 $
 */
define('CURSCRIPT', 'rss');
require("libraries/common.inc.php");
require("share.inc.php");
uses("setting");
$setting = new Settings();
include_once(PHPB2B_ROOT. 'libraries/feedcreator.class.php');
$rss = new UniversalFeedCreator();
$rss->useCached();
$rss->title = $_PB_CACHE['setting']['site_name'];
$rss->description = $setting->getValue("site_description");
$rss->link = URL;
$rss->syndicationURL = URL."rss.php";

//announce
$announce = $pdb->GetArray("SELECT * FROM {$tb_prefix}announcements ORDER BY display_order ASC,id DESC LIMIT 0,5");
if (!empty($announce)) {
	foreach ($announce as $key=>$val) {
		$item = new FeedItem(); 
	    $item->title = $val['subject']; 
	    $item->link = URL."announce.php?id=".$val['id']; 
	    $item->description = $val['message']; 
	    $item->date = $val['created']; 
	    $item->source = URL."announce.php?id=".$val['id']; 
	    $item->author = $_PB_CACHE['setting']['company_name'];   
	    $rss->addItem($item);
	}
}

$image = new FeedImage();
$image->title = $_PB_CACHE['setting']['site_banner_word'];
$image->url = URL."images/logo.gif";
$image->link = URL;
$image->description = $rss->description;
$rss->image = $image;
$rss->saveFeed("RSS1.0", "data/appcache/rss.xml");
?>