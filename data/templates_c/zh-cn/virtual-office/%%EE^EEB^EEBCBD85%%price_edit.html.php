<?php /* Smarty version 2.6.18, created on 2012-01-14 09:43:16
         compiled from price_edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'formhash', 'price_edit.html', 26, false),array('function', 'html_options', 'price_edit.html', 46, false),)), $this); ?>
<?php $this->assign('page_title', ($this->_tpl_vars['_product_prices'])); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
<script>
jQuery(document).ready(function($) {
	$("#Frm1").validate({
	submitHandler: function(form) {
		$(form).find(":submit").attr("disabled", true).attr("value",pb_lang.DO_PROCESSING);
		form.submit();
	}
	});
})
</script>
'; ?>

<div id="main" class="contianer">
    <div class="row">
       <div class="span4 side-bar">
         <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
       </div>
    
     <div class="span12 main-content">
     
     <div class="offer_info_title"><h2><?php echo $this->_tpl_vars['_product_prices']; ?>
</h2></div>

	  <form method="post" action="price.php" id="Frm1">
	  <?php echo smarty_function_formhash(array(), $this);?>

	  <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['item']['id']; ?>
">
	  <input type="hidden" name="do" value="price">
       <div class="hint"><?php echo $this->_tpl_vars['_must_input_with_star']; ?>
</div>
        <table class="offer_info_content">
			<?php if ($this->_tpl_vars['item']['productname']): ?>
			<input type="hidden" name="product[name]" value="<?php echo $this->_tpl_vars['item']['productname']; ?>
">
			<input type="hidden" name="product[id]" value="<?php echo $this->_tpl_vars['item']['product_id']; ?>
">
			  <tr>
				<th> <?php echo $this->_tpl_vars['_product_name']; ?>
</th>
				<td class="tdright"><?php echo $this->_tpl_vars['item']['productname']; ?>
</td>
			  </tr>
			<?php else: ?>
			  <tr>
				<th><font class="red">*</font><?php echo $this->_tpl_vars['_product_name']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
				<td class="tdright"><input type="text" name="product[name]" value="" class="required"></td>
			  </tr>
			<?php endif; ?>
			  <tr>
				<th><font class="red">*</font><?php echo $this->_tpl_vars['_the_price_n']; ?>
</th>
				<td><input name="price[price]" type="text" id="dataProductName" value="<?php echo $this->_tpl_vars['item']['price']; ?>
" class="required">&nbsp;<select name="price[currency]"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['Monetaries'],'selected' => $this->_tpl_vars['item']['currency']), $this);?>

				</select><font size="4" color=""> / </font><select name="price[units]">
				<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['Measuries'],'selected' => $this->_tpl_vars['item']['units']), $this);?>
	
				</select></td>
			  </tr>
			  <tr>
                        <th><?php echo $this->_tpl_vars['_price_description']; ?>
</th>
                        <td class="tdright"><textarea name="price[description]" id="dataProductContent" rows="8" wrap="VIRTUAL" style="width:370px;"><?php echo $this->_tpl_vars['item']['description']; ?>
</textarea></td>
                      </tr>
			  <tr>
			  <tr>
				<th class="circle_bottomleft"></th>
				<td class="circle_bottomright"><input name="save" type="submit" id="save" value=" <?php echo $this->_tpl_vars['_confirm_submit']; ?>
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