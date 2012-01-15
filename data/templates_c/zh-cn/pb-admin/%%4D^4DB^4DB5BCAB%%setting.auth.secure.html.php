<?php /* Smarty version 2.6.18, created on 2012-01-01 06:03:03
         compiled from setting.auth.secure.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_radios', 'setting.auth.secure.html', 21, false),array('modifier', 'default', 'setting.auth.secure.html', 21, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_setting_global']; ?>
 &raquo; <?php echo $this->_tpl_vars['_secure_auth']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_secure_auth']; ?>
</h3> 
    <ul class="subnav">
        <li><a href="setting.php?do=secure" class="btn1"><span><?php echo $this->_tpl_vars['_security']; ?>
</span></a></li>
		<li><a href="setting.php?do=auth"><?php echo $this->_tpl_vars['_auth_key_n']; ?>
</a></li>
    </ul>
</div>
<div class="info"> 
    <form method="post" action="setting.php" name="edit_frm"> 
        <table class="infoTable"> 
         	<tr> 
                <th class="paddingT15"><?php echo $this->_tpl_vars['_website']; ?>
 <?php echo $this->_tpl_vars['_security_key']; ?>
</th> 
              	<td class="paddingT15 wordSpacing5"><input name="data[setting][auth_key]" value="<?php echo $this->_tpl_vars['item']['AUTH_KEY']; ?>
" /><label class="field_notice"><?php echo $this->_tpl_vars['_used_to_identify_the_site_as_a_unique_string']; ?>
</label></td> 
          	</tr> 
			<tr> 
                <th class="paddingT15"><?php echo $this->_tpl_vars['_visitors']; ?>
 <?php echo $this->_tpl_vars['_allow_the_release']; ?>
<?php echo $this->_tpl_vars['_offer']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th> 
       			<td class="paddingT15 wordSpacing5"><?php echo smarty_function_html_radios(array('name' => "data[setting][vis_post]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['VIS_POST'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)),'separator' => ""), $this);?>
</td> 
          	</tr> 
			<tr> 
                <th class="paddingT15"><?php echo $this->_tpl_vars['_tags']; ?>
 <?php echo $this->_tpl_vars['_verify']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th> 
       			<td class="paddingT15 wordSpacing5"><?php echo smarty_function_html_radios(array('name' => "data[setting][tag_check]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['TAG_CHECK'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1)),'separator' => ""), $this);?>
</td> 
          	</tr> 
			<tr> 
                <th class="paddingT15"><?php echo $this->_tpl_vars['_guest_post_trade']; ?>
 <?php echo $this->_tpl_vars['_verify']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th> 
       			<td class="paddingT15 wordSpacing5"><?php echo smarty_function_html_radios(array('name' => "data[setting][vis_post_check]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['VIS_POST_CHECK'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1)),'separator' => ""), $this);?>
</td> 
          	</tr> 
			<tr> 
                <th class="paddingT15"><?php echo $this->_tpl_vars['_open']; ?>
 <?php echo $this->_tpl_vars['_sell']; ?>
 <?php echo $this->_tpl_vars['_information']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th> 
       			<td class="paddingT15 wordSpacing5"><?php echo smarty_function_html_radios(array('name' => "data[setting][sell_logincheck]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['SELL_LOGINCHECK'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1)),'separator' => ""), $this);?>
</td> 
          	</tr> 
			<tr> 
                <th class="paddingT15"><?php echo $this->_tpl_vars['_open']; ?>
 <?php echo $this->_tpl_vars['_buy']; ?>
 <?php echo $this->_tpl_vars['_information']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th> 
       			<td class="paddingT15 wordSpacing5"><?php echo smarty_function_html_radios(array('name' => "data[setting][buy_logincheck]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['BUY_LOGINCHECK'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1)),'separator' => ""), $this);?>
</td> 
          	</tr> 
			<tr> 
                <th class="paddingT15"><?php echo $this->_tpl_vars['_open']; ?>
 <?php echo $this->_tpl_vars['_company']; ?>
 <?php echo $this->_tpl_vars['_information']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th> 
       			<td class="paddingT15 wordSpacing5"><?php echo smarty_function_html_radios(array('name' => "data[setting][company_logincheck]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['COMPANY_LOGINCHECK'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1)),'separator' => ""), $this);?>
</td> 
          	</tr> 
            <tr> 
            <th></th> 
            <td class="ptb20"> 
                <input class="formbtn" type="submit" name="save_auth_secure" value="<?php echo $this->_tpl_vars['_submit']; ?>
" /> 
            </td> 
        </tr> 
        </table> 
    </form> 
</div> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>