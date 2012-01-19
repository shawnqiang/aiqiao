<?php /* Smarty version 2.6.18, created on 2012-01-19 10:02:43
         compiled from offer_edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'editor', 'offer_edit.html', 9, false),array('function', 'formhash', 'offer_edit.html', 41, false),array('function', 'html_radios', 'offer_edit.html', 93, false),array('function', 'html_options', 'offer_edit.html', 180, false),array('function', 'the_url', 'offer_edit.html', 199, false),array('modifier', 'default', 'offer_edit.html', 93, false),)), $this); ?>
<?php $this->assign('page_title', ($this->_tpl_vars['_offer'])); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script src="<?php echo $this->_tpl_vars['SiteUrl']; ?>
scripts/jquery/jquery.colorbox.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['SiteUrl']; ?>
scripts/jquery/colorbox/colorbox.css" media="screen" rel="stylesheet" type="text/css"/>
<script>
var SiteUrl = "<?php echo $this->_tpl_vars['SiteUrl']; ?>
";
var enter_title = "<?php echo $this->_tpl_vars['_enter_title']; ?>
";
</script>
<?php echo smarty_function_editor(array('type' => 'tiny_mce'), $this);?>

<?php echo '
<script>
jQuery(document).ready(function($) {
	$(\'a[rel*=lightbox]\').colorbox({maxWidth:600,opacity:0.1});
	$(\'#CountryId\').change(function(){
        $("#CountryImage").attr("src",$("#CountryId").find(\'option:selected\').attr("title"));
    });
	$("#Frm1").validate({
	submitHandler: function(form) {
		$(form).find(":submit").attr("disabled", true).attr("value",pb_lang.DO_PROCESSING);
		form.submit();
	}
	});
})
</script>
'; ?>

<div id="main" class="container">
  <div class="row">
    <div class="span4 side-bar l-col">
         <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
    <div class="span12 main-content r-col">
    <div class="page-header">
      <h2><?php echo $this->_tpl_vars['page_title']; ?>
</h2>
    </div>
	   <div class="mod">
      <div class="mod-hd">
        <div class="hint"><?php echo $this->_tpl_vars['_must_input_with_star']; ?>
</div>
      </div> 
      <div class="mod-bd">
        <form name="TradeFrm" id="Frm1" enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>
">
    <?php echo smarty_function_formhash(array(), $this);?>

    <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['item']['id']; ?>
">
    <input type="hidden" name="do" value="save" />
        
       <table class="offer_info_content">
          <?php if ($this->_tpl_vars['item']['id']): ?>
                      <tr>
                        <th class="circle_left"><?php echo $this->_tpl_vars['_direction']; ?>
</th>
                        <td class="circle_right"><?php if ($this->_tpl_vars['item']['if_urgent'] == '1'): ?><?php echo $this->_tpl_vars['_urgent']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['TradeTypes'][$this->_tpl_vars['item']['type_id']]; ?>
</td>
                      </tr>
                      <tr>
                        <th><?php echo $this->_tpl_vars['_theme_n']; ?>
</th>
                        <td><?php echo $this->_tpl_vars['item']['title']; ?>
</td>
                      </tr>
                      <tr>
                        <th><?php echo $this->_tpl_vars['_adwords']; ?>
</th>
                        <td><?php if ($this->_tpl_vars['item']['adwords']): ?><?php echo $this->_tpl_vars['item']['adwords']; ?>
<?php else: ?><input name="data[trade][adwords]" id="trade_adwords" type="text" value="<?php echo $this->_tpl_vars['item']['adwords']; ?>
"/><?php endif; ?></td>
                      </tr>
                      <tr>
                        <th><?php echo $this->_tpl_vars['_duration']; ?>
</th>
                        <td><?php echo $this->_tpl_vars['item']['expire_date']; ?>
</td>
                      </tr>
        <?php else: ?>
                      <tr>
                        <th class="circle_left"><font class="red">*</font><?php echo $this->_tpl_vars['_direction']; ?>
</th>
                        <td class="circle_right">
            <select name="data[trade][type_id]" id="DataTradeTypeId" class="required">
              <?php $_from = $this->_tpl_vars['select_tradetypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['f1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['f1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['f1']):
        $this->_foreach['f1']['iteration']++;
?>
              <?php if ($this->_tpl_vars['f1']['child']): ?>
              <optgroup label="<?php echo $this->_tpl_vars['f1']['name']; ?>
">
              <?php $_from = $this->_tpl_vars['f1']['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['f2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['f2']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['f2']):
        $this->_foreach['f2']['iteration']++;
?>
                <option value="<?php echo $this->_tpl_vars['f2']['id']; ?>
"><?php echo $this->_tpl_vars['f2']['name']; ?>
</option>
              <?php endforeach; endif; unset($_from); ?>
              </optgroup>
              <?php else: ?>
              <option value="<?php echo $this->_tpl_vars['f1']['id']; ?>
"><?php echo $this->_tpl_vars['f1']['name']; ?>
</option>
              <?php endif; ?>
              <?php endforeach; endif; unset($_from); ?>
            </select>
                        <?php echo $this->_tpl_vars['_emergency']; ?>
<input type="checkbox" name="data[trade][if_urgent]" value="1" <?php if ($this->_tpl_vars['item']['if_urgent'] == '1'): ?>checked<?php endif; ?>></td>
                      </tr>
                      <tr>
                        <th><font class="red">*</font><?php echo $this->_tpl_vars['_theme_n']; ?>
</th>
                        <td><input name="data[trade][title]" id="trade_topic" type="text" value="<?php echo $this->_tpl_vars['item']['title']; ?>
" class="required" /><font color="#666666">
<?php echo $this->_tpl_vars['_optimal_number']; ?>
</font></td>
                      </tr>
                      <tr>
                        <th><?php echo $this->_tpl_vars['_adwords']; ?>
</th>
                        <td><input name="data[trade][adwords]" id="trade_adwords" type="text" value="<?php echo $this->_tpl_vars['item']['adwords']; ?>
"/></td>
                      </tr>
                      <tr>
                        <th><?php echo $this->_tpl_vars['_duration']; ?>
</th>
                        <td><?php echo smarty_function_html_radios(array('name' => 'expire_days','options' => $this->_tpl_vars['OfferExpires'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['expire_days'])) ? $this->_run_mod_handler('default', true, $_tmp, 30) : smarty_modifier_default($_tmp, 30)),'separator' => ' '), $this);?>
</td>
                      </tr>
        <?php endif; ?>
                      <tr>
                        <th><?php echo $this->_tpl_vars['_tags_n']; ?>
</th>
                        <td><input name="data[tag]" type="text" id="tag" value="<?php echo $this->_tpl_vars['item']['tag']; ?>
" /><font color="#666666"><?php echo $this->_tpl_vars['_space_separate']; ?>
</font></td>
                      </tr>
                      <tr>
                        <th><?php echo $this->_tpl_vars['_the_price_n']; ?>
</th>
                        <td><input name="data[trade][price]" type="text" id="DataTradePrice" value="<?php echo $this->_tpl_vars['item']['price']; ?>
"/></td>
                      </tr>
            <?php $_from = $this->_tpl_vars['Forms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['form'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['form']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key1'] => $this->_tpl_vars['item1']):
        $this->_foreach['form']['iteration']++;
?>
                      <tr>
                        <th> <?php echo $this->_tpl_vars['item1']['label']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
                        <td><font color="#666666">
                          <input name="data[formitem][<?php echo $this->_tpl_vars['key1']; ?>
]" type="text" id="<?php echo $this->_tpl_vars['item1']['id']; ?>
" value="<?php echo $this->_tpl_vars['item1']['value']; ?>
"></font></td>
                      </tr>
            <?php endforeach; endif; unset($_from); ?>
                      <tr>
                        <th><?php echo $this->_tpl_vars['_country']; ?>
:</th>
                        <td><select name="data[trade][country_id]" id="CountryId">
              <option><?php echo $this->_tpl_vars['_please_select']; ?>
</option>
            <?php $_from = $this->_tpl_vars['Countries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['Countries'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['Countries']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['country']):
        $this->_foreach['Countries']['iteration']++;
?>
              <option value="<?php echo $this->_tpl_vars['country']['id']; ?>
" title="../images/country/<?php echo $this->_tpl_vars['country']['picture']; ?>
" <?php if ($this->_tpl_vars['country']['id'] == $this->_tpl_vars['item']['country_id']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['country']['name']; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
                        </select>&nbsp;&nbsp;<img src="../images/country/<?php echo $this->_tpl_vars['item']['country']; ?>
" id="CountryImage"></td>
                      </tr>
                      <tr>
                        <th><?php echo $this->_tpl_vars['_industry']; ?>
</th>
                        <td>
            <div id="dataIndustry">
              <select name="industry[id][1]" id="dataTradeIndustryId1" class="level_1" ></select>
              <select name="industry[id][2]" id="dataTradeIndustryId2" class="level_2" ></select>
              <select name="industry[id][3]" id="dataTradeIndustryId3" class="level_3" ></select>
            </div>            
            </td>
                      </tr>
                      <tr>
                        <th><?php echo $this->_tpl_vars['_area']; ?>
</th>
                        <td>
            <div id="dataArea">
              <select name="area[id][1]" id="dataTradeAreaId1" class="level_1" ></select>
              <select name="area[id][2]" id="dataTradeAreaId2" class="level_2" ></select>
              <select name="area[id][3]" id="dataTradeAreaId3" class="level_3" ></select>
            </div>

            </td>
                      </tr>
                      <tr>
                        <th ><font class="red"> *</font><?php echo $this->_tpl_vars['_details_n']; ?>
</th>
                        <td class="tdright"><textarea name="data[trade][content]" id="dataTradeContent" rows="8" wrap="VIRTUAL" style="width:550px;" class="required"><?php echo $this->_tpl_vars['item']['content']; ?>
</textarea><br /><font color="#FF3300"><?php echo $this->_tpl_vars['_attention_explain']; ?>
<br>
                        </font></td>
                      </tr>
                      <tr>
                        <th><?php echo $this->_tpl_vars['_image']; ?>
</th>
                        <td><input name="pic" type="file" id="uploadfile" onchange="showPreview(uploadpic,this.form.pic);" />
                            <span class="gray"><br>
                    <?php echo $this->_tpl_vars['_image_size_format_provision']; ?>
</span></td>
                      </tr>
                      <tr>
                        <th><?php echo $this->_tpl_vars['_now_image']; ?>
</th>
                        <td class="tdright">
            <div class="img-preview">
            <a href="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['image'])) ? $this->_run_mod_handler('default', true, $_tmp, "javascript:;") : smarty_modifier_default($_tmp, "javascript:;")); ?>
" id="uploadpic_hover" rel="lightbox"><img id="uploadpic" src="<?php echo $this->_tpl_vars['item']['image']; ?>
.small.jpg" style='<?php if (! $this->_tpl_vars['item']['image']): ?>display:none;<?php endif; ?>width: 80px;' alt="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('default', true, $_tmp, ($this->_tpl_vars['_preview_image'])) : smarty_modifier_default($_tmp, ($this->_tpl_vars['_preview_image']))); ?>
-->"  /></a>
            <div>
            <div style="display:none"></div>
            </td>
                     </tr>
                  <tr>
                      <th></th>
                       <td><?php echo $this->_tpl_vars['_check_information']; ?>
<br>
                        <?php echo $this->_tpl_vars['_need_click']; ?>
<a href="personal.php" target="_self" class="font14b_org"><strong><?php echo $this->_tpl_vars['_modify_information']; ?>
</strong></a></td>
                   </tr>

                   <tr>
                        <th ><?php echo $this->_tpl_vars['_contact_people']; ?>
</td>
                        <td><?php echo ((is_array($_tmp=@$this->_tpl_vars['COMPANYINFO']['link_man'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['MemberInfo']['last_name']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['MemberInfo']['last_name'])); ?>
<font color="#999999"><?php echo $this->_tpl_vars['_full_name']; ?>
 </font> </td>
                    </tr>
          <?php if ($this->_tpl_vars['CompanyId'] != ""): ?>
                  <tr>
                    <th><?php echo $this->_tpl_vars['_company_name_n']; ?>
</th>
                    <td><?php echo $this->_tpl_vars['COMPANYINFO']['name']; ?>
<font color="#999999"><?php echo $this->_tpl_vars['_company_full_name']; ?>
</font></td>
                  </tr>
          <?php endif; ?>
                      <tr>
                        <th><?php echo $this->_tpl_vars['_first_contact_phone']; ?>
</th>
                        <td><select name="data[prim_tel]">
        <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['PhoneTypes'],'selected' => $this->_tpl_vars['item']['prim_tel']), $this);?>

      </select>&nbsp;<?php echo $this->_tpl_vars['_number_n']; ?>
<input type="text" name="data[prim_telnumber]" id="prim_telnumber" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['prim_telnumber'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['MemberInfo']['tel']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['MemberInfo']['tel'])); ?>
" /></td>
                      </tr>
                      <tr>
                        <th><?php echo $this->_tpl_vars['_first_instant_message']; ?>
</th>
                        <td><select name="data[prim_im]">
        <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['ImTypes'],'selected' => $this->_tpl_vars['item']['prim_im']), $this);?>

      </select>&nbsp;<?php echo $this->_tpl_vars['_number_n']; ?>
<input type="text" name="data[prim_imaccount]" id="prim_imaccount" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['prim_imaccount'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['MemberInfo']['qq']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['MemberInfo']['qq'])); ?>
" /></td>
                      </tr>
                      
                      <tr >
                        <th><?php echo $this->_tpl_vars['_email_addr']; ?>
</th>
                        <td><?php echo $this->_tpl_vars['MemberInfo']['email']; ?>
</td>
                      </tr>
                      <tr>
                      <th class="circle_bottomleft"></th>
                        <td class="circle_bottomright"><input type="hidden" name="edit_trade" id="EditTrade" value="y" />
                        <input type="submit" name="save" id="Save" class="btn primary" value="<?php echo $this->_tpl_vars['_finish_release']; ?>
">
            <?php if ($this->_tpl_vars['item']['id']): ?>
            &nbsp;<a href="../<?php echo smarty_function_the_url(array('module' => 'offer','id' => ($this->_tpl_vars['item']['id'])), $this);?>
" title="<?php echo $this->_tpl_vars['_preview']; ?>
<?php echo $this->_tpl_vars['item']['title']; ?>
" target="_blank" style="text-decoration:underline;color:blue;"><?php echo $this->_tpl_vars['_preview']; ?>
</a>
            <?php endif; ?>
            </td>
                      </tr>
               </table>
    </form>
      </div> 
     </div>
    
     </div>
     </div>
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
var type_id = <?php echo ((is_array($_tmp=@$this->_tpl_vars['type_id'])) ? $this->_run_mod_handler('default', true, $_tmp, 2) : smarty_modifier_default($_tmp, 2)); ?>
 ;
</script>
<?php echo '
<script>
$(function(){
  $(\'#DataTradeTypeId\').attr(\'value\', type_id);
});
</script>
'; ?>

<script src="../scripts/multi_select.js" charset="<?php echo $this->_tpl_vars['charset']; ?>
"></script>
<script src="../scripts/script_area.js"></script>
<script src="../scripts/script_industry.js"></script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>