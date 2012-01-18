<?php /* Smarty version 2.6.18, created on 2012-01-18 12:38:58
         compiled from footer.html */ ?>
	<div id="footer-top" class="container">
		
			<p class="statement"><?php echo $this->_tpl_vars['_space_statement']; ?>
</p>
		
	</div>
	<div id="footer" class="container">
		<p>Copyright &copy; <?php echo $this->_tpl_vars['company_name']; ?>
 All rights reserved.</p>
		<?php if ($this->_tpl_vars['pb_username'] != ""): ?><a href="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
redirect.php?url=/virtual-office/"><?php echo $this->_tpl_vars['_admin_entrance']; ?>
</a> | <?php endif; ?><a href="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
help/"><?php echo $this->_tpl_vars['_use_helps']; ?>
</a> | <a href="javascript:;" class="top"><?php echo $this->_tpl_vars['_go_top']; ?>
</a>
	</div>
</body>
</html>