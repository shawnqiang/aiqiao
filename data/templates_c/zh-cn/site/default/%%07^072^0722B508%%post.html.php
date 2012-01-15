<?php /* Smarty version 2.6.18, created on 2012-01-15 07:40:51
         compiled from default/offer/post.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'default/offer/post.html', 6, false),array('function', 'formhash', 'default/offer/post.html', 46, false),array('function', 'html_radios', 'default/offer/post.html', 120, false),array('function', 'html_options', 'default/offer/post.html', 170, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['_free_release_offer']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script src="scripts/langs/<?php echo $this->_tpl_vars['JsLanguage']; ?>
.js" charset="<?php echo $this->_tpl_vars['charset']; ?>
"></script>
<script src="scripts/jquery/jquery.textbox.js" charset="<?php echo $this->_tpl_vars['charset']; ?>
"></script>
<script>
var app_language = '<?php echo $this->_tpl_vars['AppLanguage']; ?>
';
var default_typeid = '<?php echo ((is_array($_tmp=@$this->_tpl_vars['type_id'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1)); ?>
';
var industry_id1 = <?php echo ((is_array($_tmp=@$this->_tpl_vars['industry_id'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
;
var allows_maximum_input = "<?php echo $this->_tpl_vars['_allows_maximum_input']; ?>
";
var can_also_enter = "<?php echo $this->_tpl_vars['_can_also_enter']; ?>
";
</script>
<?php echo '
<script>
jQuery(document).ready(function($) {
	$("#trade_content").textbox({
		maxLength: 255,
		onInput: function(event, status) {
			$("#txtTip").html(allows_maximum_input+" <strong style=\'font-family:Arial;font-size:1.5em;\'>" + status.maxLength + "</strong> "+can_also_enter+" <strong style=\'font-family:Arial;font-size:1.5em;\'>" + status.leftLength + "</strong>");
		}
	});
	$("#PostFrm").validate({
	submitHandler: function(form) {
		$(form).find(":submit").attr("disabled", true).attr("value",pb_lang.DO_PROCESSING);
		form.submit();
	}
	});
	$("#DataTradeTypeId").val(default_typeid);
})
function htmlspecialchars(str) {
	return preg_replace([\'&\', \'<\', \'>\', \'"\'], [\'&amp;\', \'&lt;\', \'&gt;\', \'&quot;\'], str);
}
</script>
'; ?>

<div id="main" class="container">
  <div class="breadcrumb"><?php echo $this->_tpl_vars['position']; ?>
</div>

  <div class="row">
    <div class="span4">
      <div class="mod">
        <div class="mod-hd">
          <h3><?php echo $this->_tpl_vars['_pls_login']; ?>
</h3>
        </div>
        <div class="mod-bd">
          <p><?php echo $this->_tpl_vars['_free_post_tip']; ?>
</p>
          <form name="loggingfrm" id="LoggingFrm" method="post" action="logging.php" class="form-stacked" style="padding-left:0;">
              <input type="hidden" name="action" value="logging">
              <?php echo smarty_function_formhash(array(), $this);?>

              <input type="hidden" name="forward" value="offer/post.php" />
              <div class="clearfix">
                <label for=""><?php echo $this->_tpl_vars['_user_name']; ?>
</label>
                <div class="input">
                  <input type="text" name="data[login_name]" id="LoginName" value="" tabindex="1" class="required span3" >
                </div>
              </div>
              <div class="clearfix">
                <label for=""><?php echo $this->_tpl_vars['_password']; ?>
</label>
                <div class="input">
                  <input name="data[login_pass]" type="password" id="LoginPass" value="" tabindex="2" class="required span3">
                </div>
              </div>
              <div class="input" style="margin-left:0;">
                <input  type="button" onclick="$('#LoggingFrm').submit();" name="log_in" id="LogIn" value="<?php echo $this->_tpl_vars['_login']; ?>
" class="btn primary"/>
              </div>
              
          </form>

          <p><strong><?php echo $this->_tpl_vars['_i_not_member']; ?>
</strong></p>
          <p><a href="member.php" class="btn"><?php echo $this->_tpl_vars['_join_now']; ?>
</a></p> 
        </div>
      </div>  
    </div>
    <div class="span13">
        <div class="page-header">
          <h2><?php echo $this->_tpl_vars['_base_info']; ?>
</h2>
        </div>
        <div class="mod">
          
          <div class="mod-hd">
            <h2><div class="title_step"><?php echo $this->_tpl_vars['_post_offer_steps']; ?>
<span class="step1"><?php echo $this->_tpl_vars['_write_base_info']; ?>
</span><span class="step2"><?php echo $this->_tpl_vars['_write_contact']; ?>
</span><span class="step3"><?php echo $this->_tpl_vars['_release_complete']; ?>
</span></div></h2>
          </div>
          <div class="mod-bd">
              <?php if ($this->_tpl_vars['Errors']): ?><?php echo $this->_tpl_vars['Errors']; ?>
<?php endif; ?>
                <form name="post_frm" id="PostFrm" enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>
">
                <input type="hidden" name="visit_post" value="visit_post" id="VisitPost" />
                <?php echo smarty_function_formhash(array(), $this);?>

                <table class="base_info">
                <tr>
                <th><?php echo $this->_tpl_vars['_offer_direction']; ?>
<span class="star">*</span></th>
                <td>
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
        
                </td>
              </tr>
              <tr>
                <th><?php echo $this->_tpl_vars['_info_title']; ?>
<span class="star">*</span></th>
                <td><input name="data[trade][title]" id="trade_title" type="text" size="32" value="" class=="required" maxlength="16"><span class="gray"><?php echo $this->_tpl_vars['_within_sixteen_words']; ?>
</span></td>
              </tr>
              <tr>
                <th><?php echo $this->_tpl_vars['_details']; ?>
</th>
                <td><textarea name="data[trade][content]" id="trade_content" cols="60" rows="8" wrap="virtual" class="required"></textarea>
                <div id="txtTip">
                            <p class="gray"><?php echo $this->_tpl_vars['_product_description']; ?>
</p>
                            <p class="gray"><?php echo $this->_tpl_vars['_product_description_using_image']; ?>
</p>
                </div>
                </td>
              </tr>
              <tr>
                <th><?php echo $this->_tpl_vars['_expire_date']; ?>
</th>
                <td><span class="expires"><?php echo smarty_function_html_radios(array('name' => 'expire_days','options' => $this->_tpl_vars['OfferExpires'],'checked' => '30','separator' => ' '), $this);?>
</span></td>
              </tr>
              <tr>
                <th><?php echo $this->_tpl_vars['_area']; ?>
<span class="star">*</span></th>
                <td>
                <p id="dataArea">
                  <select name="area[id][1]" id="dataTradeAreaId1" class="level_1" style="width:120px;" ></select>
                  <select name="area[id][2]" id="dataTradeAreaId2" class="level_2" style="width:120px;"></select>
                  <select name="area[id][3]" id="dataTradeAreaId3" class="level_3" style="width:120px;"></select>
                </p>
                </td>
              </tr>
              <tr>
                <td colspan="2" class="bg"><span class="bold"><?php echo $this->_tpl_vars['_not_must_content']; ?>
</span></td>
              </tr>
              <tr>
                <th><?php echo $this->_tpl_vars['_belong_industry']; ?>
</th>
                <td>
                <p id="dataIndustry">
                  <select name="industry[id][1]" id="dataTradeIndustryId1" class="level_1" style="width:120px;" ></select>
                  <select name="industry[id][2]" id="dataTradeIndustryId2" class="level_2" style="width:120px;"></select>
                  <select name="industry[id][3]" id="dataTradeIndustryId3" class="level_3" style="width:120px;"></select>
                </p>
                </td>
              </tr>
              <tr>
                <td colspan="2" class="bg"><span class="bold"><?php echo $this->_tpl_vars['_contact']; ?>
</span><?php echo $this->_tpl_vars['_content_required']; ?>
</td>
              </tr>
              <tr>
                <th><?php echo $this->_tpl_vars['_contact']; ?>
<span class="star">*</span></th>
                <td><input type="text" name="data[tradefield][link_man]" id="link_man" value="" class="required"></td>
              </tr>
              <tr>
                <th><?php echo $this->_tpl_vars['_contact_address']; ?>
<span class="star">*</span></th>
                <td><input name="data[tradefield][address]" id="OfferAddress" type="text" value="" class="required"/></td>
              </tr>
              <tr>
                <th><?php echo $this->_tpl_vars['_email_addr']; ?>
<span class="star">*</span></th>
                <td><p class="gray"><input name="data[tradefield][email]" id="OfferEmail" type="text" value="" class="required email"/>&nbsp;<?php echo $this->_tpl_vars['_contact_required']; ?>
</p></td> 
              </tr>
                <tr>
                <th><?php echo $this->_tpl_vars['_company_name']; ?>
</th>
                <td><input name="data[tradefield][company_name]" id="OfferAddress" type="text" value="<?php echo $this->_tpl_vars['item']['company_name']; ?>
" />
                <p class="gray"><?php echo $this->_tpl_vars['_inner_business_name']; ?>
<?php echo $this->_tpl_vars['company_name']; ?>
</p>
                <p class="gray"><?php echo $this->_tpl_vars['_no_company_should_name']; ?>
</p>
                </td>
              </tr>
               <tr>
                <th><?php echo $this->_tpl_vars['_preferred_tel']; ?>
</th>
                <td><select name="data[tradefield][prim_tel]" id="OfferPrimTel">
                <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['PhoneTypes'],'selected' => '1'), $this);?>

              </select><?php echo $this->_tpl_vars['_number']; ?>
<input type="text" name="data[tradefield][prim_telnumber]" id="prim_telnumber" value="<?php echo $this->_tpl_vars['item']['prim_telnumber']; ?>
"></td>
              </tr>
               <tr>
                <th><?php echo $this->_tpl_vars['_preferred_im']; ?>
</th>
                <td><select name="data[tradefield][prim_im]">
                <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['ImTypes'],'selected' => '1'), $this);?>

              </select><?php echo $this->_tpl_vars['_number']; ?>
<input type="text" name="data[tradefield][prim_imaccount]" id="prim_imaccount" value="<?php echo $this->_tpl_vars['item']['prim_imaccount']; ?>
"></td>
              </tr>
              <?php if ($this->_tpl_vars['ifcapt']): ?>
              <tr>
                <th><?php echo $this->_tpl_vars['_code']; ?>
</th>
                <td><a href="javascript:;" onclick="$('#imgcaptcha').attr('src','captcha.php?sid=' + Math.random());return false;"><img id="imgcaptcha" src="captcha.php" width="128"></a><p class="gray"><input type="text" name="data[capt_post_free]" id="VisitAuthNumber" value="">&nbsp;<?php echo $this->_tpl_vars['_enter_the_words_in_pic']; ?>
</p></td>
              </tr>
              <?php endif; ?>
              <tr>
                <th>&nbsp;</th>
                <td><input name="post" id="Post" type="submit" value="<?php echo $this->_tpl_vars['_immediate_release']; ?>
" class="btn primary" /><input name="reset" type="reset" value="<?php echo $this->_tpl_vars['_reset']; ?>
"  class="btn"/></td>
              </tr>
            </table>
          </form>
          </div>
        </div>  

    </div>
  </div>  
</div>

<script src="scripts/jquery/jquery.validate.js"></script>
<script src="scripts/multi_select.js" charset="<?php echo $this->_tpl_vars['charset']; ?>
"></script>
<script src="scripts/script_area.js"></script>
<script src="scripts/script_industry.js"></script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>