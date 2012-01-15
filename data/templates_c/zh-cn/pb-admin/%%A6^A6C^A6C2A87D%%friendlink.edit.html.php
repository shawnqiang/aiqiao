<?php /* Smarty version 2.6.18, created on 2012-01-01 06:09:16
         compiled from friendlink.edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'friendlink.edit.html', 27, false),array('function', 'html_radios', 'friendlink.edit.html', 61, false),array('modifier', 'default', 'friendlink.edit.html', 61, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_ads']; ?>
 &raquo; <?php echo $this->_tpl_vars['_friendlink']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_friendlink']; ?>
</h3> 
    <ul class="subnav">
		<li><a href="friendlink.php"><?php echo $this->_tpl_vars['_management']; ?>
</a></li>
        <li><a class="btn1" href="friendlink.php?do=edit"><span><?php echo $this->_tpl_vars['_add_or_edit']; ?>
</span></a></li>
        <li><a href="friendlinktype.php"><?php echo $this->_tpl_vars['_sorts']; ?>
</a></li>
    </ul>
</div>
<div class="info">
  <form action="friendlink.php" method="post" id="EditFrm" name="edit_frm">
  <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>
">
  <input type="hidden" name="page" value="<?php echo $_GET['page']; ?>
" />
    <table class="infoTable">
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_the_title']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5">          
		<input class="infoTableInput2" name="data[friendlink][title]" value="<?php echo $this->_tpl_vars['item']['title']; ?>
" /><label class="field_notice"><?php echo $this->_tpl_vars['_show_name_n']; ?>
</label></td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_sorts']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5">
		<select name="data[friendlink][friendlinktype_id]">
		<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['FriendlinkTypes'],'selected' => $this->_tpl_vars['item']['friendlinktype_id']), $this);?>

		</select>
		</td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_in_industry']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5">
        <span id="dataIndustry">
					<select name="industry[id][1]" id="dataIndustryId1" class="level_1" style="width:120px;" ></select>
					<select name="industry[id][2]" id="dataIndustryId2" class="level_2" style="width:120px;"></select>
					<select name="industry[id][3]" id="dataIndustryId3" class="level_3" style="width:120px;"></select>
		</span>
        </td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_in_area']; ?>
</th>
        <td class="paddingT15 wordSpacing5">
			<span id="dataArea">
						<select name="area[id][1]" id="dataAreaId1" class="level_1" style="width:120px;" ></select>
						<select name="area[id][2]" id="dataAreaId2" class="level_2" style="width:120px;"></select>
						<select name="area[id][3]" id="dataAreaId3" class="level_3" style="width:120px;"></select>
			</span>        
        </td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_link_url']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><input name="data[friendlink][url]" value="<?php echo $this->_tpl_vars['item']['url']; ?>
" /></td>
      </tr>      
      <tr>
        <th class="paddingT15"><?php echo $this->_tpl_vars['_logo']; ?>
<?php echo $this->_tpl_vars['_picture']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><input name="data[friendlink][logo]" value="<?php echo $this->_tpl_vars['item']['logo']; ?>
" /><?php if ($this->_tpl_vars['item']['logo']): ?></td><td><img src="<?php echo $this->_tpl_vars['item']['logo']; ?>
" width="80" /><?php endif; ?></td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_whether_or']; ?>
<?php echo $this->_tpl_vars['_show_it']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><?php echo smarty_function_html_radios(array('name' => "data[friendlink][status]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['status'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1)),'separator' => ""), $this);?>
</td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_display_order']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput2" name="data[friendlink][priority]" value="<?php echo $this->_tpl_vars['item']['priority']; ?>
" /></td>
      </tr>
      <tr>
        <th></th>
        <td class="ptb20">
			<input class="formbtn" type="submit" name="save" value="<?php echo $this->_tpl_vars['_save']; ?>
" />		</td>
      </tr>
    </table>
  </form>
</div>
<script>
var cache_path = "../";
var app_language = '<?php echo $this->_tpl_vars['AppLanguage']; ?>
';
var area_id1 = <?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['area_id1'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
 ;
var area_id2 = <?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['area_id2'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
 ;
var area_id3 = <?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['area_id3'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
 ;
var industry_id1 = <?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['industry_id1'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
 ;
var industry_id2 = <?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['industry_id2'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
 ;
var industry_id3 = <?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['industry_id3'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
 ;
</script>
<script src="../scripts/multi_select.js" charset="<?php echo $this->_tpl_vars['charset']; ?>
"></script>
<script src="../scripts/script_area.js"></script>
<script src="../scripts/script_industry.js"></script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>