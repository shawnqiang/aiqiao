<?php /* Smarty version 2.6.18, created on 2012-01-01 06:03:31
         compiled from flash.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strip_tags', 'flash.html', 16, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
<style type="text/css">
body {background: #fcfdff}
h1 {font-size: 12px; color: #444; line-height: 55px; background: url(images/welcome_h1.gif); padding-left: 2%}
dl {line-height: 40px; padding-left: 80px; margin: 35px 0 45px 15%}
dt {font-size: 12px; color: #00CC00; font-weight: bold;}
dd {color: #444;}
a {color: #06c}
a:hover {color: #09f}
p {color: #999; border-top: 1px solid #cbe4f5; text-align: center; padding-top: 20px;}
</style>
'; ?>

<h1><?php echo $this->_tpl_vars['_action_tip']; ?>
</h1>
<dl style="background: url(images/<?php echo $this->_tpl_vars['action_img']; ?>
) no-repeat left 10px; ">
    <dt><a href="<?php echo $this->_tpl_vars['url']; ?>
" style="text-decoration: none;" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['message'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
"><?php echo $this->_tpl_vars['message']; ?>
</a></dt>
      <dd><a href="javascript:history.back()" class="forward"><?php echo $this->_tpl_vars['_go_back']; ?>
</a></dd>
</dl>
<?php echo $this->_tpl_vars['redirect']; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>