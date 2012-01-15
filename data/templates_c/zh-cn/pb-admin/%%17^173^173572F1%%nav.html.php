<?php /* Smarty version 2.6.18, created on 2012-01-01 06:12:27
         compiled from nav.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'nav.html', 39, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_templet']; ?>
 &raquo; <?php echo $this->_tpl_vars['_nav']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_nav']; ?>
</h3> 
    <ul class="subnav">
		<li><a class="btn1" href="nav.php"><span><?php echo $this->_tpl_vars['_management']; ?>
</span></a></li>
        <li><a href="nav.php?do=edit"><?php echo $this->_tpl_vars['_add_or_edit']; ?>
</a></li>
    </ul>
</div>
<div class="tdare">
  <form name="list_frm" id="ListFrm" action="nav.php" method="post">
  <table width="100%" cellspacing="0" class="dataTable" summary="<?php echo $this->_tpl_vars['_data_zone']; ?>
">
    <thead>
		<tr>
		  <th class="firstCell"><input type="checkbox" name="idAll" id="idAll" onclick="pbCheckAll(this,'id[]');" title="<?php echo $this->_tpl_vars['_select_switch']; ?>
"></th>
		  <th><label for="idAll"><?php echo $this->_tpl_vars['_naming']; ?>
</label></th>
		  <th><?php echo $this->_tpl_vars['_preview']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_link_url']; ?>
</th>
		  <th>nav_id</th>
		  <th><?php echo $this->_tpl_vars['_whether_or']; ?>
<?php echo $this->_tpl_vars['_show_it']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_display_order']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_action']; ?>
</th>
		</tr>
    </thead>
    <tbody>
		<?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
		<tr class="tatr2">
		  <td class="firstCell">
          <input type="checkbox" name="id[]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" onclick="pbCheckItem(this,'idAll');" id="item_<?php echo $this->_tpl_vars['item']['id']; ?>
" title="<?php echo $this->_tpl_vars['item']['id']; ?>
">
          <input type="hidden" name="nid[]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" />
          </td>
		  <td><label for="item_<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['name']; ?>
</label></td>
		  <td><?php echo $this->_tpl_vars['item']['title']; ?>
</td>
		  <td><?php echo $this->_tpl_vars['item']['url']; ?>
</td>
		  <td><h3><?php echo $this->_tpl_vars['item']['id']; ?>
</h3></td>
		  <td><select name="status[]">
			<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['AskAction'],'selected' => $this->_tpl_vars['item']['status']), $this);?>

		  </select></td>
		  <td><input type="text" name="display_order[]" style="width:35px; text-align:center" value="<?php echo $this->_tpl_vars['item']['display_order']; ?>
" /></td>
		  <td class="handler">
           <ul id="handler_icon">
            <li><a class="btn_edit" href="nav.php?do=edit&id=<?php echo $this->_tpl_vars['item']['id']; ?>
<?php echo $this->_tpl_vars['addParams']; ?>
" title="<?php echo $this->_tpl_vars['_edit']; ?>
"><?php echo $this->_tpl_vars['_edit']; ?>
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
      <input type="submit" name="update_prior" value="<?php echo $this->_tpl_vars['_updating']; ?>
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