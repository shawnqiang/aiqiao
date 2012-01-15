<?php /* Smarty version 2.6.18, created on 2012-01-01 06:07:00
         compiled from membergroup.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'membergroup.html', 72, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_member_center']; ?>
 &raquo; <?php echo $this->_tpl_vars['_membergroup']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_membergroup']; ?>
</h3> 
    <ul class="subnav">
		<li><a href="membergroup.php" id="all"><span><?php echo $this->_tpl_vars['_the_all']; ?>
 <?php echo $this->_tpl_vars['_membergroup']; ?>
</span></a></li>
        <li><a href="membergroup.php?type=system" id="system"><?php echo $this->_tpl_vars['_system']; ?>
 <?php echo $this->_tpl_vars['_membergroup']; ?>
</a></li>
        <li><a href="membergroup.php?type=define" id="define"><?php echo $this->_tpl_vars['_customize']; ?>
 <?php echo $this->_tpl_vars['_membergroup']; ?>
</a></li>
        <li><a href="membergroup.php?type=special" id="special"><?php echo $this->_tpl_vars['_special']; ?>
 <?php echo $this->_tpl_vars['_membergroup']; ?>
</a></li>
        <li><a href="membergroup.php?do=edit" id="edit"><?php echo $this->_tpl_vars['_add_or_edit']; ?>
</a></li>
        <li><a href="membergroup.php?do=permission" id="permission"><?php echo $this->_tpl_vars['_permissions']; ?>
</a></li>
    </ul>
</div>
<div class="mrightTop"> 
    <div class="fontl">
             <div class="left"><?php echo $this->_tpl_vars['_custom_membership_groups']; ?>
</div>
    </div> 
    <div class="fontr"></div> 
</div> 
<div class="tdare">
  <form name="list_frm" id="ListFrm" action="" method="post">
  <table width="100%" cellspacing="0" class="dataTable" summary="<?php echo $this->_tpl_vars['_data_zone']; ?>
">
    <thead>
		<tr>
		  <th class="firstCell"><input type="checkbox" name="idAll" id="idAll" onclick="pbCheckAll(this,'gid[]');" title="<?php echo $this->_tpl_vars['_select_switch']; ?>
"></th>
		  <th><label for="idAll"><?php echo $this->_tpl_vars['_naming']; ?>
</label></th>
		  <th><?php echo $this->_tpl_vars['_default']; ?>
</th>
		  <?php if ($this->_tpl_vars['MembergroupType'] == 'system'): ?><th><?php echo $this->_tpl_vars['_integral_between']; ?>
</th><?php endif; ?>
		  <th><?php echo $this->_tpl_vars['_screenshot']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_action']; ?>
</th>
		</tr>
    </thead>
    <tbody>
		<?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['membergroup'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['membergroup']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['membergroup']['iteration']++;
?>
		<tr class="tatr2">
		  <td class="firstCell">
          <input type="checkbox" name="gid[]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" onclick="pbCheckItem(this,'idAll');" id="item_<?php echo $this->_tpl_vars['item']['id']; ?>
" title="<?php echo $this->_tpl_vars['item']['id']; ?>
">
          <input type="hidden" name="id[]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" title="<?php echo $this->_tpl_vars['item']['id']; ?>
">
          </td>
		  <td><label for="item_<?php echo $this->_tpl_vars['item']['id']; ?>
"><input type="text" name="name[]" value="<?php echo $this->_tpl_vars['item']['name']; ?>
" id="dataMembergroupName<?php echo $this->_tpl_vars['item']['id']; ?>
" /></label></td>
		  <td><?php if ($this->_tpl_vars['item']['is_default'] == 1): ?><img src="images/right.gif" /><?php endif; ?></td>
		  <?php if ($this->_tpl_vars['MembergroupType'] == 'system'): ?><td><input type="text" name="point_min[]" size="5" value="<?php echo $this->_tpl_vars['item']['point_min']; ?>
" /> ~ <input type="text" name="point_max[]" size="5" value="<?php echo $this->_tpl_vars['item']['point_max']; ?>
" disabled="disabled" /></td><?php endif; ?>
		  <td><input type="text" name="picture[]" value="<?php echo $this->_tpl_vars['item']['avatar']; ?>
" class="infoTableInput" />&nbsp;<img src="<?php echo $this->_tpl_vars['item']['image']; ?>
" border="0" alt="<?php echo $this->_tpl_vars['item']['name']; ?>
" /></td>
		  <td class="handler">
              <ul id="handler_icon">
                <li><a class="btn_delete" href="membergroup.php?do=del&id=<?php echo $this->_tpl_vars['item']['id']; ?>
" title="<?php echo $this->_tpl_vars['_delete']; ?>
"><?php echo $this->_tpl_vars['_delete']; ?>
</a></li>
                <li><a class="btn_edit" href="membergroup.php?do=edit&id=<?php echo $this->_tpl_vars['item']['id']; ?>
" title="<?php echo $this->_tpl_vars['_edit']; ?>
" ><?php echo $this->_tpl_vars['_edit']; ?>
</a></li>
              </ul>
		 </td>
		</tr>
		<?php endforeach; else: ?>
		<tr class="no_data info">
		  <td colspan="6"><?php echo $this->_tpl_vars['_no_datas']; ?>
</td>
		</tr>
		<?php endif; unset($_from); ?>
    </tbody>
	</table>
	<div id="dataFuncs" title="<?php echo $this->_tpl_vars['_action_zone']; ?>
">
    <div class="left paddingT15" id="batchAction">
		<input type="submit" name="save_data" value="<?php echo $this->_tpl_vars['_save']; ?>
" class="formbtn batchButton"/>
		<input type="submit" name="del" value="<?php echo $this->_tpl_vars['_delete']; ?>
" class="formbtn batchButton"/>
		<input type="submit" name="updateDefault" value="<?php echo $this->_tpl_vars['_setting']; ?>
<?php echo $this->_tpl_vars['_default']; ?>
" class="formbtn batchButton"/>
    </div>
    <div class="pageLinks"/>
    <div class="clear"/>
    </div>
	</form>
</div>
<script>
var selected = "<?php echo ((is_array($_tmp=@$_GET['type'])) ? $this->_run_mod_handler('default', true, $_tmp, 'all') : smarty_modifier_default($_tmp, 'all')); ?>
";
</script>
<?php echo '
<script>
$(function(){
	if($("#"+selected).length>0){
		$("#"+selected).addClass("btn1");
	}
});
</script>
'; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>