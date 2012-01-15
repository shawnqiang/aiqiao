<?php /* Smarty version 2.6.18, created on 2012-01-15 08:05:02
         compiled from brand.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'brand.html', 21, false),array('modifier', 'nl2br', 'brand.html', 27, false),array('modifier', 'truncate', 'brand.html', 27, false),)), $this); ?>
<?php $this->assign('page_title', ($this->_tpl_vars['_brands'])); ?>
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
        <h2 class="pull-left"><?php echo $this->_tpl_vars['page_title']; ?>
</h2>
        <p class="pull-right"><a href="brand.php?do=edit" class="btn"><?php echo $this->_tpl_vars['_click_add']; ?>
</a></p>
      </div>
      <div class="mod">
        <div class="mod-hd">
          <h2><?php echo $this->_tpl_vars['_add_your_brands']; ?>
</h2>
        </div>
        <div class="mod-bd">
          <table class="album" >
          <?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
          <tr bgcolor="<?php echo smarty_function_cycle(array('values' => "#CCFFCC,#ffffff"), $this);?>
">
          <th><a href="brand.php?do=edit&id=<?php echo $this->_tpl_vars['item']['id']; ?>
" style="text-decoration: underline;"><img style="padding: 6px; border: 1px solid #CCC; background-color: #FFF;" src="<?php echo $this->_tpl_vars['item']['image']; ?>
" alt="" border="0" width="80" height="80" /></a></th>
          <td>
          <div id="certs" align="left">
            <ul>
            <li><?php echo $this->_tpl_vars['_brand_name']; ?>
<?php echo $this->_tpl_vars['item']['name']; ?>
</li>
            <li><?php echo $this->_tpl_vars['_description']; ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['description'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 100) : smarty_modifier_truncate($_tmp, 100)); ?>
</li>
            <li style="list-style:none"><a href="brand.php?do=edit&id=<?php echo $this->_tpl_vars['item']['id']; ?>
" style="text-decoration: underline;"><?php echo $this->_tpl_vars['_modify']; ?>
</a>&nbsp;<a href="brand.php?do=del&id=<?php echo $this->_tpl_vars['item']['id']; ?>
" style="text-decoration: underline;"><?php echo $this->_tpl_vars['_delete']; ?>
</a></li>
            </ul>
          </div>
          </td>
          </tr>
          <?php endforeach; else: ?>
          <tr><td colspan="2"><div align="center"><?php echo $this->_tpl_vars['_no_datas_now']; ?>
</div></td></tr>
          <?php endif; unset($_from); ?>
          </table>  
        </div>
      </div>
      <div class="">
        <?php echo $this->_tpl_vars['ByPages']; ?>

      </div>
     
</div>
</div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>