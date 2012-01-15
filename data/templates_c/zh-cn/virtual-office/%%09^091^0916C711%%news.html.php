<?php /* Smarty version 2.6.18, created on 2012-01-14 10:47:05
         compiled from news.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'formhash', 'news.html', 19, false),array('modifier', 'truncate', 'news.html', 32, false),)), $this); ?>
<?php $this->assign('page_title', ($this->_tpl_vars['_companynews'])); ?>
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
       <h2><?php echo $this->_tpl_vars['page_title']; ?>
</h2>
     </div>
     <div class="mod">
       <div class="mod-hd">
         <a href="news.php?do=edit" class="btn"><?php echo $this->_tpl_vars['_post_companynews']; ?>
</a></span><?php echo $this->_tpl_vars['_add_news_show']; ?>

       </div>
       <div class="mod-bd">
         <form name="newsfrm" action="<?php echo $_SERVER['PHP_SELF']; ?>
" method="post">
    <?php echo smarty_function_formhash(array(), $this);?>

            <table class="news">
                <tr>
                  <th><input name="newsidAll" type="checkbox" id="check_all" title="<?php echo $this->_tpl_vars['_all_select']; ?>
"></th>
                  <th><?php echo $this->_tpl_vars['_title']; ?>
</th>
                  <th><?php echo $this->_tpl_vars['_category']; ?>
</th>
                  <th><?php echo $this->_tpl_vars['_state']; ?>
</th>
                  <th><?php echo $this->_tpl_vars['_time']; ?>
</th>
                  <th><?php echo $this->_tpl_vars['_operation']; ?>
</th>
                </tr>
        <?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                <tr align="center" class="bggray">
                  <td><input name="newsid[]" type="checkbox" id="newsid[]" rel="checkk_item" value="<?php echo $this->_tpl_vars['item']['CompanynewsId']; ?>
"></td>
                  <td><a href="news.php?do=edit&id=<?php echo $this->_tpl_vars['item']['CompanynewsId']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['CompanynewsTitle'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 25) : smarty_modifier_truncate($_tmp, 25)); ?>
</a></td>
                  <td><?php echo $this->_tpl_vars['CompanynewsTypes'][$this->_tpl_vars['item']['type_id']]; ?>
</td>
                  <td><?php echo $this->_tpl_vars['CheckStatus'][$this->_tpl_vars['item']['status']]; ?>
</td>
                  <td><?php echo $this->_tpl_vars['item']['pubdate']; ?>
</td>
                  <td><a href="news.php?do=edit&id=<?php echo $this->_tpl_vars['item']['CompanynewsId']; ?>
"><?php echo $this->_tpl_vars['_modify']; ?>
</a></td>
                </tr>
        <?php endforeach; else: ?>
        <?php endif; unset($_from); ?>
            </table>
            <table class="room_pages">
          <tr>
            <td><?php echo $this->_tpl_vars['ByPages']; ?>
</td>
          </tr>
          </table>
            <table class="trade_line">
               
          
          <tr align="center" valign="bottom">
            <td height="40"><input name="del" type="submit" class="btn" id="delete" value="<?php echo $this->_tpl_vars['_delete_select']; ?>
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
