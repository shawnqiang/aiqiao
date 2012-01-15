<?php /* Smarty version 2.6.18, created on 2012-01-01 12:45:09
         compiled from newstype.edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'newstype.edit.html', 53, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_trade_management']; ?>
 &raquo; <?php echo $this->_tpl_vars['_industry_news']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_industry_news']; ?>
</h3> 
    <ul class="subnav">
		<li><a href="news.php"><?php echo $this->_tpl_vars['_management']; ?>
</a></li>
        <li><a href="newstopic.php"><?php echo $this->_tpl_vars['_topic_news']; ?>
</a></li>
        <li><a href="newstype.php"><?php echo $this->_tpl_vars['_sorts']; ?>
</a></li>
        <li><a class="btn1" href="newstype.php?do=edit"><span><?php echo $this->_tpl_vars['_add_or_edit']; ?>
</span></a></li>
		<li><a href="newsgather.php"><?php echo $this->_tpl_vars['_collection']; ?>
</a></li>
    </ul>
</div>
<div class="info">
  <form method="post" action="newstype.php" id="EditFrm" name="edit_frm">
  <input type="hidden" name="page" value="<?php echo $_GET['page']; ?>
" />
    <table class="infoTable">
	  <?php if ($_GET['id']): ?>
	  <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" />
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_serial_number']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput2" name="data[newstype][id]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" type="text" /><label class="field_notice"><?php echo $this->_tpl_vars['_do_not_change_non_special_need']; ?>
</label>        </td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_category_name']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput2" name="data[newstype][name]" value="<?php echo $this->_tpl_vars['item']['name']; ?>
" type="text" /><label class="field_notice"><?php echo $this->_tpl_vars['_top_category_name_not_support_special_sign']; ?>
</label>        </td>
      </tr>
		<?php else: ?>
			  <tr>
			<th class="paddingT15"> <?php echo $this->_tpl_vars['_category_name']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
			<td class="paddingT15 wordSpacing5"><textarea name="data[newstype][name]" id="dataNames"></textarea><label class="field_notice"><?php echo $this->_tpl_vars['_add_more_than_one_line_on_behalf_of_a_record']; ?>
</label></td>
		  </tr>
		<?php endif; ?>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_parent_categories']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5">
        <select name="data[newstype][parent_id]" id="NewstypeParentId">
        <option value="0"><?php echo $this->_tpl_vars['_top_categories']; ?>
</option>
        <?php echo $this->_tpl_vars['NewstypeOptions']; ?>

        </select>
        </td>
      </tr>
      <tr>
        <th></th>
        <td class="ptb20">
			<input class="formbtn" type="submit" name="save" value="<?php echo $this->_tpl_vars['_save_and_pub']; ?>
" />		</td>
      </tr>
    </table>
  </form>
</div>
<script>
var parent_id = "<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['parent_id'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
";
</script>
<?php echo '
<script>
jQuery(document).ready(function($) {
	$("#NewstypeParentId").val(parent_id)
})
</script>
'; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>