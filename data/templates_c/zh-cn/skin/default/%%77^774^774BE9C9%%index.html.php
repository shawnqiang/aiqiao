<?php /* Smarty version 2.6.18, created on 2012-01-18 12:19:38
         compiled from index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'index.html', 14, false),array('block', 'product', 'index.html', 30, false),array('function', 'the_url', 'index.html', 32, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array('PageTitle' => ($this->_tpl_vars['_home_page']),'cur' => 'space_index')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "banner.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="content" class="container">
	
	
	<div class="mod welcome">
		<div class="span12 pull-left">
			<img height="240px" class="branding" src="<?php echo $this->_tpl_vars['COMPANY']['logo']; ?>
"/>
		</div>
		
		<div class="companyInfo span4 pull-right">
			<div>
			<h1><?php echo $this->_tpl_vars['_you_are_welcome']; ?>
<?php echo $this->_tpl_vars['COMPANY']['name']; ?>
</h1>
			<p><?php echo ((is_array($_tmp=$this->_tpl_vars['COMPANY']['description'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 300) : smarty_modifier_truncate($_tmp, 300)); ?>
</p>
			<p><a title="<?php echo $this->_tpl_vars['_more_company_info']; ?>
" href="<?php echo $this->_tpl_vars['Menus']['intro']; ?>
"><?php echo $this->_tpl_vars['_more_company_info']; ?>
>></a></p>
			</div>
		</div>
		
				
	</div>
	<div class="row">
		
		<div class="span16">
			<div class="mod">
				<div class="mod-hd">
					<h2><?php echo $this->_tpl_vars['_space_product']; ?>
 <a href="<?php echo $this->_tpl_vars['Menus']['product']; ?>
" title="<?php echo $this->_tpl_vars['_space_product']; ?>
" class="title-more">more</a></h2>
				</div>
				<div class="mod-bd">
					<ul class="media-items-grid">
						<?php $this->_tag_stack[] = array('product', array('name' => 'item','companyid' => ($this->_tpl_vars['COMPANY']['id']),'memberid' => ($this->_tpl_vars['MEMBER']['id']),'row' => 15)); $_block_repeat=true;smarty_block_product($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<li class="media-item">
						<a class="image" href="<?php echo smarty_function_the_url(array('module' => 'product','id' => ($this->_tpl_vars['item']['id'])), $this);?>
" target="_blank"><img src="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
attachment/<?php echo $this->_tpl_vars['item']['picture']; ?>
.small.jpg" alt="<?php echo $this->_tpl_vars['item']['name']; ?>
" width="80" height="80" border="0" /></a>
						<p class="name">
						<a href="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
product/detail.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
" target="_blank" title="<?php echo $this->_tpl_vars['item']['name']; ?>
"><?php echo $this->_tpl_vars['item']['name']; ?>
</a></p>
						</li>
						<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_product($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					</ul>
				</div>
			</div>		
			
		</div>

	</div>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "leftbar.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>