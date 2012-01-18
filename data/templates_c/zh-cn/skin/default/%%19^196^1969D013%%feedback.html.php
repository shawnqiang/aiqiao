<?php /* Smarty version 2.6.18, created on 2012-01-18 12:07:28
         compiled from feedback.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array('PageTitle' => ($this->_tpl_vars['_feed_back_to_company']),'cur' => 'space_index')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "banner.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="content" class="container">
	<div class="row">
		
		<div class="span12">
			<div class="mod">
				<div class="mod-hd">
					<h2><?php echo $this->_tpl_vars['_feed_back_to_company']; ?>
</h2>
				</div>
				<div class="mod-bd">
					<form name="feedfrm" action="" method="post">
						<input type="hidden" name="companyid" value="<?php echo $this->_tpl_vars['COMPANY']['id']; ?>
">
						<div class="clearfix">
							<label for=""><?php echo $this->_tpl_vars['_leave_content']; ?>
</label>
							<div class="input">
								<textarea name="feed[content]" class="span8" rows="10"><?php if ($this->_tpl_vars['pb_userid'] == ""): ?><?php echo $this->_tpl_vars['_pls_login_first']; ?>
...<?php endif; ?></textarea>
							</div>

						</div>
						<div class="actions">
							 <input type="submit" name="save" value="<?php echo $this->_tpl_vars['_submit']; ?>
"  class="btn primary" <?php if ($this->_tpl_vars['pb_userid'] == ""): ?>disabled="disabled"<?php endif; ?>/>
							 <input type="submit" name="reset" value="<?php echo $this->_tpl_vars['_reset']; ?>
"  class="btn"/>
						</div>
						 
					</form>
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