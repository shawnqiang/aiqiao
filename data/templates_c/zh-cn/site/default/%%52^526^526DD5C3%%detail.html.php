<?php /* Smarty version 2.6.18, created on 2012-01-06 16:00:02
         compiled from default/brand/detail.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'default/brand/detail.html', 21, false),array('modifier', 'default', 'default/brand/detail.html', 21, false),array('function', 'the_url', 'default/brand/detail.html', 22, false),array('block', 'brand', 'default/brand/detail.html', 33, false),array('block', 'companynews', 'default/brand/detail.html', 65, false),array('block', 'product', 'default/brand/detail.html', 77, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['page_title']),'nav_id' => 10)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<style type="text/css">
@import url(<?php echo $this->_tpl_vars['theme_img_path']; ?>
css/effect.css);
</style>
<script type="text/javascript" src="scripts/jquery/jcarousel.js"></script>

<div id="main" class="container">
	<div class="breadcrumb"><span><?php echo $this->_tpl_vars['position']; ?>
</span></div>
	<div class="row">
		<div class="span13">
			<div class="mod">
				<div class="mod-bd cl">
					<div class="brand_grade">
					  <div class="brand_img">
						 <div class="logo"><img src="<?php echo $this->_tpl_vars['item']['img']; ?>
" alt="<?php echo $this->_tpl_vars['item']['title']; ?>
" /></div>
					  </div>
					  <div><strong><?php echo $this->_tpl_vars['item']['title']; ?>
</strong></div>
				  	</div>  
				  	<div class="brand_intro">
					  <div class="title"><?php echo $this->_tpl_vars['item']['title']; ?>
<em>(<?php echo $this->_tpl_vars['item']['alias_name']; ?>
)</em></div>
					  <p><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['description'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['_full_the_data']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['_full_the_data'])); ?>
</p>
					  <div class="brand_intro_more"><input name="go" onclick="redirect('<?php echo smarty_function_the_url(array('module' => 'space','id' => ($this->_tpl_vars['item']['company_id'])), $this);?>
');" type="button" value="<?php echo $this->_tpl_vars['_visit']; ?>
 <?php echo $this->_tpl_vars['_space_name']; ?>
" class="btn"/></div>   
				  	</div>
				</div>
			</div>	

			<div class="mod">
				<div class="mod-hd">
					<h3><?php echo $this->_tpl_vars['_other_brands']; ?>
:</h3>
				</div>
				<div class="mod-bd">
					<ul id="mycarousel" class="jcarousel-skin">
		                <?php $this->_tag_stack[] = array('brand', array('row' => 12,'type' => 'image','companyid' => $this->_tpl_vars['item']['company_id'],'name' => 'item')); $_block_repeat=true;smarty_block_brand($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		                <li><div><span><a href="<?php echo $this->_tpl_vars['item']['url']; ?>
"><img src="<?php echo $this->_tpl_vars['item']['src']; ?>
" alt="<?php echo $this->_tpl_vars['item']['title']; ?>
" /></a></span></div>
							<p><a href="<?php echo $this->_tpl_vars['item']['title']; ?>
"><?php echo $this->_tpl_vars['item']['title']; ?>
</a></p>
		                <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_brand($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		            </ul>
				</div>
			</div>
			
			<div class="mod">
				<div class="mod-hd">
					<h2><span class="title_mouse"><?php echo $this->_tpl_vars['_similar_brands']; ?>
</span></h2>
					 <?php if ($this->_tpl_vars['item']['type_id']): ?><span class="more"><a href="brand/list.php?do=search&catid=<?php echo $this->_tpl_vars['item']['type_id']; ?>
"><?php echo $this->_tpl_vars['_more']; ?>
 <?php echo $this->_tpl_vars['_industry_brand']; ?>
&raquo;</a></span><?php endif; ?>
				</div>
				<div class="mod-bd">
					<ul class="info-list media-list">
						<?php $this->_tag_stack[] = array('brand', array('row' => 18,'type' => 'image','typeid' => ($this->_tpl_vars['item']['type_id']),'removal' => ($this->_tpl_vars['item']['id']),'name' => 'item')); $_block_repeat=true;smarty_block_brand($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<li class="item-fifth"><a class="image" href="<?php echo $this->_tpl_vars['item']['url']; ?>
"><img src="<?php echo $this->_tpl_vars['item']['src']; ?>
" alt="<?php echo $this->_tpl_vars['item']['title']; ?>
" /></a>
						<p class="title"><a href="<?php echo $this->_tpl_vars['item']['url']; ?>
"><?php echo $this->_tpl_vars['item']['title']; ?>
</a></p>
						</li>
						<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_brand($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				 	</ul>
				</div>
			</div>		
		</div>

		<div class="span4">
			<div class="mod">
				<div class="mod-hd">
					<h2><?php echo $this->_tpl_vars['_company_news']; ?>
</h2>
				</div>
				<div class="mod-bd">
					<ul>
						<?php $this->_tag_stack[] = array('companynews', array('row' => 6,'companyid' => ($this->_tpl_vars['item']).".company_id",'name' => 'item')); $_block_repeat=true;smarty_block_companynews($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
							<li><a href="<?php echo $this->_tpl_vars['item']['url']; ?>
" target="_blank" title="<?php echo $this->_tpl_vars['item']['fulltitle']; ?>
"><?php echo $this->_tpl_vars['item']['title']; ?>
</a></li>
						<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_companynews($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				   </ul>
				</div>
			</div>
			<div class="mod">
				<div class="mod-hd">
					<h2><?php echo $this->_tpl_vars['_similar_product']; ?>
</h2>
				</div>
				<div class="mod-bd">
					<ul>
						<?php $this->_tag_stack[] = array('product', array('row' => 6,'brandid' => $this->_tpl_vars['item']['id'],'name' => 'item')); $_block_repeat=true;smarty_block_product($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<li><a href="<?php echo $this->_tpl_vars['item']['name']; ?>
"><?php echo $this->_tpl_vars['item']['names']; ?>
</a></li>
					 	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_product($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					</ul>
				</div>
			</div>		
		</div>
	</div>
</div>

		
<?php echo '
<script type="text/javascript">
function mycarousel_initCallback(carousel)
{
    // Disable autoscrolling if the user clicks the prev or next button.
    carousel.buttonNext.bind(\'click\', function() {
        carousel.startAuto(0);
    });

    carousel.buttonPrev.bind(\'click\', function() {
        carousel.startAuto(0);
    });

    // Pause autoscrolling if the user moves with the cursor over the clip.
    carousel.clip.hover(function() {
        carousel.stopAuto();
    }, function() {
        carousel.startAuto();
    });
};

jQuery(document).ready(function() {
    jQuery(\'#mycarousel\').jcarousel({
        auto: 2,
        wrap: \'last\',
        initCallback: mycarousel_initCallback
    });
});
</script>
'; ?>

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