<?php /* Smarty version 2.6.18, created on 2012-01-06 04:03:38
         compiled from default/pages/default.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'userpage', 'default/pages/default.html', 14, false),array('modifier', 'nl2br', 'default/pages/default.html', 27, false),)), $this); ?>
<!-- 
The Name:Default
Description:Default Page Template
-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['page_title']),'nav_id' => ($this->_tpl_vars['nav_id']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="main" class="container">
    <div class="breadcrumb"><?php echo $this->_tpl_vars['position']; ?>
</div>
	<div class="row">
		<div class="span4">
			<div class="mod">
				<div class="mod-hd"></div>
				<div class="mod-bd">
					<ul>
						<?php $this->_tag_stack[] = array('userpage', array('row' => 15,'name' => 'userpage')); $_block_repeat=true;smarty_block_userpage($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<li class="<?php if ($this->_tpl_vars['item']['id'] == $this->_tpl_vars['userpage']['id']): ?>sel<?php endif; ?>"><?php echo $this->_tpl_vars['userpage']['link']; ?>
</li>
						<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_userpage($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>				
					</ul>
				</div>
			</div>
		</div>
		<div class="span13">
			<div class="mod">
				<div class="mod-hd">
					<h2 class="abTit"><?php echo $this->_tpl_vars['item']['title']; ?>
</h2>
				</div>
				<div class="mod-bd">
					<p><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['content'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>