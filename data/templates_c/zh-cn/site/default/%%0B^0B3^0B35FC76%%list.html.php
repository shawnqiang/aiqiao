<?php /* Smarty version 2.6.18, created on 2012-01-03 11:20:08
         compiled from default/service/list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'pager', 'default/service/list.html', 34, false),array('block', 'feed', 'default/service/list.html', 45, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['_customer_service_center']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="main" class="container">
	<div class="tips"><span><?php echo $this->_tpl_vars['position']; ?>
</span></div>
	<div class="row">
		
		<div class="span13">
			<div class="service_center_txt">
	             <div class="intro">
	             <span><?php echo $this->_tpl_vars['_focus_user_service']; ?>
</span><em><?php echo $this->_tpl_vars['_service_for_your_internet']; ?>
</em>
	             </div>
	             <div class="title"><?php echo $this->_tpl_vars['_customer_service']; ?>
</div>
         	</div>
			<div class="mod">
				<div class="mod-hd">
					
				</div>
				<div class="mod-bd">
					<table cellspacing="0">
					  <tr>
						<th><?php echo $this->_tpl_vars['_problems']; ?>
</th>
						<th><?php echo $this->_tpl_vars['_status']; ?>
</th>
						<th><?php echo $this->_tpl_vars['_submit_time']; ?>
</th>
						<th><?php echo $this->_tpl_vars['_reply_time']; ?>
</th>
					  </tr>
	                  <?php $_from = $this->_tpl_vars['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['Items'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['Items']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['Items']['iteration']++;
?>
					  <tr>
						<td><div class="title"><span>[<a href="service/list.php?typeid=<?php echo $this->_tpl_vars['item']['type_id']; ?>
"><?php echo $this->_tpl_vars['item']['typename']; ?>
</a>]</span><a href="service/detail.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['title']; ?>
</a></div></td>
						<td><?php if ($this->_tpl_vars['item']['revert_content']): ?><span class="answer"><?php echo $this->_tpl_vars['_answered']; ?>
</span><?php else: ?><?php echo $this->_tpl_vars['_no_answer']; ?>
<?php endif; ?></td>
						<td><span<?php if ($this->_tpl_vars['item']['revert_content']): ?> class="answer"<?php endif; ?>><?php echo $this->_tpl_vars['item']['submitdate']; ?>
</span></td>
						<td><span<?php if ($this->_tpl_vars['item']['revert_content']): ?> class="answer"<?php endif; ?>><?php echo $this->_tpl_vars['item']['revertdate']; ?>
</span></td>
					  </tr>
	                  <?php endforeach; endif; unset($_from); ?>
					</table>
			 		<div class="pagination2"><?php echo smarty_function_pager(array('rowcount' => ($this->_tpl_vars['paging']['total'])), $this);?>
</div>
				</div>
			</div>
		</div>
		<div class="span4">
			<div class="mod">
				<div class="mod-hd">
					<h3><?php echo $this->_tpl_vars['_latest_tips']; ?>
</h3>
				</div>
				<div class="mod-bd">
					<ul>
						<?php $this->_tag_stack[] = array('feed', array('row' => '10')); $_block_repeat=true;smarty_block_feed($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						  <li>[link:title]</li>
						<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_feed($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
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