<?php /* Smarty version 2.6.18, created on 2012-01-19 08:18:02
         compiled from default/brand/index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'get', 'default/brand/index.html', 16, false),array('function', 'category', 'default/brand/index.html', 52, false),array('function', 'the_url', 'default/brand/index.html', 85, false),array('block', 'news', 'default/brand/index.html', 39, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['_brands']),'nav_id' => 10)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<style type="text/css">
@import url(<?php echo $this->_tpl_vars['theme_img_path']; ?>
css/effect.css);
</style>
<script src="scripts/jquery.hover.js"></script>
<div id="main" class="container">
	
	<div class="row">
		<div class="side-bar l-col span4">
			<div class="mod">
				<div class="mod-hd">
					<h2><?php echo $this->_tpl_vars['_brands']; ?>
 <?php echo $this->_tpl_vars['_categories']; ?>
</h2>
				</div>
				<div class="mod-bd">
					<ul class="info-list">
						<?php echo smarty_function_get(array('from' => 'type','name' => 'brandtype','var' => 'Items'), $this);?>

						<?php $_from = ($this->_tpl_vars['Items']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['brandtype'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['brandtype']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['brandtype']):
        $this->_foreach['brandtype']['iteration']++;
?>
						<li>
						   <h3><a href="brand/list.php?catid=<?php echo $this->_tpl_vars['brandtype']['id']; ?>
"><?php echo $this->_tpl_vars['brandtype']['title']; ?>
</a></h3>
						   <?php if ($this->_tpl_vars['brandtype']['child']): ?>
						   <ul>
							<?php $_from = $this->_tpl_vars['brandtype']['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item_child']):
?>
							   <li><a href="brand/list.php?catid=<?php echo $this->_tpl_vars['item_child']['id']; ?>
"><?php echo $this->_tpl_vars['item_child']['title']; ?>
</a></li>
							<?php endforeach; endif; unset($_from); ?>
						   </ul>
						   <?php endif; ?>
						</li>
					  	<?php endforeach; endif; unset($_from); ?>
					</ul>
				</div>
			</div>

			<div class="mod">
				<div class="mod-hd">
					<h2><?php echo $this->_tpl_vars['_brands']; ?>
 <?php echo $this->_tpl_vars['_information']; ?>
</h2>
				</div>
				<div class="mod-bd">
					<ul class="info-list">
					 <?php $this->_tag_stack[] = array('news', array('row' => 10,'name' => 'item')); $_block_repeat=true;smarty_block_news($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					 <li><?php echo $this->_tpl_vars['item']['link']; ?>
</li>
					 <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_news($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				   	</ul>
				</div>
			</div>
		</div>
		<div class="main-content r-col span13">
			<div class="mod">
				<div class="mod-hd">
					<h2><?php echo $this->_tpl_vars['_area_prices']; ?>
</h2>
				</div>
				<div class="mod-bd">
				 <?php echo smarty_function_category(array('name' => 'area','depth' => '1'), $this);?>

				 <?php $_from = $this->_tpl_vars['category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
				 <a href='product/price.php?action=search&areaid=<?php echo $this->_tpl_vars['item']['id']; ?>
'><span><?php echo $this->_tpl_vars['item']['name']; ?>
</span></a>
				 <?php endforeach; endif; unset($_from); ?>				 
				</div>
			</div>
			
			<?php echo smarty_function_get(array('from' => 'type','name' => 'brandtype','var' => 'BrandTypes','multi' => true), $this);?>

				<?php $_from = $this->_tpl_vars['LatestBrands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key_brand'] => $this->_tpl_vars['item_sort']):
?>
				<div class="mod">
					<div class="mod-hd">
						<h2><span class="title_mouse"><?php echo $this->_tpl_vars['BrandTypes'][$this->_tpl_vars['item_sort']['type_id']]['name']; ?>
 <?php echo $this->_tpl_vars['_brands']; ?>
</span><span class="sub_category">
						<span class="title_more"><a href="brand/list.php?catid=<?php echo $this->_tpl_vars['item_sort']['type_id']; ?>
" title="<?php echo $this->_tpl_vars['_more']; ?>
"><span class="raquo">&raquo;</span><?php echo $this->_tpl_vars['_more']; ?>
</a></span>
						</span></h2>
					</div>
					<div class="mod-bd">
						<ul class="info-list media-list">
							<?php $_from = $this->_tpl_vars['item_sort']['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key_brand_child'] => $this->_tpl_vars['item_brand_child']):
?>
							<li class="item-fifth">
							<a class="image" href="brand/detail.php?id=<?php echo $this->_tpl_vars['item_brand_child']['id']; ?>
"><img src="attachment/<?php echo $this->_tpl_vars['item_brand_child']['picture']; ?>
.small.jpg" /></a>
							<p class="title"><?php echo $this->_tpl_vars['item_brand_child']['name']; ?>
</p>
							</li>  
							<?php endforeach; endif; unset($_from); ?>
						</ul>
					</div>
				</div>	
				               
				<?php endforeach; endif; unset($_from); ?>
		</div>
	</div>	
</div>

<script>
$("#SearchFrm").attr("action","<?php echo smarty_function_the_url(array('module' => 'search','do' => 'brand'), $this);?>
");
$("#topMenuProduct").addClass("lcur");
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>