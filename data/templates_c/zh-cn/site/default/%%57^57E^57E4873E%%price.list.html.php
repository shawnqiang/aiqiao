<?php /* Smarty version 2.6.18, created on 2012-01-15 07:41:26
         compiled from default/product/price.list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'default/product/price.list.html', 20, false),array('modifier', 'truncate', 'default/product/price.list.html', 21, false),array('modifier', 'number_format', 'default/product/price.list.html', 24, false),array('function', 'the_url', 'default/product/price.list.html', 22, false),array('function', 'pager', 'default/product/price.list.html', 31, false),array('block', 'price', 'default/product/price.list.html', 43, false),array('block', 'product', 'default/product/price.list.html', 53, false),array('block', 'company', 'default/product/price.list.html', 63, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['page_title']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="main" class="container">
	<div class="breadcrumb"><span><?php echo $this->_tpl_vars['position']; ?>
</span></div>
	<div class="row">
		<div class="span13">
			<div class="mod">
				<div class="mod-hd">
					<h2><span class="title_mouse"><?php echo $this->_tpl_vars['_search_result']; ?>
</span></h2>
				</div>
				<div class="mod-bd">
					<form>
		            <table width="100%" border="0">
		              <tr>
		                <th><?php echo $this->_tpl_vars['_title']; ?>
</th>
		                <th><?php echo $this->_tpl_vars['_user_name_n']; ?>
</th>
		                <th><?php echo $this->_tpl_vars['_the_price']; ?>
</th>
		              </tr>
		              <?php $_from = $this->_tpl_vars['Prices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
		              <tr>
		                <td class="offer_info title_link"><span><a href="product/price.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
" title="<?php echo $this->_tpl_vars['item']['title']; ?>
"><?php echo $this->_tpl_vars['item']['title']; ?>
</a></span>[<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['created'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
]<br />
								<?php echo $this->_tpl_vars['_abstract']; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['description'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 50) : smarty_modifier_truncate($_tmp, 50)); ?>
<br /></td>
		                <td><?php if ($this->_tpl_vars['item']['companyname']): ?><a href="<?php echo smarty_function_the_url(array('module' => 'space','userid' => ($this->_tpl_vars['item']['username'])), $this);?>
"><?php echo $this->_tpl_vars['item']['companyname']; ?>
</a><?php else: ?><?php echo $this->_tpl_vars['item']['username']; ?>
<?php endif; ?></td>
		                <td>
		                <em class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['price'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0) : smarty_modifier_number_format($_tmp, 0)); ?>
</em><?php echo $this->_tpl_vars['Monetaries'][$this->_tpl_vars['item']['currency']]; ?>
/<?php echo $this->_tpl_vars['Measuries'][$this->_tpl_vars['item']['units']]; ?>

		               </td>
		              </tr>
		              	<?php endforeach; endif; unset($_from); ?>
		            </table>

					<div>
						<span><div class="pagination2"><?php echo smarty_function_pager(array('rowcount' => ($this->_tpl_vars['paging']['total'])), $this);?>
</div></span>
					</div>
					</form>
				</div>
			</div>
		</div>
		<div class="span4">
			<div class="mod">
				<div class="mod-hd">
					<?php echo $this->_tpl_vars['_latest_new']; ?>
 <?php echo $this->_tpl_vars['_prices']; ?>

				</div>
				<div class="mod-bd">
					<?php $this->_tag_stack[] = array('price', array('row' => 10,'name' => 'item')); $_block_repeat=true;smarty_block_price($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<p><?php echo $this->_tpl_vars['item']['link']; ?>
</p>
					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_price($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				</div>
			</div>
			<div class="mod">
				<div class="mod-hd">
					<?php echo $this->_tpl_vars['_commend']; ?>
 <?php echo $this->_tpl_vars['_product']; ?>

				</div>
				<div class="mod-bd">
					<?php $this->_tag_stack[] = array('product', array('row' => 10,'type' => 'commend','name' => 'item')); $_block_repeat=true;smarty_block_product($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<p><a href="<?php echo $this->_tpl_vars['item']['url']; ?>
"><?php echo $this->_tpl_vars['item']['name']; ?>
</a></p>
					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_product($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				</div>
			</div>
			<div class="mod">
				<div class="mod-hd">
					<?php echo $this->_tpl_vars['_recommended_company']; ?>

				</div>
				<div class="mod-bd">
					<?php $this->_tag_stack[] = array('company', array('row' => 15)); $_block_repeat=true;smarty_block_company($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<p><?php echo $this->_tpl_vars['company']['link']; ?>
</p>
					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_company($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				</div>
			</div>
		</div>
	</div>
</div>


<script>
$("#SearchFrm").attr("action","offer/list.php");
$("#hdDo").val("product");
$("#topMenuProduct").addClass("lcur");
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>