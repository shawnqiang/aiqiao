<?php /* Smarty version 2.6.18, created on 2012-01-01 05:59:09
         compiled from header.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['charset']; ?>
" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title><?php echo $this->_tpl_vars['_control_pannel']; ?>
 - <?php echo $this->_tpl_vars['site_name']; ?>
</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/form.css" rel="stylesheet" type="text/css" />
<link href="../css/common.css" rel="stylesheet" type="text/css" />
<script src="../scripts/langs/<?php echo $this->_tpl_vars['JsLanguage']; ?>
.js" charset="<?php echo $this->_tpl_vars['charset']; ?>
"></script>
<script type="text/javascript" src="../scripts/jquery.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="../scripts/jquery/tablehover.js" ></script>
<script>
var SiteUrl = "<?php echo $this->_tpl_vars['SiteUrl']; ?>
";
var DeleteSure = "<?php echo $this->_tpl_vars['_delete_sure']; ?>
";
</script>
<?php echo '
<script>
$(document).ready(function(){
		$(\'.dataTable\').tableHover();
		$(".btn_delete,.btn_uninstall").click( function() {
			var d = confirm(DeleteSure);
			if(d) return true;else return false;
		});
});
</script>
<style type="text/css">
td.hover, tr.hover
{
	background-color: #F2F9FD;
}
th.hover, thead td.hover, tfoot td.hover
{
	background-color: ivory;
}
</style>
'; ?>

</head>
<body>