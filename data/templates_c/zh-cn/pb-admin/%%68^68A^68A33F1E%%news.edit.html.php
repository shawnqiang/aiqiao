<?php /* Smarty version 2.6.18, created on 2012-01-01 12:44:45
         compiled from news.edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'fetch', 'news.edit.html', 8, false),array('function', 'html_radios', 'news.edit.html', 184, false),array('function', 'editor', 'news.edit.html', 200, false),array('modifier', 'sprintf', 'news.edit.html', 82, false),array('modifier', 'default', 'news.edit.html', 184, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script language="javascript" src="../scripts/swfobject.js"></script>
<link href="../scripts/jquery/uploadify/uploadify.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="../scripts/jquery/uploadify/jquery.uploadify.js"></script>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_trade_management']; ?>
 &raquo; <?php echo $this->_tpl_vars['_industry_news']; ?>
</p>
</div>
<?php echo smarty_function_fetch(array('file' => "../scripts/date.js"), $this);?>

<script>
var click_copy_to_clipboard = "<?php echo $this->_tpl_vars['_click_copy_to_clipboard']; ?>
";
</script>
<?php echo '
<script type="text/javascript">
$(document).ready(function()
{
	$("#save_draft").click(
		function(){
			$("#is_draft").val(1);
			$("#EditFrm").submit();
		}
	);
	$("#uploadify").uploadify({
		\'uploader\': \'../scripts/jquery/uploadify/uploadify.swf\',
		\'script\': \'../ajax.php\',
		\'cancelImg\': \'../scripts/jquery/uploadify/cancel.png\',
		\'queueID\': \'fileQueue\',
		\'method\'      : \'post\',
		\'expressInstall\' : \'../images/expressinstall.swf\',
		\'auto\': false,
		\'buttonText\' : \'Select ...\',
		\'scriptData\'  : {\'do_action\':\'uploadify\'},     
		\'onComplete\'     : function(event,queueId,fileObj,response,data){ 
							//eval("var obj1="+response);
							var obj1=jQuery.parseJSON(response);
							$("#message").append("<p><a href=\'"+obj1.url+"\' title=\'"+obj1.name+"\' target=\'_blank\'>"+obj1.name+"</a>&nbsp;<a href=\'javascript:;\' onclick=\\"clipboardData.setData(\'Text\',\'"+obj1.url+"\');\\">"+click_copy_to_clipboard+"</a></p>");
					   },
		\'multi\': true
	});
});  
</script>
'; ?>

<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_industry_news']; ?>
</h3> 
    <ul class="subnav">
		<li><a href="news.php"><?php echo $this->_tpl_vars['_management']; ?>
</a></li>
        <li><a class="btn1" href="news.php?do=edit"><span><?php echo $this->_tpl_vars['_add_or_edit']; ?>
</span></a></li>
        <li><a href="newstopic.php"><?php echo $this->_tpl_vars['_topic_news']; ?>
</a></li>
        <li><a href="newstype.php"><?php echo $this->_tpl_vars['_sorts']; ?>
</a></li>
		<li><a href="newsgather.php"><?php echo $this->_tpl_vars['_collection']; ?>
</a></li>
    </ul>
</div>
<div class="info">
  <form method="post" action="news.php" id="EditFrm" name="edit_frm" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" />
  <input type="hidden" name="do" value="save_news" />
  <input type="hidden" name="is_draft" id="is_draft" value="0" />
  <input type="hidden" name="page" value="<?php echo $_GET['page']; ?>
" />
    <table class="infoTable">
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_title']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5">          
		<input name="data[news][title]" value="<?php echo $this->_tpl_vars['item']['title']; ?>
" /></td>
      </tr>      
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_types']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5">
        <select name="data[news][type_id]" id="NewsTypeId">
        <option value="0"><?php echo $this->_tpl_vars['_pls_select']; ?>
</option>
        <?php echo $this->_tpl_vars['NewstypeOptions']; ?>

        </select>
        </td>
      </tr>
      <tr>
        <th class="paddingT15">flag <?php echo $this->_tpl_vars['_param_value']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput2" name="data[news][flag]" value="<?php echo $this->_tpl_vars['item']['flag']; ?>
" type="text" /></td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_in_area']; ?>
</th>
        <td class="paddingT15 wordSpacing5">
        <select name="data[news][area_id]" id="NewsAreaId">
        <option value="0"><?php echo $this->_tpl_vars['_no']; ?>
</option>
        <optgroup label="<?php echo ((is_array($_tmp=$this->_tpl_vars['_area_levels'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, 1) : sprintf($_tmp, 1)); ?>
">
        <?php $_from = $this->_tpl_vars['CacheAreas'][1]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key1'] => $this->_tpl_vars['item1']):
?>
        <option value="<?php echo $this->_tpl_vars['key1']; ?>
" <?php if ($this->_tpl_vars['key1'] == $this->_tpl_vars['item']['area_id']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['item1']; ?>
</option>
        <?php endforeach; endif; unset($_from); ?>
        </optgroup>
        <optgroup label="<?php echo ((is_array($_tmp=$this->_tpl_vars['_area_levels'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, 2) : sprintf($_tmp, 2)); ?>
">
        <?php $_from = $this->_tpl_vars['CacheAreas'][2]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key2'] => $this->_tpl_vars['item2']):
?>
        <option value="<?php echo $this->_tpl_vars['key2']; ?>
" <?php if ($this->_tpl_vars['key2'] == $this->_tpl_vars['item']['area_id']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['item2']; ?>
</option>
        <?php endforeach; endif; unset($_from); ?>
        </optgroup>
        </select>
       </td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_industry_sort']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5">
        <select name="data[news][industry_id]" id="NewsIndustryId">
        <option value="0"><?php echo $this->_tpl_vars['_no']; ?>
</option>
        <optgroup label="<?php echo ((is_array($_tmp=$this->_tpl_vars['_type_levels'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, 1) : sprintf($_tmp, 1)); ?>
">
        <?php $_from = $this->_tpl_vars['CacheIndustries'][1]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key3'] => $this->_tpl_vars['item3']):
?>
        <option value="<?php echo $this->_tpl_vars['key3']; ?>
" <?php if ($this->_tpl_vars['key3'] == $this->_tpl_vars['item']['industry_id']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['item3']; ?>
</option>
        <?php endforeach; endif; unset($_from); ?>
        </optgroup>
        <optgroup label="<?php echo ((is_array($_tmp=$this->_tpl_vars['_type_levels'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, 2) : sprintf($_tmp, 2)); ?>
">
        <?php $_from = $this->_tpl_vars['CacheIndustries'][2]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key4'] => $this->_tpl_vars['item4']):
?>
        <option value="<?php echo $this->_tpl_vars['key4']; ?>
" <?php if ($this->_tpl_vars['key4'] == $this->_tpl_vars['item']['industry_id']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['item4']; ?>
</option>
        <?php endforeach; endif; unset($_from); ?>
        </optgroup>
        </select>
       </td>
      </tr>
	  <?php if ($this->_tpl_vars['item']['type'] == 1 || $_GET['action'] == 'convert'): ?>
	  <input type="hidden" name="data[news][type]" value="1" />      
	  <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_content']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><input type="text" name="data[news][content]" value="<?php echo $this->_tpl_vars['item']['content']; ?>
" /></td>
      </tr>
	  <?php else: ?>
      <tr>
        <th class="paddingT15"><?php echo $this->_tpl_vars['_source_n']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput2" name="data[news][source]" value="<?php echo $this->_tpl_vars['item']['source']; ?>
" type="text" /></td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_visit_permission']; ?>
</th>
        <td class="paddingT15 wordSpacing5">
        <select multiple name="require_membertype[]" id="NewsRequireMembertype">
			<option value="0"><?php echo $this->_tpl_vars['_no_limit']; ?>
</option>
			<?php $_from = $this->_tpl_vars['Membertypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['membertype'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['membertype']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key1'] => $this->_tpl_vars['item1']):
        $this->_foreach['membertype']['iteration']++;
?>
			<option value="<?php echo $this->_tpl_vars['key1']; ?>
"><?php echo $this->_tpl_vars['item1']; ?>
</option>
			<?php endforeach; endif; unset($_from); ?>
		</select><?php echo $this->_tpl_vars['_click_ctrl_n_select']; ?>
</td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_attachments']; ?>
</th>
        <td class="paddingT15 wordSpacing5">
<div id="fileQueue"></div>
<div id="message"></div>
		<input type="file" name="uploadify" id="uploadify" />
  <a href="javascript:$('#uploadify').uploadifyUpload()"><?php echo $this->_tpl_vars['_upload']; ?>
</a> | 
  <a href="javascript:$('#uploadify').uploadifyClearQueue()"><?php echo $this->_tpl_vars['_cancel']; ?>
 <?php echo $this->_tpl_vars['_upload']; ?>
</a>
</td>
      </tr>      
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_labels']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput2" name="data[tag]" type="text" id="tag" value="<?php echo $this->_tpl_vars['item']['tag']; ?>
" /><label class="field_notice"><?php echo $this->_tpl_vars['_multi_seperate_by_quot_or_space']; ?>
</label>        </td>
      </tr>      
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_effective_period']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5">
        	<input type="text" name="data[news][start_time]" id="date1" value="<?php echo $this->_tpl_vars['item']['start_time']; ?>
" /><span class="btn_calendar" id="calendar-date1"></span><?php echo $this->_tpl_vars['_arrive_to']; ?>
<input type="text" name="data[news][end_time]" id="date2" value="<?php echo $this->_tpl_vars['item']['end_time']; ?>
" /><span class="btn_calendar" id="calendar-date2"></span>
        </td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_seo_title']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput2" name="data[meta][title]" type="text" id="seo_title" value="<?php echo $this->_tpl_vars['item']['seo_title']; ?>
" />        </td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_seo_keyword']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput2" name="data[meta][keyword]" type="text" id="seo_kewyord" value="<?php echo $this->_tpl_vars['item']['seo_keyword']; ?>
" />        </td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_seo_description']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><input name="data[meta][description]" type="text" id="seo_description" value="<?php echo $this->_tpl_vars['item']['seo_description']; ?>
" />        </td>
      </tr>
	  <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_content']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><textarea style="width:550px;height:100px;" name="data[news][content]" id="NewsContent"><?php echo $this->_tpl_vars['item']['content']; ?>
</textarea></td>
      </tr>
      <tr>
        <th class="paddingT15"><?php echo $this->_tpl_vars['_picture']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5">
        <input class="infoTableFile2" type="file" name="pic" id="pic" />
          <label class="field_notice"><?php echo $this->_tpl_vars['_image_format_support']; ?>
</label>
          <?php if ($this->_tpl_vars['item']['picture']): ?>
          <br /><span><img src="<?php echo $this->_tpl_vars['item']['image']; ?>
" alt="<?php echo $this->_tpl_vars['item']['name']; ?>
"/></span>
          <?php endif; ?>
        </td>
      </tr>
	  <?php endif; ?>
      <tr>
        <th class="paddingT15"><?php echo $this->_tpl_vars['_whether_or']; ?>
<?php echo $this->_tpl_vars['_commend']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5">          
		<?php echo smarty_function_html_radios(array('name' => "data[news][if_commend]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['if_commend'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')),'separator' => ' '), $this);?>
</td>
      </tr>
      <tr>
        <th></th>
        <td class="ptb20">
		<?php if (! $this->_tpl_vars['item']['id']): ?>
		<input class="formbtn" type="button" id="save_draft" name="save_draft" value="<?php echo $this->_tpl_vars['_save_draft']; ?>
" />
		<?php endif; ?>
			<input class="formbtn" type="submit" name="save" id="save" value="<?php echo $this->_tpl_vars['_save_and_pub']; ?>
" />		</td>
      </tr>
    </table>
  </form>
</div>
<script>
var type_id = "<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['type_id'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
";
</script>
<?php echo smarty_function_editor(array('type' => 'tiny_mce'), $this);?>

<?php echo '
<script>
Calendar.setup({
	trigger    : "calendar-date1",
	animation  : false,
	inputField : "date1",
	onSelect   : function() { this.hide() }
});
Calendar.setup({
	trigger    : "calendar-date2",
	animation  : false,
	inputField : "date2",
	onSelect   : function() { this.hide() }
});
jQuery(document).ready(function($) {
	$("#NewsTypeId").val(type_id)
})
</script>
'; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>