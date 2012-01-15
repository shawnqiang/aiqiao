<?php /* Smarty version 2.6.18, created on 2012-01-01 07:28:03
         compiled from help.edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'editor', 'help.edit.html', 45, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_extension']; ?>
 &raquo; <?php echo $this->_tpl_vars['_help_file']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_help_file']; ?>
</h3> 
    <ul class="subnav">
		<li><a href="help.php"><?php echo $this->_tpl_vars['_management']; ?>
</a></li>
        <li><a class="btn1" href="help.php?do=edit"><span><?php echo $this->_tpl_vars['_add_or_edit']; ?>
</span></a></li>
		<li><a href="helptype.php"><?php echo $this->_tpl_vars['_sorts']; ?>
</a></li>
    </ul>
</div>
<div class="info">
  <form method="post" action="help.php" id="EditFrm" name="edit_frm">
  <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" />
  <input type="hidden" name="page" value="<?php echo $_GET['page']; ?>
" />
    <table class="infoTable">
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_help_file']; ?>
<?php echo $this->_tpl_vars['_title']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5">          
		<input class="infoTableInput2" name="help[title]" value="<?php echo $this->_tpl_vars['item']['title']; ?>
" /></td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_help_file']; ?>
<?php echo $this->_tpl_vars['_type_sort']; ?>
</th>
        <td class="paddingT15 wordSpacing5">
		<select name="help[helptype_id]" id="HelpTypeId">
		<option><?php echo $this->_tpl_vars['_pls_select']; ?>
</option>
		<?php echo $this->_tpl_vars['HelptypeOptions']; ?>

		</select>        
        </td>
      </tr>
      <tr>
        <th class="paddingT15"><?php echo $this->_tpl_vars['_content']; ?>
</th>
        <td class="paddingT15 wordSpacing5"> <textarea style="width:550px;height:100px;" name="help[content]" id="helpContent"><?php echo $this->_tpl_vars['item']['content']; ?>
</textarea></td>
      </tr>
      <tr>
        <th></th>
        <td class="ptb20">
			<input class="formbtn" type="submit" name="save" value="<?php echo $this->_tpl_vars['_save']; ?>
" />		
		</td>
      </tr>
    </table>
  </form>
</div>
<?php echo smarty_function_editor(array('type' => 'tiny_mce'), $this);?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>