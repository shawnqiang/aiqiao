<?php /* Smarty version 2.6.18, created on 2012-01-18 12:56:55
         compiled from header.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strip_tags', 'header.html', 8, false),array('modifier', 'truncate', 'header.html', 8, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-Type" content="text/html;charset=<?php echo $this->_tpl_vars['charset']; ?>
" />
<title><?php echo $this->_tpl_vars['PageTitle']; ?>
 - <?php echo $this->_tpl_vars['COMPANY']['name']; ?>
</title>
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<meta name="keywords" content="<?php echo $this->_tpl_vars['COMPANY']['name']; ?>
" />
<meta name="description" content="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['COMPANY']['description'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 100) : smarty_modifier_truncate($_tmp, 100)); ?>
" />
<meta name="author" content="" />
<link href="<?php echo $this->_tpl_vars['SpaceUrl']; ?>
style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
scripts/jquery.js"></script>
<script src="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
scripts/jquery/jquery.colorbox.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
scripts/jquery/colorbox/colorbox.css" media="screen" rel="stylesheet" type="text/css"/>
<script>
var SpaceUrl = "<?php echo $this->_tpl_vars['SpaceUrl']; ?>
";
var SiteUrl = "<?php echo $this->_tpl_vars['WebRootUrl']; ?>
";
var cur = "<?php echo $this->_tpl_vars['cur']; ?>
";
</script>
<?php echo '
<script>
jQuery(document).ready(function($) {
	$(\'a[rel*=lightbox]\').colorbox({maxWidth:600,opacity:0.1});
	$(\'a.top\').click(function(){     
		$(\'html, body\').animate({scrollTop: \'0px\'}, 300);     
		return false;}
	);
	$("#"+cur).addClass("home");
})
</script>
'; ?>

</head>
<body>