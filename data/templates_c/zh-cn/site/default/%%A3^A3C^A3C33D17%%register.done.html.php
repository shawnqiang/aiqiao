<?php /* Smarty version 2.6.18, created on 2012-01-15 07:47:37
         compiled from default/register.done.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['_reg_success']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="main" class="container">
	
  	
	
	<div class="row">
		<div class="span9 offset4">
			<div class="mod">
		<div class="mod-hd">
			<h2><?php echo $this->_tpl_vars['_reg_success']; ?>
</h2>
		</div>
		<div class="mod-bd">
			<?php if ($this->_tpl_vars['result'] === true): ?>
			 <p class="member_level"><?php echo $this->_tpl_vars['_welcome_join']; ?>
<?php echo $this->_tpl_vars['site_name']; ?>
,<?php echo $this->_tpl_vars['_now_you_are']; ?>
<font color="#1c9df0"><?php echo $this->_tpl_vars['groupname']; ?>
</font><img src="<?php echo $this->_tpl_vars['groupimg']; ?>
" alt="<?php echo $this->_tpl_vars['groupname']; ?>
" /></p>
			 <p class="member_room"><?php echo $this->_tpl_vars['_you_continue_next']; ?>
 <a href="virtual-office/" ><span><?php echo $this->_tpl_vars['_into_office_room']; ?>
</span></a><a href="<?php echo $this->_tpl_vars['SiteUrl']; ?>
"><span><?php echo $this->_tpl_vars['_back_index']; ?>
</span></a></p>
			 <p> <b><?php echo $this->_tpl_vars['_complete_pro_date']; ?>
</b></p>
			 <p><?php echo $this->_tpl_vars['_need_complete_pro_date']; ?>
<a href="virtual-office/personal.php" style="text-decoration:underline" target="_blank"><?php echo $this->_tpl_vars['_click_here_add']; ?>
</a></p>
			 <?php if ($this->_tpl_vars['is_company']): ?>
			 <p><b><?php echo $this->_tpl_vars['_added_comany_info']; ?>
</b></p>
			 <p> <?php echo $this->_tpl_vars['_open_company_website']; ?>
<a href="virtual-office/company.php" style="text-decoration:underline" target="_blank"><?php echo $this->_tpl_vars['_click_perfect']; ?>
</a></p>
			 <?php endif; ?>
			 <?php else: ?>
				<h2><?php echo $this->_tpl_vars['RegTips']; ?>
</h2>
			 <?php endif; ?>
		</div>
	</div>
		</div>
	</div>	
	
	
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>