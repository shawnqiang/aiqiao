<?php /* Smarty version 2.6.18, created on 2012-01-01 06:13:32
         compiled from db.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_system_tool']; ?>
 &raquo; <?php echo $this->_tpl_vars['_database']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_database']; ?>
</h3> 
    <ul class="subnav">
		<li><a class="btn1" href="db.php"><span><?php echo $this->_tpl_vars['_db_backup']; ?>
</span></a></li>
        <li><a href="db.php?do=restore"><?php echo $this->_tpl_vars['_db_restore']; ?>
</a></li>
        <li><a href="db.php?do=query"><?php echo $this->_tpl_vars['_db_upgrade']; ?>
</a></li>
    </ul>
</div>
<div class="info">
  <form method="get" action="db.php" id="EditFrm" name="edit_frm">
  <input type="hidden" name="do" value="backup" />
    <table class="infoTable">
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_last_backup_time']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><?php echo $this->_tpl_vars['LastbackupTime']; ?>
</td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_backup_type']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><input type="radio" name="backup_type" value="1" checked="checked" /><?php echo $this->_tpl_vars['_all_site_data_backup']; ?>
</td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_backup_file_type']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><input type="radio" name="method" value="multivol" /><?php echo $this->_tpl_vars['_multi_volume']; ?>
&nbsp;<input type="radio" name="method" value="singlevol" checked="checked" /><?php echo $this->_tpl_vars['_single_volume']; ?>
</td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_notes']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput2" name="message" value="" /></td>
      </tr>
      <tr>
        <th></th>
        <td class="ptb20">
			<input class="formbtn" type="button" name="backup_now" id="BackupNow" value="<?php echo $this->_tpl_vars['_backup_now']; ?>
" />		</td>
      </tr>
    </table>
  </form>
</div>
<script>
var on_backup = "<?php echo $this->_tpl_vars['_on_backup_ing']; ?>
";
</script>
<?php echo '
<script language="JavaScript">
$(document).ready(function() { 
$(\'#BackupNow\').click(function() {
	$(\'#BackupNow\').attr(\'disabled\',"true");
	$(\'#BackupNow\').val(on_backup);
	$(\'#EditFrm\').submit();
});
})
</script>
'; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>