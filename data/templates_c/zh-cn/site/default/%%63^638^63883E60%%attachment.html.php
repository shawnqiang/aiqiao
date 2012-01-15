<?php /* Smarty version 2.6.18, created on 2012-01-01 09:44:19
         compiled from default/attachment.html */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['charset']; ?>
">
<title><?php echo $this->_tpl_vars['_browse_big_picture']; ?>
 - <?php echo $this->_tpl_vars['site_title']; ?>
</title>
<meta name="description" content="">
<meta name="keywords" content="">
<script type="text/javascript" src="scripts/swfobject.js"></script>
<script type="text/javascript">
var img_src = "<?php echo $this->_tpl_vars['img_src']; ?>
";
</script>
<?php echo '
<script>
var flashvars = {};
flashvars.pics = img_src;
swfobject.embedSWF("images/preview.swf", "myContent", "100%", "100%", "8.0.0", "images/expressInstall.swf", flashvars);
</script>
<script type="text/javascript">
function resize() {
try {
var aw = Screen.availWidth;
var ah = Screen.availHeight;
window.moveTo(0, 0);
window.resizeTo(aw, ah);
}catch(e) {}
}
function cls() {
window.close();
return false;
}
</script>
'; ?>

</head>
<body onclick="cls();" style="cursor:hand;margin:0;padding:0">
<div id="myContent" style="text-align: center;">
	<h3>Alternative content : <?php echo $this->_tpl_vars['_activex_not_support']; ?>
</h3>
	<p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" border="0" alt="<?php echo $this->_tpl_vars['_download_latest_flash_x']; ?>
" /></a></p>
</div>
</body>
</html>