<?php /* Smarty version 2.6.18, created on 2012-01-19 10:16:20
         compiled from pms.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'formhash', 'pms.html', 20, false),)), $this); ?>
<?php $this->assign('page_title', ($this->_tpl_vars['_sms'])); ?>
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
     <div class="span12 main-bontent r-col">
        <div class="page-header">
          <h2><?php echo $this->_tpl_vars['page_title']; ?>
<a href="pms.php?do=send" class="btn pull-right"><?php echo $this->_tpl_vars['_send_message']; ?>
</a></h2>
        </div>
        <div class="mod">
          <div class="mod-hd">
            <div><?php echo $this->_tpl_vars['_sms_tips']; ?>
</div>
          </div>
          <div class="mod-bd">
             <form name="pmsfrm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>
">
         <?php echo smarty_function_formhash(array(), $this);?>

         <table class="news">
            <tr align="center">
              <th><?php echo $this->_tpl_vars['_choose']; ?>
</th>
              <th><?php echo $this->_tpl_vars['_category']; ?>
</th>
              <th><?php echo $this->_tpl_vars['_theme']; ?>
</th>
              <th><?php echo $this->_tpl_vars['_state']; ?>
</th>
              <th><?php echo $this->_tpl_vars['_time']; ?>
</th>
            </tr>
           <?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
            <tr align="center" class="bggray">
              <td><input type="checkbox" name="id[]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" id="item_<?php echo $this->_tpl_vars['item']['id']; ?>
"></td>
              <td><?php echo $this->_tpl_vars['item']['typename']; ?>
</td>
              <td align="left"><a href="pms.php?do=view&id=<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['title']; ?>
</a></td>
              <td><?php if ($this->_tpl_vars['item']['status'] == 0): ?><span style="color:#FF0000"><?php echo $this->_tpl_vars['MessageStatus'][$this->_tpl_vars['item']['status']]; ?>
</span><?php else: ?><span style="color:#006600"><?php echo $this->_tpl_vars['MessageStatus'][$this->_tpl_vars['item']['status']]; ?>
</span><?php endif; ?></td>
              <td><?php echo $this->_tpl_vars['item']['senddate']; ?>
</td>
            </tr>
         <?php endforeach; endif; unset($_from); ?>
            
        </table> 
          <div><?php echo $this->_tpl_vars['ByPages']; ?>
</div> 
       <div class="actions"><input  name="del" type="submit" class="btn" id="del" value=" <?php echo $this->_tpl_vars['_delete_select']; ?>
 "></div>
      
     
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