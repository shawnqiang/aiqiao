<?php /* Smarty version 2.6.18, created on 2012-01-14 10:52:21
         compiled from job_edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'fetch', 'job_edit.html', 3, false),array('function', 'formhash', 'job_edit.html', 25, false),array('function', 'html_radios', 'job_edit.html', 37, false),array('function', 'html_options', 'job_edit.html', 47, false),array('modifier', 'default', 'job_edit.html', 37, false),array('modifier', 'strip_tags', 'job_edit.html', 106, false),)), $this); ?>
<?php $this->assign('page_title', ($this->_tpl_vars['_company_job'])); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo smarty_function_fetch(array('file' => "../scripts/date.js"), $this);?>

<script src="../scripts/jquery/jquery.textbox.js" charset="<?php echo $this->_tpl_vars['charset']; ?>
"></script>
<script>
var allows_maximum_input = "<?php echo $this->_tpl_vars['_allows_maximum_input']; ?>
";
var can_also_enter = "<?php echo $this->_tpl_vars['_can_also_enter']; ?>
";
</script>
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
         <?php echo $this->_tpl_vars['_must_input_with_star']; ?>

       </div>
       <div class="mod-bd">
         <form name="jobfrm" id="Frm1" action="job.php" method="post">
    <?php echo smarty_function_formhash(array(), $this);?>

    <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['item']['id']; ?>
">
      
      <table class="offer_info_content">       

                      <tr>
                         <th class="circle_left">
                        <font color="#FF6600">*</font><?php echo $this->_tpl_vars['_job_title']; ?>
</th>
                         <td class="circle_right"><input name="job[name]" type="text" id="jobname" value="<?php echo $this->_tpl_vars['item']['name']; ?>
" class="required"></td>
                      </tr>
                      <tr>
                        <th><?php echo $this->_tpl_vars['_sex']; ?>
</th>
                        <td class="tdright"><?php echo smarty_function_html_radios(array('name' => "job[require_gender_id]",'options' => $this->_tpl_vars['Genders'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['require_gender_id'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)),'separator' => ' '), $this);?>
</td>
                      </tr>
                      
                      <tr>
                        <th><font color="#FF6600">*</font><?php echo $this->_tpl_vars['_job_number']; ?>
(<?php echo $this->_tpl_vars['_peoples']; ?>
)</th>
                        <td class="tdright"><input name="job[peoples]" type="text" id="peoples" value="<?php echo $this->_tpl_vars['item']['peoples']; ?>
" size="2" maxlength="2" class="required number"></td>
                      </tr>
                      <tr>
                        <th><?php echo $this->_tpl_vars['_education']; ?>
</th>
                        <td class="tdright"><select name="job[require_education_id]">
                          <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['Educations'],'selected' => $this->_tpl_vars['item']['require_education_id']), $this);?>

                        </select></td>
                      </tr>
                      
                      <tr>
                        <th><?php echo $this->_tpl_vars['_age']; ?>
</th>
                        <td class="tdright"><input name="job[require_age]" type="text" id="require_age" value="<?php echo $this->_tpl_vars['item']['require_age']; ?>
"></td>
                      </tr>
                      <tr>
                        <th><?php echo $this->_tpl_vars['_salary']; ?>
</th>
                        <td class="tdright"><select name="job[salary_id]">
            <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['Salary'],'selected' => $this->_tpl_vars['item']['salary_id']), $this);?>

            </select></td>
                      </tr>
                      <tr>
                        <th><?php echo $this->_tpl_vars['_industry']; ?>
</th>
                        <td class="tdright">
            <div id="dataIndustry">
              <select name="industry[id][1]" id="dataCompanyIndustryId1" class="level_1" style="width:120px;" ></select>
              <select name="industry[id][2]" id="dataCompanyIndustryId2" class="level_2" style="width:120px;"></select>
              <select name="industry[id][3]" id="dataCompanyIndustryId3" class="level_3" style="width:120px;"></select>
            </div>
            </td>
                      </tr>
                      <tr>
                        <th><?php echo $this->_tpl_vars['_location']; ?>
</th>
                        <td class="tdright">
            <div id="dataArea">
              <select name="area[id][1]" id="dataCompanyAreaId1" class="level_1" style="width:120px;" ></select>
              <select name="area[id][2]" id="dataCompanyAreaId2" class="level_2" style="width:120px;"></select>
              <select name="area[id][3]" id="dataCompanyAreaId3" class="level_3" style="width:120px;"></select>
            </div>
            </td>
                      </tr>
                      <tr>
                        <th><font color="#FF6600">*</font><?php echo $this->_tpl_vars['_job_address']; ?>
</th>
                        <td class="tdright"><input name="job[work_station]" type="text" id="work_station" value="<?php echo $this->_tpl_vars['item']['work_station']; ?>
" class="required"/></td>
                      </tr>
                      <tr>
                        <th><font color="#FF6600">*</font><?php echo $this->_tpl_vars['_category']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
                        <td class="tdright">
            <select name="job[jobtype_id]" id="JobtypeId">
        <option value="0"><?php echo $this->_tpl_vars['_select_category']; ?>
</option>
        <?php echo $this->_tpl_vars['JobtypeOptions']; ?>

        </select>
            </td>
                      </tr>
             <th><?php echo $this->_tpl_vars['_job_nature']; ?>
</th>
                        <td class="tdright"><select name="job[worktype_id]">
            <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['Worktype'],'selected' => $this->_tpl_vars['item']['worktype_id']), $this);?>

            </select></td>
                      </tr>
                      <tr>
                        <th><?php echo $this->_tpl_vars['_due_date_n']; ?>
</th>
                        <td class="tdright"><input type="text" name="expire_time" value='<?php echo $this->_tpl_vars['item']['expire_date']; ?>
' id="date1"  readonly><span class="btn_calendar" id="calendar-date1"></span></td>
                      
                      </tr>
                      <tr>
                        <th><font color="#FF6600">*</font><?php echo $this->_tpl_vars['_job_description']; ?>
</th>
                        <td class="tdright"><textarea name="job[content]" cols="35" rows="4" id="Content" class="required"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['content'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
</textarea><div id="txtTips"></div></td>
                      </tr>
                       <tr>
                        <th class="circle_bottomleft"></th>
                        <td class="circle_bottomright"><input name="save" type="submit" class="btn primary" id="save" value="<?php echo $this->_tpl_vars['_save']; ?>
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
var jobtype_id = <?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['jobtype_id'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
 ;
</script>
<?php echo '
<script>
Calendar.setup({
	trigger    : "calendar-date1",
	animation  : false,
	inputField : "date1",
	onSelect   : function() { this.hide() }
});
jQuery(document).ready(function($) {
	$("#JobtypeId").val(jobtype_id);
	$("#Content").textbox({
		maxLength: 255,
		onInput: function(event, status) {
			$("#txtTips").html(allows_maximum_input+" <strong style=\'font-family:Arial;font-size:1.5em;\'>" + status.maxLength + "</strong> "+can_also_enter+" <strong style=\'font-family:Arial;font-size:1.5em;\'>" + status.leftLength + "</strong>");
		}
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

<script src="../scripts/multi_select.js" charset="<?php echo $this->_tpl_vars['charset']; ?>
"></script>
<script src="../scripts/script_area.js"></script>
<script src="../scripts/script_industry.js"></script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>