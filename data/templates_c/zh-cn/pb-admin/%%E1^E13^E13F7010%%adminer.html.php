<?php /* Smarty version 2.6.18, created on 2012-01-01 06:07:19
         compiled from adminer.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'adminer.html', 47, false),array('function', 'iplocation', 'adminer.html', 48, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_member_center']; ?>
 &raquo; <?php echo $this->_tpl_vars['_administrator']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_administrator']; ?>
</h3> 
    <ul class="subnav">
		<li><a class="btn1" href="adminer.php"><span><?php echo $this->_tpl_vars['_administrator']; ?>
</span></a></li>
		<li><a href="adminer.php?do=edit"><?php echo $this->_tpl_vars['_add_or_edit']; ?>
</a></li>
		<li><a href="adminer.php?do=admingroup"><?php echo $this->_tpl_vars['_admingroup']; ?>
</a></li>
        <li><a href="adminer.php?do=password"><?php echo $this->_tpl_vars['_change_pass']; ?>
</a></li>
    </ul>
</div>
<div class="mrightTop"> 
    <div class="fontr"> 
        <form name="search_frm" id="SearchFrm" method="get">
        <input type="hidden" name="do" value="search" />
             <div>
				<?php echo $this->_tpl_vars['_cp_username_n']; ?>
<input class="queryInput" type="text" name="q" value="<?php echo $_GET['q']; ?>
" /> 
                <input type="submit" id="Search" class="formbtn" value="<?php echo $this->_tpl_vars['_searching']; ?>
" /> 
            </div> 
        </form> 
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
		  <th><label for="idAll"><?php echo $this->_tpl_vars['_cp_login']; ?>
 <?php echo $this->_tpl_vars['_cp_username']; ?>
</label></th>
		  <th><?php echo $this->_tpl_vars['_naming']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_admingroup']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_last_login_time']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_last_ip_address']; ?>
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
		  <td class="firstCell"><?php if ($this->_tpl_vars['AdministratorId'] != $this->_tpl_vars['item']['member_id']): ?><input type="checkbox" name="id[]" value="<?php echo $this->_tpl_vars['item']['member_id']; ?>
" onclick="pbCheckItem(this,'idAll');" id="item_<?php echo $this->_tpl_vars['item']['member_id']; ?>
" title="<?php echo $this->_tpl_vars['item']['member_id']; ?>
"><?php endif; ?></td>
		  <td><label for="item_<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['username']; ?>
</label></td>
		  <td><?php echo $this->_tpl_vars['item']['first_name']; ?>
<?php echo $this->_tpl_vars['item']['last_name']; ?>
</td>
		  <td><?php echo $this->_tpl_vars['item']['groupname']; ?>
</td>
		  <td><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['last_login'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>
		  <td><?php echo $this->_tpl_vars['item']['last_ip']; ?>
<?php echo smarty_function_iplocation(array('ip' => ($this->_tpl_vars['item']['last_ip'])), $this);?>
</td>
		  <td class="handler">
           <ul id="handler_icon">
            <?php if ($this->_tpl_vars['AdministratorId'] != $this->_tpl_vars['item']['member_id']): ?><li><a class="btn_delete" href="adminer.php?id=<?php echo $this->_tpl_vars['item']['member_id']; ?>
&do=del<?php echo $this->_tpl_vars['addParams']; ?>
" title="<?php echo $this->_tpl_vars['_delete']; ?>
"><?php echo $this->_tpl_vars['_delete']; ?>
</a></li><?php endif; ?>
            <li><a class="btn_edit" href="adminer.php?do=edit&id=<?php echo $this->_tpl_vars['item']['member_id']; ?>
<?php echo $this->_tpl_vars['addParams']; ?>
" title="<?php echo $this->_tpl_vars['_edit']; ?>
"><?php echo $this->_tpl_vars['_edit']; ?>
</a></li>
          </ul>  
		 </td>
		</tr>
		<?php endforeach; else: ?>
		<tr class="no_data info">
		  <td colspan="7"><?php echo $this->_tpl_vars['_no_datas']; ?>
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