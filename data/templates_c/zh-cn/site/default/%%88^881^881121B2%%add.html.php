<?php /* Smarty version 2.6.18, created on 2012-01-03 07:48:18
         compiled from default/market/add.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'market', 'default/market/add.html', 30, false),array('function', 'the_url', 'default/market/add.html', 41, false),array('function', 'formhash', 'default/market/add.html', 47, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['_add_market']),'nav_id' => 7)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script src="scripts/langs/<?php echo $this->_tpl_vars['JsLanguage']; ?>
.js" charset="<?php echo $this->_tpl_vars['charset']; ?>
"></script>
<script src="scripts/jquery/jquery.textbox.js" charset="<?php echo $this->_tpl_vars['charset']; ?>
"></script>
<script>
var allows_maximum_input = "<?php echo $this->_tpl_vars['_allows_maximum_input']; ?>
";
var can_also_enter = "<?php echo $this->_tpl_vars['_can_also_enter']; ?>
";
</script>
<?php echo '
<script>
jQuery(document).ready(function($) {
	$("#Content").textbox({
		maxLength: 255,
		onInput: function(event, status) {
			$("#txtTip").html(allows_maximum_input+" <strong style=\'font-family:Arial;font-size:1.5em;\'>" + status.maxLength + "</strong> "+can_also_enter+" <strong style=\'font-family:Arial;font-size:1.5em;\'>" + status.leftLength + "</strong>");
		}
	});
})
</script>
'; ?>

<div id="main" class="container">
    <div class="tips"><span><?php echo $this->_tpl_vars['position']; ?>
</span></div>
    <div class="row">
      <div class="span4">
        <div class="mod">
          <div class="mod-hd">
            <h3><?php echo $this->_tpl_vars['_recommended_market']; ?>
</h3>
          </div>
          <div class="mod-bd">
            <ul class="unstyled">
            <?php $this->_tag_stack[] = array('market', array('row' => 10)); $_block_repeat=true;smarty_block_market($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
            <li><?php echo $this->_tpl_vars['market']['link']; ?>
</li>
            <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_market($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          </ul>
          </div>
        </div>
      </div>

      <div class="span13">
        <div class="mod">
          <div class="mod-hd">
            <span class="search_more" ><a href="<?php echo smarty_function_the_url(array('module' => 'search','do' => 'market'), $this);?>
"><span class="raquo">&raquo;</span><?php echo $this->_tpl_vars['_more']; ?>
 <?php echo $this->_tpl_vars['_market_info']; ?>
</a></span>
            <h2><span class="title_mouse"><?php echo $this->_tpl_vars['_added_market']; ?>
</span></h2>
          </div>
          <div class="mod-bd">
                    <form name="marketfrm" id="marketFrm" action="<?php echo $_SERVER['PHP_SELF']; ?>
" method="post">
                    <input type="hidden" name="do" value="add_market" />
                    <?php echo smarty_function_formhash(array(), $this);?>

                        <table border="0" id="table_con">
                          <tr>
                            <td width="113" align="center" valign="middle"><?php echo $this->_tpl_vars['_market_name']; ?>
</td>
                            <td height="30"><label>
                              <input type="text" name="data[market][name]" id="MarketName" value="">
                            </label></td>
                          </tr>
                          <tr>
                            <td align="center" valign="middle"><?php echo $this->_tpl_vars['_area']; ?>
</td>
                            <td height="30" align="left" valign="middle">
                          <p id="dataArea">
                            <select name="area[id][1]" id="dataMarketAreaId1" class="level_1" style="width:120px;" ></select>
                            <select name="area[id][2]" id="dataMarketAreaId2" class="level_2" style="width:120px;"></select>
                            <select name="area[id][3]" id="dataMarketAreaId3" class="level_3" style="width:120px;"></select>
                          </p>
                             </td>
                          </tr>
                          <tr>
                            <td align="center" valign="middle"><?php echo $this->_tpl_vars['_belong_industry']; ?>
</td>
                            <td height="30" align="left" valign="middle">
                          <p id="dataIndustry">
                            <select name="industry[id][1]" id="dataMarketIndustryId1" class="level_1" style="width:120px;" ></select>
                            <select name="industry[id][2]" id="dataMarketIndustryId2" class="level_2" style="width:120px;"></select>
                            <select name="industry[id][3]" id="dataMarketIndustryId3" class="level_3" style="width:120px;"></select>
                          </p>                
                            </td>
                          </tr>
                          <tr>
                            <td align="center" valign="middle"><?php echo $this->_tpl_vars['_market_introduction']; ?>
</td>
                            <td><label>
                              <textarea name="data[market][content]" id="Content" rows="5" cols="35"></textarea>
                              </label><div id="txtTip"></div></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td height="30" valign="middle">
                              <input name="image_button" type="button" id="addmarket" alt="<?php echo $this->_tpl_vars['_submit']; ?>
" onclick="return checkFrm();" class="btn" value="<?php echo $this->_tpl_vars['_submit_market']; ?>
" />
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
var app_language = '<?php echo $this->_tpl_vars['AppLanguage']; ?>
';
</script>
<script src="scripts/jquery.js"></script>
<script src="scripts/multi_select.js" charset="<?php echo $this->_tpl_vars['charset']; ?>
"></script>
<script src="scripts/script_area.js"></script>
<script src="scripts/script_industry.js"></script>
<script>
$("#MarketName").focus();
var input_market_name = "<?php echo $this->_tpl_vars['_input_market_name']; ?>
";
</script>
<?php echo '
<script>
function checkFrm(){
	if($("#MarketName").val()==""){
		alert(input_market_name);
		$("#MarketName").focus();
		return false;
	}else{
		$("#marketFrm").submit();
		return true;
	}
}
</script>
'; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>