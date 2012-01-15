<?php /* Smarty version 2.6.18, created on 2012-01-01 12:48:33
         compiled from company.edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'the_url', 'company.edit.html', 36, false),array('function', 'editor', 'company.edit.html', 100, false),array('modifier', 'default', 'company.edit.html', 90, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_trade_management']; ?>
 &raquo; <?php echo $this->_tpl_vars['_yellow_page']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_yellow_page']; ?>
</h3> 
    <ul class="subnav">
		<li><a href="company.php"><?php echo $this->_tpl_vars['_management']; ?>
</a></li>
        <li><a class="btn1" href="company.php?do=edit"><span><?php echo $this->_tpl_vars['_add_or_edit']; ?>
</span></a></li>
        <li><a href="companytype.php"><?php echo $this->_tpl_vars['_types']; ?>
</a></li>
        <li><a href="albumtype.php"><?php echo $this->_tpl_vars['_album_category']; ?>
</a></li>
    </ul>
</div>
<div class="info">
  <form action="company.php" method="post" id="EditFrm" name="edit_frm" enctype="multipart/form-data">
  <input type="hidden" name="page" value="<?php echo $_GET['page']; ?>
" />
    <table class="infoTable">
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_company_name']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5">          
		<input class="infoTableInput2" name="data[company][name]" value="<?php echo $this->_tpl_vars['item']['name']; ?>
" /><label class="field_notice"><?php echo $this->_tpl_vars['_company_name']; ?>
</label>        </td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_enterprise_direct_keyword']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5">          
		<input class="infoTableInput2" name="data[company][adwords]" value="<?php echo $this->_tpl_vars['item']['adwords']; ?>
" /><label class="field_notice"><?php echo $this->_tpl_vars['_company_direct']; ?>
</label>        </td>
      </tr>
      <?php if ($_GET['id']): ?>
      <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>
">
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_cp_username_n']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><?php echo $this->_tpl_vars['item']['username']; ?>
</td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_space']; ?>
 <?php echo $this->_tpl_vars['_naming_n']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><a href="<?php echo smarty_function_the_url(array('module' => 'space','userid' => ($this->_tpl_vars['item']['cache_spacename'])), $this);?>
" target="_blank" title="<?php echo $this->_tpl_vars['_visit']; ?>
<?php echo $this->_tpl_vars['item']['name']; ?>
"><?php echo $this->_tpl_vars['item']['cache_spacename']; ?>
</a>[<a href="member.php?do=edit&id=<?php echo $this->_tpl_vars['item']['member_id']; ?>
"><?php echo $this->_tpl_vars['_modify']; ?>
</a>]<label class="field_notice"><?php echo $this->_tpl_vars['_only_english_letters']; ?>
</label></td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_top_domain_support']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput2" name="data[company][topleveldomain]" value="<?php echo $this->_tpl_vars['item']['topleveldomain']; ?>
" /><label class="field_notice"><?php echo $this->_tpl_vars['_must_setting_first']; ?>
</label></td>
      </tr>
      <?php else: ?>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_cp_username_n']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput2" name="data[username]" value="" /><label class="field_notice"><?php echo $this->_tpl_vars['_cp_username']; ?>
</label></td>
      </tr>
      <?php endif; ?>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_in_industry']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5">
        <span id="dataIndustry">
					<select name="industry[id][1]" id="dataMarketIndustryId1" class="level_1" style="width:120px;" ></select>
					<select name="industry[id][2]" id="dataMarketIndustryId2" class="level_2" style="width:120px;"></select>
					<select name="industry[id][3]" id="dataMarketIndustryId3" class="level_3" style="width:120px;"></select>
		</span>
        </td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_in_area']; ?>
</th>
        <td class="paddingT15 wordSpacing5">
			<span id="dataArea">
						<select name="area[id][1]" id="dataMarketAreaId1" class="level_1" style="width:120px;" ></select>
						<select name="area[id][2]" id="dataMarketAreaId2" class="level_2" style="width:120px;"></select>
						<select name="area[id][3]" id="dataMarketAreaId3" class="level_3" style="width:120px;"></select>
			</span>        
        </td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_description_n']; ?>
</th>
        <td class="paddingT15 wordSpacing5">
        <textarea style="width:550px;height:50px;" name="data[company][description]"><?php echo $this->_tpl_vars['item']['description']; ?>
</textarea>
        </td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_clicks']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput2" name="data[company][clicked]" value="<?php echo $this->_tpl_vars['item']['clicked']; ?>
" type="text" /></td>
      </tr>
      <tr>
        <th></th>
        <td class="ptb20">
			<input class="formbtn" type="submit" name="save" value="<?php echo $this->_tpl_vars['_save']; ?>
" />
		</td>
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
<?php echo smarty_function_editor(array('type' => 'tiny_mce'), $this);?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>