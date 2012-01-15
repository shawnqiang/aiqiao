<?php /* Smarty version 2.6.18, created on 2012-01-01 06:09:33
         compiled from order.goods.html */ ?>
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
    <ul class="subnav"> 
		<li><a href="order.php"><?php echo $this->_tpl_vars['_management']; ?>
</a></li>
        <li><a class="btn1" href="order.php?do=view&id=<?php echo $_GET['id']; ?>
"><span><?php echo $this->_tpl_vars['_cp_view']; ?>
 <?php echo $this->_tpl_vars['_service']; ?>
</span></a></li>
    </ul> 
</div> 
<div class="tdare">
  <form name="list_frm" id="ListFrm" action="order.php" method="post">
  <input type="hidden" name="order_id" value="<?php echo $_GET['id']; ?>
" />
  <table width="100%" cellspacing="0" class="dataTable" summary="<?php echo $this->_tpl_vars['_data_zone']; ?>
">
    <thead>
		<tr>
		  <th class="firstCell"><input type="checkbox" name="idAll" id="idAll" onClick="pbCheckAll(this,'good_id[]');" title="<?php echo $this->_tpl_vars['_select_switch']; ?>
"></th>
		  <th><label for="idAll"><?php echo $this->_tpl_vars['_trade_number']; ?>
</label></th>
		  <th><span><?php echo $this->_tpl_vars['_service']; ?>
 <?php echo $this->_tpl_vars['_naming']; ?>
</span></th>
		  <th><?php echo $this->_tpl_vars['_subtotal']; ?>
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
		  <td class="firstCell"><input type="checkbox" name="good_id[]" value="<?php echo $this->_tpl_vars['item']['good_id']; ?>
" onClick="pbCheckItem(this,'idAll');" id="item_<?php echo $this->_tpl_vars['item']['good_id']; ?>
" title="<?php echo $this->_tpl_vars['item']['id']; ?>
"></td>
		  <td><label for="item_<?php echo $this->_tpl_vars['item']['good_id']; ?>
"><?php echo $this->_tpl_vars['item']['order_id']; ?>
</label></td>
		  <td><?php if ($this->_tpl_vars['item']['charge'] == 1): ?><?php echo $this->_tpl_vars['_recharge']; ?>
<?php else: ?><?php echo $this->_tpl_vars['item']['name']; ?>
<?php endif; ?></td>
		  <td><?php echo $this->_tpl_vars['item']['price']; ?>
</td>
		  <td class="handler">
              <ul id="handler_icon">
                <li><a class="btn_delete" href="order.php?good_id=<?php echo $this->_tpl_vars['item']['good_id']; ?>
&order_id=<?php echo $this->_tpl_vars['item']['id']; ?>
&do=del" title="<?php echo $this->_tpl_vars['_delete']; ?>
"><?php echo $this->_tpl_vars['_delete']; ?>
</a></li>
              </ul>
		</tr>
		<?php endforeach; else: ?>
		<tr class="no_data info">
		  <td colspan="5"><?php echo $this->_tpl_vars['_no_datas']; ?>
</td>
		</tr>
		<?php endif; unset($_from); ?>
		<tr>
		  <td colspan="3" class="firstCell"><?php echo $this->_tpl_vars['_total']; ?>
</td>
		  <td colspan="2"><?php echo $this->_tpl_vars['TotalPrice']; ?>
</td>
	    </tr>
    </tbody>
	</table>
	<div id="dataFuncs" title="<?php echo $this->_tpl_vars['_action_zone']; ?>
">
    <div class="left paddingT15" id="batchAction">
      <input type="submit" name="del_ordergoods" value="<?php echo $this->_tpl_vars['_delete']; ?>
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