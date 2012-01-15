<?php /* Smarty version 2.6.18, created on 2012-01-15 07:54:31
         compiled from ads_edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'formhash', 'ads_edit.html', 26, false),)), $this); ?>
<?php $this->assign('page_title', ($this->_tpl_vars['_self_advertising'])); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
<script>
$(document).ready(function() {
	$("#Frm1").submit(function(){
       $("#PayName").val($("#PayId option:selected").text());
    })
});
</script>
'; ?>

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
     
     <div class="hint"><?php echo $this->_tpl_vars['_sure_and_select_action']; ?>
</div>
	  <form name="frm1" id="Frm1" action="" method="post">
	  <?php echo smarty_function_formhash(array(), $this);?>

	  <input type="hidden" name="do" value="ads">
	  <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['item']['id']; ?>
">
	  <input type="hidden" name="paynow" id="Paynow" value="">
	  <input type="hidden" name="pay_name" id="PayName" value="">
       <table class="offer_info_content">
          <tr>
            <th class="circle_left"><?php echo $this->_tpl_vars['_ads_title']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
             <td class="circle_right"><?php echo $this->_tpl_vars['item']['name']; ?>
</td>
          </tr>
          <tr>
            <th><?php echo $this->_tpl_vars['_the_price']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
            <td><?php echo $this->_tpl_vars['item']['price']; ?>
<?php echo $this->_tpl_vars['_money_unit']; ?>
</td>
          </tr>
          <tr>
             <th><?php echo $this->_tpl_vars['_notes']; ?>
</th>
             <td><?php echo $this->_tpl_vars['item']['description']; ?>
</td>
          </tr>
		  <tr>
			<th><?php echo $this->_tpl_vars['_please_select']; ?>
</th>
			<td><label>
			  <select name="pay_id" id="PayId">
					  <?php $_from = $this->_tpl_vars['payments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
					  <option value="<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['title']; ?>
</option>
					  <?php endforeach; endif; unset($_from); ?>
					</select>
			</label></td>
		  </tr>
          <tr>
             <th class="circle_bottomleft"></th>
             <td class="circle_bottomright"><input name="send1" class="btn primary" type=submit id="Submit1" value="<?php echo $this->_tpl_vars['_submit_order']; ?>
">&nbsp;&nbsp;<input name="send1" class="btn" type=submit id="Submit2" value="<?php echo $this->_tpl_vars['_submit_order_and_pay']; ?>
" onclick="$('#Paynow').val('y');"></td>
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