<?php /* Smarty version 2.6.18, created on 2012-01-13 12:13:52
         compiled from contact.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'get_cache', 'contact.html', 2, false),array('function', 'mailto', 'contact.html', 17, false),array('function', 'the_map', 'contact.html', 18, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array('PageTitle' => ($this->_tpl_vars['_contact_us']),'cur' => 'space_contact')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo smarty_function_get_cache(array('var' => 'options','name' => 'typeoption'), $this);?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "banner.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="main" class="container">
	<div class="row">
	
	<div class="span12">
		<div class="mod">
			<div class="mod-hd">
				<h2><?php echo $this->_tpl_vars['_contact_us']; ?>
</h2>
			</div>
			<div class="mod-bd">
				<p><span><?php echo $this->_tpl_vars['_company_name']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</span><?php echo $this->_tpl_vars['COMPANY']['name']; ?>
</p>
				<p><span><?php echo $this->_tpl_vars['_contact_people']; ?>
</span><?php echo $this->_tpl_vars['COMPANY']['link_man']; ?>
</p>
				<p><span><?php echo $this->_tpl_vars['_phone']; ?>
</span><?php echo $this->_tpl_vars['COMPANY']['tel']; ?>
</p>
				<p><span><?php echo $this->_tpl_vars['_fax']; ?>
</span><?php echo $this->_tpl_vars['COMPANY']['fax']; ?>
</p>
				<p><span><?php echo $this->_tpl_vars['_email_addr']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</span><?php echo smarty_function_mailto(array('address' => ($this->_tpl_vars['COMPANY']['email']),'encode' => 'javascript','text' => ($this->_tpl_vars['COMPANY']['email'])), $this);?>
</p>
				<p><span><?php echo $this->_tpl_vars['_address']; ?>
</span><?php echo $this->_tpl_vars['COMPANY']['address']; ?>
<br><?php echo smarty_function_the_map(array('longti' => ($this->_tpl_vars['COMPANY']['map_longitude']),'lati' => ($this->_tpl_vars['COMPANY']['map_latitude'])), $this);?>
</p>
				<p><span><?php echo $this->_tpl_vars['_zip']; ?>
</span><?php echo $this->_tpl_vars['COMPANY']['zipcode']; ?>
</p>
				<p><span><?php echo $this->_tpl_vars['_website']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</span><?php echo $this->_tpl_vars['COMPANY']['site_url']; ?>
</p>
			</div>
		</div>
	</div>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "sidebar.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</div>
	
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>