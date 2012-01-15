<?php /* Smarty version 2.6.18, created on 2012-01-13 15:41:20
         compiled from favor.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'formhash', 'favor.html', 20, false),)), $this); ?>
<?php $this->assign('page_title', ($this->_tpl_vars['_favorites'])); ?>
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
        <?php echo $this->_tpl_vars['_favorites_tips']; ?>

      </div>
    
         
      <form name="listfrm" action="<?php echo $_SERVER['PHP_SELF']; ?>
" method="post">
	   <?php echo smarty_function_formhash(array(), $this);?>

        <table>
          <tbody>
            <tr>
              <th><?php echo $this->_tpl_vars['_type']; ?>
</th>
            <th><?php echo $this->_tpl_vars['_title']; ?>
</th>
            <th><?php echo $this->_tpl_vars['_collection_time']; ?>
</th>
            <th><?php echo $this->_tpl_vars['_selected']; ?>
</th>
            </tr>
         
			       <?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
            <tr>
              <td class="orange"><?php echo $this->_tpl_vars['TradeTypes'][$this->_tpl_vars['item']['type_id']]; ?>
</td>
              <td><a href="<?php echo $this->_tpl_vars['SiteUrl']; ?>
offer/detail.php?id=<?php echo $this->_tpl_vars['item']['offerid']; ?>
" target="_blank" style="text-decoration:  underline;"><?php echo $this->_tpl_vars['item']['title']; ?>
</a>&nbsp;</td>
              <td><?php echo $this->_tpl_vars['item']['pubdate']; ?>
&nbsp;</td>
              <td><input name="id[]" type="checkbox" id="id_<?php echo $this->_tpl_vars['item']['id']; ?>
" value="<?php echo $this->_tpl_vars['item']['id']; ?>
"></td>
            </tr>
			     <?php endforeach; endif; unset($_from); ?>
           </tbody>
          </table>
        
		    <?php if ($this->_tpl_vars['Items']): ?>
          <div class="actions">
             <input type="submit" class="btn" name="del" value="<?php echo $this->_tpl_vars['_delete_message']; ?>
" onClick="return window.confirm<?php echo $this->_tpl_vars['_ok_delete']; ?>
">
          </div>
       
		    <?php else: ?>
        <div class="notice">
          <?php echo $this->_tpl_vars['_no_collection_message']; ?>

        </div>
		    <?php endif; ?>
        <div><?php echo $this->_tpl_vars['ByPages']; ?>
</div>
         
      </form>
      </div>
  </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>