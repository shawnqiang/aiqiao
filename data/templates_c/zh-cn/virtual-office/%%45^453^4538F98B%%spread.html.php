<?php /* Smarty version 2.6.18, created on 2012-01-14 11:00:24
         compiled from spread.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'formhash', 'spread.html', 20, false),array('function', 'the_url', 'spread.html', 34, false),)), $this); ?>
<?php $this->assign('page_title', ($this->_tpl_vars['_keyword_adwords'])); ?>
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
     
     <div class="offer_info_title"><h2><?php echo $this->_tpl_vars['page_title']; ?>
</h2></div>
      <table class="offer_count">
         <tr>
          <td>&nbsp;</td>
          <td class="height35"><a title="<?php echo $this->_tpl_vars['_release']; ?>
" href="spread.php?do=edit" class="btn_publish"><?php echo $this->_tpl_vars['_add']; ?>
<?php echo $this->_tpl_vars['_keyword_advertising']; ?>
</a></td>
        </tr>
      </table>      
      <form name="listfrm" action="<?php echo $_SERVER['PHP_SELF']; ?>
" method="post">
	  <?php echo smarty_function_formhash(array(), $this);?>

      <table class="offer_publish_list">
        <tr>
          <td>
          <table class="bglist">
            <tr>
              <th><?php echo $this->_tpl_vars['_words']; ?>
</th>
              <th><?php echo $this->_tpl_vars['_the_title']; ?>
</th>
              <th><?php echo $this->_tpl_vars['_link_address']; ?>
</th>
              <th><?php echo $this->_tpl_vars['_state']; ?>
</th>
              <th><?php echo $this->_tpl_vars['_expire_date']; ?>
</th>
            </tr>
			<?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
            <tr align="center" class="bgwhite">
              <td><a href="<?php echo $this->_tpl_vars['SiteUrl']; ?>
<?php echo smarty_function_the_url(array('module' => 'search','do' => 'product','q' => ($this->_tpl_vars['item']['keyword_name'])), $this);?>
" target="_blank" style="text-decoration:underline;"><?php echo $this->_tpl_vars['item']['keyword_name']; ?>
</a></td>
              <td><?php echo $this->_tpl_vars['item']['title']; ?>
</td>
              <td><a href="<?php echo $this->_tpl_vars['item']['target_url']; ?>
" target="_blank" style="text-decoration:underline;"><?php echo $this->_tpl_vars['item']['target_url']; ?>
</a></td>
              <td><?php echo $this->_tpl_vars['CheckStatus'][$this->_tpl_vars['item']['status']]; ?>
</td>
              <td><?php echo $this->_tpl_vars['item']['exp_date']; ?>
</td>
            </tr>
			<?php endforeach; else: ?>
			<tr><td colspan="6"><a href="spread.php?do=edit"><?php echo $this->_tpl_vars['_no_datas']; ?>
</a></td></tr>
			<?php endif; unset($_from); ?>
          </table></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>
          <table class="room_pages">
              <tr>
                <td><?php echo $this->_tpl_vars['ByPages']; ?>
</td>
              </tr>
          </table>
          </td>
        </tr>
      </table>
      </form>
    </div>
    </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>