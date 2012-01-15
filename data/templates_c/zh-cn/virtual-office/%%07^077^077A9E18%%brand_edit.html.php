<?php /* Smarty version 2.6.18, created on 2012-01-14 10:07:55
         compiled from brand_edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'formhash', 'brand_edit.html', 36, false),)), $this); ?>
<?php $this->assign('page_title', ($this->_tpl_vars['_brands'])); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script src="../scripts/jquery/jquery.textbox.js" charset="<?php echo $this->_tpl_vars['charset']; ?>
"></script>
<script>
var allows_maximum_input = "<?php echo $this->_tpl_vars['_allows_maximum_input']; ?>
";
var can_also_enter = "<?php echo $this->_tpl_vars['_can_also_enter']; ?>
";
</script>
<?php echo '
<script>
jQuery(document).ready(function($) {
	$("#BrandDescription").textbox({
		maxLength: 255,
		onInput: function(event, status) {
			$("#txtTips").html(allows_maximum_input+" <strong style=\'font-family:Arial;font-size:1.5em;\'>" + status.maxLength + "</strong> "+can_also_enter+" <strong style=\'font-family:Arial;font-size:1.5em;\'>" + status.leftLength + "</strong>");
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
    		<h2><?php echo $this->_tpl_vars['_brands']; ?>
</h2>
    	</div>
    	<div class="mod">
    		<div class="mod-hd">
    			 <div class="hint"><?php echo $this->_tpl_vars['_must_input_with_star']; ?>
</div>
    		</div>
    		<div class="mod-bd">
    			<form method="post" action="brand.php" enctype="multipart/form-data" onsubmit="$('#Save').attr('disabled',true);">
				  <?php echo smarty_function_formhash(array(), $this);?>

				  <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['item']['id']; ?>
">
				  <input type="hidden" name="formattribute_ids" value="<?php echo $this->_tpl_vars['item']['formattribute_ids']; ?>
">
				  	<div class="clearfix">
				  		<label for="data[brand][name]"><?php echo $this->_tpl_vars['_brand_name']; ?>
</label>
				  		<div class="input">
				  			<input name="data[brand][name]" type="text" id="dataBrandName" value="<?php echo $this->_tpl_vars['item']['name']; ?>
">
				  			<span><?php echo $this->_tpl_vars['_words_length']; ?>
</span>
				  		</div>
				  	</div>
				  	<div class="clearfix">
				  		<label for="data[brand][alias_name]"><?php echo $this->_tpl_vars['_brands']; ?>
<?php echo $this->_tpl_vars['_alias_name']; ?>
</label>
				  		<div class="input">
				  			<input name="data[brand][alias_name]" type="text" id="dataBrandAliasName" value="<?php echo $this->_tpl_vars['item']['alias_name']; ?>
">
				  			
				  		</div>
				  	</div>
				  	<div class="clearfix">
				  		<label for="data[brand][type_id]"><?php echo $this->_tpl_vars['_brand_type']; ?>
</label>
				  		<div class="input">
				  			<select name="data[brand][type_id]" id="BrandTypeId">
			                           <?php echo $this->_tpl_vars['BrandtypeOptions']; ?>

								</select>	
				  		</div>
				  	</div>
				  	<div class="clearfix">
				  		<label for="data[brand][description]"><?php echo $this->_tpl_vars['_description']; ?>
</label>
				  		<div class="input">
				  			<textarea name="data[brand][description]" id="BrandDescription" wrap="VIRTUAL"><?php echo $this->_tpl_vars['item']['description']; ?>
</textarea><div id="txtTips"></div>
				  		</div>
				  	</div>
				  	<div class="clearfix">
				  		<label for="pic"><?php echo $this->_tpl_vars['_brand_image']; ?>
</label>
				  		<div class="input">
				  			<input name="pic" type="file" id="uploadfile" onchange="preview()" />
			                <p><?php echo $this->_tpl_vars['_image_size_format_provision']; ?>
</p>
				  		</div>
				  	</div>
				  	<div class="actions">
				  		<input name="save" type="submit" id="save" class="btn" value=" <?php echo $this->_tpl_vars['_confirm_submit']; ?>
 ">
				  	</div>
			      
			        
				</form>
    		</div>
    	</div>
     
</div>
</div>
</div>
<?php echo '
<script>
var type_id="{$item.type_id|default:1}";
jQuery(document).ready(function($) {
$("#Brandtypes option[value=\'"+type_id+"\']").attr("selected","selected");})
</script>
'; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>