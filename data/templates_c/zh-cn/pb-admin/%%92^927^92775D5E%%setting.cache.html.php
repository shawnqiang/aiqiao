<?php /* Smarty version 2.6.18, created on 2012-01-01 06:02:48
         compiled from setting.cache.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_radios', 'setting.cache.html', 14, false),array('modifier', 'default', 'setting.cache.html', 14, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_setting_global']; ?>
 &raquo; <?php echo $this->_tpl_vars['_cache_setting']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_cache_setting']; ?>
</h3> 
</div>
<div class="info"> 
  <form action="setting.php" method="post" id="EditFrm" name="edit_frm">
  <input type="hidden" name="do" value="functions">
    <table class="infoTable">
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_main_page_static_cache']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><?php echo smarty_function_html_radios(array('name' => "data[setting][main_cache]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['MAIN_CACHE'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)),'separator' => ""), $this);?>
</td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_business_office_data']; ?>
 <?php echo $this->_tpl_vars['_caches']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><?php echo smarty_function_html_radios(array('name' => "data[setting][office_cache]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['OFFICE_CACHE'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)),'separator' => ""), $this);?>
</td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_enterprise_spatial_data']; ?>
 <?php echo $this->_tpl_vars['_caches']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><?php echo smarty_function_html_radios(array('name' => "data[setting][space_cache]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['SPACE_CACHE'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)),'separator' => ""), $this);?>
</td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_tag_data']; ?>
 <?php echo $this->_tpl_vars['_caches']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><?php echo smarty_function_html_radios(array('name' => "data[setting][label_cache]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['LABEL_CACHE'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)),'separator' => ""), $this);?>
</td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_caches']; ?>
 <?php echo $this->_tpl_vars['_times']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><input name="data[setting][main_cache_lifetime]" type="text" id="DateFormat" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['MAIN_CACHE_LIFETIME'])) ? $this->_run_mod_handler('default', true, $_tmp, 3600) : smarty_modifier_default($_tmp, 3600)); ?>
"/>
          <span class="gray"><?php echo $this->_tpl_vars['_seconds_the_default_is_3600_seconds']; ?>
</span></td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_check_if_the_template_changes']; ?>
</th>
        <td class="paddingT15 wordSpacing5">
		<?php echo smarty_function_html_radios(array('name' => "data[setting][main_cache_check]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['MAIN_CACHE_CHECK'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)),'separator' => ""), $this);?>

		<span class="gray"><?php echo $this->_tpl_vars['_if_enabled_will_automatically_update_the_cache']; ?>
</span></td>
      </tr>
      <tr>
        <th></th>
        <td class="ptb20">
			<input class="formbtn" type="submit" name="save_cache" value="<?php echo $this->_tpl_vars['_save_setting']; ?>
" />		</td>
      </tr>
    </table>
  </form>
</div> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>