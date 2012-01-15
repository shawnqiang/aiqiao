<?php /* Smarty version 2.6.18, created on 2012-01-13 15:44:03
         compiled from stat.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'stat.html', 22, false),)), $this); ?>
<?php $this->assign('page_title', ($this->_tpl_vars['_statistics'])); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="main" class="container">
  <div class="row">
    <div class="span4 side-bar">
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
  
    
     <div class="span12 main-content">
  	    <div class="page-header">
         <h2><?php echo $this->_tpl_vars['page_title']; ?>
</h2>
        </div>
        <div class="notice">
         <?php echo $this->_tpl_vars['_information_statistics']; ?>

        </div>

        <table>

            <?php $_from = $this->_tpl_vars['UserTradeStat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ut']):
?>
            <tr>
              <td><img src="images/stat.gif" width="13" height="13" border="0"> <strong><?php echo $this->_tpl_vars['ut']['name']; ?>
<?php echo $this->_tpl_vars['_information']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</strong> <?php echo $this->_tpl_vars['_now_you_have']; ?>
 <span class="orange"><strong><?php echo ((is_array($_tmp=@$this->_tpl_vars['ut']['Amount'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
</strong></span> <?php echo $this->_tpl_vars['_number']; ?>
<?php echo $this->_tpl_vars['ut']['name']; ?>
<?php echo $this->_tpl_vars['_information_g']; ?>
</td>
            </tr>
            <?php endforeach; endif; unset($_from); ?>
	         <?php if ($this->_tpl_vars['pb_userlevel'] > 1): ?>
            <tr>
              <td><img src="images/stat.gif" width="13" height="13" border="0"> <strong><?php echo $this->_tpl_vars['_products_n']; ?>
</strong> <?php echo $this->_tpl_vars['_now_you_have']; ?>
 <span class="orange"><strong><?php echo $this->_tpl_vars['ProductAmount']; ?>
</strong></span><?php echo $this->_tpl_vars['_account_product']; ?>
</td>
            </tr>
	         <?php endif; ?>
           
        </table>

  </div>    
</div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>