<?php /* Smarty version 2.6.18, created on 2012-01-01 06:07:22
         compiled from adminer.password.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_member_center']; ?>
 &raquo; <?php echo $this->_tpl_vars['_administrator']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_administrator']; ?>
</h3> 
    <ul class="subnav">
		<li><a href="adminer.php"><?php echo $this->_tpl_vars['_management']; ?>
</a></li>
		<li><a href="adminer.php?do=edit"><?php echo $this->_tpl_vars['_add_or_edit']; ?>
</a></li>
        <li><a class="btn1" href="adminer.php?do=password"><span><?php echo $this->_tpl_vars['_change_pass']; ?>
</span></a></li>
    </ul>
</div>
<div class="info">
  <form method="post" action="adminer.php" id="EditFrm" name="edit_frm">
    <table class="infoTable">
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_old_password']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput2" name="data[old_pass]" type="password" id="dataOldPass" /></td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_new_password']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput2" name="data[adminer][user_pass]" type="password" id="dataAdminerUserPass" /></td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_re_input_new_password']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput2" name="data[new_pass]" type="password" id="dataNewPass" /></td>
      </tr>
      <tr>
        <th></th>
        <td class="ptb20">
			<input class="formbtn" type="submit" name="changepass" value="<?php echo $this->_tpl_vars['_content_digest']; ?>
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