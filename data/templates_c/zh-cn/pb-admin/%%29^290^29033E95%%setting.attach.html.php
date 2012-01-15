<?php /* Smarty version 2.6.18, created on 2012-01-01 06:02:18
         compiled from setting.attach.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_radios', 'setting.attach.html', 28, false),array('function', 'html_options', 'setting.attach.html', 58, false),array('modifier', 'default', 'setting.attach.html', 28, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link href="../scripts/jquery/colorpicker.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="../scripts/jquery/colorpicker.js"></script>
<?php echo '
<script>
jQuery(document).ready(function($) {
	$.fn.colorPicker.defaultColors = [\'00FFFF\', \'000000\', \'999999\', \'FF0000\', \'FFFF00\', \'0000FF\', \'FFFFFF\', \'00FF7F\', \'00FF00\'];
	$(\'#color1\').colorPicker();
})
</script>
'; ?>

<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_setting_global']; ?>
 &raquo; <?php echo $this->_tpl_vars['_functions']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_functions']; ?>
</h3> 
	<ul class="subnav">
		<li><a href="setting.php?do=functions"><?php echo $this->_tpl_vars['_static_optimization']; ?>
</a></li>
		<li><a class="btn1" href="setting.php?do=attach"><span><?php echo $this->_tpl_vars['_attachment']; ?>
<?php echo $this->_tpl_vars['_setting']; ?>
</span></a></li>
	</ul>
</div>
<div class="info"> 
  <form action="setting.php" method="post" id="EditFrm" name="edit_frm">
  <input type="hidden" name="do" value="attach">
    <table class="infoTable"> 
		<tr> 
			<th class="paddingT15"><?php echo $this->_tpl_vars['_whether_or']; ?>
 <?php echo $this->_tpl_vars['_retained_original']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th> 
			<td class="paddingT15 wordSpacing5"><?php echo smarty_function_html_radios(array('name' => "data[setting][thumb_save_orignal]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['THUMB_SAVE_ORIGNAL'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)),'separator' => ""), $this);?>
</td> 
		</tr> 
		<tr> 
			<th class="paddingT15"><?php echo $this->_tpl_vars['_small_picture']; ?>
 <?php echo $this->_tpl_vars['_size']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th> 
			<td class="paddingT15 wordSpacing5"><?php echo $this->_tpl_vars['_width']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
<input name="data[small_width]" type="text"  value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['small_width'])) ? $this->_run_mod_handler('default', true, $_tmp, 80) : smarty_modifier_default($_tmp, 80)); ?>
" style="width:35px;" /><?php echo $this->_tpl_vars['_height']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
<input name="data[small_height]" type="text"  value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['small_height'])) ? $this->_run_mod_handler('default', true, $_tmp, 80) : smarty_modifier_default($_tmp, 80)); ?>
" style="width:35px;"/></td> 
		</tr> 
		<tr> 
			<th class="paddingT15"><?php echo $this->_tpl_vars['_middle_picture']; ?>
 <?php echo $this->_tpl_vars['_size']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th> 
			<td class="paddingT15 wordSpacing5"><?php echo $this->_tpl_vars['_width']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
<input name="data[middle_width]" type="text"  value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['middle_width'])) ? $this->_run_mod_handler('default', true, $_tmp, 220) : smarty_modifier_default($_tmp, 220)); ?>
" style="width:35px;" /><?php echo $this->_tpl_vars['_height']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
<input name="data[middle_height]" type="text"  value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['middle_height'])) ? $this->_run_mod_handler('default', true, $_tmp, 220) : smarty_modifier_default($_tmp, 220)); ?>
" style="width:35px;"/></td> 
		</tr> 
		<tr> 
			<th class="paddingT15"><?php echo $this->_tpl_vars['_big_picture']; ?>
 <?php echo $this->_tpl_vars['_size']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th> 
			<td class="paddingT15 wordSpacing5"><?php echo $this->_tpl_vars['_width']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
<input name="data[large_width]" type="text"  value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['large_width'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
" style="width:35px;" /><?php echo $this->_tpl_vars['_height']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
<input name="data[large_height]" type="text"  value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['large_height'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
" style="width:35px;"/></td> 
		</tr> 
		<tr> 
			<th class="paddingT15"><?php echo $this->_tpl_vars['_whether_or']; ?>
 <?php echo $this->_tpl_vars['_watermark']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th> 
			<td class="paddingT15 wordSpacing5"><?php echo smarty_function_html_radios(array('name' => "data[setting][watermark]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['WATERMARK'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)),'separator' => ""), $this);?>
</td> 
		</tr>
		<tbody id="tbWaterMark">
		<tr> 
			<th class="paddingT15"><?php echo $this->_tpl_vars['_whether_or']; ?>
 <?php echo $this->_tpl_vars['_picture']; ?>
 <?php echo $this->_tpl_vars['_watermark']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th> 
			<td class="paddingT15 wordSpacing5"><?php echo smarty_function_html_radios(array('name' => "data[setting][waterimage]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['WATERIMAGE'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)),'separator' => ""), $this);?>
</td> 
		</tr> 
		<tr> 
			<th class="paddingT15"><?php echo $this->_tpl_vars['_watermark']; ?>
 <?php echo $this->_tpl_vars['_text']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th> 
			<td class="paddingT15 wordSpacing5"><input name="data[setting][watertext]" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['WATERTEXT'])) ? $this->_run_mod_handler('default', true, $_tmp, @URL) : smarty_modifier_default($_tmp, @URL)); ?>
" /><label class="field_notice"><?php echo $this->_tpl_vars['_the_default_is_site_url']; ?>
 <?php echo $this->_tpl_vars['SiteUrl']; ?>
</label></td> 
		</tr> 
		<tr> 
			<th class="paddingT15"><?php echo $this->_tpl_vars['_text']; ?>
 <?php echo $this->_tpl_vars['_font']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th> 
			<td class="paddingT15 wordSpacing5"><select name="data[setting][waterface]">
				<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['FontFaces'],'selected' => ((is_array($_tmp=@$this->_tpl_vars['item']['WATERFACE'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['DefaultFace']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['DefaultFace']))), $this);?>

			</select></td> 
		</tr> 
		<tr> 
			<th class="paddingT15"><?php echo $this->_tpl_vars['_text']; ?>
 <?php echo $this->_tpl_vars['_color']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th> 
			<td class="paddingT15 wordSpacing5"><input name="data[setting][watercolor]" id="color1" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['WATERCOLOR'])) ? $this->_run_mod_handler('default', true, $_tmp, "#990000") : smarty_modifier_default($_tmp, "#990000")); ?>
" /></td> 
		</tr> 
		</tbody>
      <tr>
        <th></th>
        <td class="ptb20">
			<input class="formbtn" type="submit" name="save_attach" value="<?php echo $this->_tpl_vars['_save_setting']; ?>
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