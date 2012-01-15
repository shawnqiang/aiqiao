<?php /* Smarty version 2.6.18, created on 2012-01-03 11:56:35
         compiled from default/product/price.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'price', 'default/product/price.html', 42, false),array('block', 'product', 'default/product/price.html', 70, false),array('function', 'category', 'default/product/price.html', 54, false),array('function', 'the_url', 'default/product/price.html', 213, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['page_title']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<style type="text/css">
@import url(<?php echo $this->_tpl_vars['theme_img_path']; ?>
css/effect.css);
</style>
<script src="scripts/jquery.tools.js"></script>
<script src="scripts/jquery.hover.js"></script>
<div id="main" class="container">
	<div class="row">
		<div class="span4">
			<div class="mod">
				<div class="mod-hd">
					<h2><?php echo $this->_tpl_vars['_product_prices']; ?>
</h2>
				</div>
				<div class="mod-bd">
					<ul id="topnav">
					<?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
						<li>
							<a href="product/price.php?action=search&catid=<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['title']; ?>
</a>
							<?php if ($this->_tpl_vars['item']['child']): ?>
							<div class="sub">
							   <div class="row clearfix">
								 <ul>
								 <?php $_from = $this->_tpl_vars['item']['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item_child']):
?>
									<li><a href="product/price.php?action=search&catid=<?php echo $this->_tpl_vars['item_child']['id']; ?>
"><?php echo $this->_tpl_vars['item_child']['title']; ?>
</a></li>
								  <?php endforeach; endif; unset($_from); ?>
								 </ul> 
								</div>
							</div>
							<?php endif; ?>
						</li>
					  <?php endforeach; endif; unset($_from); ?>
					</ul>
					<div class="btn_price_all"><a href="product/price.php?action=search"><?php echo $this->_tpl_vars['_all_product_categories']; ?>
</a></div>
				</div>
			</div>
			<div class="mod">
				<div class="mod-hd">
					<h2><?php echo $this->_tpl_vars['_latest_price']; ?>
</h2>
				</div>
				<div class="mod-bd">
					<ul>
					  	<?php $this->_tag_stack[] = array('price', array('row' => 9,'name' => 'item')); $_block_repeat=true;smarty_block_price($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					  	<li><?php echo $this->_tpl_vars['item']['link']; ?>
</li>
					 	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_price($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				   	</ul>
				</div>
			</div>
			
		</div>
		<div class="span13">
			<div class="area_price cl">
				 <strong><?php echo $this->_tpl_vars['_area_prices']; ?>
</strong>
				 <div>
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
			
			<!-- the tabs -->
			<ul class="tabs2 title_mouse">
				  <li><a href="javascript:;"><span><?php echo $this->_tpl_vars['_latest_new']; ?>
 <?php echo $this->_tpl_vars['_product']; ?>
</span></a></li>
				  <li><a href="javascript:;"><span><?php echo $this->_tpl_vars['_latest_hot']; ?>
 <?php echo $this->_tpl_vars['_product']; ?>
</span></a></li>
			</ul>
			<!-- tab "panes" --> 
			<div class="panes box_bord">
				<div class="product_hot clearfix">
					<ul>
						<?php $this->_tag_stack[] = array('product', array('row' => 6,'type' => 'image','name' => 'item')); $_block_repeat=true;smarty_block_product($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<li><a href="<?php echo $this->_tpl_vars['item']['url']; ?>
"><img src="<?php echo $this->_tpl_vars['item']['src']; ?>
" alt="<?php echo $this->_tpl_vars['item']['name']; ?>
" /></a>
						<p><a href="<?php echo $this->_tpl_vars['item']['url']; ?>
"><?php echo $this->_tpl_vars['item']['names']; ?>
</a></p>
						</li>
					   <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_product($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>                                                    
					</ul>
				 </div>
				<div class="product_hot clearfix" style="display:none;">
					<ul>
						<?php $this->_tag_stack[] = array('product', array('row' => 6,'type' => 'hot','name' => 'item')); $_block_repeat=true;smarty_block_product($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<li><a href="<?php echo $this->_tpl_vars['item']['url']; ?>
"><img src="<?php echo $this->_tpl_vars['item']['src']; ?>
" alt="<?php echo $this->_tpl_vars['item']['name']; ?>
" /></a>
						<p><a href="<?php echo $this->_tpl_vars['item']['url']; ?>
"><?php echo $this->_tpl_vars['item']['names']; ?>
</a></p>
						</li>
					   <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_product($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>                                                      
					</ul>
				 </div>
			</div>

			<div class="mod">
				<div class="mod-hd">
					<h2><span class="corner_t_m title_mouse"><?php echo $this->_tpl_vars['_product_category']; ?>
</span></h2>
				</div>
				<div class="mod-bd">
					<div class="letterindex clearfix">
					<h3><?php echo $this->_tpl_vars['_sort_by_alpha']; ?>
</h3>
					 <ul id="letternav">
						<?php $_from = $this->_tpl_vars['AlphabetSorts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['Alphabet'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['Alphabet']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key_alphabet'] => $this->_tpl_vars['item_alphabet']):
        $this->_foreach['Alphabet']['iteration']++;
?>
						<li class="frist">
						 <a href="javascript:;"><?php echo $this->_tpl_vars['key_alphabet']; ?>
</a>
							<div class="sub">
							   <div class="row clearfix">
								 <ul>
									<?php $_from = $this->_tpl_vars['item_alphabet']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subkey_alphabet'] => $this->_tpl_vars['subitem_alphabet']):
?>
									<li><a href="product/price.php?action=search&catid=<?php echo $this->_tpl_vars['subkey_alphabet']; ?>
"><?php echo $this->_tpl_vars['subitem_alphabet']; ?>
</a></li>
									<?php endforeach; endif; unset($_from); ?>
								 </ul> 
								</div>
							</div>
						</li>
						<?php endforeach; endif; unset($_from); ?>
					</ul>
				</div>
				<div class="letter_product_content clearfix">
					<table>
					<?php $_from = $this->_tpl_vars['Cats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['Cats'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['Cats']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key1'] => $this->_tpl_vars['item1']):
        $this->_foreach['Cats']['iteration']++;
?>
					  <tr class="bg_hover">
						<th><a href="product/price.php?action=search&catid=<?php echo $this->_tpl_vars['item1']['id']; ?>
"><?php echo $this->_tpl_vars['item1']['title']; ?>
</a></th>
						<td>
						   <ul class="aa clearfix">
							   <?php $_from = $this->_tpl_vars['item1']['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['Cats2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['Cats2']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key2'] => $this->_tpl_vars['item2']):
        $this->_foreach['Cats2']['iteration']++;
?>
							   <li>
								  <h3><a href="product/price.php?action=search&catid=<?php echo $this->_tpl_vars['item2']['id']; ?>
"><?php echo $this->_tpl_vars['item2']['title']; ?>
</a></h3>
								  <ul>
									 <li>
									 <?php $_from = $this->_tpl_vars['item2']['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['Cats3'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['Cats3']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key3'] => $this->_tpl_vars['item3']):
        $this->_foreach['Cats3']['iteration']++;
?>
									 <a href="product/price.php?action=search&catid=<?php echo $this->_tpl_vars['item3']['id']; ?>
"><?php echo $this->_tpl_vars['item3']['title']; ?>
</a>
									 <?php endforeach; endif; unset($_from); ?>
									 </li>
								  </ul>
							   </li>
							   <?php endforeach; endif; unset($_from); ?>
						   </ul>
						</td>
					  </tr>
					  <tr><td colspan="2" class="padding0"><hr class="hr_dashed"/></td></tr>
					  <?php endforeach; endif; unset($_from); ?>
					</table>    
				</div>

				</div>
			</div>
		</div>
	</div>
</div>


<?php echo '
<script>
$(function() {
	$("ul.tabs2").tabs("div.panes > div");
});
</script>
<script type="text/javascript">
$(document).ready(function() {
	function megaHoverOver(){
		$(this).find(".sub").stop().fadeTo(\'fast\', 10000).show();
		(function($) { 
			jQuery.fn.calcSubWidth = function() {
				rowWidth = 0;
				//Calculate row
				$(this).find("ul").each(function() {					
					rowWidth += $(this).width(); 
				});	
			};
		})(jQuery); 
		
		if ( $(this).find(".row").length > 0 ) { //If row exists...
			var biggestRow = 0;	
			//Calculate each row
			$(this).find(".row").each(function() {							   
				$(this).calcSubWidth();
				//Find biggest row
				if(rowWidth > biggestRow) {
					biggestRow = rowWidth;
				}
			});
			//Set width
			$(this).find(".sub").css({\'width\' :biggestRow});
			$(this).find(".row:last").css({\'margin\':\'0\'});
		} else { //If row does not exist...
			
			$(this).calcSubWidth();
			//Set Width
			$(this).find(".sub").css({\'width\' : rowWidth});
			
		}
	}
	
	function megaHoverOut(){ 
	  $(this).find(".sub").stop().fadeTo(\'fast\', 1, function() {
		  $(this).hide(); 
	  });
	}


	var config = {    
		 sensitivity: 2, // number = sensitivity threshold (must be 1 or higher)    
		 interval: 100, // number = milliseconds for onMouseOver polling interval    
		 over: megaHoverOver, // function = onMouseOver callback (REQUIRED)    
		 timeout: 0, // number = milliseconds delay before onMouseOut    
		 out: megaHoverOut // function = onMouseOut callback (REQUIRED)    
	};

	$("ul#letternav li .sub").css({\'opacity\':\'0\'});
	$("ul#letternav li").hoverIntent(config);
	$("ul#topnav li .sub").css({\'opacity\':\'0\'});
	$("ul#topnav li").hoverIntent(config);


});
</script>
'; ?>

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