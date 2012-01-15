<?php /* Smarty version 2.6.18, created on 2012-01-01 06:00:01
         compiled from language.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link href="../scripts/jquery/alerts/jquery.alerts.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="../scripts/jquery/alerts/jquery.alerts.js"></script>
<script language="javascript">
var submit_and_tips = "<?php echo $this->_tpl_vars['_submit_and_tips']; ?>
";
var please_wait = "<?php echo $this->_tpl_vars['_please_wait']; ?>
";
</script>
<?php echo '
<script type="text/javascript">
$(document).ready( function() {
	$("#Save").click( function() {
		jConfirm(submit_and_tips, please_wait, function(r) {
			$("#Save").attr("disabled", true);
			if(r){
				$("#ListFrm").submit();
				$("#Save").attr("disabled", false);
			}else{
				$("#Save").attr("disabled", false);
				return false;
			}
		});
	});
});
</script>
'; ?>

<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_templet']; ?>
 &raquo; <?php echo $this->_tpl_vars['_templet_language']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_templet_language']; ?>
</h3> 
</div>
<div class="tdare">
  <form name="list_frm" id="ListFrm" action="" method="post">
  <input type="hidden" name="action" value="language">
  <table width="100%" cellspacing="0" class="dataTable" summary="<?php echo $this->_tpl_vars['_data_zone']; ?>
">
    <thead>
		<tr>
		  <th class="firstCell"><?php echo $this->_tpl_vars['_naming']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_screenshot']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_whether_or']; ?>
<?php echo $this->_tpl_vars['_setup']; ?>
</th>
		</tr>
    </thead>
    <tbody>
		<?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
		<input type="hidden" name="data[language][<?php echo $this->_tpl_vars['item']['name']; ?>
][title]" value="<?php echo $this->_tpl_vars['item']['title']; ?>
" />
		<input type="hidden" name="data[language][<?php echo $this->_tpl_vars['item']['name']; ?>
][img]" value="<?php echo $this->_tpl_vars['item']['img']; ?>
" />
		<tr class="tatr2">
		  <td class="firstCell"><?php echo $this->_tpl_vars['item']['title']; ?>
</td>
		  <td><?php if ($this->_tpl_vars['item']['img']): ?><img src="<?php echo $this->_tpl_vars['item']['img']; ?>
" border="0" alt="<?php echo $this->_tpl_vars['item']['title']; ?>
"><?php else: ?><?php echo $this->_tpl_vars['item']['title']; ?>
<?php endif; ?></td>
		  <td><input type="checkbox" name="data[item][]" value="<?php echo $this->_tpl_vars['item']['name']; ?>
" <?php if ($this->_tpl_vars['item']['available']): ?>checked="checked"<?php endif; ?>></td>  
		</tr>
		<?php endforeach; else: ?>
		<tr class="no_data info">
		  <td colspan="3"><?php echo $this->_tpl_vars['_no_datas']; ?>
</td>
		</tr>
		<?php endif; unset($_from); ?>
    </tbody>
	</table>
	<div id="dataFuncs" title="<?php echo $this->_tpl_vars['_action_zone']; ?>
">
    <div class="left paddingT15" id="batchAction">
      <input type="button" id="Save" name="Save" value="<?php echo $this->_tpl_vars['_submit']; ?>
" class="formbtn batchButton"/>&nbsp;<input type="checkbox" name="update_dot"><?php echo $this->_tpl_vars['_if_also_update_language_files']; ?>

    </div>
    <div class="pageLinks"><?php echo $this->_tpl_vars['ByPages']; ?>
</div>
    <div class="clear"/>
    </div>
	</form>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>