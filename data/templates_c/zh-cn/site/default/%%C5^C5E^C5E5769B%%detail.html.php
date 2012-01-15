<?php /* Smarty version 2.6.18, created on 2012-01-07 15:21:09
         compiled from default/product/detail.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'the_url', 'default/product/detail.html', 45, false),array('modifier', 'nl2br', 'default/product/detail.html', 62, false),array('modifier', 'stripslashes', 'default/product/detail.html', 62, false),array('block', 'product', 'default/product/detail.html', 117, false),array('block', 'price', 'default/product/detail.html', 133, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['page_title']),'nav_id' => ($this->_tpl_vars['nav_id']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="main" class="container">
	<div class="breadcrumb"><span><?php echo $this->_tpl_vars['position']; ?>
</span></div>
	<div class="mod">
		<div class="mod-hd">
			<h3><?php echo $this->_tpl_vars['item']['title']; ?>
</h3>
		</div>
		<div class="mod-bd">
			<div class="row">
				<div class="span3">
					<?php if ($this->_tpl_vars['item']['picture']): ?>
					<div class="detailtopconleft">
						<p class="left1"><img src="<?php echo $this->_tpl_vars['item']['image']; ?>
" alt="" width="80" height="80" /></p>
						<p class="left2"><a href="misc.php?source=<?php echo $this->_tpl_vars['item']['image_url']; ?>
" target="_blank"><img src="<?php echo $this->_tpl_vars['theme_img_path']; ?>
images/detail_17.jpg" alt="" /></a><span><?php echo $this->_tpl_vars['_enlarge_image']; ?>
</span></p>
					</div>
		            <?php endif; ?>
				</div>
				<div class="span5">
					<p><?php echo $this->_tpl_vars['item']['title']; ?>
</p>
					<p><?php echo $this->_tpl_vars['_publish_time']; ?>
<?php echo $this->_tpl_vars['item']['pubdate']; ?>
</p>
					  <?php if ($this->_tpl_vars['item']['price']): ?><p><?php echo $this->_tpl_vars['_the_price_n']; ?>
<em class="value"><?php echo $this->_tpl_vars['item']['price']; ?>
</em></p><?php endif; ?>
					  <p><?php echo $this->_tpl_vars['_area']; ?>
<?php echo $this->_tpl_vars['item']['area_names']; ?>
</p>
	                   <p><?php echo $this->_tpl_vars['_belong_industry']; ?>
<?php echo $this->_tpl_vars['item']['industry_names']; ?>
</p>
					   <?php if ($this->_tpl_vars['item']['tag']): ?><p><?php echo $this->_tpl_vars['_keyword']; ?>
<?php echo $this->_tpl_vars['item']['tag']; ?>
</p><?php endif; ?>
					<p style="text-align: center;margin:5px;">
						<br />
						<label>
						  <input type="button" name="favor" value="<?php echo $this->_tpl_vars['_to_inquiry']; ?>
"  class="btn" onclick="redirect('<?php echo $this->_tpl_vars['SiteUrl']; ?>
product/inquery.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
');" />
						</label>
	                   <?php if ($this->_tpl_vars['pb_userid'] == $this->_tpl_vars['item']['member_id']): ?>
						<label>
						  <input type="button" name="edit" value="<?php echo $this->_tpl_vars['_to_edit']; ?>
"  class="btn" onclick="redirect('<?php echo $this->_tpl_vars['SiteUrl']; ?>
virtual-office/product.php?do=edit&id=<?php echo $this->_tpl_vars['item']['id']; ?>
');" />
						</label>
						<?php endif; ?>
						 <?php if ($this->_tpl_vars['pb_username']): ?>
						<label>
						  <input type="button" name="price" value="<?php echo $this->_tpl_vars['_to_price']; ?>
"  class="btn" onclick="redirect('<?php echo $this->_tpl_vars['SiteUrl']; ?>
virtual-office/price.php?do=edit&productid=<?php echo $this->_tpl_vars['item']['id']; ?>
');" />
						</label>
	                    <?php endif; ?>
					</p>

				</div>
				<div class="span8">
					<p class="right1"><?php if ($this->_tpl_vars['item']['companyname']): ?>
					<a href="<?php echo smarty_function_the_url(array('module' => 'space','userid' => ($this->_tpl_vars['item']['space_name'])), $this);?>
" target="_blank" title="<?php echo $this->_tpl_vars['item']['companyname']; ?>
"><?php echo $this->_tpl_vars['item']['companyname']; ?>
</a><?php else: ?><?php echo $this->_tpl_vars['_released_by_personnal']; ?>
<?php endif; ?></p>
					<p><?php echo $this->_tpl_vars['_contact_people']; ?>
<?php echo $this->_tpl_vars['item']['link_people']; ?>
<br />
					<?php echo $this->_tpl_vars['_member_type']; ?>
<img src="<?php echo $this->_tpl_vars['MEMBER']['groupimage']; ?>
" alt="<?php echo $this->_tpl_vars['MEMBER']['groupname']; ?>
" /><br />
					<?php echo $this->_tpl_vars['_reputation_index_n']; ?>
<?php echo $this->_tpl_vars['MEMBER']['credits']; ?>
<br />
					<?php echo $this->_tpl_vars['_authentication_type']; ?>
<?php echo $this->_tpl_vars['MEMBER']['trust_image']; ?>
<br />
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="span11">
			<div class="mod">
				<div class="mod-hd">
					<h3><?php echo $this->_tpl_vars['_details']; ?>
</h3>
				</div>
				<div class="mod-bd">
					<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['content'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>

					   <?php if ($this->_tpl_vars['ObjectParams']): ?>
						<table width="578" border="0" class="table_param">
						<caption><?php echo $this->_tpl_vars['item']['title']; ?>
<?php echo $this->_tpl_vars['_specifications']; ?>
</caption>
		                <tr> 
		                    <th>&nbsp;</th><th><?php echo $this->_tpl_vars['_content_n']; ?>
</th> 
		                </tr> 
		                <?php $_from = $this->_tpl_vars['ObjectParams']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['op'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['op']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tparam']):
        $this->_foreach['op']['iteration']++;
?>
							<tr>
							  <td><?php echo $this->_tpl_vars['tparam']['label']; ?>
</td>
							  <td><?php echo $this->_tpl_vars['tparam']['value']; ?>
</td>
						</tr>
		               	<?php endforeach; endif; unset($_from); ?>
					   </table>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="span6">
			
			<?php if ($this->_tpl_vars['pb_username'] == ""): ?>
			<div class="mod">
				<div class="mod-hd">
					<h3><?php echo $this->_tpl_vars['_members_view']; ?>
</h3>
				</div>
				<div class="mod-bd">
					<p><?php echo $this->_tpl_vars['_register_site_member']; ?>

                            <input type="button" name="btn" value="<?php echo $this->_tpl_vars['_login']; ?>
" onclick="redirect('<?php echo $this->_tpl_vars['SiteUrl']; ?>
logging.php?forward=<?php echo $_SERVER['REQUEST_URI']; ?>
');" class="btn_submit"></p>
					<p><?php echo $this->_tpl_vars['_not_register_site_member']; ?>
<input type="button" name="btn" value="<?php echo $this->_tpl_vars['_free']; ?>
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
					<p><?php echo $this->_tpl_vars['_address']; ?>
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
				   	<?php echo $this->_tpl_vars['_website']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
<?php echo $this->_tpl_vars['item']['site_url']; ?>

				   	</p>
				</div>
			</div>
			
            <?php endif; ?>
            <div class="mod">
				<div class="mod-hd">
					<h3><?php echo $this->_tpl_vars['_add_information_release']; ?>
</h3>
				</div>
				<div class="mod-bd">
					<ul>
	                	<?php $this->_tag_stack[] = array('product', array('memberid' => ($this->_tpl_vars['item']['member_id']),'row' => 10,'name' => 'item')); $_block_repeat=true;smarty_block_product($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<li><?php echo $this->_tpl_vars['item']['link']; ?>
</li>
	                    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_product($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					</ul>
				</div>
			</div>
			<div class="contacttype">
				
				
			</div>
			<div class="mod">
				<div class="mod-hd">
					<h3><?php echo $this->_tpl_vars['_linked_product_price']; ?>
</h3>
				</div>
				<div class="mod-bd">
					<ul>
	                	<?php $this->_tag_stack[] = array('price', array('productid' => ($this->_tpl_vars['item']['id']),'row' => 10,'name' => 'item')); $_block_repeat=true;smarty_block_price($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<li><?php echo $this->_tpl_vars['item']['link']; ?>
</li>
	                    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_price($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
$("#SearchFrm").attr("action","<?php echo smarty_function_the_url(array('module' => 'search'), $this);?>
");
$("#hdDo").val("product");
$("#topMenuProduct").addClass("lcur");
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>