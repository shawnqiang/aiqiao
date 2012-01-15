<?php /* Smarty version 2.6.18, created on 2012-01-06 02:20:51
         compiled from default/wap/index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'the_url', 'default/wap/index.html', 5, false),array('modifier', 'default', 'default/wap/index.html', 11, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/wap/header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="main">
<div class="main" style="text-align:center;">
<h1><img src="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
images/logo.jpg" alt="" width="150"/></h1>
	  <a href="<?php echo smarty_function_the_url(array('module' => 'wap','do' => 'product'), $this);?>
"><?php echo $this->_tpl_vars['_product']; ?>
</a>
	  <a href="<?php echo smarty_function_the_url(array('module' => 'wap','do' => 'offer'), $this);?>
"><?php echo $this->_tpl_vars['_offer']; ?>
</a>
	  <a href="<?php echo smarty_function_the_url(array('module' => 'wap','do' => 'company'), $this);?>
"><?php echo $this->_tpl_vars['_yellow_page']; ?>
</a>
	  <a href="<?php echo smarty_function_the_url(array('module' => 'wap','do' => 'news'), $this);?>
"><?php echo $this->_tpl_vars['_information']; ?>
</a>
<br/>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>
" method="get">
<input type="hidden" name="do" value="<?php echo ((is_array($_tmp=@$_GET['do'])) ? $this->_run_mod_handler('default', true, $_tmp, 'product') : smarty_modifier_default($_tmp, 'product')); ?>
">
<input type="hidden" name="action" value="search">
<input type="text" name="q" value="" size="6"/>
<input type="submit" name="submit" value="<?php echo $this->_tpl_vars['_search']; ?>
"/>
</form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/wap/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>