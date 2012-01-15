<?php /* Smarty version 2.6.18, created on 2012-01-06 13:41:30
         compiled from default/offer/list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'get', 'default/offer/list.html', 12, false),array('function', 'the_url', 'default/offer/list.html', 13, false),array('function', 'pager', 'default/offer/list.html', 150, false),array('block', 'industry', 'default/offer/list.html', 21, false),array('block', 'area', 'default/offer/list.html', 28, false),array('block', 'offer', 'default/offer/list.html', 169, false),array('block', 'company', 'default/offer/list.html', 182, false),array('modifier', 'sprintf', 'default/offer/list.html', 26, false),array('modifier', 'truncate', 'default/offer/list.html', 107, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['page_title']),'nav_id' => ($this->_tpl_vars['nav_id']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script src="scripts/jquery/cookie/jquery.cookie.js" type="text/javascript"></script>
<script>
var obj = eval("("+$.cookie("latest_browse")+")");
</script>
<div id="main" class="container">
	<div class="breadcrumb"><span><?php echo $this->_tpl_vars['position']; ?>
</span></div>
	<div class="mod narrow-result">
		<div class="mod-bd">
			<p class="option">
				<span class="title"><?php echo $this->_tpl_vars['_sort_screening']; ?>
</span>
				<?php echo smarty_function_get(array('from' => 'cache','name' => 'type','key' => 'offertype','var' => 'offertypes'), $this);?>

				<a href="<?php echo smarty_function_the_url(array('module' => 'list','extra' => 'typeid'), $this);?>
" title=""><?php echo $this->_tpl_vars['_all_categories']; ?>
</a>
				<?php $_from = $this->_tpl_vars['offertypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['type'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['type']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['type']['iteration']++;
?>
				<a href="<?php echo smarty_function_the_url(array('module' => 'list','extra' => "typeid,".($this->_tpl_vars['key'])), $this);?>
" title="<?php echo $this->_tpl_vars['type_item']; ?>
"><?php echo $this->_tpl_vars['item']; ?>
</a>
				<?php endforeach; endif; unset($_from); ?>
			</p>
			<p class="option">
				<span class="title"><?php echo $this->_tpl_vars['_industry_screening']; ?>
</span>
				<a href="<?php echo smarty_function_the_url(array('module' => 'list','extra' => "industryid|level"), $this);?>
" title=""><?php echo $this->_tpl_vars['_all_categories']; ?>
</a>
				<?php $this->_tag_stack[] = array('industry', array('name' => 'item','depth' => -1,'parentid' => ($_GET['industryid']))); $_block_repeat=true;smarty_block_industry($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<a href="<?php echo smarty_function_the_url(array('module' => 'list','extra' => "industryid,".($this->_tpl_vars['item']['id'])."|level,".($this->_tpl_vars['item']['level']+1)), $this);?>
" title="<?php echo $this->_tpl_vars['item']['name']; ?>
"><?php echo $this->_tpl_vars['item']['title']; ?>
</a>
				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_industry($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			</p>
			<p class="option">
				<span class="title"><?php echo ((is_array($_tmp=$this->_tpl_vars['_area_choose'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, $this->_tpl_vars['_the_area']) : sprintf($_tmp, $this->_tpl_vars['_the_area'])); ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</span>
				<a href="<?php echo smarty_function_the_url(array('module' => 'list','extra' => "areaid|level"), $this);?>
" title=""><?php echo $this->_tpl_vars['_all_categories']; ?>
</a>
				<?php $this->_tag_stack[] = array('area', array('name' => 'item','depth' => -1,'parentid' => ($_GET['areaid']))); $_block_repeat=true;smarty_block_area($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<a href="<?php echo smarty_function_the_url(array('module' => 'list','extra' => "areaid,".($this->_tpl_vars['item']['id'])."|level,".($this->_tpl_vars['item']['level']+1)), $this);?>
" title="<?php echo $this->_tpl_vars['item']['name']; ?>
"><?php echo $this->_tpl_vars['item']['title']; ?>
</a>
				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_area($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="span13">
			<div class="mod result-filter">
				<div class="mod-bd">
					<form name="relate_frm" method="get" id="RelateFrm">
						<ul>
							<li class="option">
								<label><?php echo $this->_tpl_vars['_the_price']; ?>
</label>
								<input type="text" value="" name="price_start" id="DataPriceStart">
								<span><?php echo $this->_tpl_vars['_arrive_to']; ?>
</span>
								<input type="text" value="" name="price_end" id="DataPriceEnd">
							</li>
							<li class="option">
								<label><input type="checkbox" value="1" name="picture" id="DataPicture" class="checkbox"><?php echo $this->_tpl_vars['_picture']; ?>
</label>
								<label><input type="checkbox" value="1" name="commend" id="DataCommend" class="checkbox"><?php echo $this->_tpl_vars['_commend']; ?>
</label>
								<label><input type="checkbox" value="1" name="urgent" id="DataUrgent" class="checkbox"><?php echo $this->_tpl_vars['_urgent']; ?>
</label>
							</li>
							<li class="option">
								<select name="country" id="DataCountry">
									<option value="" selected><?php echo $this->_tpl_vars['_country']; ?>
</option>
									<?php $_from = $this->_tpl_vars['country']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['country']):
?>
									<option value="<?php echo $this->_tpl_vars['country']['id']; ?>
"><?php echo $this->_tpl_vars['country']['name']; ?>
</option>
									<?php endforeach; endif; unset($_from); ?>
								</select>
							</li>
							<li class="option">
								<select name="date" id="DataDate">
									<option value="" selected><?php echo $this->_tpl_vars['_pub_date']; ?>
</option>
									<option value="86400">1 <?php echo $this->_tpl_vars['_days']; ?>
</option>
									<option value="172800">3 <?php echo $this->_tpl_vars['_days']; ?>
</option>
									<option value="604800">1 <?php echo $this->_tpl_vars['_weeks']; ?>
</option>
									<option value="2592000">1 <?php echo $this->_tpl_vars['_month']; ?>
</option>
									<option value="7948800">3 <?php echo $this->_tpl_vars['_month']; ?>
</option>
								</select>
							</li>
							<li class="option">
								<select name="sure" id="DataSure">
									<option value="" selected><?php echo $this->_tpl_vars['_trust_type']; ?>
</option>
									<?php $_from = $this->_tpl_vars['trusttype']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['trust_type']):
?>
									<option value="<?php echo $this->_tpl_vars['trust_type']['id']; ?>
"><?php echo $this->_tpl_vars['trust_type']['name']; ?>
</option>
									<?php endforeach; endif; unset($_from); ?>
								</select>
							</li>
							<li class="option">
								<button class="btn" type="submit"><?php echo $this->_tpl_vars['_sure']; ?>
</button>
							</li>
						</ul>
					</form>
				</div>
			</div>
			

			<div class="mod">
				<div class="mod-hd">
					<h2><span class=""><?php echo $this->_tpl_vars['_search_result']; ?>
</span><span class="title_more"><a href="help/"><?php echo $this->_tpl_vars['_how_bump_to_top']; ?>
</a></span></h2>
				</div>
				<div class="mod-bd">
					<form name="offer_list_frm">
		            <table>
						<tr>
							<th><?php echo $this->_tpl_vars['_picture']; ?>
</th>
							<th><?php echo $this->_tpl_vars['_offer']; ?>
/<?php echo $this->_tpl_vars['_publisher']; ?>
</th>
							<th></th>
							<th><?php echo $this->_tpl_vars['_area_n']; ?>
</th>
							<th><?php echo $this->_tpl_vars['_member_group']; ?>
</th>
							<th><?php echo $this->_tpl_vars['_contact_us']; ?>
</th>
						</tr>
						<?php if ($this->_tpl_vars['StickyItems']): ?>
							<?php $_from = $this->_tpl_vars['StickyItems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sticky_offer'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sticky_offer']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sticky']):
        $this->_foreach['sticky_offer']['iteration']++;
?>
							<tr style="background:#FFF8DD;">
							<td class="offer_img"><img src="<?php echo $this->_tpl_vars['sticky']['image']; ?>
" border=0 alt="<?php echo $this->_tpl_vars['sticky']['title']; ?>
"></td>
							<td class="title_link">
							<p><span><a href="<?php echo smarty_function_the_url(array('module' => 'offer','typeid' => ($this->_tpl_vars['sticky']['type_id']),'id' => ($this->_tpl_vars['sticky']['id'])), $this);?>
" title="<?php echo $this->_tpl_vars['sticky']['title']; ?>
"><?php echo $this->_tpl_vars['sticky']['title']; ?>
</a></span>[<?php echo $this->_tpl_vars['sticky']['pubdate']; ?>
]</p>
							<p><?php echo $this->_tpl_vars['_abstract']; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['sticky']['content'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 100) : smarty_modifier_truncate($_tmp, 100)); ?>
</p>
							<p><?php echo $this->_tpl_vars['_publisher']; ?>
<?php if ($this->_tpl_vars['sticky']['companyname']): ?><a href="<?php echo smarty_function_the_url(array('module' => 'space','userid' => ($this->_tpl_vars['sticky']['username'])), $this);?>
"><?php echo $this->_tpl_vars['sticky']['companyname']; ?>
</a><?php else: ?><?php echo $this->_tpl_vars['sticky']['username']; ?>
<?php endif; ?></p>     
							</td>
							<td><?php if ($this->_tpl_vars['sticky']['if_commend'] > 0): ?><span class="icon-commend"></span><?php endif; ?><?php if ($this->_tpl_vars['sticky']['if_urgent'] > 0): ?><span class="icon-hurry"></span><?php endif; ?><img src="images/top.gif" alt="<?php echo $this->_tpl_vars['_bump_to_top']; ?>
" /></td>
							<td><p><?php if ($this->_tpl_vars['sticky']['area_id1']): ?><?php echo $this->_tpl_vars['Areas'][1][$this->_tpl_vars['sticky']['area_id1']]; ?>
<br /><?php echo $this->_tpl_vars['Areas'][2][$this->_tpl_vars['sticky']['area_id2']]; ?>
<?php endif; ?></p></td>
							<td><?php if ($this->_tpl_vars['sticky']['gradename']): ?><span title="<?php echo $this->_tpl_vars['sticky']['gradename']; ?>
"><?php echo $this->_tpl_vars['sticky']['gradeimg']; ?>
</span><?php endif; ?></td>
							<td>					
								<?php echo $this->_tpl_vars['sticky']['im']; ?>

								<?php if ($this->_tpl_vars['sticky']['companyname'] != ""): ?>
								<a href="<?php echo smarty_function_the_url(array('module' => 'space','userid' => ($this->_tpl_vars['sticky']['userid'])), $this);?>
"><span class="im_pms"><?php echo $this->_tpl_vars['_station_message']; ?>
</span></a>
								<?php elseif ($this->_tpl_vars['sticky']['username']): ?>
								<a href="virtual-office/pms.php?do=send&to=<?php echo $this->_tpl_vars['sticky']['username']; ?>
"><span class="im_pms"><?php echo $this->_tpl_vars['_send_message']; ?>
</span></a>
								<?php endif; ?>
							</td>
							</tr>
							<?php endforeach; endif; unset($_from); ?>
						<?php endif; ?>
						<?php $_from = $this->_tpl_vars['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['offer'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['offer']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['offer']['iteration']++;
?>
						<tr>
						<td class="offer_img"><a href="<?php echo smarty_function_the_url(array('module' => 'offer','typeid' => ($this->_tpl_vars['item']['type_id']),'id' => ($this->_tpl_vars['item']['id'])), $this);?>
"><img src="<?php echo $this->_tpl_vars['item']['image']; ?>
" border=0 alt="<?php echo $this->_tpl_vars['item']['title']; ?>
"></a></td>
						<td class="title_link list_offer_content_width">
						<p><span><a href="<?php echo smarty_function_the_url(array('module' => 'offer','typeid' => ($this->_tpl_vars['item']['type_id']),'id' => ($this->_tpl_vars['item']['id'])), $this);?>
" title="<?php echo $this->_tpl_vars['item']['title']; ?>
"><?php echo $this->_tpl_vars['item']['title']; ?>
</a></span><span class="gray">[<?php echo $this->_tpl_vars['item']['pubdate']; ?>
]</span></p>
						<p><?php echo $this->_tpl_vars['_abstract']; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['content'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 100) : smarty_modifier_truncate($_tmp, 100)); ?>
</p>
						<p><?php echo $this->_tpl_vars['_publisher']; ?>
<?php if ($this->_tpl_vars['item']['companyname']): ?><a href="<?php echo smarty_function_the_url(array('module' => 'space','userid' => ($this->_tpl_vars['item']['username'])), $this);?>
"><?php echo $this->_tpl_vars['item']['companyname']; ?>
</a><?php else: ?><?php echo $this->_tpl_vars['item']['username']; ?>
<?php endif; ?></p>     
						</td>
						<td><?php if ($this->_tpl_vars['item']['if_commend'] > 0): ?><span class="icon-commend"></span><?php endif; ?><?php if ($this->_tpl_vars['item']['if_urgent'] > 0): ?><span class="icon-hurry"></span><?php endif; ?></td>
						<td><?php echo $this->_tpl_vars['item']['country']; ?>
</td>
						<td><?php if ($this->_tpl_vars['item']['gradename']): ?><?php echo $this->_tpl_vars['item']['gradeimg']; ?>
<?php endif; ?></td>
						<td>
							<?php echo $this->_tpl_vars['item']['im']; ?>

							<?php if ($this->_tpl_vars['item']['companyname'] != ""): ?>
							<a href="<?php echo smarty_function_the_url(array('module' => 'space','userid' => ($this->_tpl_vars['item']['userid'])), $this);?>
"><span class="im_pms"><?php echo $this->_tpl_vars['_station_message']; ?>
</span></a>
							<?php elseif ($this->_tpl_vars['item']['username']): ?>
							<a href="virtual-office/pms.php?do=send&to=<?php echo $this->_tpl_vars['item']['username']; ?>
"><span class="im_pms"><?php echo $this->_tpl_vars['_send_message']; ?>
</span></a>
							<?php endif; ?>
						 </td>
						</tr>
						<?php endforeach; endif; unset($_from); ?>
		            </table>
					
					</form>
				</div>
				<div class="mod-bd">
					<div class="pagination2"><?php echo smarty_function_pager(array('rowcount' => ($this->_tpl_vars['paging']['total'])), $this);?>
</div>
				</div>
			</div>
			<div class="base_title">
				
				
			</div>

			<div class="qiugouleftcon box_bord">
				
			</div>
		</div>
		<div class="span4">
			<div class="mod">
				<div class="mod-hd">
					<h3><?php echo $this->_tpl_vars['_commend']; ?>
 <?php echo $this->_tpl_vars['_offer']; ?>
</h3>
				</div>
				<div class="mod-bd">
					<ul class="info-list">
					<?php $this->_tag_stack[] = array('offer', array('row' => 10,'type' => 'commend','typeid' => ($this->_tpl_vars['typeid']),'name' => 'item')); $_block_repeat=true;smarty_block_offer($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<li><?php echo $this->_tpl_vars['item']['link']; ?>
</li>
					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_offer($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					</ul>
				</div>
			</div>	
			
			<div class="mod">
				<div class="mod-hd">
					<h3><?php echo $this->_tpl_vars['_recommended_company']; ?>
</h3>
				</div>
				<div class="mod-bd">
					<ul class="info-list">
					<?php $this->_tag_stack[] = array('company', array('row' => 15)); $_block_repeat=true;smarty_block_company($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<li><?php echo $this->_tpl_vars['company']['link']; ?>
</li>
					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_company($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					</ul>
				</div>
			</div>

		</div>
	</div>	
</div>

<script>
$("#SearchFrm").attr("action","offer/list.php");
$("#topMenuOffer").addClass("lcur");
$("#DataPriceStart").val("<?php echo $_GET['price_start']; ?>
");
$("#DataPriceEnd").val("<?php echo $_GET['price_end']; ?>
");
$("#DataCountry").val("<?php echo $_GET['country']; ?>
");
$("#DataDate").val("<?php echo $_GET['date']; ?>
");
$("#DataSure").val("<?php echo $_GET['sure']; ?>
");
$("#DataPicture").attr("checked","<?php echo $_GET['picture']; ?>
");
$("#DataCommend").attr("checked","<?php echo $_GET['commend']; ?>
");
$("#DataUrgent").attr("checked","<?php echo $_GET['urgent']; ?>
");
</script>
<?php if ($this->_tpl_vars['highlight_str']): ?>
<script language="javascript" src="scripts/highlight.js"></script>
<script>
$(".qiugouleftcon").highlight("<?php echo $this->_tpl_vars['highlight_str']; ?>
");
</script>
<?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>