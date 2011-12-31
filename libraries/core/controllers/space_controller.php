<?php
class Space extends PbController {
	var $name = "Space";
	var $menu = null;
	var $links;
	var $member_id;
	var $company_id;
	var $base_url;
	var $skins_dir;
	
	function Space()
	{
	}
	
	function rewrite($userid, $id = 0, $do = null)
	{
		//get other params, such as do,action func_args
		global $subdomain_support, $topleveldomain_support, $rewrite_able;
		$userid = rawurlencode($userid);
		if (!empty($id)) {
			$url = URL."space/?id=".$id."&do=".$do;
		}else{
			$url = ($rewrite_able)? URL."space/".$userid."/".((!empty($do))?$do."/":""):URL."space/?userid=".$userid."&do=".$do;
		}
		if($subdomain_support && $rewrite_able){
			$url = "http://".$userid.$subdomain_support."/".((!empty($do))?$do."/":"");
		}
		return $url;
	}
	
	function setLinks($memberid, $companyid = 0)
	{
		$_this =& Spaces::getInstance();
		$this->links = $_this->getSpaceLinks($memberid, $companyid = 0);
	}
	
	function getLinks()
	{
		return $this->links;
	}
	
	function rewriteDetail($module, $id = 0)
	{
		global $rewrite_able;
		if ($rewrite_able) {
			switch ($module) {
				case "product":
					$url = URL.$module."/detail/".$id.".html";
					break;
				case "offer":
					$url = URL.$module."/detail/".$id.".html";
					break;
				default:
					$url = $this->base_url.$module."/detail-".$id.".html";
					break;
			}
		}else{
			switch ($module) {
				case "product":
					$url = URL.$module."/detail.php?id=".$id;
					break;
				case "offer":
					$url = URL.$module."/detail.php?id=".$id;
					break;
				default:
					$url = $this->base_url."&do={$module}&nid=".$id;
					break;
			}			
		}
		return $url;
	}
	
	function rewriteList($module, $additionalParams = null)
	{
		global $rewrite_able;
		if ($rewrite_able) {
			return $this->base_url.$module."/list-0-1.html";
		}else{
			return $this->base_url;
		}
	}

	function setMenu($user_id, $space_actions){
		global $subdomain_support, $rewrite_able;
		$tmp_menus = array();
		$user_id = rawurlencode($user_id);
		if($subdomain_support && $rewrite_able){
			$this->base_url = "http://".$user_id.$subdomain_support."/space/";
			foreach ($space_actions as $key=>$val) {
				if($val=="index" || $val=="home"){
					$tmp_menus[$val] = "http://".$user_id.$subdomain_support."/";
				}else{
					$tmp_menus[$val] = "http://".$user_id.$subdomain_support."/space/".$val.".html";
				}
			}
		}elseif($rewrite_able){
			$this->base_url = URL."space/{$user_id}/";
			foreach ($space_actions as $key=>$val) {
				if($val=="index" || $val=="home"){
					$tmp_menus[$val] = URL."space/".$user_id."/";
				}else{
					$tmp_menus[$val] = URL."space/".$user_id."/".$val."/";
				}
			}
		}else{
			$this->base_url = URL."space/?userid=".$user_id;
			foreach ($space_actions as $key=>$val) {
				$tmp_menus[$val] = URL."space/?do=".$val."&userid=".$user_id;
			}
		}
		$this->menu = $tmp_menus;
	}

	function setBaseUrlByUserId($user_id, $space_actions){
		global $subdomain_support, $rewrite_able;
		$user_id = rawurlencode($user_id);
		if($subdomain_support && $rewrite_able){
			$this->base_url = "http://".$user_id.$subdomain_support."/space/";
		}elseif($rewrite_able){
			$this->base_url = URL."space/".$user_id."/";
		}else{
			$this->base_url = URL."space/?userid=".$user_id;
		}
		return $this->base_url;
	}

	function getMenu(){
		return $this->menu;
	}
	
	function render($tpl_file, $ext = ".html")
	{
		global $smarty, $skin_path;
		if(!file_exists($smarty->template_dir.$skin_path.DS.$tpl_file.$ext)){
			$smarty->template_dir = PHPB2B_ROOT ."skins".DS."default".DS;
		}else{
			$smarty->template_dir = PHPB2B_ROOT ."skins".DS.$skin_path.DS;
		}
		$smarty->display("{$tpl_file}{$ext}");
	}
}
?>