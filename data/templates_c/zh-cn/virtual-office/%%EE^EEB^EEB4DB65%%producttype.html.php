<?php /* Smarty version 2.6.18, created on 2012-01-14 09:56:08
         compiled from producttype.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'formhash', 'producttype.html', 20, false),)), $this); ?>
<?php $this->assign('page_title', ($this->_tpl_vars['_product_sort'])); ?>
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
       <div class="mod">
         <div class="mod-hd">
           <h2><?php echo $this->_tpl_vars['_friendly_tip']; ?>
</span><?php echo $this->_tpl_vars['_adjustment_sequence']; ?>
</h2>
         </div>
         <div class="mod-bd">
           <form name="prodtypefrm" action="producttype.php" method="post">
          <?php echo smarty_function_formhash(array(), $this);?>

           <table class="product_type">
                <tr>
                  <th colspan="4"><strong><?php echo $this->_tpl_vars['_series_sort_product']; ?>
</strong></th>
                </tr>
           <?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['producttype'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['producttype']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['producttype']['iteration']++;
?>
                <tr>
                  <td width="6%" align="center"><img src="images/on.gif"></td>
                  <td width="40%" align="left"><?php echo $this->_tpl_vars['item']['name']; ?>
</td>
                  <td align="center"><a href="producttype.php?do=edit&id=<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['_modify']; ?>
</a></td>
                  <td align="center"><a href="producttype.php?do=del&id=<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['_delete']; ?>
</a></td>
                </tr>
          <?php endforeach; endif; unset($_from); ?>
              </table>
          </form>
         
        <form name="edit_frm" method="post" action="producttype.php" autocomplete="off">
        <?php echo smarty_function_formhash(array(), $this);?>

            <table>
            <tr>
              <td colspan="2">&nbsp;<?php echo $this->_tpl_vars['_product_sort_name']; ?>

                <input name="data[name]" type="Text" value="">
                <input type="Submit" name="save" value="&nbsp;<?php echo $this->_tpl_vars['_add']; ?>
&nbsp;"></td>
            </tr>
            </table>
        </form>
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