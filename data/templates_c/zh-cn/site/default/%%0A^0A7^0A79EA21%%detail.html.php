<?php /* Smarty version 2.6.18, created on 2012-01-06 02:38:38
         compiled from default/help/detail.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['page_title']),'nav_id' => ($this->_tpl_vars['nav_id']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="main" class="container">
	<div class="tips"><span><?php echo $this->_tpl_vars['position']; ?>
</span></div>
	<div class="row">
		<div class="span4">
			<div class="mod">
				<div class="mod-hd">
					
				</div>
				<div class="mod-bd">
					<div class="help_telcont"><?php echo $this->_tpl_vars['_help_center']; ?>
<br /><p class="tar"><?php echo $this->_tpl_vars['service_tel']; ?>
</p></div>
					<?php $_from = $this->_tpl_vars['Helptypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['Helptypes'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['Helptypes']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['helptype']):
        $this->_foreach['Helptypes']['iteration']++;
?>
					<h2 class="tar helpbor_01"><a href="help/index.php?typeid=<?php echo $this->_tpl_vars['helptype']['id']; ?>
"><?php echo $this->_tpl_vars['helptype']['name']; ?>
</a></h2>
					<ul>
						<?php if ($this->_tpl_vars['helptype']['sub']): ?>
						<?php $_from = $this->_tpl_vars['helptype']['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sub_helptype'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sub_helptype']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sub_helptype']):
        $this->_foreach['sub_helptype']['iteration']++;
?>
						<li class="help_lcontnav"><a href="help/index.php?typeid=<?php echo $this->_tpl_vars['sub_helptype']['id']; ?>
"><?php echo $this->_tpl_vars['sub_helptype']['name']; ?>
</a></li>
						<?php endforeach; endif; unset($_from); ?>
						<?php endif; ?>
					</ul>
					<?php endforeach; endif; unset($_from); ?>
				</div>
			</div>
		</div>
		<div class="span13">
			<div class="mod">
				<div class="mod-hd">
					
				</div>
				<div class="mod-bd">
					<form method="get" action="help/index.php" >
                        <input type="hidden" name="action" value="search"/>
                         <p class="help_rsearch">
                            <?php echo $this->_tpl_vars['_search']; ?>
 <?php echo $this->_tpl_vars['_help']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
<input name="q" value="" type="text" /><input name="submit" value="<?php echo $this->_tpl_vars['_search']; ?>
" type="submit" class="btn" />
                          </p>
                    </form>
					<div class="help_rbg"><?php echo $this->_tpl_vars['item']['content']; ?>
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