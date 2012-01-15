<?php /* Smarty version 2.6.18, created on 2012-01-14 09:48:12
         compiled from default/flash.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strip_tags', 'default/flash.html', 5, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['page_title']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo $this->_tpl_vars['redirect']; ?>

<?php echo $this->_tpl_vars['js_head']; ?>

<div id="main" class="container">
	<div class="subnav"><?php echo $this->_tpl_vars['_action_tip']; ?>
 &raquo; <span class="black"><?php echo ((is_array($_tmp=$this->_tpl_vars['message'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
</span></div>
	<div class="row">
		<div class="span4">
			<div class="mod">
				<div class="mod-hd">
					
				</div>
				<div class="mod-bd">
					<div class="info_tip_service clearfix">
						<span class="<?php echo $this->_tpl_vars['action_style']; ?>
"><?php echo $this->_tpl_vars['message']; ?>
</span>
					</div>
				</div>
			</div>
		</div>
		<div class="span13">
			<div class="mod">
				<div class="mod-hd">
					
				</div>
				<div class="mod-bd">
					<div class="info_tip_right">
					<p class="back"><a href="javascript:history.go(-1);"><?php echo $this->_tpl_vars['_go_back']; ?>
</a></p>
					<p class="close"><a href="javascript:;" onclick="window.opener=null;window.close();"><?php echo $this->_tpl_vars['_close_window']; ?>
</a></p>
				   </div>   
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