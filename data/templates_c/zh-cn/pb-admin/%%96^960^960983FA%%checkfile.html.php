<?php /* Smarty version 2.6.18, created on 2012-01-01 06:13:47
         compiled from checkfile.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'sprintf', 'checkfile.html', 11, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_system_tool']; ?>
 &raquo; <?php echo $this->_tpl_vars['_file_checksum']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_file_checksum']; ?>
</h3> 
</div>
<?php if ($this->_tpl_vars['flag'] == '0'): ?>
<div class="mrightTop"> 
    <div class="fontl"> 
	<?php echo ((is_array($_tmp=$this->_tpl_vars['_check_that_the_file'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, $this->_tpl_vars['_soft_name']) : sprintf($_tmp, $this->_tpl_vars['_soft_name'])); ?>

    </div> 
    <div class="fontl"></div> 
</div> 
<div class="info">
  <form method="post" action="checkfile.php" id="EditFrm" name="edit_frm">
  <input type="hidden" name="check" value="check" />
    <table class="infoTable">
      <tr>
        <th></th>
        <td class="ptb20">
			<input class="formbtn" type="button" name="check"  id="Submit"  value="<?php echo $this->_tpl_vars['_start_check']; ?>
" />		</td>
      </tr>
    </table>
  </form>
  </div>
  <?php else: ?>
   <div class="tdare">
  <table width="100%" cellspacing="0" class="dataTable" summary="<?php echo $this->_tpl_vars['_data_zone']; ?>
">
    <tbody>
		<tr>
		  <td><?php echo $this->_tpl_vars['_file_name']; ?>
</td>
		  <td><?php echo $this->_tpl_vars['_file_size']; ?>
</td>
		  <td><?php echo $this->_tpl_vars['_last_modified']; ?>
</td>
		  <td><?php echo $this->_tpl_vars['_status']; ?>
</td>
		</tr>
		<?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
		<tr class="tatr2">
		  <td><?php echo $this->_tpl_vars['item']['name']; ?>
</td>
		  <td><?php echo $this->_tpl_vars['item']['size']; ?>
</td>
		  <td><?php echo $this->_tpl_vars['item']['time']; ?>
</td>
		  <td><?php echo $this->_tpl_vars['item']['status']; ?>
</td>
		</tr>
		<?php endforeach; else: ?>
		<tr class="no_data info">
		  <td colspan="5"><?php echo $this->_tpl_vars['_no_datas']; ?>
</td>
		</tr>
		<?php endif; unset($_from); ?>
    </tbody>
	</table>
</div>
<?php endif; ?>
<script language="JavaScript">
var please_wait = "<?php echo $this->_tpl_vars['_please_wait']; ?>
";
</script>
<?php echo '
<script language="JavaScript">
$(document).ready(function() { 
$(\'#Submit\').click(function() {
	$(\'#Submit\').attr(\'disabled\',"true");
	$(\'#Submit\').val(please_wait);
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