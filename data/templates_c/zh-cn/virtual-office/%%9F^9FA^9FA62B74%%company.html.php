<?php /* Smarty version 2.6.18, created on 2012-01-14 10:36:49
         compiled from company.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'company.html', 9, false),array('function', 'editor', 'company.html', 40, false),array('function', 'formhash', 'company.html', 60, false),array('function', 'html_checkboxes', 'company.html', 170, false),)), $this); ?>
<?php $this->assign('page_title', ($this->_tpl_vars['_company_information'])); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript" src="../scripts/jquery/selectbox.js"></script>
<script>
var app_language = '<?php echo $this->_tpl_vars['AppLanguage']; ?>
';
</script>
<script type="text/javascript" src="../data/cache/<?php echo $this->_tpl_vars['AppLanguage']; ?>
/type.js"></script>
<script>
option_employee_amount = "<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['option_employee_amount'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
";
option_year_annual = "<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['option_year_annual'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
";
option_reg_fund = "<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['option_reg_fund'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
";
option_manage_type = "<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['option_manage_type'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
";
option_position = "<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['option_position'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
";
option_economic_type = "<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['option_economic_type'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
";
</script>
<?php echo '
<script type="text/javascript">
jQuery(document).ready(function($) {
	$(\'#dataCompanyEmployeeAmount\').options(employee_amount);
	$("#dataCompanyEmployeeAmount")[0].options[option_employee_amount].selected = true;
	$(\'#dataCompanyYearAnnual\').options(year_annual);
	$("#dataCompanyYearAnnual")[0].options[option_year_annual].selected = true;
	$(\'#dataCompanyRegFund\').options(reg_fund);
	$("#dataCompanyRegFund")[0].options[option_reg_fund].selected = true;
	$(\'#dataCompanyManageType\').options(manage_type);
	$("#dataCompanyManageType")[0].options[option_manage_type].selected = true;
	$(\'#dataCompanyPosition\').options(position);
	$("#dataCompanyPosition")[0].options[option_position].selected = true;
	$(\'#dataCompanyEconomicType\').options(economic_type);
	$("#dataCompanyEconomicType")[0].options[option_economic_type].selected = true;
	$("#CompanyFrm").validate({
	submitHandler: function(form) {
		$(form).find(":submit").attr("disabled", true).attr("value",pb_lang.DO_PROCESSING);
		form.submit();
	}
	});
})
</script>
'; ?>

<?php echo smarty_function_editor(array('type' => 'tiny_mce'), $this);?>

<div id="main" class="container">
    <div class="row">
       <div class="span4 side-bar">
         <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
       </div>
    
     <div class="span12 main-content">
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
        <?php echo $this->_tpl_vars['Errors']; ?>

    <form name="company_frm" id="CompanyFrm" action="<?php echo $_SERVER['PHP_SELF']; ?>
" method="post" enctype="multipart/form-data">
     <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['item']['id']; ?>
">        
     <input type="hidden" name="data[companyfield][company_id]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
">        
     <?php echo smarty_function_formhash(array(), $this);?>
        
     <input type="hidden" name="do" id="Do" value="save" />
          <table class="offer_info_content">
              <tr>
                <th class="circle_left"><font class="red">*</font> <?php echo $this->_tpl_vars['_company_name_n']; ?>
</th>
                <td class="circle_right"><input type="text" name="data[company][name]" id="dataCompanyName" value="<?php echo $this->_tpl_vars['item']['name']; ?>
" size="30" class="required"></td>
              </tr>
              <tr>
                <th> <?php echo $this->_tpl_vars['_company_en_name']; ?>
</th>
                <td><input name="data[company][english_name]" type="text" id="english_name" value="<?php echo $this->_tpl_vars['item']['english_name']; ?>
" size="30"></td>
              </tr>
              <tr>
                <th> <?php echo $this->_tpl_vars['_sectors']; ?>
</td>
                <td>
                <div id="dataIndustry">
                    <select name="industry[id][1]" id="dataCompanyIndustryId1" class="level_1"  ></select>
                    <select name="industry[id][2]" id="dataCompanyIndustryId2" class="level_2" ></select>
                    <select name="industry[id][3]" id="dataCompanyIndustryId3" class="level_3" ></select>
                </div>
                </td>
              </tr>
              <tr>
                <th> <?php echo $this->_tpl_vars['_employees_number']; ?>
</th>
                <td><select id="dataCompanyEmployeeAmount" name="data[company][employee_amount]"><option value="0"><?php echo $this->_tpl_vars['_select']; ?>
</option></select></td>
              </tr>
              <tr>
                <th> <?php echo $this->_tpl_vars['_year_turnover']; ?>
</th>
                <td><select id="dataCompanyYearAnnual" name="data[company][year_annual]"><option value="0"><?php echo $this->_tpl_vars['_select']; ?>
</option></select></td>
              </tr>
              
              <tr>
                <th> <?php echo $this->_tpl_vars['_business_model']; ?>
</th>
                <td><select id="dataCompanyManageType" name="data[company][manage_type]"><option value="0"><?php echo $this->_tpl_vars['_select']; ?>
</option></select></td>
              </tr>
              <tr>
                <th> <?php echo $this->_tpl_vars['_company_nature']; ?>
</th>
                <td><select id="dataCompanyEconomicType" name="data[company][property]"><option value="0"><?php echo $this->_tpl_vars['_select']; ?>
</option></select></td>
              </tr>
              <tr>
                <th> <?php echo $this->_tpl_vars['_main_products']; ?>
</th>
                <td><textarea name="data[company][main_prod]" rows="4" id="main_prod" style="width:355px;"><?php echo $this->_tpl_vars['item']['main_prod']; ?>
</textarea><font class=S><br><?php echo $this->_tpl_vars['_character_limit']; ?>
</font></td>
              </tr>
              <tr>
                <th><?php echo $this->_tpl_vars['_location']; ?>
</th>
                <td>            
                <div id="dataArea">
                    <select name="area[id][1]" id="dataCompanyAreaId1" class="level_1" style="width:120px;" ></select>
                    <select name="area[id][2]" id="dataCompanyAreaId2" class="level_2" style="width:120px;"></select>
                    <select name="area[id][3]" id="dataCompanyAreaId3" class="level_3" style="width:120px;"></select>
                </div>
                </td>
              </tr>
              <tr>
                <th><font class="red">*</font> <?php echo $this->_tpl_vars['_address']; ?>
</th>
                <td><input name="data[company][address]" type="text" id="address" value="<?php echo $this->_tpl_vars['item']['address']; ?>
" class="required"> </td>
              </tr>
              <tr>
                <th><font class="red">*</font> <?php echo $this->_tpl_vars['_zip']; ?>
</th>
                <td><input name="data[company][zipcode]" type="text" id="zipcode" value="<?php echo $this->_tpl_vars['item']['zipcode']; ?>
" class="required"> </td>
              </tr>
              <tr>
                <th><font class="red">*</font> <?php echo $this->_tpl_vars['_company_profile']; ?>
</th>
                <td><p>
                    <textarea name="data[company][description]" rows="8" wrap="VIRTUAL" id="company_des" style="width:555px;" class="required"><?php echo $this->_tpl_vars['item']['description']; ?>
</textarea>
                </p></td>
              </tr>
              <tr>
                <th><?php echo $this->_tpl_vars['_legal_person']; ?>
</th>
                <td><font color="#666666"> <span class="zi">
                  <input name="data[company][boss_name]" type="text" id="bossname" value="<?php echo $this->_tpl_vars['item']['boss_name']; ?>
">
                </span> </font></td>
              </tr>
              <tr>
                <th><?php echo $this->_tpl_vars['_company_registration_place']; ?>
</th>
                <td><font color="#666666"> <span class="zi">
                  <input name="data[company][reg_address]" type="text" id="reg_address" value="<?php echo $this->_tpl_vars['item']['reg_address']; ?>
">
                </span> </font></td>
              </tr>
              <tr>
                <th><?php echo $this->_tpl_vars['_registration_year']; ?>
</th>
                <td><input type="text" name="data[company][found_date]" id="dataFoundDate" value="<?php echo $this->_tpl_vars['item']['found_year']; ?>
"></td>
              </tr>
              <tr>
                <th><?php echo $this->_tpl_vars['_registration_funds']; ?>
</th>
                <td> <select id="dataCompanyRegFund" name="data[company][reg_fund]"><option value="0"><?php echo $this->_tpl_vars['_select']; ?>
</option></select><?php echo $this->_tpl_vars['_real_fill']; ?>
</td>
              </tr>
              <tr>
                <th><?php echo $this->_tpl_vars['_opening_bank']; ?>
</th>
                <td><input name="data[company][bank_from]" type="text" id="bank_from" value="<?php echo $this->_tpl_vars['item']['bank_from']; ?>
" size="32"></td>
              </tr>
              <tr>
                <th><?php echo $this->_tpl_vars['_account']; ?>
</th>
                <td><input name="data[company][bank_account]" type="text" id="bank_account" value="<?php echo $this->_tpl_vars['item']['bank_account']; ?>
" size="32"></td>
              </tr>
              <tr>
                <th><?php echo $this->_tpl_vars['_brand_name']; ?>
</th>
                <td><input name="data[company][main_brand]" type="text" id="main_brand" value="<?php echo $this->_tpl_vars['item']['main_brand']; ?>
" size="32"></td>
              </tr>
              <tr>
                <th><font class="red">*</font> <?php echo $this->_tpl_vars['_main_business_place']; ?>
</th>
                <td><input name="data[company][main_biz_place]" type="text" id="main_biz_place" value="<?php echo $this->_tpl_vars['item']['main_biz_place']; ?>
" size="32" class="required"> 
                <?php echo $this->_tpl_vars['_provinces_city_name']; ?>
</td>
              </tr>
              <tr>
                <th><?php echo $this->_tpl_vars['_main_customer']; ?>
</th>
                <td><input name="data[company][main_customer]" type="text" id="main_customer" value="<?php echo $this->_tpl_vars['item']['main_customer']; ?>
" size="32">                          
                <?php echo $this->_tpl_vars['_example']; ?>
                       </td>
              </tr>
              <tr>
                <th><?php echo $this->_tpl_vars['_main_market']; ?>
</th>
                <td><?php echo smarty_function_html_checkboxes(array('name' => "data[company][main_market]",'options' => $this->_tpl_vars['MainMarkets'],'checked' => $this->_tpl_vars['SelectedMarket'],'labels' => false), $this);?>
</td>
              </tr>
              <tr>
                <th><font class="red">*</font> <?php echo $this->_tpl_vars['_contact_people']; ?>
</th>
                <td><input name="data[company][link_man]" type="text" id="linkman" value="<?php echo $this->_tpl_vars['item']['link_man']; ?>
" size="32" class="required"></td>
              </tr>
              <tr>
                <th><?php echo $this->_tpl_vars['_contact_jobs']; ?>
</th>
                <td><select id="dataCompanyPosition" name="data[company][position]"><option value="0"><?php echo $this->_tpl_vars['_select']; ?>
</option></select></td>
              </tr>
              <tr>
                <th><?php echo $this->_tpl_vars['_contact_phone']; ?>
</th>
                <td><input name="data[telcode]" type="text" id="telcode" value="<?php echo $this->_tpl_vars['item']['telcode']; ?>
" size="4" maxlength="4">
                -
                  <input name="data[telzone]" type="text" id="telzone" value="<?php echo $this->_tpl_vars['item']['telzone']; ?>
" size="4" maxlength="4">
                -
                <input name="data[tel]" type="text" id="tel" value="<?php echo $this->_tpl_vars['item']['tel']; ?>
" size="15"><?php echo $this->_tpl_vars['_format']; ?>
</td>
              </tr>
              <tr>
                <th><?php echo $this->_tpl_vars['_fax_number']; ?>
</th>
                <td><input name="data[faxcode]" type="text" id="faxcode" value="<?php echo $this->_tpl_vars['item']['faxcode']; ?>
" size="4" maxlength="4">
-
<input name="data[faxzone]" type="text" id="faxzone" value="<?php echo $this->_tpl_vars['item']['faxzone']; ?>
" size="4" maxlength="4">
-
<input name="data[fax]" type="text" id="fax" value="<?php echo $this->_tpl_vars['item']['fax']; ?>
" size="15"><?php echo $this->_tpl_vars['_format']; ?>
</td>
              </tr>
              
              <tr>
                <th><?php echo $this->_tpl_vars['_mobile_number']; ?>
</th>
                <td><input name="data[company][mobile]" type="text" id="mobile" value="<?php echo $this->_tpl_vars['item']['mobile']; ?>
" size="32"></td>
              </tr>
              <tr>
                <th><?php echo $this->_tpl_vars['_company_home']; ?>
</th>
                <td><input name="data[company][site_url]" type="text" id="site_url" value="<?php echo $this->_tpl_vars['item']['site_url']; ?>
" size="32"></td>
              </tr>
              <tr>
                <th><?php echo $this->_tpl_vars['_longitude']; ?>
</th>
                <td><input name="data[companyfield][map_longitude]" type="text" id="map_longitude" value="<?php echo $this->_tpl_vars['item']['map_longitude']; ?>
" size="32">&nbsp;<a href="card.php"><?php echo $this->_tpl_vars['_click_and_search']; ?>
</a></td>
              </tr>
              <tr>
                <th><?php echo $this->_tpl_vars['_latitude']; ?>
</th>
                <td><input name="data[companyfield][map_latitude]" type="text" id="map_latitude" value="<?php echo $this->_tpl_vars['item']['map_latitude']; ?>
" size="32">&nbsp;<a href="card.php"><?php echo $this->_tpl_vars['_click_and_search']; ?>
</a></td>
              </tr>
              <tr>
                <th><font class="red">*</font> <?php echo $this->_tpl_vars['_business_email_n']; ?>
</th>
                <td><input name="data[company][email]" type="text" id="email" value="<?php echo $this->_tpl_vars['item']['email']; ?>
" size="32" class="required"></td>
              </tr>
              <tr>
                <th><?php echo $this->_tpl_vars['_company_logo']; ?>
</th>
                <td><input name="pic" type="file" id="Picture" size="32" onchange="document.getElementById('CompanyLogo').innerHTML='<img src=\''+this.value+'\' width=117 height=63>'"><div id="CompanyLogo" style="width: 117px; height: 63px"><?php if ($this->_tpl_vars['item']['logo']): ?><img src="<?php echo $this->_tpl_vars['item']['logo']; ?>
" width="117" height="63" alt="<?php echo $this->_tpl_vars['_logo_image']; ?>
" /><?php endif; ?></div></td>
              </tr>
              <tr>
               <th class="circle_bottomleft"></th>
               <td class="circle_bottomright"><input name="company_edit" class="btn primary" type="submit" id="CompanyEdit" value="<?php echo $this->_tpl_vars['_confirm_submit']; ?>
"></td>
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