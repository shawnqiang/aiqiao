<?php /* Smarty version 2.6.18, created on 2012-01-01 06:02:57
         compiled from setting.datetime.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'setting.datetime.html', 14, false),array('modifier', 'date_format', 'setting.datetime.html', 15, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_setting_global']; ?>
 &raquo; <?php echo $this->_tpl_vars['_time_set']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_time_set']; ?>
</h3> 
</div>
<div class="info"> 
  <form action="setting.php" method="post" id="EditFrm" name="edit_frm">
  <input type="hidden" name="do" value="functions">
    <table class="infoTable">
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_default']; ?>
 <?php echo $this->_tpl_vars['_date_format']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><input name="data[date_format]" type="text" id="DateFormat" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['DATE_FORMAT'])) ? $this->_run_mod_handler('default', true, $_tmp, "%Y-%m-%d") : smarty_modifier_default($_tmp, "%Y-%m-%d")); ?>
"/>
          <span class="gray"><?php echo $this->_tpl_vars['_gd_picture_ok']; ?>
<a href="http://www.php.net/strftime" target="_blank">strftime</a><?php echo $this->_tpl_vars['_any_format']; ?>
 <?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</span></td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_default']; ?>
 <?php echo $this->_tpl_vars['_time_difference']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><input name="data[time_offset]" type="text" id="TimeOffset" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['TIME_OFFSET'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
"/>
          <span class="gray"><?php echo $this->_tpl_vars['_the_time_difference_between_local_time_and_gmt']; ?>
<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M:%S")); ?>
</span></span></td>
      </tr>
      <tr>
        <th></th>
        <td class="ptb20">
			<input class="formbtn" type="submit" name="save_datetime" value="<?php echo $this->_tpl_vars['_save_setting']; ?>
" />		</td>
      </tr>
    </table>
  </form>
</div> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>