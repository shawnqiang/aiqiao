<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2075 $
 */
function smarty_function_plugin($params){
	global $pdb, $tb_prefix, $smarty;
	extract($params);
	if (isset($name)) {
		$plugin_vars = $pdb->GetRow("SELECT id,pluginvar FROM {$tb_prefix}plugins WHERE available=1 AND name='{$name}'");
		if (!empty($plugin_vars)) {
			$plugin_var = unserialize($plugin_vars['pluginvar']);
			extract($plugin_var);
			$smarty->assign($plugin_var);
		}else{
			return;
		}
		$pb_plugin_name = $name;
		if (!class_exists("Plugin")) {
			uses("plugin");
			$plugin = new Plugin($pb_plugin_name);
		}else{
			$plugin = new Plugin($pb_plugin_name);
		}
		include($plugin->plugin_path.$plugin->plugin_name.'/'.$plugin->plugin_name.'.php');
	}
}
?>