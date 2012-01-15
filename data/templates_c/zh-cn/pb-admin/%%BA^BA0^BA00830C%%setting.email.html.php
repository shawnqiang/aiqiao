<?php /* Smarty version 2.6.18, created on 2012-01-01 06:06:01
         compiled from setting.email.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'setting.email.html', 25, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script src="../scripts/jquery/facebox/facebox.js" type="text/javascript"></script>
<link href="../scripts/jquery/facebox/facebox.css" media="screen" rel="stylesheet" type="text/css"/>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_setting_global']; ?>
 &raquo; Email<?php echo $this->_tpl_vars['_setting']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3>Email<?php echo $this->_tpl_vars['_setting']; ?>
</h3> 
</div>
<div class="info"> 
    <form method="post" action="setting.php" name="edit_frm" id="EditFrm">
    <input type="hidden" name="do" id="Do" value="" />
        <table class="infoTable"> 
            <tr> 
                <th class="paddingT15"> 
              <label for="email_type"><?php echo $this->_tpl_vars['_mail_sent_by']; ?>
</label></th> 
          <td class="paddingT15 wordSpacing5"> 
                    <label for="mail_sendtype1"><input type="radio" name="data[setting][send_mail]" id="mail_sendtype1" value="1">&nbsp;<?php echo $this->_tpl_vars['_built_in_mail_server']; ?>
</label>&nbsp;<label for="mail_sendtype2"><input type="radio" name="data[setting][send_mail]" id="mail_sendtype2" value="2">&nbsp;<?php echo $this->_tpl_vars['_other_smtp_server']; ?>
</label>&nbsp;</td> 
            </tr>
            <tbody id="smtp_set" style="<?php if ($this->_tpl_vars['item']['SEND_MAIL'] == 1): ?>display:none;<?php endif; ?>">
            <tr> 
                <th class="paddingT15"> 
                    <?php echo $this->_tpl_vars['_smtp_server_url']; ?>
</th> 
                <td class="paddingT15 wordSpacing5"> 
                    <input class="infoTableInput" type="text" name="data[setting][smtp_server]" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['SMTP_SERVER'])) ? $this->_run_mod_handler('default', true, $_tmp, 'smtp.qq.com') : smarty_modifier_default($_tmp, 'smtp.qq.com')); ?>
" /></td> 
            </tr> 
            <tr> 
                <th class="paddingT15"> 
                    <?php echo $this->_tpl_vars['_smtp_server_port']; ?>
</th> 
                <td class="paddingT15 wordSpacing5"> 
                    <input class="infoTableInput" type="text" name="data[setting][smtp_port]" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['SMTP_PORT'])) ? $this->_run_mod_handler('default', true, $_tmp, '25') : smarty_modifier_default($_tmp, '25')); ?>
" /></td> 
            </tr> 
            <tr> 
                <th class="paddingT15"> 
                    <?php echo $this->_tpl_vars['_requires_authentication']; ?>
</th> 
                <td class="paddingT15 wordSpacing5"> 
                <input type="radio" name="data[setting][smtp_auth]" id="smtp_auth1" value="1" <?php if ($this->_tpl_vars['item']['SMTP_AUTH'] == '1'): ?>checked="checked"<?php endif; ?> /><?php echo $this->_tpl_vars['_correct']; ?>

                <input type="radio" name="data[setting][smtp_auth]" id="smtp_auth2" value="0" <?php if ($this->_tpl_vars['item']['SMTP_AUTH'] == '0'): ?>checked="checked"<?php endif; ?> /><?php echo $this->_tpl_vars['_deny']; ?>

                </td> 
            </tr> 
            <tr> 
                <th class="paddingT15"> 
                    <?php echo $this->_tpl_vars['_sender_from']; ?>
</th> 
                <td class="paddingT15 wordSpacing5"> 
                <input class="infoTableInput" type="text" name="data[setting][mail_from]" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['MAIL_FROM'])) ? $this->_run_mod_handler('default', true, $_tmp, 'email@host.com') : smarty_modifier_default($_tmp, 'email@host.com')); ?>
" /></td> 
            </tr>
            <tr> 
                <th class="paddingT15"> 
                    <?php echo $this->_tpl_vars['_sender_name']; ?>
</th> 
                <td class="paddingT15 wordSpacing5"> 
                    <input class="infoTableInput" type="text" name="data[setting][mail_fromwho]" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['MAIL_FROMWHO'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['sitetitle']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['sitetitle'])); ?>
" /></td> 
            </tr> 
            <tr> 
                <th class="paddingT15"> 
                    <?php echo $this->_tpl_vars['_smtp_authentication']; ?>
 <?php echo $this->_tpl_vars['_cp_username_n']; ?>
</th> 
                <td class="paddingT15 wordSpacing5"> 
                <input class="infoTableInput" type="text" name="data[setting][auth_username]" id="auth_username" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['AUTH_USERNAME'])) ? $this->_run_mod_handler('default', true, $_tmp, 'username') : smarty_modifier_default($_tmp, 'username')); ?>
" /></td> 
            </tr>
            <tr> 
                <th class="paddingT15"> 
                    <?php echo $this->_tpl_vars['_smtp_authentication']; ?>
 <?php echo $this->_tpl_vars['_method']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th> 
                <td class="paddingT15 wordSpacing5"> 
                <input class="infoTableInput" type="text" name="data[setting][auth_protocol]" id="auth_auth_protocol" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['AUTH_PROTOCOL'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
" /><span class="gray"><?php echo $this->_tpl_vars['_unless_necessary_or_do_not_fill']; ?>
</span></td> 
            </tr>
            <tr> 
                <th class="paddingT15"> 
                    <?php echo $this->_tpl_vars['_smtp_authentication']; ?>
 <?php echo $this->_tpl_vars['_password_n']; ?>
</th> 
                <td class="paddingT15 wordSpacing5"> 
                <input class="infoTableInput" name="data[setting][auth_password]" type="password" id="auth_password" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['AUTH_PASSWORD'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
"/></td> 
            </tr>
            </tbody>
            <tr> 
                <th class="paddingT15"> 
                    <?php echo $this->_tpl_vars['_test']; ?>
 <?php echo $this->_tpl_vars['_email_addr']; ?>
</th> 
                <td class="paddingT15 wordSpacing5"> 
                <input class="infoTableInput" type="text" name="data[setting][testemail]" id="dataTestemail" value="<?php echo $this->_tpl_vars['item']['TESTEMAIL']; ?>
" />&nbsp;&nbsp;<input class="formbtn" type="button" name="test" id="Test" value="<?php echo $this->_tpl_vars['_test']; ?>
" /></td> 
            </tr> 
            <tr> 
            <th></th> 
            <td class="ptb20"> 
                <input class="formbtn" type="submit" name="save_mail" id="SaveEmail" value="<?php echo $this->_tpl_vars['_save']; ?>
" /> 
                <input class="formbtn" type="reset" name="reset" id="ResetEmail" value="<?php echo $this->_tpl_vars['_reset']; ?>
" /> 
            </td> 
        </tr> 
        </table> 
    </form> 
</div> 
<script language="JavaScript" type="text/JavaScript">
var service_email = "<?php echo $this->_tpl_vars['service_email']; ?>
";
var on_sending = "<?php echo $this->_tpl_vars['_on_sending']; ?>
"+"...";
var type_id = "<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['SEND_MAIL'])) ? $this->_run_mod_handler('default', true, $_tmp, '1') : smarty_modifier_default($_tmp, '1')); ?>
";
</script>
<?php echo '
<script>
jQuery(document).ready(function($) {
	$("#dataTestemail").focus(function(){
	if($("#dataTestemail").val()==service_email){
		$("#dataTestemail").val("")};
	}).blur(function(){
	if($("#dataTestemail").val()==\'\'){
		$("#dataTestemail").val(service_email).css("color","#ccc")};
	});
	$("#mail_sendtype"+type_id).attr("checked",\'checked\');
	$("#mail_sendtype2").click(
		function(){
			$("#smtp_set").show();
		}
	);
	$("#mail_sendtype1").click(
		function(){
			$("#smtp_set").hide();
		}
	);
	$("#Test").click(
		function(){
			$("#Do").val("testemail");
			$.facebox.settings.loadingImage = SiteUrl+\'images/facebox/loading.gif\'; 
			$.facebox.settings.closeImage = SiteUrl+\'images/facebox/closelabel.gif\'; 
			jQuery.facebox(on_sending);
			$("#EditFrm").submit();
		}
	);
})
</script>
'; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>