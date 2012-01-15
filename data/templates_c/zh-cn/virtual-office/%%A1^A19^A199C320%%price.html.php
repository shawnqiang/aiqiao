<?php /* Smarty version 2.6.18, created on 2012-01-15 08:01:37
         compiled from price.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'formhash', 'price.html', 23, false),array('modifier', 'date_format', 'price.html', 36, false),)), $this); ?>
<?php $this->assign('page_title', ($this->_tpl_vars['_product_prices'])); ?>
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
        <p class="pull-right">
           <a title="<?php echo $this->_tpl_vars['_release']; ?>
<?php echo $this->_tpl_vars['ActionName']; ?>
" href="price.php?do=edit" class="btn"><?php echo $this->_tpl_vars['_add']; ?>
<?php echo $this->_tpl_vars['_product_prices']; ?>
</a>
        </p>
     </div>
     <div class="mod">
       <div class="mod-hd">
         <p><?php echo $this->_tpl_vars['_success_release']; ?>
<span class="font14b_org"> <?php echo $this->_tpl_vars['Amount']; ?>
</span> <?php echo $this->_tpl_vars['_number']; ?>
<?php echo $this->_tpl_vars['ActionName']; ?>
<?php echo $this->_tpl_vars['_product_prices']; ?>
</p>
         
       </div>
       <div class="mod-bd">
              <form name="listfrm" action="<?php echo $_SERVER['PHP_SELF']; ?>
" method="post">
              <?php echo smarty_function_formhash(array(), $this);?>

 
          <table class="bglist">
            <tr>
              <th><?php echo $this->_tpl_vars['_product_name']; ?>
</th>
              <th><?php echo $this->_tpl_vars['_prices']; ?>
</th>
              <th><?php echo $this->_tpl_vars['_times']; ?>
</th>
              <th><?php echo $this->_tpl_vars['_operation']; ?>
</th>
            </tr>
      <?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
            <tr align="center" class="bgwhite">
              <td><a href="<?php echo $this->_tpl_vars['SiteUrl']; ?>
product/detail.php?id=<?php echo $this->_tpl_vars['item']['product_id']; ?>
" style="text-decoration:underline" target="_blank"><?php echo $this->_tpl_vars['item']['title']; ?>
</a></td>
              <td><?php echo $this->_tpl_vars['item']['price']; ?>
<?php echo $this->_tpl_vars['Monetaries'][$this->_tpl_vars['item']['currency']]; ?>
/<?php echo $this->_tpl_vars['Measuries'][$this->_tpl_vars['item']['units']]; ?>
</td>
              <td class="orange"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['created'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>
              <td><a href="price.php?do=edit&id=<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['_modify']; ?>
</a>&nbsp;&nbsp;<a href="price.php?do=del&id=<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['_delete']; ?>
</a>&nbsp;&nbsp;</td>
            </tr>
      <?php endforeach; else: ?>
      <tr><td colspan="5"><a href="price.php?do=edit"><?php echo $this->_tpl_vars['_no_prices_and_add_it']; ?>
</a></td></tr>
      <?php endif; unset($_from); ?>
          </table>
          
          
      </form>
        <div><?php echo $this->_tpl_vars['ByPages']; ?>
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