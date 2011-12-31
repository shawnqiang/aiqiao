<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2090 $
 */
function smarty_function_get_cache($params, &$smarty) {
	$op = null;
	extract($params);
	if (isset($name)){
		switch ($name) {
			case "language":
				global $_PB_CACHE;
				$languages = unserialize($_PB_CACHE['setting']['languages']);
				if (!empty($languages)) {
					foreach ($languages as $lang_key=>$lang_val) {
						$tmp="<a href='".URL.'redirect.php?url='.pb_getenv("PHP_SELF")."&app_lang=".$lang_key."'>";
						if(!empty($lang_val['img'])){
							$tmp.="<img src='".$lang_val['img']."' alt='".$lang_val['title']."' />";
						}else{
							$tmp.=$lang_val['title'];
						}
						$tmp.="</a>";
						if ($title_li=="list") {
							$op.="<li>".$tmp."</li>";
						}else{
							$op.=$tmp;
						}
					}
				}
				break;
			case "nav":
				require(CACHE_LANG_PATH."cache_nav.php");
				$navs = $_PB_CACHE['nav']['navs'];
				foreach ($navs as $nav) {
					$op.= '<li id="mn_'.$nav['id'].'" class="nav_item nav-item-'.$nav['id'].'';
					$file_name = pb_getenv('REQUEST_URI');
					if (strpos($file_name, $nav['url'])!==false && $nav['url']!='index.php') {
						$op.=' current_nav_item';
					}
					$op.='">'.$nav['link'].'</li>';
				}
				break;
			default:
				if (is_file(CACHE_LANG_PATH."cache_".$name.".php")) {
					require(CACHE_LANG_PATH."cache_".$name.".php");
				}
				
				if (empty($var)) {
					$var = "item";
				}
				$smarty->assign($var, $_PB_CACHE);
				unset($_PB_CACHE);
				break;
		}
	}
	return $op;
}
?>