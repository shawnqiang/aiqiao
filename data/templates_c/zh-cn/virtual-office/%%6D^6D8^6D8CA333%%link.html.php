<?php /* Smarty version 2.6.18, created on 2012-01-19 10:18:06
         compiled from link.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'formhash', 'link.html', 19, false),)), $this); ?>
<?php $this->assign('page_title', ($this->_tpl_vars['_friendlink'])); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="main" class="container">
    <div class="row">
       <div class="span4 side-bar l-col">
         <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
       </div>
    
     <div class="span12 main-content r-col">
     <div class="page-header">
       <h2><?php echo $this->_tpl_vars['page_title']; ?>
<a href="link.php?do=edit"  class="btn pull-right"><?php echo $this->_tpl_vars['_add_partners']; ?>
</a></h2>
     </div>
     <div class="mod">
       <div class="mod-hd">
         <div><strong><?php echo $this->_tpl_vars['_our_partners']; ?>
</strong><?php echo $this->_tpl_vars['_colon']; ?>
</div>
       </div>
       <div class="mod-bd">
         <form name="companylinkfrm" action="link.php" method="post">
        <?php echo smarty_function_formhash(array(), $this);?>

          <table class="news">
                <tr align="center">
                  <th><input type="checkbox" name="check_all" title="<?php echo $this->_tpl_vars['_all_select']; ?>
"></th>
                  <th><strong><?php echo $this->_tpl_vars['_company_name']; ?>
</strong></th>
                </tr>
        <?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                <tr align="center" class="bggray">
                  <td><input type="checkbox" name="id[]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" rel="check_item"></td>
                  <td align="center"><a target="_blank" title="<?php echo $this->_tpl_vars['_access']; ?>
<?php echo $this->_tpl_vars['item']['title']; ?>
" href="<?php echo $this->_tpl_vars['item']['url']; ?>
"><?php echo $this->_tpl_vars['item']['title']; ?>
</a></td>
                  </tr>
          <?php endforeach; else: ?>
        <?php endif; unset($_from); ?>
        </table>
         <table class="trade_line">
            
          <tr align="center" valign="bottom">
            <td height="40"><input  name="delete" type="submit" id="delete" class="btn" value= "<?php echo $this->_tpl_vars['_delete_select']; ?>
" onClick="return test();"></td>
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