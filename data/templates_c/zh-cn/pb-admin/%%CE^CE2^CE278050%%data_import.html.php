<?php /* Smarty version 2.6.18, created on 2012-01-01 06:14:58
         compiled from data_import.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'data_import.html', 20, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_system_tool']; ?>
 &raquo; <?php echo $this->_tpl_vars['_my_notes']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_data']; ?>
</h3> 
    <ul class="subnav">
		<li><a href="data_exchange.php?do=export"><?php echo $this->_tpl_vars['_data_export']; ?>
</a></li>
        <li><a class="btn1" href="data_exchange.php?do=import"><span><?php echo $this->_tpl_vars['_data_import']; ?>
</span></a></li>
    </ul>
</div>
<div class="info">
  <form method="post" action="" id="EditFrm" name="edit_frm" enctype="multipart/form-data">
	<input type="hidden" name="do" value="import">
    <table class="infoTable">
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_pls_select']; ?>
<?php echo $this->_tpl_vars['_types']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5">
		<select name="tb_name">
			<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['FileItems']), $this);?>

		</select>
		</td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_pls_select']; ?>
<?php echo $this->_tpl_vars['_file']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><input type="file" name="tb_file" id="tb_file"> (.xls)</td>
      </tr>
      <tr>
        <th></th>
        <td class="ptb20">
			<input class="formbtn" type="submit" name="save" value="<?php echo $this->_tpl_vars['_immediately']; ?>
<?php echo $this->_tpl_vars['_data_import']; ?>
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