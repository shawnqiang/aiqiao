<?php
/*
 * Smarty plugin
 * -------------------------------------------------------------
 * Type:     modifier
 * Name:     truncate
 * Purpose:  Truncate a string to a certain length if necessary,
 *           optionally splitting in the middle of a word, and 
 *           appending the $etc string.
 * Update:   change substr to msubstr and add fun msubstr.so it
 *           can bu used in chinese charset.
 * -------------------------------------------------------------
 */
function smarty_modifier_truncate_multi($string, $length = 80, $etc = '...',
                                  $break_words = false)
{
    if ($length == 0) return '';
    if(function_exists("mb_strlen")){
	    if (mb_strlen($string,'utf-8') > $length) {
	        $length -= min($length, mb_strlen($etc,'utf-8'));
	        if (!$break_words && !$middle) {
	            $string = preg_replace('/\s+?(\S+)?$/', '', mb_substr($string, 0, $length+1,'utf-8'));
	        }
	        if(!$middle) {
	            return mb_substr($string, 0, $length,'utf-8') . $etc;
	        } else {
	            return mb_substr($string, 0, $length/2,'utf-8') . $etc . mb_substr($string, -$length/2,'utf-8');
	        }
	    } else {
	        return $string;
	    }
    }else{
    	require("modifier.truncate.php");
    	return smarty_modifier_truncate($string, $length, $etc,$break_words);
    }
}

/* vim: set expandtab: */


?>
