<?php /* Smarty version 2.6.18, created on 2012-01-20 08:43:16
         compiled from default/register.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'formhash', 'default/register.html', 22, false),array('modifier', 'urldecode', 'default/register.html', 24, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['_member_reg']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script src="scripts/langs/<?php echo $this->_tpl_vars['JsLanguage']; ?>
.js" charset="<?php echo $this->_tpl_vars['charset']; ?>
"></script>
<?php echo '
<style type="text/css">
label.error {
  font-weight: bold;
  color: #b80000;
}
</style>
'; ?>

<div id="main" class="container">
	<div class="alert-message info ">
        <div class="member_register"><span class="step_11"><?php echo $this->_tpl_vars['_fill_reg_info']; ?>
</span><span class="step_02"><?php echo $this->_tpl_vars['_reg_success']; ?>
</span></div>
    </div>
    
    <div class="mod">
    	<div class="mod-hd">
    		<h2><span class="title_mouse"><?php echo $this->_tpl_vars['_fill_reg_info']; ?>
</span></h2> 
    	</div>
    	<div class="mod-bd">
    		<form name="regfrm" id="regfrm" method="post" action="" autocomplete="off">
            <?php echo smarty_function_formhash(array(), $this);?>

            <input type="hidden" name="register" value="<?php echo $_GET['type']; ?>
" />
            <input type="hidden" name="typename" value="<?php echo ((is_array($_tmp=$_GET['typename'])) ? $this->_run_mod_handler('urldecode', true, $_tmp) : urldecode($_tmp)); ?>
" />
            <input type="hidden" name="forward" value="<?php echo $_GET['forward']; ?>
" />
			<div class="clearfix">
				<label for="dataMemberUsername">
				<?php echo $this->_tpl_vars['_member_login_name']; ?>
<span>*</span>
				</label>
				<div class="input">
					<input type="text" name="data[member][username]" id="dataMemberUsername" value="" />
					<span class="help-inline" id="membernameDiv"><?php echo $this->_tpl_vars['_member_login_name_conditions']; ?>
</span>
				</div>
			</div>
			
			<div class="clearfix">
				<label for="dataMemberEmail">
				E-mail<?php echo $this->_tpl_vars['_colon']; ?>
<span>*</span>
				</label>
				<div class="input">
					<input name="data[member][email]" id="dataMemberEmail" value="" />
					<span class="help-inline" id="memberemailDiv"><?php echo $this->_tpl_vars['_email_conditions']; ?>
</span>
				</div>
			</div>
			
			<div class="clearfix">
				<label for="memberpass">
				<?php echo $this->_tpl_vars['_password']; ?>
<span>*</span>
				</label>
				<div class="input">
					<input type="password" name="data[member][userpass]" id="memberpass" value="" />
					<span class="help-inline"><?php echo $this->_tpl_vars['_password_conditions']; ?>
</span>
				</div>
			</div>
			
			<div class="clearfix">
				<label class="registerlabel" for="re_memberpass">
					<?php echo $this->_tpl_vars['_re_enter_password']; ?>
<span>*</span>
				</label>
				<div class="input">
					<input name="re_memberpass" type="password" id="re_memberpass" value="" />
					<span class="help-inline"><?php echo $this->_tpl_vars['_re_enter_up_password']; ?>
</span>
				</div>
			</div>
			
			
	
            <?php if ($this->_tpl_vars['ifcapt']): ?>
            <div class="clearfix">
            	<label class="registerlabel" for="login_auth">
				<?php echo $this->_tpl_vars['_code']; ?>

				</label>
				<div class="input">
					<span class="registercheck"><img class="registerpic" width="123" height="50" id="imgcaptcha" src="captcha.php?sid=<?php echo $this->_tpl_vars['sid']; ?>
" alt="<?php echo $this->_tpl_vars['_unclear_see_numbers']; ?>
" title="<?php echo $this->_tpl_vars['_unclear_see_numbers']; ?>
" />
					<p>
					<object type="application/x-shockwave-flash" data="images/play.swf?audio=captcha.php&amp;do=play&amp;bgColor1=#fff&amp;bgColor2=#fff&amp;iconColor=#777&amp;borderWidth=1&amp;borderColor=#000" height="19" width="19">
					<param name="movie" value="images/play.swf?audio=captcha.php&amp;do=play&amp;bgColor1=#fff&amp;bgColor2=#fff&amp;iconColor=#777&amp;borderWidth=1&amp;borderColor=#000" />
					</object>
					<br /><a href="javascript:;"><img src="<?php echo $this->_tpl_vars['theme_img_path']; ?>
images/gongqiu03.jpg" class="registerpic2" id="exchange_imgcapt" /></a></p></span>
					

				</div>
            </div>	
            <div class="clearfix">
            	<label>
            		<?php echo $this->_tpl_vars['_input_code']; ?>

            	</label>
            	<div class="input">
            		<input name="data[capt_register]" id="login_auth" type="text" value="" size="4" style="width:60px;">
            	</div>
            </div>	
            <?php endif; ?>
            <div class="clearfix">
            	<div class="input">
            	<p class="registerp2"><input name="licence_check" id="LicenseCheck" type="checkbox" onclick="if(this.checked)$('#Submit').removeAttr('disabled'); else $('#Submit').attr('disabled','true');" checked="checked" /><label for="LicenseCheck"><?php echo $this->_tpl_vars['_see_agree']; ?>
</label></p>
            	<div class="agree" id="agreements" style="display: none;"><?php echo $this->_tpl_vars['agreement']; ?>
</div>
            	</div>
            </div>
			
			
            <div class="actions">
            	<input type="submit" name="Submit" id="Submit" value="<?php echo $this->_tpl_vars['_register']; ?>
" class="btn primary" />
            </div>

			</form>
    	</div>

    </div>	
</div>
<script language="javascript" src="scripts/jquery/jquery.validate.js"></script>
<script language="javascript" src="scripts/validate.js" charset="<?php echo $this->_tpl_vars['charset']; ?>
"></script>
<?php echo '
<script>
$("#SeeAgreement").click(function() { 
	$("#agreements").toggle();
});
</script>
'; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>