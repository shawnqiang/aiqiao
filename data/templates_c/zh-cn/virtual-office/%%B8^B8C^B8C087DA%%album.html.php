<?php /* Smarty version 2.6.18, created on 2012-01-15 08:06:37
         compiled from album.html */ ?>
<?php $this->assign('page_title', ($this->_tpl_vars['_company_album'])); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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
        <h2 class="pull-left"><?php echo $this->_tpl_vars['page_title']; ?>
</h2>
        <p class="pull-right"><a href="album.php?do=edit" class="btn"><?php echo $this->_tpl_vars['_click_add']; ?>
</a></p>
      </div>
      <div class="mod">
        <div class="mod-hd">
          <h2><?php echo $this->_tpl_vars['_upload_business_license']; ?>
</h2>
        </div>
        <div class="mod-bd">
          <table cellspacing="0" id="dataTable" class="datas">
            <thead>
            <tr>
              <td><?php echo $this->_tpl_vars['_picture']; ?>
</td>
              <td><?php echo $this->_tpl_vars['_details']; ?>
</td>
              <td><?php echo $this->_tpl_vars['_operation']; ?>
</td>
            </tr>
            </thead>
            <tbody>
                  <?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                  <tr>
                  <td><a href="album.php?do=edit&id=<?php echo $this->_tpl_vars['item']['attachment_id']; ?>
"><img src="<?php echo $this->_tpl_vars['item']['image']; ?>
" alt="" border="0" width="80" height="80" style="padding: 6px; border: 1px solid #CCC; background-color: #FFF;"/></a></td>
                  <td>
              <p><b><?php echo $this->_tpl_vars['_title']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</b><?php echo $this->_tpl_vars['item']['title']; ?>
</p>
                    <p><b><?php echo $this->_tpl_vars['_description']; ?>
</b><?php echo $this->_tpl_vars['item']['description']; ?>
</p>
                  </td>
              <td><a href="album.php?do=edit&id=<?php echo $this->_tpl_vars['item']['attachment_id']; ?>
"><?php echo $this->_tpl_vars['_modify']; ?>
</a>&nbsp;<a href="album.php?do=del&id=<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['_delete']; ?>
</a></td>
                  </tr>
                  <?php endforeach; else: ?>
                  <tr><td colspan="2"><div align="center"><?php echo $this->_tpl_vars['_no_datas_now']; ?>
</div></td></tr>
                  <?php endif; unset($_from); ?>
            </tbody>
          </table>
        </div>
      </div>
      <div>
        <?php echo $this->_tpl_vars['ByPages']; ?>

      </div>
     
</div>
</div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>