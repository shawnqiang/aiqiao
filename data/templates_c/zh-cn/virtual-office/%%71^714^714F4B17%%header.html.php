<?php /* Smarty version 2.6.18, created on 2012-01-14 11:58:27
         compiled from header.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'sprintf', 'header.html', 43, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['charset']; ?>
">
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title><?php echo $this->_tpl_vars['page_title']; ?>
 - <?php echo $this->_tpl_vars['_office_room']; ?>
 - <?php echo $this->_tpl_vars['site_name']; ?>
</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<!-- <link href="../css/common.css" rel="stylesheet" type="text/css">
<link href="images/style.css" rel="stylesheet" type="text/css"> -->

<script src="../scripts/jquery.js"></script>
<script src="../scripts/langs/<?php echo $this->_tpl_vars['JsLanguage']; ?>
.js" charset="<?php echo $this->_tpl_vars['charset']; ?>
"></script>
<script src="../scripts/jquery/jquery.validate.js"></script>
<script src="../scripts/general.js"></script>
<?php echo '
<script>
$(document).ready(function() {
	$("#GoTop").click(function(){
		$(\'html, body\').animate({scrollTop: \'0px\'}, 300);return false;
	});
	$("#check_all").click(function(){
		var isCheckAll=$(this).attr("checked");
		$(\'input[type="checkbox"][rel="check_item"]\').each(function(){
		   $(this).attr("checked",isCheckAll);
		});
	});
});
</script>
'; ?>

</head>
<body>
<div id="shortcuts">
	<div class="container">
	<div class="pull-left">
          <a href="<?php echo $this->_tpl_vars['SiteUrl']; ?>
index.php"><span><?php echo $this->_tpl_vars['_home_page']; ?>
</span></a>
          <a href="<?php echo $this->_tpl_vars['SiteUrl']; ?>
news/"><span><?php echo $this->_tpl_vars['_info']; ?>
</span></a>
          <a href="<?php echo $this->_tpl_vars['SiteUrl']; ?>
product/"><span><?php echo $this->_tpl_vars['_product_center']; ?>
</span></a>
          <a href="<?php echo $this->_tpl_vars['SiteUrl']; ?>
company/"><span><?php echo $this->_tpl_vars['_yellow_page']; ?>
</span></a>
          <a href="<?php echo $this->_tpl_vars['SiteUrl']; ?>
fair/"><span><?php echo $this->_tpl_vars['_fair']; ?>
</span></a>
          <a href="<?php echo $this->_tpl_vars['SiteUrl']; ?>
hr/"><span><?php echo $this->_tpl_vars['_hr']; ?>
</span></a>
          <a href="<?php echo $this->_tpl_vars['SiteUrl']; ?>
dict/"><span><?php echo $this->_tpl_vars['_dictionary']; ?>
</span></a>
    </div>
    <div class="login_info pull-right"><?php echo ((is_array($_tmp=$this->_tpl_vars['_hello'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, $this->_tpl_vars['UserName']) : sprintf($_tmp, $this->_tpl_vars['UserName'])); ?>
(<a href="personal.php" style="text-decoration:underline;"><?php echo $_SESSION['MemberName']; ?>
</a>)
       <?php if ($this->_tpl_vars['menu']['pms'] && $this->_tpl_vars['newpm']): ?><a href="pms.php" title=""><img src="../images/message.gif" alt="<?php echo $this->_tpl_vars['newpm']; ?>
" /></a><?php endif; ?>
    </div>
    </div>
</div>




<div id="main_nav">
 <div id="nav_inner" class="container">
 	
          
          <ul class="nav">
           	<li><a href="index.php" id="home-page"><span><?php echo $this->_tpl_vars['_office_homepage']; ?>
</span></a></li>
	  		<li><a class="current_nav" href="offer.php" id="info-manage"><span><?php echo $this->_tpl_vars['_info_manage']; ?>
</span></a></li>
	  		<?php if ($this->_tpl_vars['COMPANYINFO']['cache_spacename'] && $this->_tpl_vars['COMPANYINFO']['status'] == 1): ?><li><a href="<?php echo $this->_tpl_vars['COMPANYINFO']['space_url']; ?>
" target="_blank"><span><?php echo $this->_tpl_vars['_access']; ?>
<?php echo $this->_tpl_vars['_space_name']; ?>
</span></a></li><?php endif; ?>
	  		<li class="logOut"><a href="../logging.php?action=logout"><span><?php echo $this->_tpl_vars['_login_out']; ?>
</span></a></li>
           
          </ul>
          
       
  </div> 
	
</div>
</div>