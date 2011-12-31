<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2075 $
 */
function smarty_function_the_time($params){
	extract($params);
	$now_time = time();
//	$show_time = $the_time;
	$show_time = $timestamp;
	$dur = $now_time - $show_time;
	if($dur < 60){
		echo $dur.'秒前';
	}else{
		if($dur < 3600){
			echo floor($dur/60).'分钟前';
		}else{
			if($dur < 86400){
				echo floor($dur/3600).'小时前';
			}else{
				if($dur < 259200){
					echo floor($dur/86400).'天前';
				}else{
					echo $the_time;
				}
			}
		}
	}
}
?>