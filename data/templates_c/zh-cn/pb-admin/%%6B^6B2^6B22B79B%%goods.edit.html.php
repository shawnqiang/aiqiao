<?php /* Smarty version 2.6.18, created on 2012-01-01 06:00:19
         compiled from goods.edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'editor', 'goods.edit.html', 56, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
<script language=\'JavaScript\'>
function myKeyPress(e) { 
   if (window.event) { e = event; e.which = e.keyCode; } else if (!e.which) e.which = e.keyCode; 
   var code = e.which; 
   if (code<=57) {
       return true; 
   } 
   return false; 
}
</script>
'; ?>

<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_ads']; ?>
 &raquo; <?php echo $this->_tpl_vars['_service_manage']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_service_manage']; ?>
</h3> 
    <ul class="subnav"> 
		<li><a href="goods.php"><?php echo $this->_tpl_vars['_lists']; ?>
</a></li>
        <li><a class="btn1" href="goods.php?do=edit"><span><?php echo $this->_tpl_vars['_add_or_edit']; ?>
</span></a></li>
        <li><a href="goods_cat.php"><span><?php echo $this->_tpl_vars['_sorts']; ?>
</span></a></li>
    </ul> 
</div> 
<div class="info">
  <form method="post" action="goods.php" id="EditFrm" name="edit_frm">
  <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" />
  <input type="hidden" name="page" value="<?php echo $_GET['page']; ?>
" />
    <table class="infoTable">
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_show_name']; ?>
</th>
        <td class="paddingT15 wordSpacing5">          
		<input class="infoTableInput2" name="goods[name]" value="<?php echo $this->_tpl_vars['item']['name']; ?>
" /></td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_the_price']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5">          
		<input class="infoTableInput2" name="goods[price]" value="<?php echo $this->_tpl_vars['item']['price']; ?>
" onkeypress="return myKeyPress(event)"
onpaste="return !clipboardData.getData('text').match(/\D/)"
ondragenter="return false"
style="ime-mode:Disabled" /></td>
      </tr>
      <tr>
        <th class="paddingT15"><?php echo $this->_tpl_vars['_description_n']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><textarea style="width:550px;height:100px;" name="goods[description]"><?php echo $this->_tpl_vars['item']['description']; ?>
</textarea></td>
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
<?php echo smarty_function_editor(array('type' => 'tiny_mce'), $this);?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>