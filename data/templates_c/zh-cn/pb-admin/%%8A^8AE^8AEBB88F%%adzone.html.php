<?php /* Smarty version 2.6.18, created on 2012-01-01 06:08:20
         compiled from adzone.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'adzone.html', 37, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_ads']; ?>
 &raquo; <?php echo $this->_tpl_vars['_adzone']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_adzone']; ?>
</h3> 
    <ul class="subnav">
		<li><a class="btn1"><span><?php echo $this->_tpl_vars['_management']; ?>
</span></a></li>
        <li><a href="adzone.php?do=edit"><?php echo $this->_tpl_vars['_add_or_edit']; ?>
</a></li>
    </ul>
</div>
<div class="mrightTop"> 
    <div class="fontl"><?php echo $this->_tpl_vars['_what_is_adzone']; ?>
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
		  <th><?php echo $this->_tpl_vars['_serial_number']; ?>
</th>
		  <th><label for="idAll"><?php echo $this->_tpl_vars['_adzone']; ?>
</label></th>
		  <th><?php echo $this->_tpl_vars['_advertisement']; ?>
 <?php echo $this->_tpl_vars['_record_amount']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_maximum']; ?>
 <?php echo $this->_tpl_vars['_width']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_maximum']; ?>
 <?php echo $this->_tpl_vars['_height']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_calling_code']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_action']; ?>
</th>
		</tr>
    </thead>
    <tbody>
		<?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['adzone'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['adzone']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['adzone']['iteration']++;
?>
		<tr class="tatr2">
		  <td class="firstCell"><input type="checkbox" name="id[]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" onclick="pbCheckItem(this,'idAll');" id="item_<?php echo $this->_tpl_vars['item']['id']; ?>
" title="<?php echo $this->_tpl_vars['item']['id']; ?>
"></td>
		  <td><?php echo $this->_tpl_vars['item']['id']; ?>
</td>
		  <td><label for="item_<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['name']; ?>
</label></td>
		  <td><a href="ad.php?do=search&adzone_id=<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['numbers'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
</a></td>
		  <td><?php echo $this->_tpl_vars['item']['width']; ?>
</td>
		  <td><?php echo $this->_tpl_vars['item']['height']; ?>
</td>
		  <td><a href="<?php echo $_SERVER['PHP_SELF']; ?>
?do=makejs&id=<?php echo $this->_tpl_vars['item']['id']; ?>
" title="<?php echo $this->_tpl_vars['_make_javascript_code']; ?>
"><img src="images/export.gif" border="0" /></a></td>
		  <td class="handler">
           <ul id="handler_icon">
            <li><a class="btn_delete" href="adzone.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
&do=del<?php echo $this->_tpl_vars['addParams']; ?>
"  title="<?php echo $this->_tpl_vars['_delete']; ?>
"><?php echo $this->_tpl_vars['_delete']; ?>
</a></li>
            <li><a class="btn_edit" href="adzone.php?do=edit&id=<?php echo $this->_tpl_vars['item']['id']; ?>
<?php echo $this->_tpl_vars['addParams']; ?>
" title="<?php echo $this->_tpl_vars['_edit']; ?>
"><?php echo $this->_tpl_vars['_edit']; ?>
</a></li>
            <li><a class="btn_add" href="ad.php?do=edit&adzone_id=<?php echo $this->_tpl_vars['item']['id']; ?>
<?php echo $this->_tpl_vars['addParams']; ?>
" title="<?php echo $this->_tpl_vars['_add_ads']; ?>
"><?php echo $this->_tpl_vars['_add']; ?>
</a></li>
          </ul> 
       </td>
		  
		</tr>
		<?php endforeach; else: ?>
		<tr class="no_data info">
		  <td colspan="8"><?php echo $this->_tpl_vars['_no_datas']; ?>
</td>
		</tr>
		<?php endif; unset($_from); ?>
    </tbody>
	</table>
	<div id="dataFuncs" title="<?php echo $this->_tpl_vars['_action_zone']; ?>
">
    <div class="left paddingT15" id="batchAction">
      <input type="submit" name="del" value="<?php echo $this->_tpl_vars['_delete']; ?>
" class="formbtn batchButton"/>
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