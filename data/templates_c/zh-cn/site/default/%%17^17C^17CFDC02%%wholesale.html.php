<?php /* Smarty version 2.6.18, created on 2012-01-20 09:02:01
         compiled from default/offer/wholesale.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'the_url', 'default/offer/wholesale.html', 8, false),array('function', 'get', 'default/offer/wholesale.html', 87, false),array('block', 'news', 'default/offer/wholesale.html', 12, false),array('block', 'industry', 'default/offer/wholesale.html', 44, false),array('block', 'offer', 'default/offer/wholesale.html', 53, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['_wholesale']),'nav_id' => 11)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script src="scripts/swfobject1.5.js" type="text/javascript"></script>
<div id="main" class="container">
	<div class="row">
		<div class="span4 side-bar l-col">
			<div class="mod">
				<div class="mod-hd">
					<h3><span class="title_more"><a href="<?php echo smarty_function_the_url(array('module' => 'search','do' => 'news'), $this);?>
"><span class="raquo">&raquo;</span><?php echo $this->_tpl_vars['_more']; ?>
</a></span><?php echo $this->_tpl_vars['_latest_news']; ?>
</h3>
				</div>
				<div class="mod-bd">
					<ul class="unstyled">
					<?php $this->_tag_stack[] = array('news', array('row' => 5,'titlelen' => 34,'infolen' => 22,'name' => 'item')); $_block_repeat=true;smarty_block_news($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<?php if ($this->_tpl_vars['item']['rownum'] == 0 && $this->_tpl_vars['item']['src'] != ''): ?>
						<li style="height:90px; background:url(<?php echo $this->_tpl_vars['item']['src']; ?>
) no-repeat; padding:0 0 0 90px; overflow:hidden; width:120px;"><h3  style="padding:0 0 0 5px;"><?php echo $this->_tpl_vars['item']['link']; ?>
</h3><?php echo $this->_tpl_vars['item']['content']; ?>
</li>
						<?php else: ?>
						<li><?php echo $this->_tpl_vars['item']['link']; ?>
</li>
						<?php endif; ?>
					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_news($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					</ul>
				</div>
			</div>	
		</div>
		<div class="span9 main-content c-col">
			<div class="main_left_img" id="marketFocus"></div>
		</div>
		<div class="span4 side-bar r-col">
			<div class="mod">
				<div class="mod-hd">
					<h2><?php echo $this->_tpl_vars['_after_free_reg']; ?>
</h2>
				</div>
				<div class="mod-bd">
					<div class="cl">
						<p><a><?php echo $this->_tpl_vars['_build_your_site']; ?>
</a></p>
						<p><a><?php echo $this->_tpl_vars['_post_offer_trade']; ?>
</a></p>
						<p><a><?php echo $this->_tpl_vars['_spread_your_products']; ?>
</a></p>
						<p><a><?php echo $this->_tpl_vars['_meet_more_friends']; ?>
</a></p>
						<p><a class="btn" href="virtual-office/offer.php?do=edit&typeid=11" title="<?php echo $this->_tpl_vars['_register']; ?>
"><?php echo $this->_tpl_vars['_post_wholesale_info']; ?>
&nbsp;&raquo;</a></p>
				   	</div>
				</div>
			</div>	
		</div>
	</div>

	<?php $this->_tag_stack[] = array('industry', array('include' => "1,2,3")); $_block_repeat=true;smarty_block_industry($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<div class="row">
	   	<div class="span13 main-content l-col">
	   		<div class="mod">
	   			<div class="mod-hd">
	   				<h3><span class="title_more"><a href="offer/list.php?industryid=<?php echo $this->_tpl_vars['industry']['id']; ?>
&typeid=4"><span class="raquo">&raquo;</span><?php echo $this->_tpl_vars['_more']; ?>
</a></span><?php echo $this->_tpl_vars['industry']['title']; ?>
</h3>
	   			</div>
	   			<div class="mod-bd">
	   				<ul class="info-list media-list">
						<?php $this->_tag_stack[] = array('offer', array('row' => 12,'type' => 'image','depth' => 1,'industryid' => ($this->_tpl_vars['industry']['id']),'typeid' => 4)); $_block_repeat=true;smarty_block_offer($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<li class="item-quarter"><a href="<?php echo $this->_tpl_vars['offer']['url']; ?>
" class="image"><img src="<?php echo $this->_tpl_vars['offer']['src']; ?>
" width="100" height="80" alt="<?php echo $this->_tpl_vars['offer']['name']; ?>
" /></a>
						  <p class="title"><?php echo $this->_tpl_vars['offer']['link']; ?>
</p>
						  <p class="price"><?php echo $this->_tpl_vars['_wholesale_price']; ?>
<span><?php echo $this->_tpl_vars['offer']['price']; ?>
</span></p>
						</li>
						<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_offer($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				  	</ul>
	   			</div>
	   		</div>	
					  
	   	</div>
		<div class="span4 side-bar r-col">
			<div class="mod">
				<div class="mod-hd">
					<h3><span class="title_more"><a href="offer/post.php?typeid=4&industryid=<?php echo $this->_tpl_vars['industry']['id']; ?>
"><span class="raquo">&raquo;</span><?php echo $this->_tpl_vars['_free_post']; ?>
</a></span><?php echo $this->_tpl_vars['industry']['title']; ?>
</h3>
				</div>
				<div class="mod-bd">
					<ul class="info-list">
					  <?php $this->_tag_stack[] = array('offer', array('row' => 12,'name' => 'item1','depth' => 1,'titlelen' => '12','industryid' => ($this->_tpl_vars['industry']['id']),'typeid' => 4)); $_block_repeat=true;smarty_block_offer($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					  <li><span><?php echo $this->_tpl_vars['item1']['link']; ?>
</span><em><?php echo $this->_tpl_vars['item1']['price']; ?>
</em></li>
					  <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_offer($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				   	</ul>
				</div>
			</div>	
		</div>
	</div>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_industry($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<div class="mod">
		<div class="mod-bd">
			<?php echo $this->_tpl_vars['_law_statement']; ?>

		</div>
	</div>
		
</div>
<?php echo smarty_function_get(array('from' => 'market','var' => 'slides','size' => 'big','row' => 4), $this);?>

<script>
var var_image = "<?php echo $this->_tpl_vars['slides']['image']; ?>
";
var var_url = "<?php echo $this->_tpl_vars['slides']['url']; ?>
";
var var_info = "<?php echo $this->_tpl_vars['slides']['info']; ?>
";
var myflash = new SWFObject("images/slide.swf", "27", 520, 240, "7", "#F3F3F3");
myflash.addParam("quality", "high");
myflash.addParam("wmode", "opaque");
myflash.addVariable("image",var_image);
myflash.addVariable("url",var_url);
myflash.addVariable("info", var_info);
myflash.addVariable("stopTime","5000");
myflash.write("marketFocus");
$("#SearchFrm").attr("action","offer/list.php");
$("#topMenuOffer").addClass("lcur");
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>