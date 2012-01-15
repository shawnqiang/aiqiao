<?php /* Smarty version 2.6.18, created on 2012-01-01 06:13:50
         compiled from payment.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strip_tags', 'payment.html', 33, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_setting_global']; ?>
 &raquo; <?php echo $this->_tpl_vars['_payment_method']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_payment_method']; ?>
</h3> 
    <ul class="subnav">
		<li><a class="btn1" href="payment.php"><span><?php echo $this->_tpl_vars['_management']; ?>
</span></a></li>
		<?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
		<?php if ($this->_tpl_vars['item']['available']): ?>
        <li><a href="payment.php?do=edit&entry=<?php echo $this->_tpl_vars['item']['name']; ?>
&id=<?php echo $this->_tpl_vars['item']['id']; ?>
<?php echo $this->_tpl_vars['addParams']; ?>
" title="<?php echo $this->_tpl_vars['_setting']; ?>
<?php echo $this->_tpl_vars['item']['title']; ?>
"><?php echo $this->_tpl_vars['item']['title']; ?>
</a></li>
		<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
    </ul>
</div>
<div class="mrightTop"> 
    <div class="fontl"><?php echo $this->_tpl_vars['_to_install_or_uninstall_operation_tip']; ?>
</div> 
    <div class="fontr"></div> 
</div> 
<div class="tdare">
  <form name="list_frm" id="ListFrm" action="" method="post">
  <table width="100%" cellspacing="0" class="dataTable" summary="<?php echo $this->_tpl_vars['_data_zone']; ?>
">
    <thead>
		<tr>
		  <th class="firstCell"><input type="checkbox" name="idAll" id="idAll" onclick="pbCheckAll(this,'id[]');" title="<?php echo $this->_tpl_vars['_select_switch']; ?>
"></th>
		  <th><label for="idAll"><?php echo $this->_tpl_vars['_naming']; ?>
</label></th>
		  <th><?php echo $this->_tpl_vars['_setup']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_action']; ?>
</th>
		</tr>
    </thead>
    <tbody>
		<?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
		<tr class="tatr2" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['description'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
">
		  <td class="firstCell"><input type="checkbox" <?php if (! $this->_tpl_vars['item']['id']): ?>disabled="disabled"<?php endif; ?> name="id[]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" onclick="pbCheckItem(this,'idAll');" id="item_<?php echo $this->_tpl_vars['item']['id']; ?>
" title="<?php echo $this->_tpl_vars['item']['id']; ?>
"></td>
		  <td><strong><?php echo $this->_tpl_vars['item']['title']; ?>
</strong><br><small><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['description'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
</small></td>
		  <td><input type="checkbox" name="" <?php if ($this->_tpl_vars['item']['available']): ?>checked<?php endif; ?>></td>
		  <td class="handler">
          <ul id="handler_icon">
            <?php if ($this->_tpl_vars['item']['available'] || $this->_tpl_vars['item']['id']): ?>
             <li><a class="btn_browse"  href="<?php echo $this->_tpl_vars['SiteUrl']; ?>
purchase.php?do=pay&pay_method=<?php echo $this->_tpl_vars['item']['name']; ?>
" target="_blank" title="<?php echo $this->_tpl_vars['_test']; ?>
"><?php echo $this->_tpl_vars['_preview']; ?>
</a></li>
            <li><a class="btn_edit" href="payment.php?do=edit&entry=<?php echo $this->_tpl_vars['item']['name']; ?>
&id=<?php echo $this->_tpl_vars['item']['id']; ?>
<?php echo $this->_tpl_vars['addParams']; ?>
" title="<?php echo $this->_tpl_vars['_edit']; ?>
"><?php echo $this->_tpl_vars['_edit']; ?>
</a></li>
             <li><a class="btn_uninstall" href="payment.php?do=uninstall&id=<?php echo $this->_tpl_vars['item']['id']; ?>
<?php echo $this->_tpl_vars['addParams']; ?>
" title="<?php echo $this->_tpl_vars['_uninstall']; ?>
"><?php echo $this->_tpl_vars['_uninstall']; ?>
</a></li>
             <?php else: ?>
            <li><a class="btn_install" href="payment.php?entry=<?php echo $this->_tpl_vars['item']['name']; ?>
&do=install<?php echo $this->_tpl_vars['addParams']; ?>
" title="<?php echo $this->_tpl_vars['_install']; ?>
"><?php echo $this->_tpl_vars['_install']; ?>
</a></li>
            <?php endif; ?>
          </ul>  
		</td>
		</tr>
		<?php endforeach; else: ?>
		<tr class="no_data info">
		  <td colspan="4"><?php echo $this->_tpl_vars['_no_datas']; ?>
</td>
		</tr>
		<?php endif; unset($_from); ?>
    </tbody>
	</table>
	<div id="dataFuncs" title="<?php echo $this->_tpl_vars['_action_zone']; ?>
">
    <div class="left paddingT15" id="batchAction">
    </div>
    <div class="pageLinks"><?php echo $this->_tpl_vars['ByPages']; ?>
</div>
    <div class="clear"/>
    </div>
	</form>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>