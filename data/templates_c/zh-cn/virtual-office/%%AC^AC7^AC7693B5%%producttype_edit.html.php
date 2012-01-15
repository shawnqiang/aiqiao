<?php /* Smarty version 2.6.18, created on 2012-01-05 15:07:29
         compiled from producttype_edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'formhash', 'producttype_edit.html', 17, false),)), $this); ?>
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
     
     <div class="offer_info_title"><h2><?php echo $this->_tpl_vars['page_title']; ?>
</h2></div>
     <div class="blank"></div>
		  <form name="prodtypeeditfrm" method="post" action="producttype.php" autocomplete="off">
		  <?php echo smarty_function_formhash(array(), $this);?>

			  <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['item']['id']; ?>
">
			<table width="100%" border="0" cellpadding="5" cellspacing="1" class="bgblue">
				<tr align="center">
				  <td width="40%" colspan="5">&nbsp;<?php echo $this->_tpl_vars['_product_sort_name']; ?>

					<input name="data[name]" type="text" value="<?php echo $this->_tpl_vars['item']['name']; ?>
">
					<input type="submit" name="save" value="<?php echo $this->_tpl_vars['_saving']; ?>
"></td>
				  </tr>
          </table>
		</form>		 
	</div>
	</div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>