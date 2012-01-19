<?php /* Smarty version 2.6.18, created on 2012-01-19 07:34:52
         compiled from default/index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'announce', 'default/index.html', 15, false),array('block', 'ads', 'default/index.html', 23, false),array('block', 'newstype', 'default/index.html', 47, false),array('block', 'news', 'default/index.html', 54, false),array('block', 'topic', 'default/index.html', 111, false),array('block', 'fair', 'default/index.html', 131, false),array('block', 'offer', 'default/index.html', 156, false),array('block', 'company', 'default/index.html', 198, false),array('block', 'product', 'default/index.html', 215, false),array('block', 'brand', 'default/index.html', 269, false),array('block', 'friendlink', 'default/index.html', 364, false),array('function', 'the_url', 'default/index.html', 80, false),array('function', 'the_attachment', 'default/index.html', 113, false),array('function', 'get', 'default/index.html', 234, false),array('function', 'formhash', 'default/index.html', 338, false),)), $this); ?>
<?php $this->assign('metakeywords', ($this->_tpl_vars['site_description'])); ?>
<?php $this->assign('metadescription', ($this->_tpl_vars['site_description'])); ?>
<?php $this->assign('do', 'offer'); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['_home_page'])." - ".($this->_tpl_vars['site_name']),'nav_id' => 1)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="main" class="container">
	<div class="row">
	   	<div class="side-bar span4 l-col">
        	<div class="mod">
           		<div class="mod-hd">
            		<h2><span class="title_more"><a href="announce/" title="<?php echo $this->_tpl_vars['_more']; ?>
" target="_blank"><span class="raquo">&raquo;</span><?php echo $this->_tpl_vars['_more']; ?>
</a></span><?php echo $this->_tpl_vars['_board']; ?>
</h2>
           		</div>
				<div class="mod-bd">
					<ul class="info-list">
						<?php $this->_tag_stack[] = array('announce', array('titlelen' => 15,'row' => 5,'name' => 'item')); $_block_repeat=true;smarty_block_announce($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<li><?php echo $this->_tpl_vars['item']['link']; ?>
</li>
						<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_announce($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					</ul>
				</div>
			</div>
		</div>
	   	<div class="main-content span9 c-col">
			<?php $this->_tag_stack[] = array('ads', array('typeid' => 5)); $_block_repeat=true;smarty_block_ads($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><!-- This text is replaced by the Flash movie. --><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ads($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		</div>
       	<div class="side-bar span4 r-col">
       		<div class="mod">
       			<div class="mod-hd">
       				<h2><?php echo $this->_tpl_vars['_after_free_reg']; ?>
</h2>
       			</div>
       			<div class="mod-bd">
       				<ol class="info-list">
       					<li><a><?php echo $this->_tpl_vars['_build_your_site']; ?>
</a></li>
       					<li><a><?php echo $this->_tpl_vars['_post_offer_trade']; ?>
</a></li>
       					<li><a><?php echo $this->_tpl_vars['_spread_your_products']; ?>
</a></li>
       					<li><a><?php echo $this->_tpl_vars['_meet_more_friends']; ?>
</a></li>
       				</ol>
                    <p><a class="btn" href="member.php" title="<?php echo $this->_tpl_vars['_register']; ?>
"><?php echo $this->_tpl_vars['_free_reg_member']; ?>
</a></p>
       			</div>
       		</div>
        </div>
	</div>
	
	<div class="row">
		<div class="side-bar span4 l-col">
             
            <ul class="tabs2 title_mouse">
                  <li><?php $this->_tag_stack[] = array('newstype', array('id' => 4)); $_block_repeat=true;smarty_block_newstype($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><a href="<?php echo $this->_tpl_vars['newstype']['url']; ?>
"><span><?php echo $this->_tpl_vars['newstype']['title']; ?>
</span></a><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_newstype($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></li>
                  <li><?php $this->_tag_stack[] = array('newstype', array('id' => 1)); $_block_repeat=true;smarty_block_newstype($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><a href="<?php echo $this->_tpl_vars['newstype']['url']; ?>
"><span><?php echo $this->_tpl_vars['newstype']['title']; ?>
</span></a><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_newstype($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></li>
            </ul>
            
            <div class="mod">
               	<div class="mod-bd" id="Newstype1List">
					<ul class="info-list">
					<?php $this->_tag_stack[] = array('news', array('typeid' => 2,'row' => 9,'titlelen' => 34,'infolen' => 35,'name' => 'item')); $_block_repeat=true;smarty_block_news($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<?php if ($this->_tpl_vars['item']['rownum'] == 0 && $this->_tpl_vars['item']['src'] != ''): ?>
						<li style="height:72px; background:url(<?php echo $this->_tpl_vars['item']['src']; ?>
) no-repeat; padding:0 0 0 90px; overflow:hidden;"><h3  style="padding:0 0 0 5px;"><?php echo $this->_tpl_vars['item']['link']; ?>
</h3><?php echo $this->_tpl_vars['item']['content']; ?>
</li>
						<?php else: ?>
						<li><?php echo $this->_tpl_vars['item']['link']; ?>
</li>
						<?php endif; ?>
					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_news($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					</ul>
				</div>
			    <div class="mod-bd" id="Newstype2List" style="display:none;">
					<ul class="info-list">
					<?php $this->_tag_stack[] = array('news', array('typeid' => 1,'row' => 9,'titlelen' => 34,'infolen' => 35,'name' => 'item')); $_block_repeat=true;smarty_block_news($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<?php if ($this->_tpl_vars['item']['rownum'] == 0 && $this->_tpl_vars['item']['src'] != ''): ?>
						<li style="height:72px; background:url(<?php echo $this->_tpl_vars['item']['src']; ?>
) no-repeat; padding:0 0 0 90px; overflow:hidden;"><h3  style="padding:0 0 0 5px;"><?php echo $this->_tpl_vars['item']['link']; ?>
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
		<div class="main-content span9 c-col">
			<div class="mod hot-news">
				<div class="mod-hd">
					<h2><span class="title_more"><a href="<?php echo smarty_function_the_url(array('module' => 'search','do' => 'news','type' => 'hot'), $this);?>
" title="<?php echo $this->_tpl_vars['_more']; ?>
"><span class="raquo">&raquo;</span><?php echo $this->_tpl_vars['_more']; ?>
</a></span><?php echo $this->_tpl_vars['_hot_news']; ?>
</h2>
				</div>
				<div class="mod-bd">
					
						<ul class="info-list media-list">
							<?php $this->_tag_stack[] = array('news', array('row' => 4,'type' => 'image','titlelen' => '10','name' => 'item')); $_block_repeat=true;smarty_block_news($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
							<li class="item-quarter">
								<a href="<?php echo $this->_tpl_vars['item']['url']; ?>
" class="image"><img src="<?php echo $this->_tpl_vars['item']['src']; ?>
" alt="<?php echo $this->_tpl_vars['item']['title']; ?>
" /></a>
	                        	<p class="title"><?php echo $this->_tpl_vars['item']['link']; ?>
</p>
	                        </li>
							<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_news($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
						</ul>
						
						
						<ul class="info-list two-cols-list">
							<?php $this->_tag_stack[] = array('news', array('row' => 14,'name' => 'item')); $_block_repeat=true;smarty_block_news($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
							<li><?php echo $this->_tpl_vars['item']['link']; ?>
</li>
							<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_news($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
						</ul>
						
					
				</div>
			</div>	
		</div>
		<div class="side-bar span4 r-col">
			<div class="mod special-news">
				<div class="mod-hd">
					<span class="title_more"><a href="<?php echo smarty_function_the_url(array('module' => 'search','do' => 'news','type' => 'topic'), $this);?>
"><span class="raquo">&raquo;</span><?php echo $this->_tpl_vars['_more']; ?>
</a></span><h2><?php echo $this->_tpl_vars['_topic_news']; ?>
</h2>
				</div>
				<div class="mod-bd">
					<ul class="info-list">
					<?php $this->_tag_stack[] = array('topic', array('type' => 'news','row' => 3,'name' => 'item')); $_block_repeat=true;smarty_block_topic($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	                     <li>
	                       <a href="<?php echo $this->_tpl_vars['item']['url']; ?>
" title=""><?php echo smarty_function_the_attachment(array('name' => ($this->_tpl_vars['item']['picture']),'type' => 'small'), $this);?>
</a>
	                       <div><?php echo $this->_tpl_vars['item']['link']; ?>
</div>
	                     </li>
					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_topic($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	                </ul>
				</div>
			</div>	
		</div>
	</div>

	<div class="row">
		<div class="side-bar span4 l-col">
			<div class="mod">
				<div class="mod-hd">
					<h2><span class="title_more"><a href="fair/list.php" title="<?php echo $this->_tpl_vars['_more']; ?>
"><span class="raquo">&raquo;</span><?php echo $this->_tpl_vars['_more']; ?>
</a></span><?php echo $this->_tpl_vars['_new_fair']; ?>
</h2>
				</div>
				<div class="mod-bd">
					<ul class="info-list">
					<?php $this->_tag_stack[] = array('fair', array('row' => 6,'infolen' => '12','titlelen' => 32,'name' => 'item')); $_block_repeat=true;smarty_block_fair($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<?php if ($this->_tpl_vars['item']['rownum'] == 0 && $this->_tpl_vars['item']['src'] != ''): ?>
						<li style="height:72px; background:url(<?php echo $this->_tpl_vars['item']['src']; ?>
) no-repeat; padding:0 0 0 90px; overflow:hidden; "><h3><?php echo $this->_tpl_vars['item']['link']; ?>
</h3><?php echo $this->_tpl_vars['item']['content']; ?>

						</li>
					<?php else: ?>
						<li><?php echo $this->_tpl_vars['item']['link']; ?>
</li>
					<?php endif; ?>
					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_fair($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					</ul>
				</div>
			</div>
				
			    
		</div>
		<div class="main-content span9 c-col">
			
         		<ul class="tabs2 title_mouse">
                  	<li><a href="offer/list.php?typeid=2"><span><?php echo $this->_tpl_vars['_newest_sell']; ?>
</span></a></li>
                  	<li><a href="offer/list.php?typeid=1"><span><?php echo $this->_tpl_vars['_newest_buy']; ?>
</span></a></li>
            	</ul>
         		<div class="mod">	
         		
	                <div class="mod-bd" id="latest-offer-1">
						
							<ul class="info-list media-list">
								<?php $this->_tag_stack[] = array('offer', array('typeid' => '2','type' => 'image','row' => 4,'titlelen' => '10','name' => 'item')); $_block_repeat=true;smarty_block_offer($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
								<li class="item-quarter">
								<a href="<?php echo $this->_tpl_vars['item']['url']; ?>
" class="image"><img src="<?php echo $this->_tpl_vars['item']['thumb']; ?>
" alt="<?php echo $this->_tpl_vars['item']['title']; ?>
" /></a><p class="title"><?php echo $this->_tpl_vars['item']['link']; ?>
</p></li>
								<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_offer($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
							</ul>
						
						
							<ul class="info-list two-cols-list">
								<?php $this->_tag_stack[] = array('offer', array('row' => 14,'typeid' => '2','name' => 'item')); $_block_repeat=true;smarty_block_offer($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
								<li><?php echo $this->_tpl_vars['item']['link']; ?>
</li>
								<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_offer($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
							</ul>
						
				    </div>
	                <div class="mod-bd" id="latest-offer-2" style="display:none;">
						
							<ul class="info-list media-list">
								<?php $this->_tag_stack[] = array('offer', array('type' => 'image','row' => 4,'titlelen' => '10','typeid' => '1','name' => 'item')); $_block_repeat=true;smarty_block_offer($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
								<li class="item-quarter">
								<a href="<?php echo $this->_tpl_vars['item']['url']; ?>
" class="image"><img src="<?php echo $this->_tpl_vars['item']['thumb']; ?>
" alt="<?php echo $this->_tpl_vars['item']['title']; ?>
" /></a>
								<p class="title"><?php echo $this->_tpl_vars['item']['link']; ?>
</p></li>
								<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_offer($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
							</ul>
						
							<ul class="info-list two-cols-list">
								<?php $this->_tag_stack[] = array('offer', array('typeid' => '1','row' => 14,'name' => 'item')); $_block_repeat=true;smarty_block_offer($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
								<li><?php echo $this->_tpl_vars['item']['link']; ?>
</li>
								<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_offer($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
							</ul>
						
					</div>
					
         		</div>
        </div>
            
		<div class="side-bar span4 r-col">
			<div class="mod">
				<div class="mod-hd">
					<h2><span class="title_more"><a href="purchase.php"><?php echo $this->_tpl_vars['_member_upgrade']; ?>
</a></span><?php echo $this->_tpl_vars['_newest_company']; ?>
</h2>
				</div>
				<div class="mod-bd">
					<ul class="info-list">
						<?php $this->_tag_stack[] = array('company', array('row' => 13,'name' => 'item')); $_block_repeat=true;smarty_block_company($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<li><?php echo $this->_tpl_vars['item']['link']; ?>
</li>
						<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_company($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					</ul>
				</div>
			</div>
		</div>

	</div>
	<div class="row">
		<div class="main-content span17 l-col">
			<div class="mod">
				<div class="mod-hd">
					<h2><?php echo $this->_tpl_vars['_new_products']; ?>
</h2>
				</div>
				<div class="mod-bd">
					<ul class="media-items-grid">
					<?php $this->_tag_stack[] = array('product', array('row' => 9,'type' => 'image','titlelen' => '10','name' => 'item')); $_block_repeat=true;smarty_block_product($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<li class="media-item">
							<a class="image" href="<?php echo $this->_tpl_vars['item']['url']; ?>
"><img src="<?php echo $this->_tpl_vars['item']['src']; ?>
" alt="<?php echo $this->_tpl_vars['item']['name']; ?>
" /></a>
		                	<p class="name"><a href="<?php echo $this->_tpl_vars['item']['url']; ?>
"><?php echo $this->_tpl_vars['item']['names']; ?>
</a></p>
		                </li>
					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_product($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					</ul>
				</div>
			</div>	
		</div>	
	</div>
	<div class="row">

			<div class="main-content span13 l-col">
				<div class="mod category-index">
					<div class="mod-hd">
						<h4><?php echo $this->_tpl_vars['_industry_sort']; ?>
<span class="title_more"><?php echo $this->_tpl_vars['_select_industry_and_post']; ?>
</span></h4>
					</div>
					<div class="mod-bd">
						<?php echo smarty_function_get(array('var' => 'IndustryList','from' => 'industry'), $this);?>

			            <?php $_from = $this->_tpl_vars['IndustryList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['level_0'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['level_0']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key0'] => $this->_tpl_vars['item0']):
        $this->_foreach['level_0']['iteration']++;
?>
						  	<div class="typebox bg-hover">
			                	<div class="category-title"><a href="<?php echo smarty_function_the_url(array('module' => 'search','industryid' => ($this->_tpl_vars['item0']['id']),'do' => 'product'), $this);?>
" title="<?php echo $this->_tpl_vars['item0']['name']; ?>
"><?php echo $this->_tpl_vars['item0']['name']; ?>
</a></div>
			                	<div class="category-content">
			                    <?php if ($this->_tpl_vars['item0']['sub']): ?>
								<ul class="info-list two-cols-list">
			                    	<?php $_from = $this->_tpl_vars['item0']['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['level_1_industry'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['level_1_industry']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key_level1'] => $this->_tpl_vars['level1']):
        $this->_foreach['level_1_industry']['iteration']++;
?>
									<li>
										<a href="<?php echo smarty_function_the_url(array('module' => 'search','industryid' => ($this->_tpl_vars['level1']['id']),'do' => 'product'), $this);?>
" title="<?php echo $this->_tpl_vars['level1']['name']; ?>
" class="sub-name"><?php echo $this->_tpl_vars['level1']['name']; ?>
</a><br />
			                        <?php $_from = $this->_tpl_vars['level1']['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['level_2_industry'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['level_2_industry']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key_level2'] => $this->_tpl_vars['level2']):
        $this->_foreach['level_2_industry']['iteration']++;
?>
										<a href="<?php echo smarty_function_the_url(array('module' => 'search','industryid' => ($this->_tpl_vars['level2']['id']),'do' => 'product'), $this);?>
" title="<?php echo $this->_tpl_vars['level2']['name']; ?>
"><?php echo $this->_tpl_vars['level2']['name']; ?>
</a>
			                            <?php if (! ($this->_foreach['level_2_industry']['iteration'] == $this->_foreach['level_2_industry']['total'])): ?>
			                            <span>|</span>
			                            <?php endif; ?>
			                        <?php endforeach; endif; unset($_from); ?>
									</li>
			                        <?php endforeach; endif; unset($_from); ?>
								</ul>
			                    <?php endif; ?>
			                   </div>
						  	</div>
			                
			            <?php endforeach; endif; unset($_from); ?>
					</div>
				</div>	
			</div>
				
			<div class="side-bar span4 r-col">
				<div class="mod">
					<div class="mod-hd">
						<h2><span class="title_more"><a href="redirect.php?url=/virtual-office/brand.php" title="<?php echo $this->_tpl_vars['_apply_industry_brand']; ?>
" target="_blank"><?php echo $this->_tpl_vars['_apply_industry_brand']; ?>
</a></span><?php echo $this->_tpl_vars['_industry_brand']; ?>
</h2>
					</div>
					<div class="mod-bd">
						<ul class="brands-grid">
						<?php $this->_tag_stack[] = array('brand', array('type' => 'image','row' => 10,'name' => 'item')); $_block_repeat=true;smarty_block_brand($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
							<li class="item"><a class="image" href="<?php echo $this->_tpl_vars['item']['url']; ?>
" target="_blank"><img src="<?php echo $this->_tpl_vars['item']['thumb']; ?>
" title="<?php echo $this->_tpl_vars['item']['name']; ?>
" /></a><p class="name"><?php echo $this->_tpl_vars['item']['title']; ?>
</p></li>
						<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_brand($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
						</ul>
					</div>
					
				</div>	


				
				<div class="mod">
					<div class="mod-hd">
						<h2><span class="title_more"><a href="offer/list.php?typeid=3" title="<?php echo $this->_tpl_vars['_more']; ?>
"><span class="raquo">&raquo;</span><?php echo $this->_tpl_vars['_more']; ?>
</a></span><?php echo $this->_tpl_vars['_agent']; ?>
</h2>
					</div>
					<div class="mod-bd">
						<ul class="info-list">
						<?php $this->_tag_stack[] = array('offer', array('row' => 9,'typeid' => '1','infolen' => '35','name' => 'item')); $_block_repeat=true;smarty_block_offer($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
							<?php if ($this->_tpl_vars['item']['rownum'] == 0 && $this->_tpl_vars['item']['picture'] != ""): ?>
							<li style="height:72px; background:url(<?php echo $this->_tpl_vars['item']['thumb']; ?>
) no-repeat; padding:0 0 0 90px; overflow:hidden;"><h3 style="padding:0 0 0 5px;"><?php echo $this->_tpl_vars['item']['link']; ?>
</h3></li>
							<?php else: ?>
							<li><?php echo $this->_tpl_vars['item']['link']; ?>
</li>
							<?php endif; ?>
						<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_offer($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				   		</ul>
					</div>
				</div>	
				
				<div class="mod">
					<div class="mod-hd">
						<h2><span class="title_more"><a href="offer/list.php?typeid=5" title="<?php echo $this->_tpl_vars['_more']; ?>
"><span class="raquo">&raquo;</span><?php echo $this->_tpl_vars['_more']; ?>
</a></span><?php echo $this->_tpl_vars['_investment']; ?>
</h2>
					</div>
					<div class="mod-bd">
						<ul class="info-list">
						<?php $this->_tag_stack[] = array('offer', array('row' => 9,'typeid' => '2','infolen' => '35','name' => 'item')); $_block_repeat=true;smarty_block_offer($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
							<?php if ($this->_tpl_vars['item']['rownum'] == 0 && $this->_tpl_vars['item']['picture'] != ""): ?>
							<li style="height:72px; background:url(<?php echo $this->_tpl_vars['item']['thumb']; ?>
) no-repeat; padding:0 0 0 90px; overflow:hidden;"><h3 style="padding:0 0 0 5px;"><?php echo $this->_tpl_vars['item']['link']; ?>
</h3></li>
							<?php else: ?>
							<li><?php echo $this->_tpl_vars['item']['link']; ?>
</li>
							<?php endif; ?>
						<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_offer($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					   	</ul>
					</div>
				</div>
				
				<div class="mod">
					<div class="mod-hd">
						<h2><span class="title_more"><a href="<?php echo smarty_function_the_url(array('module' => 'search','do' => 'news','typeid' => 3), $this);?>
" title="<?php echo $this->_tpl_vars['_more']; ?>
"><span class="raquo">&raquo;</span><?php echo $this->_tpl_vars['_more']; ?>
</a></span><?php echo $this->_tpl_vars['_site_news']; ?>
</h2>
					</div>
					<div class="mod-bd">
						<ul class="unstyled">
						<?php $this->_tag_stack[] = array('news', array('typeid' => 4,'row' => 9,'titlelen' => 30,'infolen' => 25,'name' => 'item')); $_block_repeat=true;smarty_block_news($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
							<?php if ($this->_tpl_vars['item']['rownum'] == 0 && $this->_tpl_vars['item']['src'] != ''): ?>
							<li style="height:80px; background:url(<?php echo $this->_tpl_vars['item']['src']; ?>
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

				<div class="mod">
					<div class="mod-hd">
						<h2><?php echo $this->_tpl_vars['_idea_or_advise']; ?>
</h2>
					</div>
					<div class="mod-bd">
						
							<p><?php echo $this->_tpl_vars['_welcome_your_idea_or_advise']; ?>
</p>
							<form action="service/post.php" name="service_frm" id="ServiceFrm" method="post">
							<?php echo smarty_function_formhash(array(), $this);?>

							<input type="hidden" name="save_service" value="save_service">
							<p><textarea name="service[content]" cols="" class="span3" rows=""></textarea></p>
							<p><?php echo $this->_tpl_vars['_your_email']; ?>
</p>
							<p><input type="text" name="service[email]" value="" class="span3"></p>
							
							<p><input type="button" name="btn_submit" value="<?php echo $this->_tpl_vars['_submit']; ?>
" class="btn" onclick="$('#ServiceFrm').submit();" />
							<input type="reset" value="<?php echo $this->_tpl_vars['_reset']; ?>
" name="" class="btn"/></p>
							</form>
						
					</div>
				</div>			
			</div>
		   
	</div>
	<div class="row">
		<div class="span17 l-col">
			<div class="mod friend-links">
				<div class="mod-hd">
					<h4><a href="friendlink.php" title="<?php echo $this->_tpl_vars['_apply_friendlink']; ?>
"><span class="raquo">&raquo;</span><?php echo $this->_tpl_vars['_apply_friendlink']; ?>
</a></h4>
				</div>
				<div class="mod-bd">
					<table>
					  <tr>
						<th width="60"><?php echo $this->_tpl_vars['_friend_links']; ?>
:</th>
						<td>
						<?php $this->_tag_stack[] = array('friendlink', array('typeid' => '1','sep' => "<span>|</span>")); $_block_repeat=true;smarty_block_friendlink($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
							<?php echo $this->_tpl_vars['link']['link']; ?>

						<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_friendlink($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
						</td>
					  </tr>
					  <tr>
						<th width="60"><?php echo $this->_tpl_vars['_membership_links']; ?>
:</th>
						<td>
						<?php $this->_tag_stack[] = array('friendlink', array('typeid' => '2','sep' => "<span>|</span>")); $_block_repeat=true;smarty_block_friendlink($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
							<?php echo $this->_tpl_vars['link']['link']; ?>

						<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_friendlink($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
						</td>
					  </tr>
					</table>
				</div>
			</div>	
		</div>	

	</div>


</div>
<?php echo '
<script src="scripts/jquery.tools.js"></script>
<script>
$("#topMenuOffer").addClass("lcur");
$(function(){
    $("ul.tabs2").tabs("div.mod > div.mod-bd", {event:\'mouseover\'});
	$("[linkf=\'friendlink\']").click(function(){
		window.location = SiteUrl+"redirect.php?url="+$(this).attr("href");
		return false;
	});
});
</script>
'; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>