<?php /* Smarty version 2.6.18, created on 2012-01-01 06:02:09
         compiled from setting.functions.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_radios', 'setting.functions.html', 18, false),array('modifier', 'default', 'setting.functions.html', 18, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_setting_global']; ?>
 &raquo; <?php echo $this->_tpl_vars['_functions']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_functions']; ?>
</h3> 
	<ul class="subnav">
		<li><a class="btn1" href="setting.php?do=functions"><span><?php echo $this->_tpl_vars['_static_optimization']; ?>
</span></a></li>
		<li><a href="setting.php?do=attach"><?php echo $this->_tpl_vars['_attachment']; ?>
<?php echo $this->_tpl_vars['_setting']; ?>
</a></li>
	</ul>
</div>
<div class="info"> 
  <form action="setting.php" method="post" id="EditFrm" name="edit_frm">
  <input type="hidden" name="do" value="functions">
    <table class="infoTable">
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_top_domain_support']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><?php echo smarty_function_html_radios(array('name' => "data[topleveldomain_support]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['topleveldomain_support'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)),'separator' => ""), $this);?>
</td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_sub_domain_support']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><?php echo smarty_function_html_radios(array('name' => "data[subdomain_support]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['subdomain_support'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)),'separator' => ""), $this);?>

		<span id="divDataSubdomain">&nbsp;<input name="data[subdomain]" type="text" id="subdomain" value="<?php echo $this->_tpl_vars['item']['subdomain']; ?>
" class="infoTableInput" />
          <span class="gray"><?php echo $this->_tpl_vars['_fill_in_the_sub_domain_name_suffix']; ?>
</span></span></td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_static_url']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><?php echo smarty_function_html_radios(array('name' => "data[rewrite_able]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['rewrite_able'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)),'separator' => ""), $this);?>
</td>
      </tr>
      <tr>
        <th></th>
        <td class="ptb20">
			<input class="formbtn" type="submit" name="save_functions" value="<?php echo $this->_tpl_vars['_save_setting']; ?>
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