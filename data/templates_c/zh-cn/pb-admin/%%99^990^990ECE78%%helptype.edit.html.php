<?php /* Smarty version 2.6.18, created on 2012-01-01 07:28:07
         compiled from helptype.edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'helptype.edit.html', 30, false),)), $this); ?>
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
		<li><a href="helptype.php"><?php echo $this->_tpl_vars['_sorts']; ?>
</a></li>        
        <li><a class="btn1" href="helptype.php?do=edit"><span><?php echo $this->_tpl_vars['_add_or_edit']; ?>
</span></a></li>
    </ul>
</div>
<div class="info">
  <form method="post" action="helptype.php" id="EditFrm" name="edit_frm">
  <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" />
  <input type="hidden" name="page" value="<?php echo $_GET['page']; ?>
" />
    <table class="infoTable">
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_title']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5">          
		<input class="infoTableInput2" name="data[helptype][title]" value="<?php echo $this->_tpl_vars['item']['title']; ?>
" /></td>
      </tr>
      <tr>
        <th class="paddingT15"><?php echo $this->_tpl_vars['_digest_n']; ?>
</th>
        <td class="paddingT15 wordSpacing5"> <textarea style="width:550px;height:100px;" name="data[helptype][description]" id="helpContent"><?php echo $this->_tpl_vars['item']['description']; ?>
</textarea></td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_display_order']; ?>
</th>
        <td class="paddingT15 wordSpacing5">          
		<input class="infoTableInput2" name="data[helptype][display_order]" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['display_order'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
" /></td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_parent_categories']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5">
		<select name="data[helptype][parent_id]">
		<option value="0"><?php echo $this->_tpl_vars['_top_categories']; ?>
</option>
        <?php echo $this->_tpl_vars['HelptypeOptions']; ?>

		</select>        
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