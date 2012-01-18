<?php /* Smarty version 2.6.18, created on 2012-01-18 12:57:01
         compiled from product.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'product', 'product.html', 13, false),array('function', 'the_url', 'product.html', 14, false),array('function', 'pager', 'product.html', 18, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array('PageTitle' => ($this->_tpl_vars['_space_product']),'cur' => 'space_product')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "banner.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="content" class="container">
	<div class="row">
		
			<div class="span12">
				<div class="mod">
					<div class="mod-hd">
						<h2><?php echo $this->_tpl_vars['_space_product']; ?>
</h2>
					</div>
					<div class="mod-bd">
						<ul class="media-items-grid">
							<?php $this->_tag_stack[] = array('product', array('name' => 'item','companyid' => ($this->_tpl_vars['COMPANY']['id']),'typeid' => ($_GET['typeid']),'row' => 15)); $_block_repeat=true;smarty_block_product($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
							<li class="media-item"><a class="image" href="<?php echo smarty_function_the_url(array('module' => 'product','id' => ($this->_tpl_vars['item']['id'])), $this);?>
" target="_blank"><img src="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
attachment/<?php echo $this->_tpl_vars['item']['picture']; ?>
.small.jpg" alt="<?php echo $this->_tpl_vars['item']['name']; ?>
"></a><p class="name"><?php echo $this->_tpl_vars['item']['name']; ?>
</p></li>
							<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_product($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
						</ul>
						
						<p><div class="pagination"><?php echo smarty_function_pager(array('rowcount' => ($this->_tpl_vars['paging']['total'])), $this);?>
</div></p>
					</div>
				</div>
				
			</div>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "sidebar.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>	
	</div>
	
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>