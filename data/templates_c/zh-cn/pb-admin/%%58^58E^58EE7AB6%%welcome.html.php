<?php /* Smarty version 2.6.18, created on 2012-01-01 05:59:12
         compiled from welcome.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'sprintf', 'welcome.html', 5, false),array('modifier', 'date_format', 'welcome.html', 49, false),array('function', 'iplocation', 'welcome.html', 49, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['charset']; ?>
" />
<title><?php echo ((is_array($_tmp=$this->_tpl_vars['_welcome_to_cp'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, $this->_tpl_vars['_control_pannel']) : sprintf($_tmp, $this->_tpl_vars['_control_pannel'])); ?>
</title>
<base target="_blank" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../scripts/jquery.js"></script>
<script src="../scripts/jquery/facebox/facebox.js" type="text/javascript"></script>
<link href="../scripts/jquery/facebox/facebox.css" media="screen" rel="stylesheet" type="text/css"/>
<?php echo '
<script>
function setUpdateAlert(d)
{
	$.ajax({
		url: \'home.php?do=set_update_alert&type=\'+d,
		type: \'GET\',
		dataType: \'html\',
		timeout: 1000,
		error: function(){
			alert(\'Error loading XML document\');
		},
		success: function(data){
			$.facebox.close();
		}
	});
}
</script>
'; ?>

<?php if ($this->_tpl_vars['hasNewVersion']): ?>
<script>
var VersionInfo = '<?php echo $this->_tpl_vars['VersionInfo']; ?>
';
var alert_after_week = "<?php echo $this->_tpl_vars['_alert_after_week']; ?>
";
var alert_no = "<?php echo $this->_tpl_vars['_alert_no']; ?>
";
var close = "<?php echo $this->_tpl_vars['_close']; ?>
";
var SiteUrl = "<?php echo $this->_tpl_vars['SiteUrl']; ?>
";
<?php echo '
jQuery(document).ready(function($) {
	$.facebox.settings.loadingImage = SiteUrl+\'images/facebox/loading.gif\'; 
	$.facebox(VersionInfo+"<div align=\'center\'><input type=\'button\' id=\'NoUpdateAlert\' value=\'"+alert_no+"\' onclick=\'setUpdateAlert(1);\'>&nbsp;<input type=\'button\' id=\'AlertAfterWeek\' value=\'"+alert_after_week+"\' onclick=\'setUpdateAlert(7);\'>&nbsp;<input type=\'button\' id=\'AlertAfterWeek\' value=\'"+close+"\' onclick=\'$.facebox.close();\'></div>");
})
'; ?>

</script>
<?php endif; ?>
</head>
<body>
<div id="rightWelcome">
	<p>
		<strong><?php echo ((is_array($_tmp=$this->_tpl_vars['_hello'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, $this->_tpl_vars['current_adminer']) : sprintf($_tmp, $this->_tpl_vars['current_adminer'])); ?>
,<?php echo ((is_array($_tmp=$this->_tpl_vars['_welcome_to_cp'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, $this->_tpl_vars['site_name']) : sprintf($_tmp, $this->_tpl_vars['site_name'])); ?>
<?php echo $this->_tpl_vars['_control_pannel']; ?>
</strong><?php echo $this->_tpl_vars['_today_is']; ?>
<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
,<?php echo $this->_tpl_vars['_last_login_time']; ?>
<?php echo $this->_tpl_vars['item']['last_login']; ?>
,<?php echo $this->_tpl_vars['_last_login_ip']; ?>
<?php echo $this->_tpl_vars['item']['last_ip']; ?>
<?php echo smarty_function_iplocation(array('ip' => ($this->_tpl_vars['item']['last_ip'])), $this);?>

	</p>
</div>
<dl id="rightCon">
<dt><?php echo $this->_tpl_vars['_safety_tips']; ?>
</dt>
<dd>
    <ul>
       <li><?php echo $this->_tpl_vars['_please_keep']; ?>
 <span class="red"><?php echo $this->_tpl_vars['_site_key']; ?>
</span>,<?php echo $this->_tpl_vars['_for_more_information_go_to_set']; ?>
 "<a href="setting.php?do=auth" target="_self"><span class="bold"><?php echo $this->_tpl_vars['_setting_global']; ?>
 - <?php echo $this->_tpl_vars['_security_prompt']; ?>
</span></a>" <?php echo $this->_tpl_vars['_re_cover']; ?>
</li>
       <li><?php echo $this->_tpl_vars['_if_you_want_to_continue_to_enable']; ?>
<span class="red"><?php echo $this->_tpl_vars['_update_reminder']; ?>
</span>,<?php echo $this->_tpl_vars['_please_reset']; ?>
 "<a href="javascript:void(0);" onclick="setUpdateAlert(0);" target="_self"><span class="bold"><?php echo $this->_tpl_vars['_set_reminder']; ?>
</span></a>" <?php echo $this->_tpl_vars['_and_refresh_the_page']; ?>
</li>
       <li>
			<span><a href="member.php?do=search&member[status]=0" target="_self"><?php echo $this->_tpl_vars['_moderated']; ?>
 <?php echo $this->_tpl_vars['_member']; ?>
</a><em>(<?php echo $this->_tpl_vars['TotalAmounts']['member']; ?>
)</em></span>
			<span><a href="company.php?do=search&status=0" target="_self"><?php echo $this->_tpl_vars['_moderated']; ?>
 <?php echo $this->_tpl_vars['_yellow_page']; ?>
</a><em>(<?php echo $this->_tpl_vars['TotalAmounts']['company']; ?>
)</em></span>
			<span><a href="offer.php?do=search&status=0" target="_self"><?php echo $this->_tpl_vars['_moderated']; ?>
 <?php echo $this->_tpl_vars['_offer']; ?>
</a><em>(<?php echo $this->_tpl_vars['TotalAmounts']['trade']; ?>
)</em></span>
			<span><a href="product.php?do=search&product[status]=0" target="_self"><?php echo $this->_tpl_vars['_moderated']; ?>
 <?php echo $this->_tpl_vars['_product']; ?>
</a><em>(<?php echo $this->_tpl_vars['TotalAmounts']['product']; ?>
)</em></span>
	   </li>
    </ul>
</dd>
<dt><?php echo $this->_tpl_vars['_administrator']; ?>
 <?php echo $this->_tpl_vars['_message']; ?>
</dt>
<dd>
    <ul>
      <form method="post" action="adminnote.php" id="EditFrm" name="edit_frm" target="_self">
        <li><?php echo $this->_tpl_vars['_content']; ?>
<input type="text" name="data[adminnote][title]" value="" />&nbsp;<input class="formbtn" type="submit" name="save" value="<?php echo $this->_tpl_vars['_save']; ?>
" /></li>
      </form>
   </ul>
</dd>
<dt><?php echo $this->_tpl_vars['_system_information']; ?>
</dt>
<dd>
    <table>
        <tr>
            <th><?php echo $this->_tpl_vars['_server_operating_system']; ?>
</th>
            <td><?php echo $this->_tpl_vars['item']['operatingsystem']; ?>
</td>
            <th><?php echo $this->_tpl_vars['_web_server']; ?>
</th>
            <td><?php echo $this->_tpl_vars['item']['software']; ?>
</td>
        </tr>
        <tr>
            <th><?php echo $this->_tpl_vars['_php_version']; ?>
</th>
            <td><?php echo $this->_tpl_vars['item']['PhpVersion']; ?>
</td>
            <th><?php echo $this->_tpl_vars['_mysql_version']; ?>
</th>
            <td><?php echo $this->_tpl_vars['item']['MysqlVersion']; ?>
</td>
        </tr>
        <tr>
            <th>Safe Mode:</th>
            <td><?php echo $this->_tpl_vars['item']['safe_mode']; ?>
</td>
            <th>Safe Mode ID:</th>
            <td><?php echo $this->_tpl_vars['item']['safe_mode_gid']; ?>
</td>
        </tr>
        <tr>
            <th><?php echo $this->_tpl_vars['_program_version_and_encoding']; ?>
</th>
            <td><a href="<?php echo $this->_tpl_vars['SupportUrl']; ?>
" title="<?php echo $this->_tpl_vars['_check_update']; ?>
" target="_blank"><span class="red"><?php echo $this->_tpl_vars['item']['PBVersion']; ?>
</span></a></td>
            <th><?php echo $this->_tpl_vars['_installation_date']; ?>
</th>
            <td><?php echo $this->_tpl_vars['item']['InstallDate']; ?>
</td>
        </tr>
        <tr>
            <th><?php echo $this->_tpl_vars['_used']; ?>
 <?php echo $this->_tpl_vars['_database']; ?>
:</th>
            <td><?php echo $this->_tpl_vars['item']['DatabaseSize']; ?>
</td>
            <th><?php echo $this->_tpl_vars['_php_gd_support']; ?>
</th>
            <td><?php echo $this->_tpl_vars['item']['GDSupports']; ?>
</td>
        </tr>
    </table>
</dd>
<dt><?php echo $this->_tpl_vars['_about']; ?>
 <?php echo $this->_tpl_vars['_soft_name']; ?>
</dt>
<dd>
    <table>
        <tr>
            <th><?php echo $this->_tpl_vars['_help']; ?>
 <?php echo $this->_tpl_vars['_forum']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
            <td><a href="http://www.phpb2b.com/forum-and-community" target="_blank">http://www.phpb2b.com/forum-and-community</a></td>
        </tr>
    </table>
</dd>
</dl>
</body>
</html>