<?php /* Smarty version 2.6.18, created on 2012-01-14 10:41:36
         compiled from album_edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'formhash', 'album_edit.html', 38, false),array('function', 'html_options', 'album_edit.html', 50, false),)), $this); ?>
<?php $this->assign('page_title', ($this->_tpl_vars['_company_album'])); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script src="<?php echo $this->_tpl_vars['SiteUrl']; ?>
scripts/jquery/jquery.colorbox.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['SiteUrl']; ?>
scripts/jquery/colorbox/colorbox.css" media="screen" rel="stylesheet" type="text/css"/>
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
	$("#Content").textbox({
		maxLength: 120,
		onInput: function(event, status) {
			$("#txtTips").html(allows_maximum_input+" <strong style=\'font-family:Arial;font-size:1.5em;\'>" + status.maxLength + "</strong> "+can_also_enter+" <strong style=\'font-family:Arial;font-size:1.5em;\'>" + status.leftLength + "</strong>");
		}
	});
	$(\'a[rel*=lightbox]\').colorbox({maxWidth:600,opacity:0.1});
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
         <div class="hint"><?php echo $this->_tpl_vars['_must_input_with_star']; ?>
</div>
       </div>
       <div class="mod-bd">
            <form name="edit_frm" method="post" action="album.php" enctype="multipart/form-data" onsubmit="$('#BtnSubmit').attr('disabled',true);">
            <?php echo smarty_function_formhash(array(), $this);?>

            <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['item']['id']; ?>
">
            <input type="hidden" name="do" value="save">

               <table class="offer_info_content">
                  <tr>
                    <th class="circle_left"><font class="red">*</font><?php echo $this->_tpl_vars['_show_title']; ?>
</th>
                    <td class="circle_right"><input type="text" name="album[title]" value="<?php echo $this->_tpl_vars['item']['title']; ?>
" /></td>
                  </tr>
                  <tr>
                    <th><?php echo $this->_tpl_vars['_categories']; ?>
</th>
                    <td><select name="album[type_id]">
                <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['AlbumTypes'],'selected' => $this->_tpl_vars['item']['type_id']), $this);?>

                    </select></td>
                  </tr>
                  <tr>
                    <th><font class="red">&nbsp; </font><?php echo $this->_tpl_vars['_simple_description']; ?>
</th>
                    <td><textarea name="album[description]" id="Content" cols="60" rows="8" wrap="VIRTUAL"><?php echo $this->_tpl_vars['item']['description']; ?>
</textarea><div id="txtTips"></div></td>
                  </tr>
                  <tr>
                    <th><?php echo $this->_tpl_vars['_attachment_upload']; ?>
</th>
                    <td>
                        <input name="pic" type="file" id="uploadfile" onchange="preview()" />
                        <span class="gray"><br>
                          <?php echo $this->_tpl_vars['_image_size_format_provision']; ?>
</span>
                     </td>
                  </tr>
              <?php if ($this->_tpl_vars['item']['image']): ?>
                  <tr>
                   <th></th>
                     <td><a href="<?php echo $this->_tpl_vars['item']['image']; ?>
" id="uploadpic_hover" rel="lightbox"><img id="uploadpic" src="<?php echo $this->_tpl_vars['item']['image']; ?>
.small.jpg" alt="<?php echo $this->_tpl_vars['item']['title']; ?>
" width="80" height="80" border="0" /></a></td>
                  </tr>
                  <?php endif; ?>
                  <tr>
                   <th class="circle_bottomleft"></th>
                     <td class="circle_bottomright"><input class="btn primary" name="btnSubmit" type="submit" id="BtnSubmit" value=" <?php echo $this->_tpl_vars['_confirm_submit']; ?>
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