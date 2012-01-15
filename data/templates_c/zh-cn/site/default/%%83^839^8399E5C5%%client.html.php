<?php /* Smarty version 2.6.18, created on 2012-01-03 08:23:25
         compiled from default/service/client.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'feed', 'default/service/client.html', 29, false),array('function', 'mailto', 'default/service/client.html', 44, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['page_title']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="main" class="container">
	<div class="tips"><span><?php echo $this->_tpl_vars['position']; ?>
</span></div>
	<div class="row">

		<div class="span13">
			<div class="service_center_txt">
	             <div class="intro">
	             <span><?php echo $this->_tpl_vars['_focus_user_service']; ?>
</span><em><?php echo $this->_tpl_vars['_service_for_your_internet']; ?>
</em>
	             </div>
	             <div class="title"><?php echo $this->_tpl_vars['_customer_service']; ?>
</div>
         	</div>
			<div class="mod">
				<div class="mod-hd">
					<h3><?php echo $this->_tpl_vars['_service_client']; ?>
</h3>
				</div>
				<div class="mod-bd">
					<div><?php echo $this->_tpl_vars['item']['service_client']; ?>
</div>
				</div>
			</div>	
		</div>
		<div class="span4">
			<div class="mod">
				<div class="mod-hd">
					<h3><?php echo $this->_tpl_vars['_latest_tips']; ?>
</h3>
				</div>
				<div class="mod-bd">
					<ul>
						<?php $this->_tag_stack[] = array('feed', array()); $_block_repeat=true;smarty_block_feed($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						  <li>[link:title]</li>
						<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_feed($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					</ul>
				</div>
			</div>
			<div class="mod">
				<div class="mod-hd">
					<h3><?php echo $this->_tpl_vars['_warm_reminder']; ?>
</h3>
				</div>
				<div class="mod-bd">
					 <p>
					<?php echo $this->_tpl_vars['_reply_submit_issue']; ?>
</p>    
					<p><h2><?php echo $this->_tpl_vars['_contact_us']; ?>
</h2><br />
					<?php echo $this->_tpl_vars['_service_hotline']; ?>
<?php echo $this->_tpl_vars['service_tel']; ?>
<br />
					<?php echo $this->_tpl_vars['_email']; ?>
<br /><span><?php echo smarty_function_mailto(array('address' => ($this->_tpl_vars['service_email']),'encode' => 'javascript'), $this);?>
</span></p>
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