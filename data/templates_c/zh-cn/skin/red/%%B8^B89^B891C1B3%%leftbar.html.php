<?php /* Smarty version 2.6.18, created on 2012-01-18 12:38:58
         compiled from leftbar.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'the_url', 'leftbar.html', 10, false),)), $this); ?>
		<div class="row">
			<div class="span5">
				<div class="mod">
					<div class="mod-hd">
						<h3><?php echo $this->_tpl_vars['_product_sort']; ?>
</h3>
					</div>
					<div class="mod-bd">
						<ul>
						<?php $_from = $this->_tpl_vars['ProductTypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['ProductTypes'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ProductTypes']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['ProductTypes']['iteration']++;
?>
							<li><a title="<?php echo $this->_tpl_vars['item']['typename']; ?>
" href="<?php echo smarty_function_the_url(array('module' => 'producttype','typeid' => ($this->_tpl_vars['item']['typeid']),'userid' => ($_GET['userid'])), $this);?>
"><?php echo $this->_tpl_vars['item']['typename']; ?>
</a></li>
						<?php endforeach; endif; unset($_from); ?>
						</ul>
					</div>
				</div>
				
				
			</div>
			<div class="span6">
				<div class="mod">
					<div class="mod-hd">
						<h3><?php echo $this->_tpl_vars['_contact_method']; ?>
</h3>
					</div>
					<div class="mod-bd">
						<ul>
							<li><?php echo $this->_tpl_vars['_contact_people']; ?>
<?php echo $this->_tpl_vars['COMPANY']['link_man']; ?>
</li>
							<li><?php echo $this->_tpl_vars['_phone']; ?>
<?php echo $this->_tpl_vars['COMPANY']['tel']; ?>
</li>
							<li><?php echo $this->_tpl_vars['_fax']; ?>
<?php echo $this->_tpl_vars['COMPANY']['fax']; ?>
</li>
							<li><?php echo $this->_tpl_vars['_address']; ?>
<?php echo $this->_tpl_vars['COMPANY']['address']; ?>
</li>
							<li><?php echo $this->_tpl_vars['_zip']; ?>
<?php echo $this->_tpl_vars['COMPANY']['zipcode']; ?>
</li>
						</ul>
					</div>
				</div>
				
				
			</div>
			<div class="span5">
				<div class="mod">
					<div class="mod-hd">
						<h3><?php echo $this->_tpl_vars['_friend_links']; ?>
</h3>
					</div>
					<div class="mod-bd">
						<?php if ($this->_tpl_vars['Links']): ?>
						<ul>
							<?php $_from = $this->_tpl_vars['Links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['spacelink'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['spacelink']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['spacelink']):
        $this->_foreach['spacelink']['iteration']++;
?>
							<li><a href="<?php echo $this->_tpl_vars['spacelink']['url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['spacelink']['title']; ?>
</a></li>
							<?php endforeach; endif; unset($_from); ?>
						</ul>
						<?php endif; ?>
					</div>
				</div>
				
				
			</div>
			
		
		</div>