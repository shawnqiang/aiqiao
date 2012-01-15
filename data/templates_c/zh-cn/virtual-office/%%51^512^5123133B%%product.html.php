<?php /* Smarty version 2.6.18, created on 2012-01-15 08:00:23
         compiled from product.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'product.html', 62, false),array('modifier', 'default', 'product.html', 62, false),array('modifier', 'strip_tags', 'product.html', 62, false),array('function', 'the_url', 'product.html', 66, false),)), $this); ?>
<?php $this->assign('page_title', ($this->_tpl_vars['_product_management'])); ?>
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
      <div class="page-header" style="overflow:hidden;">
        <h2 class="pull-left"><?php echo $this->_tpl_vars['_product_management']; ?>
</h2>
        <div class="pull-right">
        <a href="product.php?do=import" class="btn" style="margin-left:10px;"><?php echo $this->_tpl_vars['_data_import']; ?>
 <?php echo $this->_tpl_vars['_product']; ?>
</a><a href="price.php?do=edit" class="btn" style="margin-left:10px;"><?php echo $this->_tpl_vars['_price_allow']; ?>
</a><a href="product.php?do=edit" class="btn" style="margin-left:10px;"><?php echo $this->_tpl_vars['_release_products']; ?>
</a>
        </div>
      </div>
      <div class="notice">
        <?php echo $this->_tpl_vars['_tips_buy_no_repeat']; ?>
"<a href="offer.php" class="orange"><?php echo $this->_tpl_vars['_modify']; ?>
<?php echo $this->_tpl_vars['_our_offer']; ?>
</a>"<?php echo $this->_tpl_vars['_repeat_function']; ?>

      </div> 
     
      
	
		  <form name="typefrm" id="TypeFrm" method="get" action="">
		   <table class="product_sort">
            <tr>
              <td><?php echo $this->_tpl_vars['_according']; ?>

                  <select name="typeid" onchange="$('#TypeFrm').submit();">
                    <option value="0"><?php echo $this->_tpl_vars['_all_categories']; ?>
</option>
          				  <?php $_from = $this->_tpl_vars['ProductTypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['producttypes'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['producttypes']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['pt']):
        $this->_foreach['producttypes']['iteration']++;
?>
          				  <option value="<?php echo $this->_tpl_vars['pt']['id']; ?>
" <?php if ($this->_tpl_vars['pt']['id'] == $_GET['typeid']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['pt']['name']; ?>
</option>
          					<?php endforeach; endif; unset($_from); ?>
                  </select>
              </td>
             <td><a href="<?php echo $this->_tpl_vars['plink']; ?>
" title="<?php echo $this->_tpl_vars['_prev_page']; ?>
">Previous</a>&nbsp;<a href="<?php echo $this->_tpl_vars['nlink']; ?>
" title="<?php echo $this->_tpl_vars['_next_page']; ?>
">Next</a></td>
            </tr>
          </table>
		  </form>
	     <table class="pagedown">
	  <tr>
		<td>
		  <div id="msg" align="center"><?php echo $this->_tpl_vars['Msg']; ?>
</div></td>
	  </tr>
	  </table>
         <table class="bglist">
              <!-- product -->
                    <col width="75">
                    <col width="260">
                    <col width="80">
                    <col width="120">
                    <col width="120">
                <tr>
                   <th><?php echo $this->_tpl_vars['_sample_image']; ?>
</th>
                   <th><?php echo $this->_tpl_vars['_content']; ?>
</th>
                   <th><?php echo $this->_tpl_vars['_product']; ?>
</th>
                   <th><?php echo $this->_tpl_vars['_release']; ?>
</th>
                   <th><?php echo $this->_tpl_vars['_operation']; ?>
</th>
                </tr> 
              <?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                <tr>
                <td><img src="<?php echo $this->_tpl_vars['item']['image']; ?>
" width=75 height=75></td>
                <td style='word-break: break-all'>
                    <div style="text-align:left;"><strong><a href="product.php?do=edit&id=<?php echo $this->_tpl_vars['item']['id']; ?>
" style="text-decoration:underline;"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 25) : smarty_modifier_truncate($_tmp, 25)); ?>
</a></strong><br />[<?php echo $this->_tpl_vars['CheckStatus'][$this->_tpl_vars['item']['status']]; ?>
][<?php echo ((is_array($_tmp=@$this->_tpl_vars['ProductSorts'][$this->_tpl_vars['item']['sort_id']])) ? $this->_run_mod_handler('default', true, $_tmp, ($this->_tpl_vars['_ordinary_goods'])) : smarty_modifier_default($_tmp, ($this->_tpl_vars['_ordinary_goods']))); ?>
]<br /><?php echo $this->_tpl_vars['_description']; ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['content'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 100) : smarty_modifier_truncate($_tmp, 100)); ?>
</div>
                </td>
                <td><?php if ($this->_tpl_vars['item']['state'] == 1): ?><a href="<?php echo $_SERVER['PHP_SELF']; ?>
?do=state&type=down&id=<?php echo $this->_tpl_vars['item']['id']; ?>
" title="<?php echo $this->_tpl_vars['_web_down_shelves']; ?>
"><img src="images/state1.gif"></a><?php else: ?><a href="<?php echo $_SERVER['PHP_SELF']; ?>
?do=state&type=up&id=<?php echo $this->_tpl_vars['item']['id']; ?>
" title="<?php echo $this->_tpl_vars['_goods_on_shelves']; ?>
"><img src="images/state0.gif"></a><?php endif; ?></td>
                <td><a href="offer.php?do=pro2offer&productid=<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['_as_release_supply']; ?>
</a>&nbsp;<a href="price.php?do=edit&productid=<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['_prices']; ?>
</a></td>
                <td><a href="product.php?do=edit&id=<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['_modify']; ?>
</a>&nbsp;&nbsp;[<a href="<?php echo smarty_function_the_url(array('id' => ($this->_tpl_vars['item']['id']),'module' => 'product'), $this);?>
" target="_blank" title="<?php echo $this->_tpl_vars['_click_preview']; ?>
"><?php echo $this->_tpl_vars['_click_preview']; ?>
</a>]&nbsp;&nbsp;<a href="<?php echo $_SERVER['PHP_SELF']; ?>
?act=del&id=<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['_delete']; ?>
</a></td>
                </tr> 
              <?php endforeach; endif; unset($_from); ?>
        </table> 
         <!-- :~product  -->
        <div><?php echo $this->_tpl_vars['pagenav']; ?>
&nbsp;</div>
        
      
    
</div>

</div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>