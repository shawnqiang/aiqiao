<?php /* Smarty version 2.6.18, created on 2012-01-13 12:17:56
         compiled from intro.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'get_cache', 'intro.html', 2, false),array('function', 'exp', 'intro.html', 17, false),array('modifier', 'date_format', 'intro.html', 23, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array('PageTitle' => ($this->_tpl_vars['_space_intro']),'cur' => 'space_intro')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo smarty_function_get_cache(array('var' => 'options','name' => 'typeoption'), $this);?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "banner.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="main" class="container">
	
	<div class="row">
		
		<div class="span12">
			<div class="mod">
				<div class="mod-hd">
					<p><img src="<?php echo $this->_tpl_vars['COMPANY']['logo']; ?>
" /><p><span><?php echo $this->_tpl_vars['_space_intro']; ?>
</span><br /><br /> <?php echo $this->_tpl_vars['COMPANY']['description']; ?>
</p>
				</div>
				<div class="mod-bd">
					<ul>
						<li><p><span><?php echo $this->_tpl_vars['_boss_name']; ?>
</span></p><p><?php echo $this->_tpl_vars['COMPANY']['boss_name']; ?>
</p></li>
						<li><p><span><?php echo $this->_tpl_vars['_main_prod']; ?>
</span></p><p><?php echo $this->_tpl_vars['COMPANY']['main_prod']; ?>
</p></li>
						<li><p><span><?php echo $this->_tpl_vars['_main_market']; ?>
</span></p><p><?php echo smarty_function_exp(array('data' => ($this->_tpl_vars['options']['main_market']),'vars' => ($this->_tpl_vars['COMPANY']['main_market']),'sep' => "&nbsp;&nbsp;"), $this);?>
</p></li>
						<li><p><span><?php echo $this->_tpl_vars['_company_property']; ?>
</span></p><p><?php echo $this->_tpl_vars['options']['economic_type'][$this->_tpl_vars['COMPANY']['property']]; ?>
</p></li>
						<li><p><span><?php echo $this->_tpl_vars['_manage_type']; ?>
</span></p><p><?php echo smarty_function_exp(array('data' => ($this->_tpl_vars['options']['manage_type']),'vars' => ($this->_tpl_vars['COMPANY']['manage_type']),'sep' => "&nbsp;&nbsp;"), $this);?>
</p></li>
						<li><p><span><?php echo $this->_tpl_vars['_main_biz_place']; ?>
</span></p><p><?php echo $this->_tpl_vars['COMPANY']['main_biz_place']; ?>
</p></li>
						<li><p><span><?php echo $this->_tpl_vars['_reg_fund']; ?>
</span></p><p><?php echo $this->_tpl_vars['options']['reg_fund'][$this->_tpl_vars['COMPANY']['reg_fund']]; ?>
</p></li>
						<li><p><span><?php echo $this->_tpl_vars['_year_annual']; ?>
</span></p><p><?php echo $this->_tpl_vars['options']['year_annual'][$this->_tpl_vars['COMPANY']['year_annual']]; ?>
</p></li>
						<li><p><span><?php echo $this->_tpl_vars['_found_date']; ?>
</span></p><p><?php echo ((is_array($_tmp=$this->_tpl_vars['COMPANY']['found_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y") : smarty_modifier_date_format($_tmp, "%Y")); ?>
</p></li>
						<li><p><span><?php echo $this->_tpl_vars['_reg_address']; ?>
</span></p><p><?php echo $this->_tpl_vars['COMPANY']['reg_address']; ?>
</p></li>
					</ul>
				</div>
			</div>
				
		</div>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "sidebar.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</div>
	
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>