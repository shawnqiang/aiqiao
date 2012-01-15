<?php /* Smarty version 2.6.18, created on 2012-01-02 08:08:02
         compiled from default/footer.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'userpage', 'default/footer.html', 3, false),array('function', 'mailto', 'default/footer.html', 6, false),)), $this); ?>
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