<?php /* Smarty version 2.6.18, created on 2012-01-18 12:57:53
         compiled from job.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'get_cache', 'job.html', 2, false),array('function', 'pager', 'job.html', 17, false),array('block', 'job', 'job.html', 13, false),array('modifier', 'truncate', 'job.html', 15, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array('PageTitle' => ($this->_tpl_vars['_space_hr']),'cur' => 'space_hr')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo smarty_function_get_cache(array('var' => 'options','name' => 'typeoption'), $this);?>

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
						<h2><?php echo $this->_tpl_vars['_space_hr']; ?>
</h2>
					</div>
					<div class="mod-bd">
						<?php $this->_tag_stack[] = array('job', array('companyid' => ($this->_tpl_vars['COMPANY']['id']),'row' => 10,'status' => 1)); $_block_repeat=true;smarty_block_job($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<p class="companytitle"><?php echo $this->_tpl_vars['job']['link']; ?>
</p>
						<p title="<?php echo $this->_tpl_vars['item']['content']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['job']['content'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 100) : smarty_modifier_truncate($_tmp, 100)); ?>
</p>
						<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_job($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>					
						<p class="page"><?php echo smarty_function_pager(array('rowcount' => ($this->_tpl_vars['paging']['total'])), $this);?>
</p>
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