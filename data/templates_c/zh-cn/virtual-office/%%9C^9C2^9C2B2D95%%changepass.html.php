<?php /* Smarty version 2.6.18, created on 2012-01-19 10:17:18
         compiled from changepass.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'formhash', 'changepass.html', 31, false),)), $this); ?>
<?php $this->assign('page_title', ($this->_tpl_vars['_change_password'])); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
<script>
$(document).ready(function() {
	$("#ChangePassFrm").validate({
	submitHandler: function(form) {
		$(form).find(":submit").attr("disabled", true).attr("value",pb_lang.DO_PROCESSING);
		form.submit();
	}
	})
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
         <form name="changepassfrm" id="ChangePassFrm" method="post">
        <?php echo smarty_function_formhash(array(), $this);?>

        <input type="hidden" name="action" value="checkpasswd" />
         <table class="offer_info_content">
                  <tr>
                    <th class="circle_left"><span class="fontred"> *</span><?php echo $this->_tpl_vars['_old_password']; ?>
</th>
                  <td class="circle_right"><input name="oldpass" type="password" id="oldpass" class="required" value=""><span id="checkoldpwdDiv"></span> </td>
                </tr>
                <tr>
                  <th><span class="fontred"> *</span> <?php echo $this->_tpl_vars['_new_password_n']; ?>
</th>
                  <td><input name="newpass" type="password" id="newpass" class="required" minlength="5"></td>
                </tr>
                <tr>
                  <th><span class="fontred"> *</span> <?php echo $this->_tpl_vars['_repeat']; ?>
<?php echo $this->_tpl_vars['_new_password_n']; ?>
</th>
                  <td><input name="re_newpass" type="password" id="re_newpass" class="required" minlength="5" equalTo="#newpass"></td>
                </tr> 
                <tr>
                  <th class="circle_bottomleft"></th>
                  <td class="circle_bottomright"><input name="btn_change_pwd" class="btn primary" type="submit" id="BtnChangePwd" value="<?php echo $this->_tpl_vars['_i_sure']; ?>
<?php echo $this->_tpl_vars['_change_password']; ?>
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