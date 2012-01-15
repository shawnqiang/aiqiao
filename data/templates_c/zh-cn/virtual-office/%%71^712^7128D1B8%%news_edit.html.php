<?php /* Smarty version 2.6.18, created on 2012-01-14 10:48:28
         compiled from news_edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'editor', 'news_edit.html', 3, false),array('function', 'formhash', 'news_edit.html', 32, false),array('function', 'html_options', 'news_edit.html', 48, false),)), $this); ?>
<?php $this->assign('page_title', ($this->_tpl_vars['_companynews'])); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo smarty_function_editor(array('type' => 'tiny_mce'), $this);?>

<?php echo '
<script>
jQuery(document).ready(function($) {
	$("#Frm1").validate({
	submitHandler: function(form) {
		$(form).find(":submit").attr("disabled", true).attr("value",pb_lang.DO_PROCESSING);
		form.submit();
	}
	});
})
</script>
'; ?>

<div id="main" class="container">
    <div class="row">
       <div class="span4 side-bar">
         <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
       </div>
    
     <div class="span12 main-content">
     <div class="page-header">
     	<h2><?php echo $this->_tpl_vars['page_title']; ?>
</h2>
     </div>
     <div class="mod">
     	<div class="mod-hd">
     		
     	</div>
     	<div class="mod-bd">
     		<form name="addnewsfrm" id="Frm1" action="news.php" method="post">
	  <?php echo smarty_function_formhash(array(), $this);?>

	  <input type="hidden" name="newsid" value="<?php echo $this->_tpl_vars['item']['id']; ?>
">
         <table class="offer_info_content">
			<tr>
            <th class="circle_left"><font class="red">* </font><?php echo $this->_tpl_vars['_news_title']; ?>
</th>
				<td class="circle_right"><font color="#666666">
					<?php if ($_GET['act'] == 'view'): ?>
					<?php echo $this->_tpl_vars['item']['Title']; ?>

					<?php else: ?>                          
					<input name="title" type="text" id="title" value="<?php echo $this->_tpl_vars['item']['Title']; ?>
" size="35" class="required">
					<?php endif; ?>
				</font></td>
			  </tr>
			<tr>
            <th><?php echo $this->_tpl_vars['_category_n']; ?>
</th>
				<td><select name="type_id">
                          <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['CompanynewsTypes'],'selected' => $this->_tpl_vars['item']['type_id']), $this);?>

                        </select></td>
			</tr>
			<tr>
				 <th><font class="red">* </font><?php echo $this->_tpl_vars['_content']; ?>
</th>
				<td><p>
					<?php if ($_GET['action'] == 'view'): ?>
					<?php echo $this->_tpl_vars['item']['Content']; ?>

					<?php else: ?>
					<textarea name="content" cols="55" rows="10" wrap="VIRTUAL" class="required"><?php echo $this->_tpl_vars['item']['Content']; ?>
</textarea>
					<?php endif; ?>
					<font color="#FF3300"><br>
				</font></p></td>
             </tr>
			<tr>
				 <th class="circle_bottomleft"></th>
				<td class="circle_bottomright"><input name="save" type="submit" id="save" class="btn" value=" <?php echo $this->_tpl_vars['_confirm_submit']; ?>
 "></td>
             </tr>                                 
          </table>
	</form>
     	</div>
     </div>
</div>
</div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>