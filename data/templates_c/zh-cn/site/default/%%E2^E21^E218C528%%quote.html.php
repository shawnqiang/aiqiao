<?php /* Smarty version 2.6.18, created on 2012-01-06 16:18:32
         compiled from default/market/quote.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'category', 'default/market/quote.html', 10, false),array('function', 'get', 'default/market/quote.html', 24, false),array('function', 'pager', 'default/market/quote.html', 112, false),array('block', 'market', 'default/market/quote.html', 52, false),array('block', 'price', 'default/market/quote.html', 64, false),array('block', 'product', 'default/market/quote.html', 77, false),array('modifier', 'date_format', 'default/market/quote.html', 101, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['page_title']),'nav_id' => 6)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link href="scripts/jquery/ui.css" rel="stylesheet" type="text/css"/>
<script src="scripts/jquery/ui.core.js"></script>
<div id="main" class="container">
	<div class="mod">
		<div class="mod-hd">
			 <strong><?php echo $this->_tpl_vars['_area_prices']; ?>
</strong>
		</div>
		<div class="mod-bd">
		 <?php echo smarty_function_category(array('name' => 'area','depth' => '1'), $this);?>

		 <?php $_from = $this->_tpl_vars['category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
		 <a href='product/price.php?action=search&areaid=<?php echo $this->_tpl_vars['item']['id']; ?>
'><span><?php echo $this->_tpl_vars['item']['name']; ?>
</span></a>
		 <?php endforeach; endif; unset($_from); ?>
		</div>
	</div>
	<div class="row">
		<div class="span4">
			<div class="mod">
				<div class="mod-hd">
					<h2><?php echo $this->_tpl_vars['_quotes']; ?>
 <?php echo $this->_tpl_vars['_categories']; ?>
</h2>
				</div>
				<div class="mod-bd">
					<ul>
						<?php echo smarty_function_get(array('from' => 'type','name' => 'quotetype','var' => 'Categories'), $this);?>

						<?php $_from = ($this->_tpl_vars['Categories']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
						<li><a href="market/quote.php?catid=<?php echo $this->_tpl_vars['item']['id']; ?>
" title="<?php echo $this->_tpl_vars['item']['title']; ?>
"><?php echo $this->_tpl_vars['item']['title']; ?>
</a></li>
						<?php endforeach; endif; unset($_from); ?>
				  	</ul>
				  	<div class="btn_price_all"><a href="market/quote.php"><?php echo $this->_tpl_vars['_the_all']; ?>
 <?php echo $this->_tpl_vars['_price_quotes']; ?>
</a></div>
				</div>
			</div>
			<div class="mod price-inquiry">
				<div class="mod-hd">
					<h2><?php echo $this->_tpl_vars['_quote_search']; ?>
</h2>
				</div>
				<div class="mod-bd">
					<form method="get" action="">
					<input type="hidden" name="action" value="search" />
					   <div class="clearfix"><label for="title"><?php echo $this->_tpl_vars['_searching_product']; ?>
</label><div class="input"><input type="text" name="title" value="<?php echo $_GET['title']; ?>
" class="span2"></div></div>
					   <div class="clearfix"><label for="ds"><?php echo $this->_tpl_vars['_date_start']; ?>
</label><div class="input"><input name="ds" id="date1" value="<?php echo $this->_tpl_vars['QuoteSearchFrom']; ?>
" class="span2"/></div></div>
					   <div class="clearfix"><label for="de"><?php echo $this->_tpl_vars['_date_end']; ?>
</label><div class="input"><input name="de" id="date2" value="<?php echo $this->_tpl_vars['QuoteSearchTo']; ?>
" class="span2"/></div></div>
					   <div class="actions"><input type="submit" class="btn primary" value="<?php echo $this->_tpl_vars['_search']; ?>
"></div>
					</form>
				</div>
			</div>
			<div class="mod">
				<div class="mod-hd">
					<h2><?php echo $this->_tpl_vars['_pro_market']; ?>
</h2>
				</div>
				<div class="mod-bd">
					<ul class="info-list">
					<?php $this->_tag_stack[] = array('market', array('row' => 10,'type' => 'commend')); $_block_repeat=true;smarty_block_market($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					 <li><?php echo $this->_tpl_vars['market']['link']; ?>
</li>
					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_market($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				   	</ul>
				</div>
			</div>
			<div class="mod">
				<div class="mod-hd">
					<h2><?php echo $this->_tpl_vars['_latest_price']; ?>
</h2>
				</div>
				<div class="mod-bd">
					<ul>
						<?php $this->_tag_stack[] = array('price', array('row' => 9,'name' => 'item')); $_block_repeat=true;smarty_block_price($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					  	<li><?php echo $this->_tpl_vars['item']['link']; ?>
</li>
					 	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_price($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				   	</ul>
				</div>
			</div>
			
		</div>
		<div class="span13">
			<div class="mod">
				<div class="mod-hd"><h2><span class="corner_t_l"></span><span class="corner_t_m title_mouse"><?php echo $this->_tpl_vars['_commend']; ?>
 <?php echo $this->_tpl_vars['_product']; ?>
</span><span class="corner_t_r"></span></h2></div>
				<div class="mod-bd">
						<ul class="info-list media-list">
						<?php $this->_tag_stack[] = array('product', array('row' => 6,'type' => "image,commend",'name' => 'item')); $_block_repeat=true;smarty_block_product($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<li class="item-fifth"><a href="<?php echo $this->_tpl_vars['item']['url']; ?>
" class="name"><img src="<?php echo $this->_tpl_vars['item']['src']; ?>
" alt="<?php echo $this->_tpl_vars['item']['name']; ?>
" /></a>
						<p class="title"><a href="<?php echo $this->_tpl_vars['item']['name']; ?>
"><?php echo $this->_tpl_vars['item']['names']; ?>
</a></p>
						</li>
					   <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_product($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>  
						</ul>
				</div>
			</div>
			<div class="mod">
				<div class="mod-hd">
					
				</div>
				<div class="mod-bd">
					<table id="hacker">
							 <thead>
							  <tr>
								<th><?php echo $this->_tpl_vars['_the_title']; ?>
</th>
								<th><?php echo $this->_tpl_vars['_post_time_n']; ?>
</th>
							  </tr>
							  </thead>
							  <?php $_from = $this->_tpl_vars['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
							  <tbody>
							  <tr>
								<td><a href="market/quote.php?action=chart&id=<?php echo $this->_tpl_vars['item']['id']; ?>
" style="text-decoration:underline"><?php echo $this->_tpl_vars['item']['title']; ?>
</a></td>
								<td class="pb_datetime"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['pubdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>
							  </tr>
							  </tbody>
							  <?php endforeach; endif; unset($_from); ?>
							  <tfoot>
							  <tr>
								<th><?php echo $this->_tpl_vars['_the_title']; ?>
</th>
								<th><?php echo $this->_tpl_vars['_post_time_n']; ?>
</th>
							  </tr>
							  </tfoot>
							  <tr>
								<td colspan="2" id="noborder"><div class="pagination2"><?php echo smarty_function_pager(array('rowcount' => ($this->_tpl_vars['paging']['total'])), $this);?>
</div></td>
							  </tr>
							</table>
				</div>
			</div>
		</div>
	</div>
</div>


<?php echo '
<style> 
#hacker tr:hover{ 
background-color: #F6FAFD;
} 
</style>
<script>
$(document).ready(function() {
	$("#date1").datepicker({dateFormat:\'yy-mm-dd\',showOn: "button",
			buttonImage: "images/datePicker.gif",
			buttonImageOnly: true
	});
	$("#date2").datepicker({dateFormat:\'yy-mm-dd\',showOn: "button",
			buttonImage: "images/datePicker.gif",
			buttonImageOnly: true
	});
});
</script>
'; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>