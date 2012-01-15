<?php /* Smarty version 2.6.18, created on 2012-01-07 01:02:33
         compiled from default/dict/index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'dict', 'default/dict/index.html', 13, false),array('block', 'announce', 'default/dict/index.html', 81, false),array('function', 'the_url', 'default/dict/index.html', 39, false),)), $this); ?>
<?php $this->assign('metakeywords', ($this->_tpl_vars['_dictionary'])); ?>
<?php $this->assign('metadescription', ($this->_tpl_vars['_dict_digest_content'])); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['_dictionary']),'nav_id' => 12)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="main" class="container">
	<div class="row">
		<div class="span13">
			<div class="mod">
				<div class="mod-hd">
					<h2><?php echo $this->_tpl_vars['_latest_words']; ?>
</h2>
				</div>
				<div class="mod-bd">
					<ul>
					 	<?php $this->_tag_stack[] = array('dict', array('row' => 25)); $_block_repeat=true;smarty_block_dict($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					  	<li><?php echo $this->_tpl_vars['dict']['link']; ?>
</li>
					 	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_dict($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					</ul>
				</div>
			</div>
			<div class="mod">
				<div class="mod-hd">
					<h2><?php echo $this->_tpl_vars['_hot_words']; ?>
</h2>
				</div>
				<div class="mod-bd">
					<ul>
					 	<?php $this->_tag_stack[] = array('dict', array('row' => 25,'orderby' => 'hits DESC')); $_block_repeat=true;smarty_block_dict($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					  	<li><?php echo $this->_tpl_vars['dict']['link']; ?>
</li>
					 	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_dict($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					</ul>
				</div>
			</div>
			<div class="mod">
				<div class="mod-bd">
					

					<div class="lemma_main">
						 <ul>
							<?php $_from = $this->_tpl_vars['Dictypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['Dicttypes'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['Dicttypes']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key1'] => $this->_tpl_vars['item1']):
        $this->_foreach['Dicttypes']['iteration']++;
?>
							 <li>
							  <a href="<?php echo smarty_function_the_url(array('module' => 'list','extra' => "do,search|typeid,".($this->_tpl_vars['item1']['id'])), $this);?>
"><?php echo $this->_tpl_vars['item1']['name']; ?>
</a>
								<?php if ($this->_tpl_vars['item1']['sub']): ?>
								  <p class="clearfix">
										<?php $_from = $this->_tpl_vars['item1']['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['SubDicttypes'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['SubDicttypes']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key2'] => $this->_tpl_vars['item2']):
        $this->_foreach['SubDicttypes']['iteration']++;
?>
											<a href="<?php echo smarty_function_the_url(array('module' => 'list','extra' => "do,search|typeid,".($this->_tpl_vars['item2']['id'])), $this);?>
"><?php echo $this->_tpl_vars['item2']['name']; ?>
</a>
										<?php endforeach; endif; unset($_from); ?>
								  </p>
								<?php endif; ?>
								<?php if (! ($this->_foreach['Dicttypes']['iteration'] == $this->_foreach['Dicttypes']['total'])): ?>
								    <hr class="hr_dashed" />
								<?php endif; ?>
							 </li>
							<?php endforeach; endif; unset($_from); ?>
						 </ul>
					</div>
				</div>
			</div>
			
		</div>
		<div class="span4">
			<div class="mod">
				<div class="mod-hd">
					<h3><?php echo $this->_tpl_vars['_dict_digest']; ?>
</h3>
				</div>
				<div class="mod-bd">
					
						<form name="dict_search_frm" id="dictSearchFrm" action="<?php echo smarty_function_the_url(array('module' => 'search'), $this);?>
" method="get">
						<input type="hidden" name="do" value="dict" />
						<input type="hidden" name="action" value="search" />
						<p><?php echo $this->_tpl_vars['_dict_digest_content']; ?>
</p>
						<p><input class="span2" name="q" id="queryStr" type="text" class="input_w160"/>&nbsp;<input type="submit" value="<?php echo $this->_tpl_vars['_search']; ?>
" class="btn pull-right"/></p>
						</form>
				   	
				</div>
			</div>
			<div class="mod">
				<div class="mod-hd">
					<h3><?php echo $this->_tpl_vars['_site_announce']; ?>
</h3>
				</div>
				<div class="mod-bd">
					<div class="dictionary">
					<ul>
						<?php $this->_tag_stack[] = array('announce', array('row' => 4,'titlelen' => 15,'infolen' => 35,'name' => 'item')); $_block_repeat=true;smarty_block_announce($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
							<li><?php echo $this->_tpl_vars['item']['link']; ?>
</li>
						<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_announce($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					</ul>
				   	</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>