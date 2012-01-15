<?php /* Smarty version 2.6.18, created on 2012-01-01 06:03:28
         compiled from industrytype.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_setting_global']; ?>
 &raquo; <?php echo $this->_tpl_vars['_industry']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_industry']; ?>
</h3> 
    <ul class="subnav">
		<li><a href="industry.php"><?php echo $this->_tpl_vars['_management']; ?>
</a></li>
        <li><a href="industry.php?do=edit"><?php echo $this->_tpl_vars['_add_or_edit']; ?>
</a></li>
        <li><a class="btn1" href="industrytype.php"><span><?php echo $this->_tpl_vars['_sorts']; ?>
</span></a></li>
        <li><a href="industry.php?do=clear"><?php echo $this->_tpl_vars['_clearing']; ?>
</a></li>
        <li><a href="industry.php?do=refresh"><?php echo $this->_tpl_vars['_update_cache']; ?>
</a></li>
    </ul>
</div>
<div class="info">
  <form method="post" id="EditFrm" name="edit_frm">
  <input type="hidden" name="do" value="save" />
    <table class="infoTable">
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_one_line_one_category']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><textarea style="width:250px;height:100px;" name="data[sort]" id="dataSort"><?php echo $this->_tpl_vars['sorts']; ?>
</textarea>
		<label class="field_notice"><?php echo $this->_tpl_vars['_if_want_add_click_enter']; ?>
</label></td>
      </tr>
      <tr>
        <th></th>
        <td class="ptb20">
			<input class="formbtn" type="submit" value="<?php echo $this->_tpl_vars['_save']; ?>
" />
		</td>

      </tr>
    </table>
  </form>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>