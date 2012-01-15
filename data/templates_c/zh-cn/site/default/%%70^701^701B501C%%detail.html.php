<?php /* Smarty version 2.6.18, created on 2012-01-03 07:32:19
         compiled from default/company/detail.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'default/company/detail.html', 12, false),array('modifier', 'stripslashes', 'default/company/detail.html', 12, false),array('block', 'product', 'default/company/detail.html', 20, false),array('block', 'offer', 'default/company/detail.html', 29, false),array('block', 'company', 'default/company/detail.html', 76, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['page_title']),'nav_id' => ($this->_tpl_vars['nav_id']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="main" class="container">
	<div class="tips"><span><?php echo $this->_tpl_vars['position']; ?>
</span></div>
	<div class="row">
		<div class="span13">
			<div class="mod">
				<div class="mod-hd">
					<h3><?php echo $this->_tpl_vars['_company']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
<?php echo $this->_tpl_vars['item']['name']; ?>
</h3>
				</div>
				<div class="mod-bd">
					<div>
		               <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['description'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>

					   <br>
					   <p>[<?php echo $this->_tpl_vars['_area']; ?>
<?php echo $this->_tpl_vars['item']['area_names']; ?>
 <?php echo $this->_tpl_vars['_belong_industry']; ?>
<?php echo $this->_tpl_vars['item']['industry_names']; ?>
]</p>
					</div>				
				   
					<h3><?php echo $this->_tpl_vars['_similars']; ?>
 <?php echo $this->_tpl_vars['_product']; ?>
<?php echo $this->_tpl_vars['_lists']; ?>
</h3>
					<div>
						  <ul>
						  <?php $this->_tag_stack[] = array('product', array('row' => 10,'companyid' => ($this->_tpl_vars['item']['id']))); $_block_repeat=true;smarty_block_product($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						  <li><?php echo $this->_tpl_vars['offer']['link']; ?>
</li>
						  <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_product($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
						  </ul>
					</div>				
				    
					<h3><?php echo $this->_tpl_vars['_similars']; ?>
 <?php echo $this->_tpl_vars['_offer']; ?>
<?php echo $this->_tpl_vars['_lists']; ?>
</h3>
					<div>
						  <ul>
						  <?php $this->_tag_stack[] = array('offer', array('row' => 10,'companyid' => ($this->_tpl_vars['item']['id']))); $_block_repeat=true;smarty_block_offer($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						  <li><?php echo $this->_tpl_vars['offer']['link']; ?>
</li>
						  <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_offer($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
						  </ul>
					</div>

				</div>
			</div>	
		</div>

		<div class="span4">
			<?php if (! $this->_tpl_vars['LoginCheck'] && $this->_tpl_vars['pb_username'] == ""): ?>
				<div class="mod">
					<div class="mod-hd">
						<h3><?php echo $this->_tpl_vars['_members_view']; ?>
</h3>
					</div>
					<div class="mod-bd">
						<p><?php echo $this->_tpl_vars['_register_site_member']; ?>
 
	                            <input type="button" name="btn_login" value="<?php echo $this->_tpl_vars['_login']; ?>
" onclick="redirect('<?php echo $this->_tpl_vars['SiteUrl']; ?>
logging.php?forward=<?php echo $_SERVER['REQUEST_URI']; ?>
');" class="btn_submit"><?php echo $this->_tpl_vars['_fenhao']; ?>
</p>
						<p><?php echo $this->_tpl_vars['_not_register_site_member']; ?>
<input type="button" name="btn_register" value="<?php echo $this->_tpl_vars['_free']; ?>
 <?php echo $this->_tpl_vars['_register']; ?>
" class="btn_submit" onclick="redirect('<?php echo $this->_tpl_vars['SiteUrl']; ?>
member.php');"><?php echo $this->_tpl_vars['_registered_site_member']; ?>
 
		                </p>
					</div>
				</div>
				
            <?php else: ?>
            	<div class="mod">
            		<div class="mod-hd">
            			<h3><?php echo $this->_tpl_vars['_contact']; ?>
</h3>
            		</div>
            		<div class="mod-bd">
            			<p>
	            			<?php echo $this->_tpl_vars['_address']; ?>
<?php echo $this->_tpl_vars['item']['address']; ?>
<br /> 
						   	<?php echo $this->_tpl_vars['_zip']; ?>
<?php echo $this->_tpl_vars['item']['zipcode']; ?>
<br /> 
						   	<?php echo $this->_tpl_vars['_phone']; ?>
<?php echo $this->_tpl_vars['item']['tel']; ?>
<br />
						   	<?php echo $this->_tpl_vars['_fax']; ?>
<?php echo $this->_tpl_vars['item']['fax']; ?>
<br /> 
						   	<?php echo $this->_tpl_vars['_mobile_number']; ?>
<?php echo $this->_tpl_vars['item']['mobile']; ?>
<br /> 
						   	<?php echo $this->_tpl_vars['_website']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
<?php echo $this->_tpl_vars['item']['site_url']; ?>

					   	</p>
            		</div>
            	</div>
            <?php endif; ?>
			<div class="mod">
				<div class="mod-hd">
					<h3><?php echo $this->_tpl_vars['_similars']; ?>
 <?php echo $this->_tpl_vars['_company']; ?>
</h3>
				</div>
				<div class="mod-bd">
					<ul>
	                	<?php $this->_tag_stack[] = array('company', array('industryid' => ($this->_tpl_vars['item']['industry_id']),'areaid' => ($this->_tpl_vars['item']['area_id']),'row' => 10,'name' => 'item')); $_block_repeat=true;smarty_block_company($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<li><span class="title"><?php echo $this->_tpl_vars['item']['link']; ?>
</span></li>
	                    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_company($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					</ul>
				</div>
			</div>	
		</div>
	</div>	
</div>
<script>
$("#topMenuCompany").addClass("lcur");
$("#hdDo").val("company");
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>