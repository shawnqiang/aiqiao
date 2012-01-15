<?php /* Smarty version 2.6.18, created on 2012-01-01 06:08:22
         compiled from adzone.edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'adzone.edit.html', 89, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_ads']; ?>
 &raquo; <?php echo $this->_tpl_vars['_adzone']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_adzone']; ?>
</h3> 
    <ul class="subnav">
		<li><a href="adzone.php"><?php echo $this->_tpl_vars['_management']; ?>
</a></li>
        <li><a class="btn1" href="adzone.php?do=edit"><span><?php echo $this->_tpl_vars['_add_or_edit']; ?>
</span></a></li>
        <li><a href="<?php if ($this->_tpl_vars['id']): ?>adzone.php?do=makejs&id=<?php echo $this->_tpl_vars['id']; ?>
<?php else: ?>javascript:;<?php endif; ?>"><?php echo $this->_tpl_vars['_make_javascript_code']; ?>
</a></li>
    </ul>
</div>
<div class="info">
  <form method="post" action="adzone.php" id="EditFrm" name="edit_frm">
  <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
">
  <input type="hidden" name="page" value="<?php echo $_GET['page']; ?>
" />
    <table class="infoTable">
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_serial_number']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5">          
		<input class="infoTableInput2" name="adzone[id]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" /></td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_the_title']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5">          
		<input class="infoTableInput2" name="adzone[name]" value="<?php echo $this->_tpl_vars['item']['name']; ?>
" /></td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_display_objects']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5">
		<select multiple name="membergroup_ids[]" id="MembergroupIds">
			<option value="0"><?php echo $this->_tpl_vars['_no_limit']; ?>
</option>
			<?php $_from = $this->_tpl_vars['Membergroups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['membergroup'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['membergroup']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key1'] => $this->_tpl_vars['item1']):
        $this->_foreach['membergroup']['iteration']++;
?>
			<option value="<?php echo $this->_tpl_vars['key1']; ?>
"><?php echo $this->_tpl_vars['item1']; ?>
</option>
			<?php endforeach; endif; unset($_from); ?>
		</select><label class="field_notice"><?php echo $this->_tpl_vars['_does_not_appear_in_its_advertising_space_and_advertising']; ?>
</label>
		</td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_content_digest']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><textarea style="width:550px;height:50px;" name="adzone[description]" id="dataTradeContent"><?php echo $this->_tpl_vars['item']['description']; ?>
</textarea></td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_the_price']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput2" name="adzone[price]" value="<?php echo $this->_tpl_vars['item']['price']; ?>
" type="text" /></td>
      </tr>      
      <tr>
        <th class="paddingT15"><?php echo $this->_tpl_vars['_width']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput2" name="adzone[width]" value="<?php echo $this->_tpl_vars['item']['width']; ?>
" type="text" /></td>
      </tr>
      <tr>
        <th class="paddingT15"><?php echo $this->_tpl_vars['_height']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput2" name="adzone[height]" value="<?php echo $this->_tpl_vars['item']['height']; ?>
" type="text" /></td>
      </tr>      
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_adzone_type']; ?>
</th>
        <td class="paddingT15 wordSpacing5">
			<select name="adzone[what]" id="AdzoneWhat">
				<option value="1"><?php echo $this->_tpl_vars['_site_built']; ?>
 <?php echo $this->_tpl_vars['_advertising']; ?>
</option>
				<option value="2"><?php echo $this->_tpl_vars['_site_external']; ?>
 <?php echo $this->_tpl_vars['_advertising']; ?>
</option>
			</select>
		</td>
      </tr>
      <tbody id="AdzoneWhat2" style="display:none;">
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_ads']; ?>
 HTML <?php echo $this->_tpl_vars['_code']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5">
        <textarea style="width:550px;height:50px;" name="adzone[additional_adwords]" id="dataTradeContent"><?php echo $this->_tpl_vars['item']['additional_adwords']; ?>
</textarea>        </td>
      </tr>
      </tbody>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_pattern']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5">
			<select name="adzone[style]" id="AdzoneStyle">
				<option value="0"><?php echo $this->_tpl_vars['_default']; ?>
</option>
				<option value="1"><?php echo $this->_tpl_vars['_flash_image_rotation']; ?>
</option>
			</select>
		</td>
      </tr>
      <tr>
        <th></th>
        <td class="ptb20">
			<input class="formbtn" type="submit" name="save" value="<?php echo $this->_tpl_vars['_publish']; ?>
" />		</td>
      </tr>
    </table>
  </form>
</div>
<script>
var what_val = "<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['what'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1)); ?>
";
var style_val = "<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['style'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
";
var membergroup_ids = "<?php echo $this->_tpl_vars['item']['membergroup_ids']; ?>
";
var sel_membergroup_ids = "<?php echo $this->_tpl_vars['item']['sel_membergroup_ids']; ?>
";
</script>
<?php echo '
<script>
$(function(){
	if(membergroup_ids!="") $(\'#MembergroupIds\').val(sel_membergroup_ids);
	$("#AdzoneWhat").val(what_val);
	$("#AdzoneStyle").val(style_val);
	$("#AdzoneWhat").change( function() { 
			$("#AdzoneWhat2").toggle();
		} 
	);
});
if(what_val==2){
	$("#AdzoneWhat2").show();
}
</script>
'; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>