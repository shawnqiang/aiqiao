<?php /* Smarty version 2.6.18, created on 2012-01-01 05:56:49
         compiled from login.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'sprintf', 'login.html', 6, false),array('function', 'formhash', 'login.html', 28, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['charset']; ?>
">
<meta name="save" content="history">
<title><?php echo ((is_array($_tmp=$this->_tpl_vars['_control_login'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, $this->_tpl_vars['_control_pannel']) : sprintf($_tmp, $this->_tpl_vars['_control_pannel'])); ?>
 - <?php echo $this->_tpl_vars['site_title']; ?>
</title>
<link rel="stylesheet" type="text/css" href="css/login.css" />
<script language="javascript" src="../scripts/jquery.js"></script>
<script language="javascript" src="../scripts/jquery.pngFix.js"></script>
<body>
<div id="header">
   <div class="logo"></div>
</div>
<div id="wrapper">
   <div class="console_left">
	   <div class="title"><?php echo ((is_array($_tmp=$this->_tpl_vars['_control_login'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, $this->_tpl_vars['_control_pannel']) : sprintf($_tmp, $this->_tpl_vars['_control_pannel'])); ?>
</div>
	   <p><?php echo $this->_tpl_vars['_phpb2b_info']; ?>
</p>
	   <div class="intro_1"><?php echo $this->_tpl_vars['_config_your_info']; ?>
</div>
	   <div class="intro_2"><?php echo $this->_tpl_vars['_manage_your_ads']; ?>
</div>
	   <div class="intro_3"><?php echo $this->_tpl_vars['_set_site_secure']; ?>
</div>
	  
   </div>
   <div class="console_right">
	   <div class="title"><?php echo $this->_tpl_vars['_cp_login_first']; ?>
</div>
	   <div class="login">
		  <form action="login.php" method="post" name="login_frm" id="LoginFrm" class="s_lo_f" autocomplete="off">
			<input type="hidden" name="do" value="login"  />
			<?php echo smarty_function_formhash(array(), $this);?>

			<?php if ($this->_tpl_vars['pb_username'] && $this->_tpl_vars['is_admin']): ?>
		   <div class="user"><label><?php echo $this->_tpl_vars['pb_username']; ?>
</label><input type="hidden" name="data[username]" value="<?php echo $this->_tpl_vars['pb_username']; ?>
"><?php echo $this->_tpl_vars['LoginError']; ?>
</div>
			<?php else: ?>
		   <div class="user"><label><?php echo $this->_tpl_vars['_cp_username_n']; ?>
</label><input tabindex="1" type="text" name="data[username]" id="username" size="16" maxLength="20" value="<?php echo $_POST['data']['username']; ?>
"><?php echo $this->_tpl_vars['LoginError']; ?>
</div>
		   <?php endif; ?>
		   <div class="pwd"><label><?php echo $this->_tpl_vars['_cp_passwd']; ?>
</label><input tabindex="2" type="password" name="data[userpass]" id="userpass" size="16" maxLength="20" value=""></div>
		   <div class="forget"><a href="<?php echo $this->_tpl_vars['SiteUrl']; ?>
getpasswd.php"><?php echo $this->_tpl_vars['_cp_forget_passwd']; ?>
</a></div>
		   <?php if ($this->_tpl_vars['ifcapt']): ?>
		   <div class="code"><label><?php echo $this->_tpl_vars['_cp_capt']; ?>
</label><input type="text" value="" name="data[capt_login_admin]" size="16" tabindex="3" id="capt_login_admin" /><img id="imgcaptcha" src="../captcha.php" alt="<?php echo $this->_tpl_vars['_refresh_capt']; ?>
" width="128"/></div>
		   <?php endif; ?>
		   <div class="btn_login"><input type="submit" name="login" id="Login" value="<?php echo $this->_tpl_vars['_cp_login']; ?>
" /></div>
		   </form>
	   </div>
   </div>
   <div class="clear"></div>
	<div class="reg"><?php echo $this->_tpl_vars['_meet_with_more_phpb2b_users']; ?>
&nbsp;<input name="" id="register_member" type="button" value="<?php echo $this->_tpl_vars['_register_now']; ?>
" onclick="location.href='http://bbs.phpb2b.com/'" /></div>
	<hr class="hr_solid" /></div>
</div>
<div id="footer"><span class="left">&copy;2007-2011 Powered By <?php echo $this->_tpl_vars['_soft_name']; ?>
 <?php echo @PHPB2B_VERSION; ?>
, <a href="http://www.phpb2b.com/">UALINK</a> Inc.
</span><span class="right"><a href="<?php echo $this->_tpl_vars['SiteUrl']; ?>
index.php" title="<?php echo $this->_tpl_vars['_return_homepage']; ?>
"><?php echo $this->_tpl_vars['_return_homepage']; ?>
</a>&nbsp;|&nbsp;<a href="http://bbs.phpb2b.com/"><?php echo $this->_tpl_vars['_feed_back']; ?>
</a></span> 
</div>   
<script language="javascript">
var pls_input_username = "<?php echo $this->_tpl_vars['_pls_input_username']; ?>
";
var pls_input_passwd = "<?php echo $this->_tpl_vars['_pls_input_passwd']; ?>
";
var pls_input_authcode = "<?php echo $this->_tpl_vars['_pls_input_authcode']; ?>
";
var if_capt = "<?php echo $this->_tpl_vars['ifcapt']; ?>
";
var is_admin = "<?php echo $_SESSION['is_admin']; ?>
";
var current_username = "<?php echo $this->_tpl_vars['pb_username']; ?>
";
</script>
<?php echo '
<script>
$(document).ready(function(){   
	$(\'#imgcaptcha\').click(
		function(){
		$(\'#imgcaptcha\').attr(\'src\',\'../captcha.php?sid=\' + Math.random());
		$(\'#capt_login_admin\').focus();
		return false;
		}
	);
	$("#Login").click(
		function(){   
			if(is_admin==""){
				if($(\'#username\').val() == ""){
					alert(pls_input_username);
					$(\'#username\').focus();
					return false;
				}
			}
			if($(\'#userpass\').val() == ""){
				alert(pls_input_passwd);
				$(\'#userpass\').focus();
				return false;
			}
			if(if_capt!=""){
				if($(\'#capt_login_admin\').val() == ""){
					alert(pls_input_authcode);
					$(\'#capt_login_admin\').focus();
					return false;
				}
			}
			$("#LoginFrm").submit();   
			$("#Login").attr("disabled", "disabled");
		}
	);
	if(current_username!=""){
		$(\'#userpass\').focus();
	}else{
		$(\'#username\').focus();
	}
     $("img").pngfix();
});
</script>
'; ?>

</body>
</html>