<?php /* Smarty version 2.6.18, created on 2012-01-18 11:00:43
         compiled from album.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'album.html', 14, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array('PageTitle' => ($this->_tpl_vars['_space_album']),'cur' => 'space_album')));
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
						<h2><?php echo $this->_tpl_vars['_space_album']; ?>
</h2>
					</div>
					<div class="mod-bd">
						<?php if ($this->_tpl_vars['Items']): ?>
						<ul>
						<?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
							<li><a href="<?php echo $this->_tpl_vars['item']['middleimage']; ?>
" rel="lightbox"><img src="<?php echo $this->_tpl_vars['item']['image']; ?>
" width="80" height="80" alt="<?php echo $this->_tpl_vars['item']['title']; ?>
" border="0"></a><p><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 20) : smarty_modifier_truncate($_tmp, 20)); ?>
</p></li>
						<?php endforeach; endif; unset($_from); ?>				
						</ul>
						<div class="clear"></div>
						<p class="page"><?php echo $this->_tpl_vars['ByPages']; ?>
</p>
						<?php endif; ?>
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