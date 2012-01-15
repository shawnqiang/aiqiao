<?php /* Smarty version 2.6.18, created on 2012-01-03 11:46:03
         compiled from default/product/inquery.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'formhash', 'default/product/inquery.html', 36, false),array('function', 'the_url', 'default/product/inquery.html', 41, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['page_title']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script src="scripts/langs/<?php echo $this->_tpl_vars['JsLanguage']; ?>
.js" charset="<?php echo $this->_tpl_vars['charset']; ?>
"></script>
<script src="scripts/jquery/jquery.textbox.js" charset="<?php echo $this->_tpl_vars['charset']; ?>
"></script>
<script>
var app_language = '<?php echo $this->_tpl_vars['AppLanguage']; ?>
';
var allows_maximum_input = "<?php echo $this->_tpl_vars['_allows_maximum_input']; ?>
";
var can_also_enter = "<?php echo $this->_tpl_vars['_can_also_enter']; ?>
";
</script>
<?php echo '
<script>
jQuery(document).ready(function($) {
	$("#Content").textbox({
		maxLength: 255,
		onInput: function(event, status) {
			$("#txtTip").html(allows_maximum_input+" <strong style=\'font-family:Arial;font-size:1.5em;\'>" + status.maxLength + "</strong> "+can_also_enter+" <strong style=\'font-family:Arial;font-size:1.5em;\'>" + status.leftLength + "</strong>");
		}
	});
	$("#PostFrm").validate({
	submitHandler: function(form) {
		$(form).find(":submit").attr("disabled", true).attr("value",pb_lang.DO_PROCESSING);
		form.submit();
	}
	});
})
</script>
'; ?>

<div id="main" class="container">
	<div class="mod">
		<div class="mod-hd">
			<h3><div class="price_step1"><span><?php echo $this->_tpl_vars['_fill_inquiry_information']; ?>
</span><span><?php echo $this->_tpl_vars['_inquiry_successful']; ?>
</span></div><?php echo $this->_tpl_vars['_inquiry_steps']; ?>
</h3>
		</div>
		<div class="mod-bd">
			<form name="xunjiafrm" id="PostFrm" action="<?php echo $_ENV['PHP_SELF']; ?>
" method="post">
			<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>
">
			<input type="hidden" name="to_member_id" value="<?php echo $this->_tpl_vars['item']['member_id']; ?>
">
			<?php echo smarty_function_formhash(array(), $this);?>

			<input type="hidden" name="do" value="inquery">
			<p><?php echo $this->_tpl_vars['_receiver']; ?>
</p>
			<div class="clearfix">
				<img src="<?php echo $this->_tpl_vars['item']['image']; ?>
" alt="" />
				<p><?php echo $this->_tpl_vars['_product_name']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
<a href="<?php echo smarty_function_the_url(array('id' => ($this->_tpl_vars['item']['id']),'module' => 'product'), $this);?>
" target="_blank"><?php echo $this->_tpl_vars['item']['name']; ?>
</a><br />
					<?php echo $this->_tpl_vars['_contact']; ?>
<?php echo $this->_tpl_vars['CompanyUser']; ?>

				</p>
				
			</div>
			<p><?php echo $this->_tpl_vars['_inquiry_content']; ?>
</p>
			<div class="clearfix">
				<label class="title"><?php echo $this->_tpl_vars['_message_the_title']; ?>
</label>
				<div class="input">
					<input name="title" type="text" value="<?php echo $this->_tpl_vars['item']['names']; ?>
" size="45" class="required" />
				</div>
			</div>
			<div class="clearfix">	
				<label class="title"><?php echo $this->_tpl_vars['_additional_information']; ?>
</label>
				<div class="input">
					<textarea name="inquery[content]" id="Content" class="textaera2"></textarea><br><span id="txtTip" style="width: 300px;"></span>
				</div>
			</div>
			<p><?php echo $this->_tpl_vars['_my_contacts']; ?>
</p>
			<div class="clearfix">
				<label class="name"><?php echo $this->_tpl_vars['_name']; ?>
</label>
				<div class="input">
				<input type="text" name="inquery[link_man]" class="required" />
				</div>
			</div>
			<div class="clearfix">
				<label class="name"><?php echo $this->_tpl_vars['_email']; ?>
</label>
				<div class="input">
					<input name="inquery[link_email]" id="LinkEmail" type="text" class="required email">
				</div>
			</div>
			<div class="clearfix">
				<label class="name"><?php echo $this->_tpl_vars['_telephone']; ?>
</label>
				<div class="input">
					<input type="text" name="inquery[link_tel]" id="telnumber" value="" class="required">
				</div>
				
			</div>
			<div class="actions">	
				<label class="enquiry">
				<input type="submit" value="<?php echo $this->_tpl_vars['_inquiry']; ?>
" name="submit" id="Submit" <?php if (! $this->_tpl_vars['pb_username']): ?> disabled="disbled" <?php endif; ?>/>&nbsp;<input type="reset" value="<?php echo $this->_tpl_vars['_cancel']; ?>
" />
				</label>
				
			</div>
			</form>

		</div>
	</div>
</div>
	
<script src="scripts/jquery/jquery.validate.js"></script>
<script>
$("#SearchFrm").attr("action","<?php echo smarty_function_the_url(array('module' => 'search'), $this);?>
");
$("#hdDo").val("product");
$("#topMenuProduct").addClass("lcur");
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>