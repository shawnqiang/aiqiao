<?php /* Smarty version 2.6.18, created on 2012-01-19 10:17:12
         compiled from personal.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'formhash', 'personal.html', 19, false),array('function', 'html_radios', 'personal.html', 29, false),array('modifier', 'default', 'personal.html', 29, false),)), $this); ?>
<?php $this->assign('page_title', ($this->_tpl_vars['_profile'])); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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
         <form name="companyeditfrm" id="Frm1" method="post" enctype="multipart/form-data">
    <?php echo smarty_function_formhash(array(), $this);?>


         <table class="offer_info_content">
                      <tr>
                        <th class="circle_left"><font color="#FF6600">*</font><?php echo $this->_tpl_vars['_vorname']; ?>
</th>
                        <td class="circle_right"><input name="memberfield[first_name]" type="text" id="memberlastname" value="<?php echo $this->_tpl_vars['item']['first_name']; ?>
" size="5">&nbsp;<input name="memberfield[last_name]" type="text" id="memberlastname" value="<?php echo $this->_tpl_vars['item']['last_name']; ?>
" class="required" size="10"></td>
                      </tr>
                      
                      <tr>
                        <th><?php echo $this->_tpl_vars['_sex_n']; ?>
</th>
                        <td><?php echo smarty_function_html_radios(array('name' => "memberfield[gender]",'options' => $this->_tpl_vars['Genders'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['gender'])) ? $this->_run_mod_handler('default', true, $_tmp, '1') : smarty_modifier_default($_tmp, '1')),'separator' => ' '), $this);?>
</td>
                      </tr>
                      <tr>
                        <th><?php echo $this->_tpl_vars['_provinces_city']; ?>
</th>
                        <td>
            <div id="dataArea">
              <select name="area[id][1]" id="dataMemberfieldAreaId1" class="level_1" style="width:120px;" ></select>
              <select name="area[id][2]" id="dataMemberfieldAreaId2" class="level_2" style="width:120px;"></select>
              <select name="area[id][3]" id="dataMemberfieldAreaId3" class="level_3" style="width:120px;"></select>
            </div>
            </td>
                      </tr>
                      <tr>
                        <th><font color="#FF6600">*</font><?php echo $this->_tpl_vars['_address']; ?>
</th>
                        <td><input name="memberfield[address]" type="text" id="memberaddress" value="<?php echo $this->_tpl_vars['item']['address']; ?>
" class="required"></td>
                      </tr>
                      <tr>
                        <th><?php echo $this->_tpl_vars['_postcode']; ?>
</th>
                        <td><input name="memberfield[zipcode]" type="text" id="memberzipcode" value="<?php echo $this->_tpl_vars['item']['zipcode']; ?>
"></td>
                      </tr>
                      <tr>
                        <th>QQ<?php echo $this->_tpl_vars['_number_n']; ?>
</th>
                        <td><input name="memberfield[qq]" type="text" id="memberqq" value="<?php echo $this->_tpl_vars['item']['qq']; ?>
"></td>
                      </tr>
                      <tr>
                        <th>ICQ<?php echo $this->_tpl_vars['_number_n']; ?>
</th>
                        <td><input name="memberfield[icq]" type="text" id="membericq" value="<?php echo $this->_tpl_vars['item']['icq']; ?>
"></td>
                      </tr>
                      <tr>
                        <th>Msn Messenger<?php echo $this->_tpl_vars['_colon']; ?>
</th>
                        <td><input name="memberfield[msn]" type="text" id="membermsn" value="<?php echo $this->_tpl_vars['item']['msn']; ?>
"></td>
                      </tr>
                      <tr>
                        <th>Yahoo Messenger<?php echo $this->_tpl_vars['_colon']; ?>
</th>
                        <td><input name="memberfield[yahoo]" type="text" id="memberyahoo" value="<?php echo $this->_tpl_vars['item']['yahoo']; ?>
"></td>
                      </tr>
                      <tr>
                        <th>Skype<?php echo $this->_tpl_vars['_colon']; ?>
</th>
                        <td><input name="memberfield[skype]" type="text" id="memberskype" value="<?php echo $this->_tpl_vars['item']['skype']; ?>
"></td>
                      </tr>
                      <tr>
                        <th><?php echo $this->_tpl_vars['_contact_phone']; ?>
</th>
                        <td><input name="memberfield[tel]" type="text" id="membertel" value="<?php echo $this->_tpl_vars['item']['tel']; ?>
"></td>
                      </tr>
                      <tr>
                        <th><?php echo $this->_tpl_vars['_fax_number']; ?>
</th>
                        <td><input name="memberfield[fax]" type="text" id="memberfax" value="<?php echo $this->_tpl_vars['item']['fax']; ?>
"></td>
                      </tr>
                      <tr>
                        <th><?php echo $this->_tpl_vars['_mobile_number']; ?>
</th>
                        <td><input name="memberfield[mobile]" type="text" id="membermobile" value="<?php echo $this->_tpl_vars['item']['mobile']; ?>
"></td>
                      </tr>
                      <tr>
                        <th><?php echo $this->_tpl_vars['_personal_homepage']; ?>
</th>
                        <td><input name="memberfield[site_url]" type="text" id="site_url" value="<?php echo $this->_tpl_vars['item']['site_url']; ?>
"></td>
                      </tr>
                      <tr>
                        <th><font color="#FF6600">*</font><?php echo $this->_tpl_vars['_email_addr']; ?>
</th>
                        <td><input name="member[email]" type="text" id="memberemail" value="<?php echo $this->_tpl_vars['item']['email']; ?>
" size="32" class="required email">(<a name="mod" href="javascript:;" onclick="javascript:$('#memberemail').attr('disabled',false);"><?php echo $this->_tpl_vars['_modify']; ?>
</a>)</td>
                      </tr>
                      <tr>
                        <th><?php echo $this->_tpl_vars['_job_status']; ?>
</th>
                        <td><input type="radio" name="personal[resume_status]" value="1" <?php if ($this->_tpl_vars['resume_status'] == 1): ?>checked="checked"<?php endif; ?>><?php echo $this->_tpl_vars['_like_job']; ?>
<input type="radio" name="personal[resume_status]" value="0" <?php if ($this->_tpl_vars['resume_status'] == 0): ?>checked="checked"<?php endif; ?>><?php echo $this->_tpl_vars['_not_like_job']; ?>
</td>
                      </tr>
                      <tr>
                        <th><?php echo $this->_tpl_vars['_highest_education']; ?>
</th>
                        <td>
            <select name="personal[max_education]" id="MaxEducation">
            <?php $_from = $this->_tpl_vars['Educations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['Educations'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['Educations']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key1'] => $this->_tpl_vars['item1']):
        $this->_foreach['Educations']['iteration']++;
?>
            <option value="<?php echo $this->_tpl_vars['key1']; ?>
" <?php if ($this->_tpl_vars['max_education'] == $this->_tpl_vars['key1']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['item1']; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
            </select>
            </td>
                      </tr>
                      <tr>
                        <th><?php echo $this->_tpl_vars['_personal_picture']; ?>
</th>
                        <td><input type="file" name="photo" id="MemberPhoto">
            <?php if ($this->_tpl_vars['item']['photo']): ?><br /><img src="<?php echo $this->_tpl_vars['item']['image']; ?>
" /><?php endif; ?>
            </td>
                      </tr>
                       <tr>
                        <th><?php echo $this->_tpl_vars['_login_jump']; ?>
</th>
                        <td><select name="member[office_redirect]" id="MemberOfficeRedirect">
              <?php $_from = $this->_tpl_vars['OfficeRedirects']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['office_redirect'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['office_redirect']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key1'] => $this->_tpl_vars['item1']):
        $this->_foreach['office_redirect']['iteration']++;
?>
              <option value="<?php echo $this->_tpl_vars['key1']; ?>
" <?php if ($this->_tpl_vars['key1'] == $this->_tpl_vars['item']['office_redirect']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['item1']; ?>
</option>
              <?php endforeach; endif; unset($_from); ?>
                        </select></td>
                      </tr>
                      <tr>
            <th class="circle_bottomleft"></th>
                        <td class="circle_bottomright"><input name="save" type="submit" id="save" class="btn primary" value="<?php echo $this->_tpl_vars['_save']; ?>
"></td>
                      </tr>
                 </table>
  </form>
       </div>
     </div>
   
     
	  
  </div>
 </div>
 </div>
<script language="javascript">
var enter_name = "<?php echo $this->_tpl_vars['_enter_name']; ?>
";
var enter_website_error = "<?php echo $this->_tpl_vars['_enter_website_error']; ?>
";
var cache_path = "../";
var app_language = '<?php echo $this->_tpl_vars['AppLanguage']; ?>
';
var area_id1 = <?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['area_id1'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
 ;
var area_id2 = <?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['area_id2'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
 ;
var area_id3 = <?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['area_id3'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
 ;
</script>
<?php echo '
<script>
jQuery(document).ready(function($) {
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
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>