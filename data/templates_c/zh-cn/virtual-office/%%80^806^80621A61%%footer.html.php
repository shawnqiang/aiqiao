<?php /* Smarty version 2.6.18, created on 2012-01-05 13:32:31
         compiled from footer.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'mailto', 'footer.html', 4, false),)), $this); ?>

<div id="footer">
	<div class="container">
		<p><?php echo $this->_tpl_vars['_aim_at']; ?>
<?php echo $this->_tpl_vars['site_name']; ?>
<?php echo $this->_tpl_vars['_have_problem_send_email']; ?>
<?php echo smarty_function_mailto(array('text' => ($this->_tpl_vars['service_email']),'address' => ($this->_tpl_vars['service_email']),'encode' => 'javascript'), $this);?>
 <?php echo $this->_tpl_vars['_or']; ?>
 <a href="<?php echo $this->_tpl_vars['SiteUrl']; ?>
help/" target="_blank"><?php echo $this->_tpl_vars['_view_help']; ?>
</a></p> 
   		<p><?php echo $this->_tpl_vars['_customer_hotline']; ?>
<?php echo $this->_tpl_vars['service_tel']; ?>
 <?php echo $this->_tpl_vars['_sales_hotline']; ?>
<?php echo $this->_tpl_vars['sale_tel']; ?>
</p>
   		<p>Copyright &copy; <?php echo $this->_tpl_vars['site_name']; ?>
. All rights reserved. <?php echo $this->_tpl_vars['company_name']; ?>
 <?php echo $this->_tpl_vars['_copyright']; ?>
</p>
	</div>
</div>

</body>
</html>