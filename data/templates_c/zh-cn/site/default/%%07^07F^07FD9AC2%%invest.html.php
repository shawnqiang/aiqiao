<?php /* Smarty version 2.6.18, created on 2012-01-06 15:01:55
         compiled from default/offer/invest.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'brand', 'default/offer/invest.html', 10, false),array('block', 'offer', 'default/offer/invest.html', 57, false),array('block', 'industry', 'default/offer/invest.html', 96, false),array('function', 'category', 'default/offer/invest.html', 71, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['_invest_info']),'nav_id' => 4)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<style type="text/css">
@import url(<?php echo $this->_tpl_vars['theme_img_path']; ?>
css/effect.css);
</style>
<script src="scripts/jquery.tools.js"></script>
<script src="images/flipper/rotation.js"></script>
<div id="flipper_div" align="center"></div>
<script type="text/javascript">
var fp_data = new Array();
<?php $this->_tag_stack[] = array('brand', array('type' => 'image','row' => '14')); $_block_repeat=true;smarty_block_brand($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
fp_data.push(["attachment/<?php echo $this->_tpl_vars['brand']['picture']; ?>
","<?php echo $this->_tpl_vars['brand']['url']; ?>
"]);
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_brand($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</script>
<?php echo '
<script>
// var fp_pics="",fp_links="";
// var fp_lens = fp_data.length;
// for(var i=0; i<fp_lens; i++){
// 	fp_pics += fp_data[i][0];
// 	fp_links += escape(fp_data[i][1]);
// 	if(i%2==0 && i!=fp_lens-1){
// 		fp_pics += "§";
// 		fp_links += "§";
// 	}else if(i%2==1 && i!=fp_lens-1){
// 		fp_pics += "§_§";
// 		fp_links += "§_§";
// 	}
// }
// var oswf = new sinaFlash("images/flipper/flipper.swf", "flipper", 960, 90, "7", "#FFFFFF", false, "High");
// oswf.addParam("allowScriptAccess", "always");
// oswf.addParam("menu", "false");
// oswf.addParam("wmode", "opaque");
// oswf.addParam("scale", "noscale");
// oswf.addVariable("pic_width", "120");
// oswf.addVariable("pic_height", "75");
// oswf.addVariable("colnum", "7");
// oswf.addVariable("hspace", "15");
// oswf.addVariable("vspace", "20");
// oswf.addVariable("flip_time", "200");
// oswf.addVariable("pause_time", "2000");
// oswf.addVariable("pics", fp_pics);
// oswf.addVariable("urls", fp_links);
// oswf.addVariable("rand", "0");
// oswf.write("flipper_div");
// </script>
'; ?>


<div id="main" class="container">
	<div class="row">
		<div class="span4">
			<div class="mod">
				<div class="mod-hd">
					<h2><?php echo $this->_tpl_vars['_hot_invest_project']; ?>
</h2>	
				</div>
				<div class="mod-bd">
					<ul class="info-list">
					  <?php $this->_tag_stack[] = array('offer', array('row' => 9,'typeid' => 6)); $_block_repeat=true;smarty_block_offer($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					  <li><?php echo $this->_tpl_vars['offer']['link']; ?>
</li>
					 <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_offer($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				   </ul>
				</div>
			</div>	
		</div>
		<div class="span13">
			<div class="mod">
				<div class="mod-hd">
					 <strong><?php echo $this->_tpl_vars['_area_invest_info']; ?>
</strong>
				</div>
				
				 <div class="mod-bd">
					 <?php echo smarty_function_category(array('name' => 'area','depth' => '1'), $this);?>

					 <?php $_from = $this->_tpl_vars['category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
					 <a href='offer/list.php?typeid=4&areaid=<?php echo $this->_tpl_vars['item']['id']; ?>
&level=1'><span><?php echo $this->_tpl_vars['item']['name']; ?>
</span></a>
					 <?php endforeach; endif; unset($_from); ?>
				 </div>
			</div>

			<div class="mod">
				<div class="mod-hd">
					<h2><span class="title_mouse"><?php echo $this->_tpl_vars['_commend']; ?>
 <?php echo $this->_tpl_vars['_invest_info']; ?>
</span><span class="sub_category"><span class="title_more"><a href="offer/list.php?typeid=4&type=commend" title="<?php echo $this->_tpl_vars['_more']; ?>
" target="_blank"><span class="raquo">&raquo;</span><?php echo $this->_tpl_vars['_more']; ?>
</a></span></span></h2>
				</div>
				<div class="mod-bd">
					<div class="billboard">
					  
						<?php $this->_tag_stack[] = array('offer', array('row' => 18,'recursive' => 1,'type' => 'commend','typeid' => 6)); $_block_repeat=true;smarty_block_offer($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					    <div><a <?php echo $this->_tpl_vars['offer']['style']; ?>
 href="<?php echo $this->_tpl_vars['offer']['url']; ?>
" title="<?php echo $this->_tpl_vars['offer']['title']; ?>
"><?php echo $this->_tpl_vars['offer']['adwords']; ?>
</a></div>
						<?php if (!($this->_tpl_vars['offer']['iteration'] % 5)): ?>
						<br class="cl" />
						<?php endif; ?>
					  	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_offer($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					  
					</div> 
				</div>
			</div>	

			<?php $this->_tag_stack[] = array('industry', array('include' => "1,2,3")); $_block_repeat=true;smarty_block_industry($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<div class="mod">
				<div class="mod-hd">
					<h2><span class="title_mouse"><?php echo $this->_tpl_vars['industry']['title']; ?>
 <?php echo $this->_tpl_vars['_invest_info']; ?>
</span><span class="sub_category"><span class="title_more"><a href="offer/list.php?typeid=4&industryid=<?php echo $this->_tpl_vars['industry']['id']; ?>
&level=<?php echo $this->_tpl_vars['industry']['level']; ?>
" title="<?php echo $this->_tpl_vars['_more']; ?>
" target="_blank"><span class="raquo">&raquo;</span><?php echo $this->_tpl_vars['_more']; ?>
</a></span></span></h2>
				</div>
				<div class="mod-bd">
					
					<ul class="info-list media-list">
						<?php $this->_tag_stack[] = array('offer', array('row' => 6,'type' => 'image','recursive' => 1,'typeid' => 6,'industryid' => ($this->_tpl_vars['industry']['id']))); $_block_repeat=true;smarty_block_offer($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<li class="item-fifth">
						  <a href="<?php echo $this->_tpl_vars['offer']['url']; ?>
" class="image"><img height="80" width="110" border="0" alt="<?php echo $this->_tpl_vars['offer']['adwords']; ?>
" src="<?php echo $this->_tpl_vars['offer']['thumb']; ?>
"></a>
						  <p class="title"><a title="<?php echo $this->_tpl_vars['offer']['title']; ?>
" href="<?php echo $this->_tpl_vars['offer']['url']; ?>
"><?php echo $this->_tpl_vars['offer']['adwords']; ?>
</a></p>
						</li>
					  	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_offer($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					</ul>
					
					
				</div>
			</div>
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_industry($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		</div>
	</div>	
</div>
<script>
$("#SearchFrm").attr("action","offer/list.php");
$("#topMenuOffer").addClass("lcur");
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>