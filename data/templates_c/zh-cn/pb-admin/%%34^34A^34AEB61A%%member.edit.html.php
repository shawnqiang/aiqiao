<?php /* Smarty version 2.6.18, created on 2012-01-01 12:48:38
         compiled from member.edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'fetch', 'member.edit.html', 2, false),array('function', 'html_options', 'member.edit.html', 38, false),array('function', 'html_checkboxes', 'member.edit.html', 68, false),array('modifier', 'default', 'member.edit.html', 45, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo smarty_function_fetch(array('file' => "../scripts/date.js"), $this);?>

<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_member_center']; ?>
 &raquo; <?php echo $this->_tpl_vars['_user_center']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_member']; ?>
</h3> 
    <ul class="subnav">
		<li><a href="member.php"><?php echo $this->_tpl_vars['_management']; ?>
</a></li>
        <li><a class="btn1" href="member.php?do=edit"><span><?php echo $this->_tpl_vars['_add_or_edit']; ?>
</span></a></li>
        <li><a href="membertype.php"><?php echo $this->_tpl_vars['_sorts']; ?>
</a></li>
    </ul>
</div>
<div class="info">
  <form method="post" action="member.php" id="EditFrm" name="edit_frm">
  	<input type="hidden" name="page" value="<?php echo $_GET['page']; ?>
" />
	<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" />
    <table class="infoTable">
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_cp_username_n']; ?>
</th>
        <td class="paddingT15 wordSpacing5">          
		<input class="infoTableInput2" name="data[member][username]" value="<?php echo $this->_tpl_vars['item']['username']; ?>
" /></td>
      </tr>   
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_space']; ?>
 <?php echo $this->_tpl_vars['_naming_n']; ?>
</th>
        <td class="paddingT15 wordSpacing5">          
		<input class="infoTableInput2" name="data[member][space_name]" value="<?php echo $this->_tpl_vars['item']['space_name']; ?>
" /></td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_email_addr']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5">          
		<input class="infoTableInput2" name="data[member][email]" value="<?php echo $this->_tpl_vars['item']['email']; ?>
" /></td>
      </tr>   
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_membership_type']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5">
        <select name="data[member][membertype_id]" id="dataMemberTypeId">
        <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['Membertypes'],'selected' => $this->_tpl_vars['item']['membertype_id']), $this);?>

        </select>
        </td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_integral']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5">          
		<input class="infoTableInput2" name="data[member][points]" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['points'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
" /></td>
      </tr>   
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_balance']; ?>
</th>
        <td class="paddingT15 wordSpacing5">          
		<input class="infoTableInput2" name="data[member][balance_amount]" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['balance_amount'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
" /></td>
      </tr>   
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_trust_star']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5">          
		<input class="infoTableInput2" name="data[member][credits]" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['credits'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
" /></td>
      </tr>   
      <tr>
        <th class="paddingT15"><?php echo $this->_tpl_vars['_member_group']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5">
        <select name="data[member][membergroup_id]" id="dataMemberGroupId">
        <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['MembergroupOptions'],'selected' => $this->_tpl_vars['item']['membergroup_id']), $this);?>

        </select>
        <?php if ($this->_tpl_vars['item']['groupimage']): ?><img src="<?php echo $this->_tpl_vars['item']['groupimage']; ?>
" /><?php endif; ?>
        </td>
      </tr>
      <tr>
        <th class="paddingT15"><?php echo $this->_tpl_vars['_trust_type']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><?php echo smarty_function_html_checkboxes(array('name' => "data[trusttype]",'options' => $this->_tpl_vars['Trusttypes'],'checked' => $this->_tpl_vars['item']['selected_trusttypeid'],'separator' => ' '), $this);?>
</td>
      </tr>
      <tr>
        <th class="paddingT15"><?php echo $this->_tpl_vars['_business_hours']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><input name="data[service_start_date]" id="date1" value="<?php echo $this->_tpl_vars['item']['service_start_date']; ?>
" /><span class="btn_calendar" id="calendar-date1"></span><?php echo $this->_tpl_vars['_arrive_to']; ?>
<input name="data[service_end_date]" value="<?php echo $this->_tpl_vars['item']['service_end_date']; ?>
" id="date2" /><span class="btn_calendar" id="calendar-date2"></span></td>
      </tr>
      <tr>
        <th class="paddingT15"><?php echo $this->_tpl_vars['_status']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5">
        <select name="data[member][status]" id="dataMemberStatus">
        <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['MemberStatus'],'selected' => ((is_array($_tmp=@$this->_tpl_vars['item']['status'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1))), $this);?>

        </select>       
        </td>
      </tr>
      <tr>
        <th class="paddingT15"><?php echo $this->_tpl_vars['_new_password']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput2" name="data[userpass]" id="dataUserpass" value="" type="password" /><label class="field_notice"><?php echo $this->_tpl_vars['_not_modify_not_complete']; ?>
</label></td>
      </tr>
      <tr>
        <th class="paddingT15"><?php echo $this->_tpl_vars['_re_input_new_password']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput2" name="data[re_userpass]" id="dataReUserpass" value="" type="password" /></td>
      </tr>
      <tr>
        <th></th>
        <td class="ptb20">
			<input class="formbtn" type="submit" name="save" value="<?php echo $this->_tpl_vars['_save']; ?>
" />		</td>
      </tr>
    </table>
  </form>
</div>
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
</script>
'; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>