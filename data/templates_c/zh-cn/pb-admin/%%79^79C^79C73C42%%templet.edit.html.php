<?php /* Smarty version 2.6.18, created on 2012-01-18 12:34:05
         compiled from templet.edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_radios', 'templet.edit.html', 46, false),array('modifier', 'default', 'templet.edit.html', 46, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_templet']; ?>
 &raquo; <?php echo $this->_tpl_vars['_company_templet']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_company_templet']; ?>
</h3> 
    <ul class="subnav">
		<li><a href="templet.php"><?php echo $this->_tpl_vars['_manage']; ?>
</a></li>
        <li><a class="btn1" href="templet.php?do=edit&id=<?php echo $this->_tpl_vars['item']['id']; ?>
"><span><?php echo $this->_tpl_vars['_edit']; ?>
</span></a></li>
    </ul>
</div>
<div class="info">
  <form action="templet.php" method="post" id="EditFrm" name="edit_frm" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['item']['id']; ?>
">
  <input type="hidden" name="type" value="<?php echo $_GET['type']; ?>
">
  <input type="hidden" name="page" value="<?php echo $_GET['page']; ?>
" />
    <table class="infoTable">
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_template_name']; ?>
</th>
        <td class="paddingT15 wordSpacing5">          
		<input class="infoTableInput2" name="data[templet][title]" value="<?php echo $this->_tpl_vars['item']['title']; ?>
" /><label class="field_notice"><?php echo $this->_tpl_vars['_title_display']; ?>
</label>        </td>
      </tr>
	  <?php if ($_GET['type'] == 'user'): ?>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_applicable_membership_type']; ?>
</th>
        <td class="paddingT15 wordSpacing5">
			<select multiple name="data[require_membertype][]" id="RequireMembertype">
			<option value="0"><?php echo $this->_tpl_vars['_no_limit']; ?>
</option>
			<?php $_from = $this->_tpl_vars['Membertypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['typekey'] => $this->_tpl_vars['typename']):
?>
			<option value="<?php echo $this->_tpl_vars['typekey']; ?>
"><?php echo $this->_tpl_vars['typename']; ?>
</option>
			<?php endforeach; endif; unset($_from); ?>
			</select><?php echo $this->_tpl_vars['_click_ctrl_n_select']; ?>
</td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_applicable_member_group']; ?>
</th>
        <td class="paddingT15 wordSpacing5">
			<select multiple name="data[require_membergroups][]" id="RequireMembergroups">
			<option value="0"><?php echo $this->_tpl_vars['_no_limit']; ?>
</option>
			<?php $_from = $this->_tpl_vars['Membergroups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['groupkey'] => $this->_tpl_vars['groupitem']):
?>
			<option value="<?php echo $this->_tpl_vars['groupkey']; ?>
"><?php echo $this->_tpl_vars['groupitem']; ?>
</option>
			<?php endforeach; endif; unset($_from); ?>
			</select><?php echo $this->_tpl_vars['_click_ctrl_n_select']; ?>
</td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_if_default']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><?php echo smarty_function_html_radios(array('name' => "data[templet][is_default]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['is_default'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)),'separator' => ""), $this);?>
</td>
      </tr>
	  <?php endif; ?>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_description_n']; ?>
</th>
        <td class="paddingT15 wordSpacing5">
        <textarea style="width:550px;height:50px;" name="data[templet][description]"><?php echo $this->_tpl_vars['item']['description']; ?>
</textarea>        </td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_if_valid']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><?php echo smarty_function_html_radios(array('name' => "data[templet][status]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['status'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)),'separator' => ""), $this);?>
</td>
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
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>