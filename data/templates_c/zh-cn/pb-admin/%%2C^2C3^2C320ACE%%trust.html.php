<?php /* Smarty version 2.6.18, created on 2012-01-01 07:28:17
         compiled from trust.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_extension']; ?>
 &raquo; <?php echo $this->_tpl_vars['_trusts']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_trusts']; ?>
</h3> 
    <ul class="subnav">
		<li><a class="btn1" href="trust.php"><span><?php echo $this->_tpl_vars['_trust_type']; ?>
</span></a></li>
		<li><a href="trust.php?do=rule"><?php echo $this->_tpl_vars['_trust_star']; ?>
</a></li>
    </ul>
</div>
<div class="mrightTop"> 
    <div class="fontl"><?php echo $this->_tpl_vars['_if_you_changed']; ?>
</div> 
    <div class="fontr"></div> 
</div> 
<div class="tdare">
  <form name="list_frm" id="ListFrm" method="post">
  <table width="100%" cellspacing="0" class="dataTable" summary="<?php echo $this->_tpl_vars['_data_zone']; ?>
">
    <thead>
		<tr>
		  <th class="firstCell"><input type="checkbox" name="idAll" id="idAll" onclick="pbCheckAll(this,'id[]');" title="<?php echo $this->_tpl_vars['_select_switch']; ?>
"></th>
		  <th><?php echo $this->_tpl_vars['_screenshot']; ?>
</th>
		  <th><label for="idAll"><?php echo $this->_tpl_vars['_naming']; ?>
</label></th>
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
		  </td>
		  <td><input type="hidden" name="tid[]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" /><input type="text" name="avatar[]" value="<?php echo $this->_tpl_vars['item']['avatar']; ?>
" />&nbsp;<?php if ($this->_tpl_vars['item']['avatar']): ?><img src="../images/icon/<?php echo $this->_tpl_vars['item']['avatar']; ?>
" alt="<?php echo $this->_tpl_vars['item']['name']; ?>
" /><?php endif; ?></td>
		  <td><input type="text" name="name[]" value="<?php echo $this->_tpl_vars['item']['name']; ?>
" /></td>
		  <td class="handler">
           <ul id="handler_icon">
            <li><a class="btn_delete" href="trust.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
&do=del" title="<?php echo $this->_tpl_vars['_delete']; ?>
"><?php echo $this->_tpl_vars['_delete']; ?>
</a></li>
          </ul>   
		  </td>
		</tr>
		<?php endforeach; else: ?>
		<tr class="no_data info">
		  <td colspan="3"><?php echo $this->_tpl_vars['_no_datas']; ?>
</td>
		</tr>
		<?php endif; unset($_from); ?>
    </tbody>
	<tbody>
	  <tr class="tatr2" id="tRow0" style="display : none ;">
        <td></td>
        <td><input type="text" name="avatar[]" value="" /></td>
        <td colspan="2"><input type="text" name="name[]" value="" /></td>
	  </tr>
	</tbody>    
	<tr class="tatr2">
		<td></td>
		<td colspan="3"><img src="images/add.gif" /><a href="javascript:;" onclick="$('#tRow0').clone().show().appendTo( $('#tRow0').parent() );" style="color: blue;">&nbsp;<?php echo $this->_tpl_vars['_add_new_type']; ?>
</a></td>
	</tr>
	</table>
	<div id="dataFuncs" title="<?php echo $this->_tpl_vars['_action_zone']; ?>
">
    <div class="left paddingT15" id="batchAction">
      <input type="submit" name="del" value="<?php echo $this->_tpl_vars['_delete']; ?>
" class="formbtn batchButton"/>
      <input type="submit" name="update" value="<?php echo $this->_tpl_vars['_submit']; ?>
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