<?php /* Smarty version 2.6.18, created on 2012-01-19 10:16:49
         compiled from pms_send.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'formhash', 'pms_send.html', 45, false),)), $this); ?>
<?php $this->assign('page_title', ($this->_tpl_vars['_send_message'])); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script src="../scripts/jquery/jquery.textbox.js" charset="<?php echo $this->_tpl_vars['charset']; ?>
"></script>
<script>
var allows_maximum_input = "<?php echo $this->_tpl_vars['_allows_maximum_input']; ?>
";
var can_also_enter = "<?php echo $this->_tpl_vars['_can_also_enter']; ?>
";
</script>
<?php echo '
<script>
jQuery(document).ready(function($) {
	$("#Content").textbox({
		maxLength: 255,
		onInput: function(event, status) {
			$("#txtTips").html(allows_maximum_input+" <strong style=\'font-family:Arial;font-size:1.5em;\'>" + status.maxLength + "</strong> "+can_also_enter+" <strong style=\'font-family:Arial;font-size:1.5em;\'>" + status.leftLength + "</strong>");
		}
	});
	$("#Frm1").validate({
	submitHandler: function(form) {
		$(form).find(":submit").attr("disabled", true).attr("value",pb_lang.DO_PROCESSING);
		form.submit();
	}
	});
})
</script>
'; ?>

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
</h2>
        </div>
        <div class="mod">
          <div class="mod-hd">
            <div class="hint"><?php echo $this->_tpl_vars['_must_input_with_star']; ?>
</div>
          </div>
          <div class="mod-bd">
            <form name="sendmsgfrm" id="Frm1" action="pms.php" method="post">
    <?php echo smarty_function_formhash(array(), $this);?>

       <table class="offer_info_content">
          <tr>
            <th class="circle_left"><font color="#FF6600">*</font><?php echo $this->_tpl_vars['_send_to']; ?>
</th>
             <td class="circle_right"><input name="to" type="text" id="To" size="30" value="<?php echo $this->_tpl_vars['item']['to']; ?>
" class="required"><font color="#666666"><?php echo $this->_tpl_vars['_send_other_username']; ?>
</font></td>
          </tr>
          <tr>
            <th> <font color="#FF6600">*</font><?php echo $this->_tpl_vars['_theme_n']; ?>
</th>
            <td><input name="pms[title]" type="text" id="title" size="30" value="" class="required"></td>
          </tr>
          <tr>
             <th><font color="#FF6600">*</font><?php echo $this->_tpl_vars['_content']; ?>
</th>
             <td><textarea name="pms[content]" id="Content" cols="50" rows="6" wrap="VIRTUAL" class="required"></textarea><div id="txtTips"></div></td>
          </tr>
          <tr>
             <th class="circle_bottomleft"></th>
             <td class="circle_bottomright"><input name="send" type="submit" class="btn primary" id="Send" value=" <?php echo $this->_tpl_vars['_send']; ?>
 ">&nbsp;&nbsp;<input name=reset type=reset id="reset" class="btn" value=" <?php echo $this->_tpl_vars['_cancel']; ?>
 "></td>
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