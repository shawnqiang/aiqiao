<?php /* Smarty version 2.6.18, created on 2012-01-01 06:13:38
         compiled from passport.set.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_radios', 'passport.set.html', 23, false),array('modifier', 'default', 'passport.set.html', 23, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_setting_global']; ?>
 &raquo; <?php echo $this->_tpl_vars['_passport']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_passport']; ?>
</h3> 
    <ul class="subnav">
		<li><a href="passport.php"><?php echo $this->_tpl_vars['_management']; ?>
</span></li>
		<li><a class="btn1" href="passport.php?do=set"><span><?php echo $this->_tpl_vars['_basic_setting']; ?>
</span></a></li>
		<?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
		<?php if ($this->_tpl_vars['item']['available']): ?>
        <li><a class="btn_edit" href="passport.php?do=edit&entry=<?php echo $this->_tpl_vars['item']['name']; ?>
&id=<?php echo $this->_tpl_vars['item']['id']; ?>
<?php echo $this->_tpl_vars['addParams']; ?>
" title="<?php echo $this->_tpl_vars['_edit']; ?>
"><?php echo $this->_tpl_vars['item']['title']; ?>
</a></li>
		<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
    </ul>
</div>
<div class="info">
  <form action="passport.php" method="post" id="EditFrm" name="edit_frm">
  <input type="hidden" name="do" value="setting">
    <table class="infoTable">
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_if_valid']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><?php echo smarty_function_html_radios(array('name' => "data[setting][passport_support]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['passport_support'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)),'separator' => ""), $this);?>
</td>
      </tr>
      <tr>
        <th></th>
        <td class="ptb20">
			<input class="formbtn" type="submit" name="save_passport" value="<?php echo $this->_tpl_vars['_save_setting']; ?>
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