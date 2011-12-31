<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2195 $
 */
class Segments
{
	var $use_split_search = false;
	
	function Segments()
	{
		
	}
	
	function Split($str)
	{
		global $charset, $app_lang;
		if (empty($str) || !$this->use_split_search) {
			return false;
		}
		if (in_array($charset, array('gbk', 'gb2312'))) {
			require_once(APP_PATH."locale/zh-cn/cn_split_word.php");
			$sp = new CnSplitWord();
			$result = $sp->SplitRMM($str);
			$sp->Clear();
			if (!empty($result)) {
				$return = explode(" ", $result);
				foreach($return   as   $key=>$val){
					if(empty($return[$key]))
					unset($return[$key]);
				}
			}
		}else{
			//$return = explode(" ", $str);
			$return = false;
		}
		return $return;
	}
}//End Class
?>