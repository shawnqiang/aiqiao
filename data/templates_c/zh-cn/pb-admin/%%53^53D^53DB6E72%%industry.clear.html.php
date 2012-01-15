<?php /* Smarty version 2.6.18, created on 2012-01-01 06:03:30
         compiled from industry.clear.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'sprintf', 'industry.clear.html', 20, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_setting_global']; ?>
 &raquo; <?php echo $this->_tpl_vars['_industry']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_industry']; ?>
</h3> 
    <ul class="subnav">
		<li><a href="industry.php"><?php echo $this->_tpl_vars['_management']; ?>
</a></li>
		<li><a href="industry.php?do=edit"><?php echo $this->_tpl_vars['_add_or_edit']; ?>
</a></li>
        <li><a href="industrytype.php"><?php echo $this->_tpl_vars['_sorts']; ?>
</a></li>
        <li><a class="btn1" href="industry.php?do=clear"><span><?php echo $this->_tpl_vars['_clearing']; ?>
</span></a></li>
        <li><a href="industry.php?do=refresh"><?php echo $this->_tpl_vars['_update_cache']; ?>
</a></li>
    </ul>
</div>
<div class="mrightTop"> 
    <div class="fontl"> 
        <form name="edit_frm" action="industry.php" id="EditFrm" method="post">
        <input type="hidden" name="do" value="clear" />
             <div class="left"> 
               <label for="Level1"><input type="checkbox" name="data[level][]" id="Level1" value="1"/><?php echo ((is_array($_tmp=$this->_tpl_vars['_type_levels'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, 1) : sprintf($_tmp, 1)); ?>
</label>
               <label for="Level2"><input type="checkbox" name="data[level][]" id="Level2" value="2" checked="checked"  /><?php echo ((is_array($_tmp=$this->_tpl_vars['_type_levels'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, 2) : sprintf($_tmp, 2)); ?>
</label>
               <label for="Level3"><input type="checkbox" name="data[level][]" id="Level3" value="3" checked="checked" /><?php echo ((is_array($_tmp=$this->_tpl_vars['_type_levels'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, 3) : sprintf($_tmp, 3)); ?>
</label>
                <input type="submit" name="save" id="Save" class="formbtn" value="<?php echo $this->_tpl_vars['_clear_now']; ?>
" /> 
            </div> 
        </form> 
    </div> 
    <div class="fontr"></div> 
</div> 
<div class="tdare"></div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>