<?php /* Smarty version 2.6.18, created on 2012-01-01 06:15:03
         compiled from data_export.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'data_export.html', 20, false),)), $this); ?>
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
		<li><a class="btn1" href="data_exchange.php?do=export"><span><?php echo $this->_tpl_vars['_data_export']; ?>
</span></a></li>
        <li><a href="data_exchange.php?do=import"><?php echo $this->_tpl_vars['_data_import']; ?>
</a></li>
    </ul>
</div>
<div class="info">
  <form method="post" action="" id="EditFrm" name="edit_frm">
	<input type="hidden" name="do" value="export">
    <table class="infoTable">
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_pls_select']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5">
		<select name="tb_name">
			<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['FileItems']), $this);?>

		</select>
		</td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_record_amount']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput2" name="record_amount" id="record_amount" value="" /><label class="field_notice" for="record_amount"><?php echo $this->_tpl_vars['_allows_maximum_input']; ?>
<?php echo $this->_tpl_vars['_record_amount']; ?>
</label></td>
      </tr>
      <tr>
        <th></th>
        <td class="ptb20">
			<input class="formbtn" type="submit" name="executive" value="<?php echo $this->_tpl_vars['_executive']; ?>
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