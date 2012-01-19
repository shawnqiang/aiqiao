<?php /* Smarty version 2.6.18, created on 2012-01-19 08:22:52
         compiled from default/dict/list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strip_tags', 'default/dict/list.html', 21, false),array('modifier', 'truncate', 'default/dict/list.html', 21, false),array('function', 'pager', 'default/dict/list.html', 26, false),array('block', 'dict', 'default/dict/list.html', 38, false),)), $this); ?>
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
					<h2><span><?php echo $this->_tpl_vars['_search_result']; ?>
</span></h2>
				</div>
				<div class="mod-bd">
					<div class="lemma_list">
					<table>
					  <tr>
						<th><?php echo $this->_tpl_vars['_word_name']; ?>
</th>
						<th><?php echo $this->_tpl_vars['_digest']; ?>
</th>
					  </tr>
					 
			         <?php $_from = $this->_tpl_vars['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['items'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['items']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['items']['iteration']++;
?>
					  <tr>
						<td class="title"><a href="dict/detail.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['word']; ?>
</a></td>
						<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['digest'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 100) : smarty_modifier_truncate($_tmp, 100)); ?>
</td>
					  </tr>
					 <tr><td colspan="2" class="height_1"> <hr class="hr_dashed" /></td></tr>
			          <?php endforeach; endif; unset($_from); ?>
					</table>
					<div><div class="pagination2"><?php echo smarty_function_pager(array('rowcount' => ($this->_tpl_vars['paging']['total'])), $this);?>
</div></div>
				</div>
				</div>
			</div>
		</div>
		<div class="side-bar r-col span4">
			<div class="mod">
				<div class="mod-hd">
					<h3><?php echo $this->_tpl_vars['_hot_words']; ?>
</h3>
				</div>
				<div class="mod-bd">
					<ul>
					 	<?php $this->_tag_stack[] = array('dict', array('row' => 10,'orderby' => 'hits DESC')); $_block_repeat=true;smarty_block_dict($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
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