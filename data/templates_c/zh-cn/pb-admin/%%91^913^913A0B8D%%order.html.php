<?php /* Smarty version 2.6.18, created on 2012-01-01 06:09:26
         compiled from order.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'order.html', 34, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_ads']; ?>
 &raquo; <?php echo $this->_tpl_vars['_order_center']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_order_center']; ?>
</h3> 
</div> 
<div class="tdare">
  <form name="list_frm" id="ListFrm" action="order.php" method="post">
  <table width="100%" cellspacing="0" class="dataTable" summary="<?php echo $this->_tpl_vars['_data_zone']; ?>
">
    <thead>
		<tr>
		  <th class="firstCell"><input type="checkbox" name="idAll" id="idAll" onClick="pbCheckAll(this,'id[]');" title="<?php echo $this->_tpl_vars['_select_switch']; ?>
"></th>
		  <th><label for="idAll"><?php echo $this->_tpl_vars['_trade_number']; ?>
</label></th>
		  <th><?php echo $this->_tpl_vars['_member_name']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_total']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_order_date']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_status']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_action']; ?>
</th>
		</tr>
    </thead>
    <tfoot>
		<tr>
		  <th colspan="7"><div class="pageLinks"><?php echo $this->_tpl_vars['ByPages']; ?>
</div></th>
		</tr>
    <tfoot>
    <tbody>
		<?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
		<tr class="tatr2">
		  <td class="firstCell"><input type="checkbox" name="id[]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" onClick="pbCheckItem(this,'idAll');" id="item_<?php echo $this->_tpl_vars['item']['id']; ?>
" title="<?php echo $this->_tpl_vars['item']['id']; ?>
"></td>
		  <td><a href="order.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
&do=view"><?php echo $this->_tpl_vars['item']['trade_no']; ?>
</a><?php if ($this->_tpl_vars['item']['created'] > $this->_tpl_vars['today_timestamp']): ?><span class="icon-new"></span><?php endif; ?></td>
		  <td><?php echo $this->_tpl_vars['item']['username']; ?>
<?php if ($this->_tpl_vars['item']['true_name']): ?>(<?php echo $this->_tpl_vars['item']['true_name']; ?>
)<?php endif; ?></td>
		  <td><?php echo $this->_tpl_vars['item']['total_price']; ?>
</td>
		  <td><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['created'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M")); ?>
</td>
		  <td><?php echo $this->_tpl_vars['Status'][$this->_tpl_vars['item']['status']]; ?>
</td>
		  <td class="handler">
          <ul id="handler_icon">
            <li><a class="btn_delete"  href="order.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
&do=del" title="<?php echo $this->_tpl_vars['_delete']; ?>
"><?php echo $this->_tpl_vars['_delete']; ?>
</a></li>
            <li><a class="btn_browse" href="order.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
&do=view" title="<?php echo $this->_tpl_vars['_cp_view']; ?>
"><?php echo $this->_tpl_vars['_cp_view']; ?>
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
      <select name="status" id="Status" onchange="$('#ListFrm').submit();">
      	<option><?php echo $this->_tpl_vars['_set_status']; ?>
</option>
        <option value="0"><?php echo $this->_tpl_vars['_invalid']; ?>
</option>
        <option value="1"><?php echo $this->_tpl_vars['_effective']; ?>
</option>
      </select>
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