<?php /* Smarty version 2.6.18, created on 2012-01-14 09:48:06
         compiled from order.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'order.html', 35, false),)), $this); ?>
<?php $this->assign('page_title', ($this->_tpl_vars['_order_manage'])); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="main" class="container">
	<div class="row">
		<div class="span4 sidebar">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</div>
		<div class="span12">
			<div class="page-header">
				<h2><?php echo $this->_tpl_vars['page_title']; ?>
</h2>
			</div>
			<div class="mod">
				<div class="mod-hd">
					<h2><?php echo $this->_tpl_vars['_order_manage']; ?>
</h2>
				</div>
				<div class="mod-bd">
					<table cellspacing="0" id="dataTable" class="datas">
						<thead>
						<tr>
							<td><p align="left"><?php echo $this->_tpl_vars['_trade_number']; ?>
</p></td>
							<td><?php echo $this->_tpl_vars['_total_order_amount']; ?>
</td>
							<td><?php echo $this->_tpl_vars['_order_status']; ?>
</td>
							<td><?php echo $this->_tpl_vars['_pay_status']; ?>
</td>
							<td><?php echo $this->_tpl_vars['_order_time']; ?>
</td>
							<td><?php echo $this->_tpl_vars['_operation']; ?>
</td>
						</tr>
						</thead>
						<tbody>
						  <?php $_from = $this->_tpl_vars['datas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
						  <tr class="<?php if ($this->_tpl_vars['item']['pay_status'] == 1): ?>selected<?php endif; ?>">
						  <td><?php echo $this->_tpl_vars['item']['trade_no']; ?>
</td>
						  <td><?php echo $this->_tpl_vars['item']['total_price']; ?>
</td>
						  <td><?php echo $this->_tpl_vars['order_status'][$this->_tpl_vars['item']['status']]; ?>
</td>
						  <td><?php echo $this->_tpl_vars['pay_status'][$this->_tpl_vars['item']['pay_status']]; ?>
<br><small><i><?php echo $this->_tpl_vars['item']['pay_name']; ?>
</i></small></td>
						  <td><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['created'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M")); ?>
</td>
						  <td><!-- <a href="order.php?action=preview&tradeno=<?php echo $this->_tpl_vars['item']['trade_no']; ?>
" style="text-decoration:underline;"><?php echo $this->_tpl_vars['_preview']; ?>
</a> --><?php if ($this->_tpl_vars['item']['pay_status'] == 0): ?>&nbsp;&nbsp;<a href="../purchase.php?do=pay&tradeno=<?php echo $this->_tpl_vars['item']['trade_no']; ?>
" style="text-decoration:underline;" target="_blank"><?php echo $this->_tpl_vars['_pay_now']; ?>
</a>&nbsp;<a href="order.php?action=cancel&tradeno=<?php echo $this->_tpl_vars['item']['trade_no']; ?>
" style="text-decoration:underline;"><?php echo $this->_tpl_vars['_cancel']; ?>
</a><?php endif; ?></td>
						  </tr>
						  <?php endforeach; else: ?>
						  <tr><td colspan="5"><div align="center"><?php echo $this->_tpl_vars['_no_datas_now']; ?>
</div></td></tr>
						  <?php endif; unset($_from); ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="">
				<?php echo $this->_tpl_vars['ByPages']; ?>

			</div>
		</div>
	</div>
</div>



<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>