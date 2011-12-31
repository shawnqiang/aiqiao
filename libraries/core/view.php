<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2218 $
 */
if (!class_exists("Multibytes")) {
	require(LIB_PATH. "multibyte.class.php");
}
class PbView extends PbObject
{
	var $admin_dir = 'pb-admin';
	var $office_dir = 'virtual-office';
	var $homepage_file_name = "index.php";
	var $titles = array();
	var $pageTitle = null;
	var $url_container = null;
	var $webroot;
	var $here = null;
	var $position = array();
	var $addParams;
	var $metaKeyword;
	var $metaDescription;
	var $caching = false;
	var $colorarray = array('#000000', '#FF0000', '#FFA500', '#FFFF00', '#008000', '#00FFFF', '#0000FF', '#800080', '#808080');

	function PbView(){
		global $_PB_CACHE;
		if (!empty($_REQUEST['page'])) {
			$this->addParams = "&page=".intval($_REQUEST['page']);
		}
		$this->setPosition($_PB_CACHE['setting']['site_name'], URL."index.php");
	}
	
	function setMetaDescription($meta_description)
	{
		$this->metaDescription = mb_substr(pb_strip_spaces(strip_tags($meta_description)), 0, 100);
	}
	
	function setMetaKeyword($meta_keyword)
	{
		$this->metaKeyword = strip_tags(str_replace(array(" "), ",", $meta_keyword));
	}	

    function setTitle($title, $image = 0)
    {
    	$this->titles[] = $title.($image?"[".L('have_picture', 'tpl')."]":null);
    }

    function getTitle($seperate = ' - ', $auto_site_title = true)
    {
        $pageTitle = null;
    	krsort($this->titles);
    	$pageTitle = implode($seperate, $this->titles);
    	if (strpos($pageTitle, $seperate) == 0) {
    		;
    	}
    	if ($auto_site_title) {
    		$pageTitle.=$seperate.$GLOBALS['_PB_CACHE']['setting']['site_title'];
    	}
    	$this->pageTitle = $pageTitle;
    	return $pageTitle;
    }
    
	function bread_compare($a, $b){
	    if ($a['displayorder'] == $b['displayorder']) return 0;
	    return ($a['displayorder'] < $b['displayorder']) ? -1 : 1;
	}
	
	function queryString($q, $extra = array(), $escape = false) {
		if (empty($q) && empty($extra)) {
			return null;
		}
		$join = '&';
		if ($escape === true) {
			$join = '&amp;';
		}
		$out = '';
	
		if (is_array($q)) {
			$q = array_merge($extra, $q);
		} else {
			$out = $q;
			$q = $extra;
		}
		$out .= http_build_query($q, null, $join);
		if (isset($out[0]) && $out[0] != '?') {
			$out = '?' . $out;
		}
		return $out;
	}

    function setPosition($title, $url = null, $displayorder = 0, $additonalParams = array())
    {
        $this->position[] = array('displayorder'=>$displayorder, 'title'=>$title, 'url'=>$url, 'params'=>$additonalParams);
    }

    function getPosition($seperate = ' &raquo; ', $show_last = false)
    {
    	$position = array();
    	$current_position = null;
    	$positions = $this->position;
        if (!empty($positions)) {
	        foreach ($positions as $key=>$val){
	            if(!empty($val['url'])) {
	                if(isset($val['params'])) $position[] = "<a href='".$val['url'].$this->queryString($val['params'])."' target='_self' title='".$val['title']."'>".$val['title']."</a>";
	                else $position[] = "<a href='".$val['url']."' target='_self' title='".$val['title']."'>".$val['title']."</a>";
	            }else {
	                $position[] = $val['title'];
	            }
	        }
	        $heres = implode($seperate, $position);
	        $current_position = "<em>".L("your_current_position", "tpl")."</em>".$heres;
	        $this->here = $current_position;
	        if ($show_last) {
	        	$this->here.=$seperate;
	        }
        }
        if (empty($this->metaDescription)) {
        	$this->metaDescription = strip_tags(end($position));
        }
        return $this->here;
    }
	
	function redirect($url, $type=301)
	{
		if ($type == 301) header("HTTP/1.1 301 Moved Permanently");
		header("Location: $url");
		echo 'This page has moved to <a href="'.$url.'">'.$url.'</a>';
		exit();
	}
}
?>