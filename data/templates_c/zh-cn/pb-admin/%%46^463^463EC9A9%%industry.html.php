<?php /* Smarty version 2.6.18, created on 2012-01-01 06:03:11
         compiled from industry.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'sprintf', 'industry.html', 18, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_setting_global']; ?>
 &raquo; <?php echo $this->_tpl_vars['_industry']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_industry']; ?>
</h3> 
    <ul class="subnav">
		<li><a class="btn1" href="industry.php"><span><?php echo $this->_tpl_vars['_management']; ?>
</span></a></li>
        <li><a href="industry.php?do=edit"><?php echo $this->_tpl_vars['_add_or_edit']; ?>
</a></li>
        <li><a href="industrytype.php"><?php echo $this->_tpl_vars['_sorts']; ?>
</a></li>
        <li><a href="industry.php?do=clear"><?php echo $this->_tpl_vars['_clearing']; ?>
</a></li>
        <li><a href="industry.php?do=refresh"><?php echo $this->_tpl_vars['_update_cache']; ?>
</a></li>
    </ul>
</div>
<div class="mrightTop"> 
	<div class="fontl">
		<?php $_from = $this->_tpl_vars['LevelStats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['stat_item']):
?>
		<span><a href="<?php echo $_SERVER['PHP_SELF']; ?>
?do=search&level=<?php echo $this->_tpl_vars['stat_item']['level']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['_type_levels'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, $this->_tpl_vars['stat_item']['level']) : sprintf($_tmp, $this->_tpl_vars['stat_item']['level'])); ?>
</a><em>(<?php echo $this->_tpl_vars['stat_item']['amount']; ?>
)</em></span>
		<?php endforeach; endif; unset($_from); ?>
	</div>
    <div class="fontr"> 
        <form name="search_frm" id="SearchFrm" method="get"> 
        <input type="hidden" name="do" value="search" />
             <div> 
				<?php echo $this->_tpl_vars['_category_keyword']; ?>
 : <input class="queryInput" type="text" name="name" value="" /> 
                <input type="submit" name="search" id="Search" class="formbtn" value="<?php echo $this->_tpl_vars['_searching']; ?>
" /> 
            </div> 
        </form> 
    </div> 
    <div class="fontr"></div> 
</div> 
<div class="tdare">
  <form name="list_frm" id="ListFrm" action="industry.php" method="post">
  <table width="100%" cellspacing="0" class="dataTable" summary="<?php echo $this->_tpl_vars['_data_zone']; ?>
">
    <thead>
		<tr>
		  <th class="firstCell"><input type="checkbox" name="idAll" id="idAll" onclick="pbCheckAll(this,'id[]');" title="<?php echo $this->_tpl_vars['_select_switch']; ?>
"></th>
		  <th><label for="idAll"><?php echo $this->_tpl_vars['_naming']; ?>
</label></th>
		  <th><?php echo $this->_tpl_vars['_show_status']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_display_order']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_grade_sample']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_sorts']; ?>
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
		  <td class="firstCell"><input type="checkbox" name="id[]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" onclick="pbCheckItem(this,'idAll');" id="item_<?php echo $this->_tpl_vars['item']['id']; ?>
" title="<?php echo $this->_tpl_vars['item']['id']; ?>
">
		  <input type="hidden" name="iid[]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" />
		  </td>
		  <td><input type="text" name="data[iname][]" value="<?php echo $this->_tpl_vars['item']['name']; ?>
"></td>
		  <td><?php if ($this->_tpl_vars['item']['available'] == 1): ?><img src="images/right.gif" border=0 /><?php else: ?><img src="images/e_error.gif" border=0 /><?php endif; ?></td>
		  <td><input type="text" name="data[display_order][]" value="<?php echo $this->_tpl_vars['item']['display_order']; ?>
"></td>
		  <td><?php echo $this->_tpl_vars['item']['title']; ?>
</td>
		  <td><a title="<?php echo $this->_tpl_vars['Types'][$this->_tpl_vars['item']['industrytype_id']]; ?>
" href="industry.php?do=search&typeid=<?php echo $this->_tpl_vars['item']['industrytype_id']; ?>
"><?php echo $this->_tpl_vars['Types'][$this->_tpl_vars['item']['industrytype_id']]; ?>
</a></td>
		  <td class="handler">
           <ul id="handler_icon">
            <li><a class="btn_up" href="industry.php?do=level&action=up&id=<?php echo $this->_tpl_vars['item']['id']; ?>
<?php echo $this->_tpl_vars['addParams']; ?>
" title="<?php echo $this->_tpl_vars['_throw_up']; ?>
"><?php echo $this->_tpl_vars['_throw_up']; ?>
</a></li>
            <li><a class="btn_down" href="industry.php?do=level&action=down&id=<?php echo $this->_tpl_vars['item']['id']; ?>
<?php echo $this->_tpl_vars['addParams']; ?>
" title="<?php echo $this->_tpl_vars['_throw_down']; ?>
"><?php echo $this->_tpl_vars['_throw_down']; ?>
</a></li>
            <li><a class="btn_edit" href="industry.php?do=edit&id=<?php echo $this->_tpl_vars['item']['id']; ?>
<?php echo $this->_tpl_vars['addParams']; ?>
" title="<?php echo $this->_tpl_vars['_edit']; ?>
"><?php echo $this->_tpl_vars['_edit']; ?>
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
      <input type="submit" name="del" value="<?php echo $this->_tpl_vars['_delete']; ?>
" class="formbtn batchButton"/>
      <input type="submit" name="update_batch" value="<?php echo $this->_tpl_vars['_updating']; ?>
" class="formbtn batchButton"/>
      <input type="submit" name="hide_batch" value="<?php echo $this->_tpl_vars['_hide_it']; ?>
" class="formbtn batchButton"/>
      <input type="submit" name="show_batch" value="<?php echo $this->_tpl_vars['_show_it']; ?>
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