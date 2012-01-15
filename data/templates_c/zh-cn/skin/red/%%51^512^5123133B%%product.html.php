<?php /* Smarty version 2.6.18, created on 2012-01-04 06:52:17
         compiled from product.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'product', 'product.html', 12, false),array('function', 'the_url', 'product.html', 13, false),array('function', 'pager', 'product.html', 17, false),)), $this); ?>
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
<div id="main" class="container">
	<div class="row">
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "leftbar.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<div class="span12">
					<div class="playercontact">
					<div class="playerheadcontact"><span class="playlistcontact"><?php echo $this->_tpl_vars['_space_product']; ?>
</span><span class="player_head_concontact"></span><img src="<?php echo $this->_tpl_vars['SpaceUrl']; ?>
images/contactus_13.jpg" /></div>
					<div class="clear"></div>
					<div class="player_concontact clearfix">
						<ul>
					<?php $this->_tag_stack[] = array('product', array('name' => 'item','companyid' => ($this->_tpl_vars['COMPANY']['id']),'typeid' => ($_GET['typeid']),'row' => 12)); $_block_repeat=true;smarty_block_product($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
							<li><a href="<?php echo smarty_function_the_url(array('module' => 'product','id' => ($this->_tpl_vars['item']['id'])), $this);?>
" target="_blank"><img src="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
attachment/<?php echo $this->_tpl_vars['item']['picture']; ?>
.small.jpg" width="80" height="80" alt="<?php echo $this->_tpl_vars['item']['name']; ?>
"></a><p><?php echo $this->_tpl_vars['item']['name']; ?>
</p></li>
					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_product($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
						</ul>
						<div class="clear"></div>
						<p><div class="pagination"><?php echo smarty_function_pager(array('rowcount' => ($this->_tpl_vars['paging']['total'])), $this);?>
</div></p>
					</div>
				</div>
			</div>
			
	</div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>