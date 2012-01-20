<?php /* Smarty version 2.6.18, created on 2012-01-20 09:00:17
         compiled from adzone.makejs.html */ ?>
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
        <li><a href="adzone.php?do=edit&id=<?php echo $this->_tpl_vars['id']; ?>
"><?php echo $this->_tpl_vars['_add_or_edit']; ?>
</a></li>
		<li><a class="btn1" href="adzone.php?do=makejs&id=<?php echo $this->_tpl_vars['id']; ?>
"><span><?php echo $this->_tpl_vars['_view_the_calling_code']; ?>
</span></a></li>
    </ul>
</div>
<div class="info">
<form name="textfrm">
    <table class="infoTable">
      <tr>
        <th class="paddingT15"> <a href="javascript:clip('textfrm.copy')" title="<?php echo $this->_tpl_vars['_click_copy_to_clipboard']; ?>
">(<?php echo $this->_tpl_vars['_click_copy_to_clipboard']; ?>
)</a></th>
        <td class="paddingT15 wordSpacing5"><textarea name="copy" style="width:450px;overflow-y:visible;font-family:Arial"><?php echo $this->_tpl_vars['XMLDATA']; ?>
</textarea></td>
      </tr>
    </table>
</div>
<script>
var data_has_been_copied_to_the_clipboard = "<?php echo $this->_tpl_vars['_data_has_been_copied_to_the_clipboard']; ?>
";
</script>
<?php echo '
<script type="text/javascript">
function clip(text){
	str=eval("document." + text)
	str.select()
	str = document.selection.createRange();
	clipboardData.setData(\'text\',(str.text));
	alert(data_has_been_copied_to_the_clipboard);
}
</script>
'; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>