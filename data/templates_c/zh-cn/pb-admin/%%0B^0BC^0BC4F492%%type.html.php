<?php /* Smarty version 2.6.18, created on 2012-01-01 07:28:14
         compiled from type.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_extension']; ?>
 &raquo; <?php echo $this->_tpl_vars['_options']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_options']; ?>
</h3> 
    <ul class="subnav">
		<li><a class="btn1" href="type.php"><span><?php echo $this->_tpl_vars['_all_options']; ?>
</span></a></li>       
        <li><a href="type.php?do=edit"><?php echo $this->_tpl_vars['_add_or_edit']; ?>
</a></li>
		<li><a href="type.php?do=refresh"><?php echo $this->_tpl_vars['_update_cache']; ?>
</a></li>       
    </ul>
</div>
<div class="mrightTop"> 
    <div class="fontr"> 
        <form name="search_frm" id="SearchFrm" method="get"> 
        <input type="hidden" name="do" value="search" />
             <div> 
				<?php echo $this->_tpl_vars['_title_keywords']; ?>
 : <input class="queryInput" type="text" name="q" value="<?php echo $_GET['q']; ?>
" /> 
                <input type="submit" name="search" id="Search" class="formbtn" value="<?php echo $this->_tpl_vars['_searching']; ?>
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
		  <th><label for="idAll"><?php echo $this->_tpl_vars['_label']; ?>
</label></th>
		  <th><?php echo $this->_tpl_vars['_var_name']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_type_name']; ?>
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
"></td>
		  <td>
          <input type="hidden" name="optid[]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" />
          <input type="text" name="option_label[]" value="<?php echo $this->_tpl_vars['item']['option_label']; ?>
" onclick="$('#item_<?php echo $this->_tpl_vars['item']['id']; ?>
').attr('checked',true);" ></td>
		  <td><input type="text" name="option_value[]" value="<?php echo $this->_tpl_vars['item']['option_value']; ?>
" onclick="$('#item_<?php echo $this->_tpl_vars['item']['id']; ?>
').attr('checked',true);" ></td>
		  <td><a href="type.php?modelid=<?php echo $this->_tpl_vars['item']['typemodel_id']; ?>
" title="<?php echo $this->_tpl_vars['item']['typename']; ?>
" style="text-decoration:none;"><?php echo $this->_tpl_vars['item']['typename']; ?>
</a></td>
		  <td class="handler"><a href="type.php?do=edit&id=<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['_edit']; ?>
</a>&nbsp;<a href="type.php?do=del&id=<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['_delete']; ?>
</a></td>
		</tr>
		<?php endforeach; else: ?>
		<tr class="no_data info">
		  <td colspan="5"><?php echo $this->_tpl_vars['_no_datas']; ?>
</td>
		</tr>
		<?php endif; unset($_from); ?>
    </tbody>
	</table>
	<div id="dataFuncs" title="<?php echo $this->_tpl_vars['_action_zone']; ?>
">
    <div class="left paddingT15" id="batchAction">
      <input type="submit" name="update" value="<?php echo $this->_tpl_vars['_updating']; ?>
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