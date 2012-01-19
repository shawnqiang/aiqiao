<?php /* Smarty version 2.6.18, created on 2012-01-19 10:15:26
         compiled from space.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'the_url', 'space.html', 20, false),array('function', 'formhash', 'space.html', 38, false),)), $this); ?>
<?php $this->assign('page_title', ($this->_tpl_vars['_diy_website'])); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="main" class="container">
	<div class="row">
		
	
	<div class="span4 side-bar l-col">
   
	 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  
	</div>
 <div class="span12 main-content r-col">
 	<div class="page-header">
 		<h2><?php echo $this->_tpl_vars['page_title']; ?>
</h2>
 	</div>
 	<div>
 		<p><span><?php echo $this->_tpl_vars['_friendly_tip']; ?>
</span><?php echo $this->_tpl_vars['_space_name']; ?>
<?php echo $this->_tpl_vars['_change_style']; ?>
</p>
 	</div>
 	<div>
 		<p><a href="javascript:;" onclick="$('#SpaceNameModify').toggle();" class="btn"><?php echo $this->_tpl_vars['_modify']; ?>
<?php echo $this->_tpl_vars['_space_name']; ?>
<?php echo $this->_tpl_vars['_name']; ?>
</a> <a href="<?php echo smarty_function_the_url(array('module' => 'space','id' => ($this->_tpl_vars['COMPANYINFO']['id']),'userid' => ($this->_tpl_vars['COMPANYINFO']['cache_spacename'])), $this);?>
" target="_blank" class="btn" ><?php echo $this->_tpl_vars['_click_preview']; ?>
</a></p>
 	</div>
 	<div id="SpaceNameModify" style="display:none;">
 		<form name="space_form" action="<?php echo $_SERVER['PHP_SELF']; ?>
" method="post">
		<div class="clearfix">
			<label for=""><?php echo $this->_tpl_vars['_space_name']; ?>
<?php echo $this->_tpl_vars['_name_n']; ?>
</label>
			<div class="input">
				<input type="text" name="data[space_name]" id="dataSpaceName" value="<?php echo $this->_tpl_vars['COMPANYINFO']['cache_spacename']; ?>
" onkeyup="value=value.replace(/[^\w\.\/]/ig,'')" maxlength="100" /> <input type="submit" name="updateSpaceName" class="btn primary" value="<?php echo $this->_tpl_vars['_submit_changes']; ?>
" />
				<p class="help-block">
					<?php echo $this->_tpl_vars['_left_bracket']; ?>
<?php echo $this->_tpl_vars['_space_name']; ?>
<?php echo $this->_tpl_vars['_english_number_portfolio']; ?>
<?php echo $this->_tpl_vars['_right_bracket']; ?>

				</p>
			</div>

		</div>
		</form>
 	</div>
      
  <form name="stylefrm" action="<?php echo $_SERVER['PHP_SELF']; ?>
" method="post">
  <?php echo smarty_function_formhash(array(), $this);?>

  <table class="temp_style">
	<tr>
	<?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['templet'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['templet']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['templet']['iteration']++;
?>
	  <td>
	  <label for="style_<?php echo $this->_tpl_vars['item']['id']; ?>
"><img height="155" src="<?php echo $this->_tpl_vars['item']['picture']; ?>
" disabled="disabled"></label>
		<br>
		<label for="style_<?php echo $this->_tpl_vars['item']['id']; ?>
"><input type="radio" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" name="data[member][styleid]" id="style_<?php echo $this->_tpl_vars['item']['id']; ?>
" <?php if ($this->_tpl_vars['item']['id'] == $this->_tpl_vars['templet_id']): ?>checked<?php endif; ?>><?php echo $this->_tpl_vars['item']['title']; ?>
</label>
	</td>
	<?php if (!($this->_foreach['templet']['iteration'] % 4)): ?>
	</tr><tr>
	<?php endif; ?>
	<?php endforeach; else: ?>
	<td><?php echo $this->_tpl_vars['_no_provide_template']; ?>
</td>
	<?php endif; unset($_from); ?>
	</tr>
	</table>
	  <table class="trade_line">
		
	   <tr align="center" valign="bottom">
	  <td height="40">
	  <input name="save" type="submit" id="Save" class="btn primary" value="<?php echo $this->_tpl_vars['_choose_submit']; ?>
">
	  </td>
	</tr>
  </table>
  </form>
	<table class="attentions">
		<tr>
		<?php echo $this->_tpl_vars['_change_style_tips']; ?>

		</tr>
	</table>
</div>
</div>
</div>
<?php echo '
<script type="text/javascript"> 
var lb=document.getElementsByTagName(\'label\'); 
for (i=0;i<lb.length;i++) { 
	lb[i].onclick=function () { 
		var lbfor=this.getAttribute(\'for\')?this.getAttribute(\'for\'):this.getAttribute(\'HTMLfor\')+\'\'; 
		document.getElementById(lbfor).click(); 
		document.getElementById(lbfor).focus(); 
	}             
} 
</script>
'; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>