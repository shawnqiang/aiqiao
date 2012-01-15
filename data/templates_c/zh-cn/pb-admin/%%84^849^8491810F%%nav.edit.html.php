<?php /* Smarty version 2.6.18, created on 2012-01-01 06:13:07
         compiled from nav.edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_radios', 'nav.edit.html', 39, false),array('modifier', 'default', 'nav.edit.html', 39, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_templet']; ?>
 &raquo; <?php echo $this->_tpl_vars['_nav']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_nav']; ?>
</h3> 
    <ul class="subnav">
		<li><a href="nav.php"><?php echo $this->_tpl_vars['_management']; ?>
</a></li>
        <li><a class="btn1" href="nav.php?do=edit"><span><?php echo $this->_tpl_vars['_add_or_edit']; ?>
</span></a></li>
    </ul>
</div>
<div class="info">
  <form method="post" action="nav.php" id="EditFrm" name="edit_frm">
  <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" />
  <input type="hidden" name="page" value="<?php echo $_GET['page']; ?>
" />
    <table class="infoTable">
	<?php if ($this->_tpl_vars['item']['id']): ?>
      <tr>
        <th class="paddingT15"><?php echo $this->_tpl_vars['_serial_number']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><?php echo $this->_tpl_vars['item']['id']; ?>
</td>
      </tr>
	<?php else: ?>
      <tr>
        <th class="paddingT15"><?php echo $this->_tpl_vars['_serial_number']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput2" name="data[nav][id]" value="" /></td>
      </tr>
	<?php endif; ?>	
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_title']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5">          
		<input class="infoTableInput2" name="data[nav][name]" value="<?php echo $this->_tpl_vars['item']['name']; ?>
" /></td>
      </tr>
      <tr>
        <th class="paddingT15"><?php echo $this->_tpl_vars['_display_order']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput2" name="data[nav][display_order]" value="<?php echo $this->_tpl_vars['item']['display_order']; ?>
" type="text" /></td>
      </tr>
      <tr>
        <th class="paddingT15"><?php echo $this->_tpl_vars['_whether_or']; ?>
 <?php echo $this->_tpl_vars['_show_it']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><?php echo smarty_function_html_radios(array('name' => "data[nav][status]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['status'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1)),'separator' => ""), $this);?>
</td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_link_url']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput2" name="data[nav][url]" value="<?php echo $this->_tpl_vars['item']['url']; ?>
" type="text" /><label class="field_notice"><?php echo $this->_tpl_vars['_only_need_relative_url']; ?>
</label></td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_notes']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><textarea style="width:550px;height:100px;" name="data[nav][description]"><?php echo $this->_tpl_vars['item']['description']; ?>
</textarea></td>
      </tr>
      <tr>
        <th></th>
        <td class="ptb20">
			<input class="formbtn" type="submit" name="save" value="<?php echo $this->_tpl_vars['_save_and_pub']; ?>
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