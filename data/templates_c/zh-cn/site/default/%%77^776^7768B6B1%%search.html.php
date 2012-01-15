<?php /* Smarty version 2.6.18, created on 2012-01-04 05:37:34
         compiled from default/search.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'sprintf', 'default/search.html', 38, false),array('function', 'the_url', 'default/search.html', 53, false),array('function', 'mailto', 'default/search.html', 96, false),array('block', 'industry', 'default/search.html', 73, false),array('block', 'area', 'default/search.html', 80, false),array('block', 'userpage', 'default/search.html', 93, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['charset']; ?>
" />
<title><?php echo $this->_tpl_vars['page_title']; ?>
 - <?php echo $this->_tpl_vars['site_title']; ?>
</title>
<base href="<?php echo $this->_tpl_vars['SiteUrl']; ?>
">
<meta name ="keywords" content="<?php echo $this->_tpl_vars['metakeywords']; ?>
">
<meta name ="description" content="<?php echo $this->_tpl_vars['metadescription']; ?>
"> 
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['theme_img_path']; ?>
css/basic.css" />
<script src="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
scripts/jquery.js"></script>
<script src="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
scripts/langs/<?php echo $this->_tpl_vars['JsLanguage']; ?>
.js" charset="<?php echo $this->_tpl_vars['charset']; ?>
"></script>
<script>
var input_keywords = "<?php echo $this->_tpl_vars['_input_keywords']; ?>
";
var select_item = "<?php echo $_GET['do']; ?>
";
var site_name = "<?php echo $this->_tpl_vars['site_name']; ?>
";
var site_url = "<?php echo $this->_tpl_vars['SiteUrl']; ?>
";
</script>
<script src="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
scripts/jquery/jquery.validate.js"></script>
<script src="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
scripts/validate.js"></script>
<?php echo '
<script> 
$(document).ready(function(){   
	if($("#item_"+select_item).length>0){
		$("#item_"+select_item).addClass("active"); 
		$("#Do").val(select_item);
	}else{
		$("#nav_items").find(\'a:first\').addClass("active"); 
	}
});
</script>

'; ?>

</head>
<body id="search_index">
<div id="shortcuts">
	<div class="container">
	<div class="pull-right">
	<a href="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
"><?php echo $this->_tpl_vars['_back_portal']; ?>
</a>&nbsp;|&nbsp;<?php if (! $this->_tpl_vars['pb_username']): ?><a href="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
logging.php" id="lb"><?php echo $this->_tpl_vars['_pls_login']; ?>
</a><?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['_hello'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, $this->_tpl_vars['pb_username']) : sprintf($_tmp, $this->_tpl_vars['pb_username'])); ?>
&nbsp;|&nbsp;<a href="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
redirect.php?url=/virtual-office" target="_officeroom"><?php echo $this->_tpl_vars['_my_office_room']; ?>
</a><?php endif; ?>
	</div>
	</div>
</div>

<div id="header">
	<div class="container">
		<a href="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
"><img id="lg" src="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
<?php echo $this->_tpl_vars['site_logo']; ?>
"></a>
	</div>
</div>
<div id="main" class="container">

	<div id="SearchArea" class="row">
		<div class="span7 offset5">
			<ul class="unstyled search_nav_items">
				<li><a href="<?php echo smarty_function_the_url(array('module' => 'search','do' => 'product'), $this);?>
" id="item_product"><?php echo $this->_tpl_vars['_product']; ?>
</a></li>
				<li><a href="<?php echo smarty_function_the_url(array('module' => 'search','do' => 'offer'), $this);?>
" id="item_offer"><?php echo $this->_tpl_vars['_offer']; ?>
</a></li>
				<li><a href="<?php echo smarty_function_the_url(array('module' => 'search','do' => 'company'), $this);?>
" id="item_company"><?php echo $this->_tpl_vars['_yellow_page']; ?>
</a></li>
				<li><a href="<?php echo smarty_function_the_url(array('module' => 'search','do' => 'market'), $this);?>
" id="item_market"><?php echo $this->_tpl_vars['_pro_market']; ?>
</a></li>
				<li><a href="<?php echo smarty_function_the_url(array('module' => 'search','do' => 'news'), $this);?>
" id="item_news"><?php echo $this->_tpl_vars['_information']; ?>
</a></li>
				<li><a href="<?php echo smarty_function_the_url(array('module' => 'search','do' => 'fair'), $this);?>
" id="item_fair"><?php echo $this->_tpl_vars['_fair']; ?>
</a></li>
			</ul>
			<form name="search_frm" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>
" class="search_search_form">
			<input type="hidden" name="do" id="Do" value="product" >
			<div><input value="" name="q" id="kw" rel="kw" size="42" maxlength="90" ></div>
				
			<input type="submit" onmouseout="this.className='btn'" onmousedown="this.className='btn btn_h'" class="btn" id="su" value="<?php echo $this->_tpl_vars['_search']; ?>
">
		</form>
		</div>
	</div>

	<div class="row">
		<div class="span11 offset3">
			<dl class="search_search_keywords">
			<dt><a href="special/?type=industry" target="_blank" class="anmyb2b"><?php echo $this->_tpl_vars['_industry_category']; ?>
</a></dt>
			<?php $this->_tag_stack[] = array('industry', array('level' => 1,'row' => 5)); $_block_repeat=true;smarty_block_industry($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		    <dd><a href="special/?industryid=<?php echo $this->_tpl_vars['industry']['id']; ?>
" target="_blank" class="an"><?php echo $this->_tpl_vars['industry']['name']; ?>
</a></dd>
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_industry($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<dd><a href="special/?type=industry" class="an"><?php echo $this->_tpl_vars['_more']; ?>
&raquo;</a></dd>
			</dl>
			<dl class="search_search_keywords">
				<dt><a href="special/?type=area" target="_blank" class="anmyb2b"><?php echo $this->_tpl_vars['_area_category']; ?>
</a></dt>
				<?php $this->_tag_stack[] = array('area', array('level' => 1,'row' => 5)); $_block_repeat=true;smarty_block_area($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			    <dd><a href="special/?areaid=<?php echo $this->_tpl_vars['area']['id']; ?>
" class="an"><?php echo $this->_tpl_vars['area']['name']; ?>
</a></dd>
				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_area($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				<dd><a href="special/?type=area" class="an"><?php echo $this->_tpl_vars['_more']; ?>
&raquo;</a></dd>
			</dl>
		</div>
	</div>	  
		

	
</div>
<div id="footer">
	<div class="container">
		<?php $this->_tag_stack[] = array('userpage', array('row' => 15,'sep' => "<span>|</span>")); $_block_repeat=true;smarty_block_userpage($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_tpl_vars['page']['link']; ?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_userpage($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<p><?php echo $this->_tpl_vars['site_name']; ?>
 <?php echo $this->_tpl_vars['_copyright']; ?>
&copy;&nbsp;<?php echo $this->_tpl_vars['_service_hotline']; ?>
 <?php echo $this->_tpl_vars['service_tel']; ?>
&nbsp;<?php echo $this->_tpl_vars['_service_email']; ?>
:<?php echo smarty_function_mailto(array('text' => ($this->_tpl_vars['service_email']),'address' => ($this->_tpl_vars['service_email']),'encode' => 'javascript'), $this);?>
&nbsp;<a href="javascript:;" onclick="<?php echo '$(\'html, body\').animate({scrollTop: \'0px\'}, 300);return false;'; ?>
"><?php echo $this->_tpl_vars['_go_top']; ?>
</a>     </p>
		<p><?php echo $this->_tpl_vars['icp_number']; ?>
</p>
		
		
	</div>
</div>
</body>
</html>