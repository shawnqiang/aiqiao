<?php
class Tag extends PbController {
	var $name = "Tag";

	function rewrite($id)
	{
		$url = null;
		global $rewrite_able;
		if ($rewrite_able) {
			$url = "tag/".rawurlencode($title)."/";
		}else{
			$url = "offer/list.php?do=search&q=".rawurlencode($title);
		}
		return $url;
	}	
}
?>