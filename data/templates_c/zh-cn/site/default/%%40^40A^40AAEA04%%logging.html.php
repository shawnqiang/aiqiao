<?php /* Smarty version 2.6.18, created on 2012-01-11 16:18:28
         compiled from default/logging.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'formhash', 'default/logging.html', 16, false),array('modifier', 'default', 'default/logging.html', 30, false),array('modifier', 'date_format', 'default/logging.html', 32, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['_login']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
<style type="text/css">
label.error {
  font-weight: bold;
  color: #b80000;
}
</style>
'; ?>

<div id="main" class="container">
    <div class="alert-message info">
        <?php if ($this->_tpl_vars['pb_username'] == ""): ?><div><?php echo $this->_tpl_vars['_your_ongoing_operations']; ?>
<span><?php echo $this->_tpl_vars['_pls_login']; ?>
</span><?php echo $this->_tpl_vars['_continue']; ?>
</div><?php endif; ?>
    </div>
    <form name="loggingfrm" id="LoggingFrm" method="post" action="logging.php" autocomplete="off">
            <input type="hidden" name="action" value="logging">
            <?php echo smarty_function_formhash(array(), $this);?>

            <input type="hidden" name="forward" value="<?php echo $_GET['forward']; ?>
" />
    <div class="row">
        <div class="span7">
            <div class="mod">
                <div class="mod-hd">
                    <h3><?php echo $this->_tpl_vars['_member_login']; ?>
</h3>
                </div>
                <div class="mod-bd">
                    <?php if ($this->_tpl_vars['LoginError']): ?><?php echo $this->_tpl_vars['LoginError']; ?>
<?php endif; ?>
                
                    <?php if ($this->_tpl_vars['pb_username'] != ""): ?>
                    <table>
                        <tbody>
                            <tr><th><?php echo $this->_tpl_vars['_user_name']; ?>
</th><td><?php echo ((is_array($_tmp=@$this->_tpl_vars['pb_username'])) ? $this->_run_mod_handler('default', true, $_tmp, '`$_account_n_email_n_mobile`') : smarty_modifier_default($_tmp, '`$_account_n_email_n_mobile`')); ?>
</td></tr>
                            <tr><th><?php echo $this->_tpl_vars['_member_type']; ?>
</th><td><?php echo $this->_tpl_vars['member_info']['groupname']; ?>
<img src="<?php echo $this->_tpl_vars['member_info']['groupimage']; ?>
" /></td></tr>
                            <tr><th><?php echo $this->_tpl_vars['_your_last_login']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th><td><?php echo ((is_array($_tmp=$this->_tpl_vars['member_info']['last_login'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M")); ?>
</td></tr>
                        </tbody>
                    </table>
                    
                    <?php else: ?>
                    <div class="clearfix">
                        <label class="loadingname">
                        <?php echo $this->_tpl_vars['_user_name']; ?>

                        </label>
                        <div class="input">
                            <input type="text" style="color: #CCCCCC;" name="data[login_name]" id="LoginName" value="<?php echo $this->_tpl_vars['_account_n_email_n_mobile']; ?>
" tabindex="1">
                            <p><input type="checkbox" name="remember_pass" id="RememberPass" value="1" title="<?php echo $this->_tpl_vars['_remember_password']; ?>
">&nbsp;<?php echo $this->_tpl_vars['_remember_password']; ?>
</p>
                        </div>
                    </div>
                    
                    <div class="clearfix">
                        <label class="loadingname">
                        <?php echo $this->_tpl_vars['_password']; ?>

                        </label>
                        <div class="input">
                            <input name="data[login_pass]" type="password" id="LoginPass" value="" tabindex="2">&nbsp;<a href="getpasswd.php"><?php echo $this->_tpl_vars['_forget_password']; ?>
</a>
                        </div>

                    </div>
                    
                   
                    <?php if ($this->_tpl_vars['ifcapt']): ?>
                    <div class="clearfix">
                        <label class="loadingname">
                        <?php echo $this->_tpl_vars['_code']; ?>

                        </label>
                        <div class="input">
                            <input name="data[capt_logging]" id="LoginAuth" type="text" value="" size="5" maxlength="5" tabindex="3"><a href="javascript:;" onclick="$('#imgcaptcha').attr('src','captcha.php?sid=' + Math.random());return false;"><img src="captcha.php" id="imgcaptcha" alt="<?php echo $this->_tpl_vars['_unclear_see_numbers']; ?>
" title="<?php echo $this->_tpl_vars['_unclear_see_numbers']; ?>
" width="128"/></a>
                        </div>
                        <p><?php echo $this->_tpl_vars['_refresh_code']; ?>
</p>
                    </div>
                    <?php endif; ?>
                    <div class="actions" id="btnLoginDiv">
                        <input type="submit" name="log_in" id="LogIn" value="<?php echo $this->_tpl_vars['_login']; ?>
" class="btn" />
                       <input type="reset" name="reset" value="<?php echo $this->_tpl_vars['_reset']; ?>
" class="btn"/>
                    </div>
                   
                    <?php endif; ?>
                    
                    <p><?php echo $this->_tpl_vars['_questions_service_hotline']; ?>
<?php echo $this->_tpl_vars['service_tel']; ?>
</p>
                </div>
            </div>
           
        </div>
        <div class="span10">
            <div class="mod">
                <div class="mod-hd">
                    <h3><?php echo $this->_tpl_vars['_free_register']; ?>
</h3>
                </div>
                <div class="mod-bd">
                    <ul class="info-list">
                        <li><a><img src="<?php echo $this->_tpl_vars['theme_img_path']; ?>
images/logging_01.gif" alt="" /><p><b><?php echo $this->_tpl_vars['_products_show']; ?>
</b><br /><?php echo $this->_tpl_vars['_illustrated_display_product']; ?>
</p></a></li>
                        <li><a><img src="<?php echo $this->_tpl_vars['theme_img_path']; ?>
images/logging_02.gif" alt="" /><p><b><?php echo $this->_tpl_vars['_online_business']; ?>
</b><br /><?php echo $this->_tpl_vars['_internet_power_promotion']; ?>
</p></a></li>
                        <li><a><img src="<?php echo $this->_tpl_vars['theme_img_path']; ?>
images/logging_03.gif" alt="" /><p><b><?php echo $this->_tpl_vars['_hr']; ?>
</b><br /><?php echo $this->_tpl_vars['_talents_join']; ?>
</p></a></li>
                        <li><a><img src="<?php echo $this->_tpl_vars['theme_img_path']; ?>
images/logging_04.gif" alt="" /><p><b><?php echo $this->_tpl_vars['_agent_join']; ?>
</b><br /><?php echo $this->_tpl_vars['_development_agent_join']; ?>
</p></a></li>
                        <li><a><img src="<?php echo $this->_tpl_vars['theme_img_path']; ?>
images/logging_05.gif" alt="" /><p><b><?php echo $this->_tpl_vars['_company_news']; ?>
</b><br /><?php echo $this->_tpl_vars['_display_company_news']; ?>
</p></a></li>
                        <li><a><img src="<?php echo $this->_tpl_vars['theme_img_path']; ?>
images/logging_06.gif" alt="" /><p><b><?php echo $this->_tpl_vars['_classifieds']; ?>
</b><br /><?php echo $this->_tpl_vars['_free_classifieds']; ?>
</p></a></li>
                    </ul>
                    <div class="member_reg">
                    <?php if ($this->_tpl_vars['pb_username'] != ""): ?>
                           <input type="button" value="<?php echo $this->_tpl_vars['_into_office_room']; ?>
" class="btn" onclick="redirect('virtual-office/index.php');return false;"/>
                           <?php else: ?>
                           <input type="button" value="<?php echo $this->_tpl_vars['_register']; ?>
" class="btn" onclick="redirect('member.php');return false;"/>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    </form> 
</div>

<script src="scripts/langs/<?php echo $this->_tpl_vars['JsLanguage']; ?>
.js" charset="<?php echo $this->_tpl_vars['charset']; ?>
"></script>
<script language="javascript" src="scripts/jquery/jquery.validate.js"></script>
<script language="javascript" src="scripts/validate.js" charset="<?php echo $this->_tpl_vars['charset']; ?>
"></script>
<script>
var account_n_email_n_mobile = "<?php echo $this->_tpl_vars['_account_n_email_n_mobile']; ?>
";
</script>
<?php echo '
<script>
$(document).ready(function(){
	$("#LoginName").focus(function(){
		if($("#LoginName").val()==account_n_email_n_mobile){
			$("#LoginName").val(\'\').css(\'color\', \'#000\');
		};
	}).blur(function(){
		if($("#LoginName").val()==\'\'){
		$("#LoginName").val(account_n_email_n_mobile).css("color","#ccc")};
	});
});
</script>
'; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>