<?php /* Smarty version 2.6.18, created on 2012-01-19 10:18:22
         compiled from link_edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'formhash', 'link_edit.html', 17, false),)), $this); ?>
<?php $this->assign('page_title', ($this->_tpl_vars['_friendlink'])); ?>
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
     <div class="mod">
       <div class="mod-hd"><h2><?php echo $this->_tpl_vars['_changes_our']; ?>
<?php echo $this->_tpl_vars['_friendlink']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</h2></div>
       <div class="mod-bd">
         <form name="linkeditfrm" method="post" action="<?php echo $_ENV['PHP_SELF']; ?>
">
    <?php echo smarty_function_formhash(array(), $this);?>

    <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['item']['id']; ?>
"/>
       <table class="offer_info_content">
              <tr>
                <th class="circle_left"><?php echo $this->_tpl_vars['_show_name']; ?>
</th>
                 <td class="circle_right">
                <input name="spacelink[title]" type="text" id="companyname" value="<?php echo $this->_tpl_vars['item']['title']; ?>
"></td>
              </tr>
              <tr>
                <th><?php echo $this->_tpl_vars['_link_address']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
                <td><input name="spacelink[url]" type="text" id="url" value="<?php echo $this->_tpl_vars['item']['url']; ?>
"><?php echo $this->_tpl_vars['_site_links']; ?>
</td>
              </tr>
              <tr>
                <th><?php echo $this->_tpl_vars['_notes']; ?>
</th>
                <td>
                <textarea name="spacelink[description]" rows="" cols="50"><?php echo $this->_tpl_vars['item']['description']; ?>
</textarea>
                </td>
              </tr>
              <tr>
                <th class="circle_bottomleft"></th>
                <td class="circle_bottomright"><input type="submit" value= "<?php echo $this->_tpl_vars['_fill_submit']; ?>
" class="btn primary" name="save"></td>
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