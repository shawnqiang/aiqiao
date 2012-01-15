<?php /* Smarty version 2.6.18, created on 2012-01-01 06:14:28
         compiled from payment.setting.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'payment.setting.html', 3, false),array('function', 'html_radios', 'payment.setting.html', 34, false),array('function', 'editor', 'payment.setting.html', 55, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_system_tools']; ?>
 &raquo; <?php echo $this->_tpl_vars['_pay_method']; ?>
 &raquo; <?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['item']['name']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['item']['name'])); ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_pay_method']; ?>
</h3> 
    <ul class="subnav">
		<li><a href="payment.php"><?php echo $this->_tpl_vars['_management']; ?>
</a></li>
        <li><a class="btn1"><span><?php echo $this->_tpl_vars['_add_or_edit']; ?>
</span></a></li>
    </ul>
</div>
<div class="info">
  <form action="payment.php" method="post" id="EditFrm" name="edit_frm">
  <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>
">
  <input type="hidden" name="data[payment][name]" id="paymentName" value="<?php echo $_GET['entry']; ?>
">
    <table class="infoTable">
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_naming_n']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><?php echo $this->_tpl_vars['item']['name']; ?>
</td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_the_title']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5">          
		<input class="infoTableInput2" name="data[payment][title]" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['item']['name']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['item']['name'])); ?>
" /><label class="field_notice"><?php echo $this->_tpl_vars['_title_display']; ?>
</label></td>
      </tr>
      
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_description_n']; ?>
</th>
        <td class="paddingT15 wordSpacing5">
        <textarea style="width:550px;height:50px;" name="data[payment][description]"><?php echo $this->_tpl_vars['item']['description']; ?>
</textarea>        </td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_whether_or']; ?>
<?php echo $this->_tpl_vars['_setup']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><?php echo smarty_function_html_radios(array('name' => "data[payment][available]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['available'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1)),'separator' => ""), $this);?>
</td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_support']; ?>
 <?php echo $this->_tpl_vars['_online_payment']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><?php echo smarty_function_html_radios(array('name' => "data[payment][if_online_support]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['if_online_support'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1)),'separator' => ""), $this);?>
</td>
      </tr>
	  <?php $_from = $this->_tpl_vars['module_configs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['config']):
?>
	  <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['config']['title']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5">          
		<input name="data[config][<?php echo $this->_tpl_vars['config']['name']; ?>
]" value="<?php echo $this->_tpl_vars['config']['value']; ?>
" /></td>
      </tr>
	  <?php endforeach; endif; unset($_from); ?>
      <tr>
        <th></th>
        <td class="ptb20">
			<input class="formbtn" type="submit" name="save" value="<?php echo $this->_tpl_vars['_save']; ?>
" />		</td>
      </tr>
    </table>
  </form>
</div>
<?php echo smarty_function_editor(array('type' => 'tiny_mce'), $this);?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>