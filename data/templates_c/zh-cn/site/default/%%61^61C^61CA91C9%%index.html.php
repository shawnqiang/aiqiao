<?php /* Smarty version 2.6.18, created on 2012-01-19 08:24:16
         compiled from default/job/index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'get', 'default/job/index.html', 11, false),array('function', 'html_options', 'default/job/index.html', 44, false),array('modifier', 'count', 'default/job/index.html', 12, false),array('block', 'area', 'default/job/index.html', 95, false),array('block', 'job', 'default/job/index.html', 107, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['_hr']),'nav_id' => 9)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script src="scripts/langs/<?php echo $this->_tpl_vars['JsLanguage']; ?>
.js" charset="<?php echo $this->_tpl_vars['charset']; ?>
"></script>
<div id="main" class="container">
	<div class="row">
		<div class="side-bar l-col span4">
			<div class="mod">
				<div class="mod-hd">
					<h3><?php echo $this->_tpl_vars['_industry_sort']; ?>
</h3>
				</div>
				<div class="mod-bd">
					<?php echo smarty_function_get(array('from' => 'type','name' => 'jobtype','var' => 'Items'), $this);?>

					<?php if (count($this->_tpl_vars['Items']) == 0): ?>
					<?php echo smarty_function_get(array('var' => 'IndustryList','from' => 'industry'), $this);?>

					<?php else: ?>
					<?php $this->assign('IndustryList', ($this->_tpl_vars['Items'])); ?>
					<?php endif; ?>
					<div class="job_type_c">
		            <?php $_from = $this->_tpl_vars['IndustryList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['IndustryList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['IndustryList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['industry_item']):
        $this->_foreach['IndustryList']['iteration']++;
?>
					  <h3><em><a href="hr/list.php?industryid=<?php echo $this->_tpl_vars['industry_item']['id']; ?>
" title="<?php echo $this->_tpl_vars['industry_item']['name']; ?>
"><?php echo $this->_tpl_vars['industry_item']['name']; ?>
</a></em></h3>
						<div class="cb">
		                	<?php $_from = $this->_tpl_vars['industry_item']['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['industry_key2'] => $this->_tpl_vars['industry_item2']):
?>
		                    <a href="hr/list.php?industryid=<?php echo $this->_tpl_vars['industry_item2']['id']; ?>
" title="<?php echo $this->_tpl_vars['industry_item2']['name']; ?>
"><?php echo $this->_tpl_vars['industry_item2']['name']; ?>
</a><em>|</em>
		                    <?php endforeach; endif; unset($_from); ?>
		              </div>
		           	<?php endforeach; endif; unset($_from); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="main-content r-col span13">
			<div class="row">
				<div class="l-col span9">
					<div class="mod">
						<div class="mod-hd">
							<h2><?php echo $this->_tpl_vars['_jobs_search']; ?>
</h2>
						</div>
						<div class="mod-bd">
							<form action="hr/list.php" method="get">
					            <input type="hidden" name="do" value="search" />
								<div class="clearfix">
									<label for=""><?php echo $this->_tpl_vars['_salary']; ?>
</label>
									<div class="input">
										<select name="data[salary_id]">
											<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['Salary']), $this);?>

										</select>
									</div>
								</div>
								<div class="clearfix">
									<label for=""><?php echo $this->_tpl_vars['_jobs_area']; ?>
</label>
									<div class="input">
										<div id="dataArea">
												<select name="data[area_id1]" id="dataAreaId1" class="level_1" style="width:90px;"></select>
												<select name="data[area_id2]" id="dataAreaId2" class="level_2" style="width:90px;"></select>
												<select name="data[area_id3]" id="dataAreaId3" class="level_3" style="width:90px;"></select>
										</div>
									</div>
								</div>
								<div class="clearfix">
									<label for=""><?php echo $this->_tpl_vars['_keyword']; ?>
</label>
									<div class="input">
										<input type="text" name="q" value="" class="job_gjz" />
									</div>
								</div>
								<div class="actions">
									<input type="submit" value="<?php echo $this->_tpl_vars['_search']; ?>
" class="btn primary" />
								</div>
								
							</form>
						</div>
					</div>
					
				</div>
				<div class="r-col span4">
					<div class="mod">
						<div class="mod-hd">
							<h5><?php echo $this->_tpl_vars['_after_free_reg']; ?>
</h5>
						</div>
						<div class="mod-bd">
							<p><a><?php echo $this->_tpl_vars['_build_your_site']; ?>
</a></p>
							<p><a><?php echo $this->_tpl_vars['_post_offer_trade']; ?>
</a></p>
							<p><a><?php echo $this->_tpl_vars['_spread_your_products']; ?>
</a></p>
							<p><a><?php echo $this->_tpl_vars['_meet_more_friends']; ?>
</a></p>
							<div class="">
			                <a href="member.php" class="btn"><?php echo $this->_tpl_vars['_free_reg']; ?>
</a>
			            	</div>
						</div>
					</div>
				</div>
			</div>
			<div class="mod">
				<div class="mod-hd">
					<h2><?php echo $this->_tpl_vars['_hot_area']; ?>
</h2>
				</div>
				<div class="mod-bd">
					<?php $this->_tag_stack[] = array('area', array('level' => 1)); $_block_repeat=true;smarty_block_area($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		            <a href="hr/list.php?areaid=<?php echo $this->_tpl_vars['area']['id']; ?>
"><?php echo $this->_tpl_vars['area']['title']; ?>
</a>
		            <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_area($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				</div>
			</div>
			<div class="mod">
				<div class="mod-hd">
					<span class="title_more"><a href="hr/list.php"><?php echo $this->_tpl_vars['_more']; ?>
&raquo;</a></span>
					<h2><span class="corner_t_m title_mouse"><?php echo $this->_tpl_vars['_new_hr']; ?>
</span></h2>
				</div>
				<div class="mod-bd">
					<ul>
		                <?php $this->_tag_stack[] = array('job', array('row' => 28)); $_block_repeat=true;smarty_block_job($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
							<li><p class="fl"><?php echo $this->_tpl_vars['job']['link']; ?>
</p><em class="fr"><a href="<?php echo $this->_tpl_vars['job']['space_url']; ?>
"><?php echo $this->_tpl_vars['job']['companyname']; ?>
</a></em></li>
		                <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_job($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
var app_language = '<?php echo $this->_tpl_vars['AppLanguage']; ?>
';
var area_id1 = 0;
var area_id2 = 0;
var area_id3 = 0;
</script>
<script src="scripts/multi_select.js" charset="<?php echo $this->_tpl_vars['charset']; ?>
"></script>
<script src="scripts/script_area.js"></script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>