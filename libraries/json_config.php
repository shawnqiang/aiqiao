<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2233 $
 */
require(PHPB2B_ROOT. "libraries/JSON.php");
// Future-friendly json_encode
if( !function_exists('json_encode') ) {
    function json_encode($data) {
        $json = new Services_JSON();
        return( $json->encode($data) );
    }
}
// Future-friendly json_decode
if( !function_exists('json_decode') )
{
	function json_decode($data, $output_mode=false) {
		$param = $output_mode ? 16:null;
		$json = new Services_JSON($param);
		return( $json->decode($data) );
	}
}


/**
 * return to ajax for the executed result
 *
 * @param Array $data
 */
if( !function_exists('ajax_exit') ){
function ajax_exit($data)
{
	echo trim(json_encode($data));
	exit;
}
}

//file.name.ext, returns file.name
function get_pathinfo($file) { 
    if (defined('PATHINFO_FILENAME')) {
		return pathinfo($file);
	}
    if (strstr($file, '.')) return array('filename'=>substr($file,0,strrpos($file,'.')), 'extension'=>end(explode(".", $file)));
}
?>
