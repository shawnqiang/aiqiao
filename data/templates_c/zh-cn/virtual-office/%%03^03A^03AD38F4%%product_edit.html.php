<?php /* Smarty version 2.6.18, created on 2012-01-19 10:02:50
         compiled from product_edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'editor', 'product_edit.html', 8, false),array('function', 'formhash', 'product_edit.html', 44, false),array('function', 'html_radios', 'product_edit.html', 52, false),array('function', 'html_options', 'product_edit.html', 129, false),array('function', 'the_url', 'product_edit.html', 153, false),array('modifier', 'default', 'product_edit.html', 52, false),)), $this); ?>
<?php $this->assign('page_title', ($this->_tpl_vars['_product_management'])); ?>
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
</script>
<?php echo smarty_function_editor(array('type' => 'tiny_mce'), $this);?>

<?php echo '
<style>
</style>
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
       <h2><?php echo $this->_tpl_vars['_product_management']; ?>
</h2>
     </div>
     <div class="mod">
       <div class="mod-hd">
         <h2><?php echo $this->_tpl_vars['_must_input_with_star']; ?>
</h2>
       </div>
       <div class="mod-bd">
            <form name="productaddfrm" id="Frm1" method="post" action="<?php echo $_ENV['PHP_SELF']; ?>
" enctype="multipart/form-data" onsubmit="$('#Save').attr('disabled',true);">
    <?php echo smarty_function_formhash(array(), $this);?>

    <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['item']['id']; ?>
">
    <input type="hidden" name="formattribute_ids" value="<?php echo $this->_tpl_vars['item']['formattribute_ids']; ?>
">
       
        <table class="offer_info_content">

                      <tr>
                        <th class="circle_left"><font class="red">*</font><?php echo $this->_tpl_vars['_product_type']; ?>
</th>
                        <td class="circle_right"><?php echo smarty_function_html_radios(array('name' => "data[product][sort_id]",'options' => $this->_tpl_vars['ProductSorts'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['sort_id'])) ? $this->_run_mod_handler('default', true, $_tmp, 2) : smarty_modifier_default($_tmp, 2)),'separator' => ' '), $this);?>
</td>
                      </tr>
                      <tr>
                        <th><font class="red">*</font><?php echo $this->_tpl_vars['_product_name']; ?>
</th>
                        <td class="tdright"><input name="data[product][name]" type="text" id="dataProductName" value="<?php echo $this->_tpl_vars['item']['name']; ?>
" class="required">
                        <font color="#666666"><?php echo $this->_tpl_vars['_words_length']; ?>
</font></td>
                      </tr>
                      <tr>
                        <th><?php echo $this->_tpl_vars['_the_price_n']; ?>
</th>
                        <td class="tdright"><input name="data[product][price]" type="text" id="dataProductPrice" value="<?php echo $this->_tpl_vars['item']['price']; ?>
"></td>
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
                        <td class="tdright"><font color="#666666">
                          <input name="data[formitem][<?php echo $this->_tpl_vars['key1']; ?>
]" type="text" id="<?php echo $this->_tpl_vars['item1']['id']; ?>
" value="<?php echo $this->_tpl_vars['item1']['value']; ?>
"></font></td>
                      </tr>
            <?php endforeach; endif; unset($_from); ?>
                      <tr>
                        <th><?php echo $this->_tpl_vars['_country']; ?>
:</th>
                        <td><select name="data[product][country_id]" id="CountryId">
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
                        <td class="tdright">
            <div id="dataIndustry">
              <select name="industry[id][1]" id="dataProductIndustryId1" class="level_1" ></select>
              <select name="industry[id][2]" id="dataProductIndustryId2" class="level_2"></select>
              <select name="industry[id][3]" id="dataProductIndustryId3" class="level_3" ></select>
            </div>            
            </td>
                      </tr>
                      <tr>
                        <th><?php echo $this->_tpl_vars['_area']; ?>
</th>
                        <td class="tdright">
                  <div id="dataArea">
              <select name="area[id][1]" id="dataProductAreaId1" class="level_1" ></select>
              <select name="area[id][2]" id="dataProductAreaId2" class="level_2" ></select>
              <select name="area[id][3]" id="dataProductAreaId3" class="level_3"></select>
            </div>

            </td>
                      </tr>
                      <tr>
                        <th><font class="red">*</font><?php echo $this->_tpl_vars['_product_description']; ?>
</th>
                        <td class="tdright"><textarea name="data[product][content]" id="dataProductContent" rows="8" wrap="VIRTUAL" style="width:570px;" class="required"><?php echo $this->_tpl_vars['item']['content']; ?>
</textarea><br />
                            <font color="#FF3300"><?php echo $this->_tpl_vars['_attention_explain']; ?>
<br>
                        </font></td>
                      </tr>
                      <tr>
                        <th><?php echo $this->_tpl_vars['_respective_series']; ?>
</th>
                        <td class="tdright"><font color="#666666">
                        <span class="zi">
                          <select name="data[product][producttype_id]">
                            <option value="0"><?php echo $this->_tpl_vars['_select']; ?>
</option>
              <?php $_from = $this->_tpl_vars['ProductTypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['producttype'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['producttype']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item2']):
        $this->_foreach['producttype']['iteration']++;
?>
              <option value="<?php echo $this->_tpl_vars['item2']['id']; ?>
" <?php if ($this->_tpl_vars['item']['producttype_id'] == $this->_tpl_vars['item2']['id']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['item2']['name']; ?>
</option>
              <?php endforeach; else: ?>
              <?php endif; unset($_from); ?>
                          </select>
                        <?php echo $this->_tpl_vars['_category_management_explain']; ?>
</font></span></font></td>
                      </tr>
            <tr>
        <th><?php echo $this->_tpl_vars['_sorts_n']; ?>
</th>
        <td><select name="data[product][category_id]" id="ProductpriceCategory">
        <?php echo $this->_tpl_vars['Productcategories']; ?>
  
        </select></td>
        </tr>
                      <tr>
                        <th><?php echo $this->_tpl_vars['_product_brand']; ?>
</th>
                        <td class="tdright"><select name="data[product][brand_id]">
                            <option value="0"><?php echo $this->_tpl_vars['_select']; ?>
</option>
                            <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['UserBrands'],'selected' => $this->_tpl_vars['item']['brand_id']), $this);?>

                          </select></td>
                      </tr>
                      <tr>
                        <th><?php echo $this->_tpl_vars['_tags_n']; ?>
</th>
                        <td class="tdright"><input class="infoTableInput2" name="data[tag]" type="text" id="tag" value="<?php echo $this->_tpl_vars['item']['tag']; ?>
" /><label class="field_notice"><?php echo $this->_tpl_vars['_space_separate']; ?>
</label></td>
                      </tr>
                      <tr>
                        <th><?php echo $this->_tpl_vars['_product_image']; ?>
</th>
                        <td>
                            <input name="pic" type="file" id="uploadfile" onchange="preview()" />
                            <span class="gray"><br>
                              <?php echo $this->_tpl_vars['_image_size_format_provision']; ?>
</span></td>
                      </tr>
                      <tr>
            <?php if ($this->_tpl_vars['item']['image']): ?>
                        <th></th>
                        <td><a href="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['image'])) ? $this->_run_mod_handler('default', true, $_tmp, "javascript:;") : smarty_modifier_default($_tmp, "javascript:;")); ?>
" id="uploadpic_hover" rel="lightbox"><img id="uploadpic" src="<?php echo $this->_tpl_vars['item']['image']; ?>
.small.jpg" alt="<?php echo $this->_tpl_vars['item']['name']; ?>
" width="80" /></a></td>
            <?php endif; ?>
                      </tr>
                      <tr>
                        <th class="circle_bottomleft"></th>
                        <td class="circle_bottomright"><input name="save" type="submit" id="save" class="btn primary" value=" <?php echo $this->_tpl_vars['_confirm_submit']; ?>
 ">
            <?php if ($this->_tpl_vars['item']['id']): ?>
            &nbsp;<a href="<?php echo smarty_function_the_url(array('module' => 'product','id' => ($this->_tpl_vars['item']['id'])), $this);?>
" title="<?php echo $this->_tpl_vars['_preview']; ?>
<?php echo $this->_tpl_vars['item']['name']; ?>
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
</script>
<?php echo '
<script>
jQuery(document).ready(function($) {
	$("#ProductpriceCategory").val("{$item.category_id|default:0}")
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