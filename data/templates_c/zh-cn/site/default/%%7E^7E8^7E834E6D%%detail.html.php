<?php /* Smarty version 2.6.18, created on 2012-01-19 08:20:44
         compiled from default/dict/detail.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'the_url', 'default/dict/detail.html', 14, false),array('modifier', 'nl2br', 'default/dict/detail.html', 20, false),array('block', 'dict', 'default/dict/detail.html', 43, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['page_title']),'nav_id' => 12)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="main" class="container">
	<div class="breadcrumb"><span><?php echo $this->_tpl_vars['position']; ?>
</span></div>
	<div class="row">
		<div class="main-content l-col span13">
			<div class="mod">
				<div class="mod-hd">
					<h2><span class="corner_t_m title_mouse"><?php echo $this->_tpl_vars['item']['word']; ?>
</span></h2>
				</div>
				<div class="mod-bd">
					<ul>
						<li>
						 <p><?php echo $this->_tpl_vars['_alias_name']; ?>
<?php if ($this->_tpl_vars['item']['word_name']): ?>(<?php echo $this->_tpl_vars['item']['word_name']; ?>
)<?php endif; ?></p>
						 <p><?php echo $this->_tpl_vars['_categories']; ?>
<a href="<?php echo smarty_function_the_url(array('module' => 'search','do' => 'ditct','typeid' => ($this->_tpl_vars['item']['dicttype_id'])), $this);?>
"><?php echo $this->_tpl_vars['item']['typename']; ?>
</a></p>
						 <p><?php echo $this->_tpl_vars['_views']; ?>
<span><?php echo $this->_tpl_vars['item']['hits']; ?>
</span><?php echo $this->_tpl_vars['_times']; ?>
</p>
						</li>
				         
						<li>
						 <?php echo $this->_tpl_vars['_digest']; ?>

							<p><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['digest'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
						</li>
				        
						<li>
						 <?php echo $this->_tpl_vars['_refer_content']; ?>

							<p><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['content'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
						</li>
				        
						<li>
						 	<?php echo $this->_tpl_vars['_refer_info']; ?>

							<p><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['refer'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
						</li>
					 </ul>
				</div>
			</div>
		</div>
		<div class="side-bar r-col span4">
			<div class="mod">
				<div class="mod-hd">
					<h3><?php echo $this->_tpl_vars['_similar_words']; ?>
</h3>
				</div>
				<div class="mod-bd">
					<ul>
						<?php $this->_tag_stack[] = array('dict', array('row' => 10)); $_block_repeat=true;smarty_block_dict($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
							<li><?php echo $this->_tpl_vars['dict']['link']; ?>
</li>
						<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_dict($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					</ul>
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