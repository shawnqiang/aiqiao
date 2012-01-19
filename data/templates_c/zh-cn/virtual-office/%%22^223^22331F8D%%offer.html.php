<?php /* Smarty version 2.6.18, created on 2012-01-19 10:02:44
         compiled from offer.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'formhash', 'offer.html', 24, false),)), $this); ?>
<?php $this->assign('page_title', ($this->_tpl_vars['_offer'])); ?>
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
<a title="<?php echo $this->_tpl_vars['_release']; ?>
<?php echo $this->_tpl_vars['ActionName']; ?>
" href="offer.php?do=edit" class="btn pull-right"><?php echo $this->_tpl_vars['_release_supply']; ?>
</a></h2>
      </div>
      <div class="notice">
        <?php echo $this->_tpl_vars['_tips_no_repeat']; ?>

      </div>
      <div class="sum">
        <p><strong><?php echo $this->_tpl_vars['_success_release']; ?>
<span class="font14b_org"> <?php echo $this->_tpl_vars['Amount']; ?>
</span> <?php echo $this->_tpl_vars['_number']; ?>
<?php echo $this->_tpl_vars['ActionName']; ?>
<?php echo $this->_tpl_vars['_information_g']; ?>
</strong></p>
        
      </div>
    
      
      <form name="listfrm" action="<?php echo $_SERVER['PHP_SELF']; ?>
" method="post">
	     <?php echo smarty_function_formhash(array(), $this);?>

          <table>
            <tbody>
              <tr>
                <th><?php echo $this->_tpl_vars['_type']; ?>
</th>
                <th><?php echo $this->_tpl_vars['_theme']; ?>
</th>
                <th><?php echo $this->_tpl_vars['_due_date']; ?>
</th>
                <th><?php echo $this->_tpl_vars['_state']; ?>
</th>
                <th><?php echo $this->_tpl_vars['_operation']; ?>
</th>
                <th><?php echo $this->_tpl_vars['_choose']; ?>
</th>
              </tr>
              <?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
              <tr>
                <td>[<a href="offer.php?typeid=<?php echo $this->_tpl_vars['item']['type_id']; ?>
"><?php echo $this->_tpl_vars['TradeTypes'][$this->_tpl_vars['item']['type_id']]; ?>
</a>]</td>
                <td><div style="text-align:left; font-weight:bold;"><a href="offer.php?do=edit&id=<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['title']; ?>
</a><?php if ($this->_tpl_vars['item']['picture'] != ""): ?>&nbsp;<?php echo $this->_tpl_vars['_picture']; ?>
<?php endif; ?></div></td>
                <td><?php if ($this->_tpl_vars['item']['expire_time'] < $this->_tpl_vars['TimeStamp']): ?><?php echo $this->_tpl_vars['_has_expired']; ?>
<?php else: ?><?php echo $this->_tpl_vars['item']['expire_date']; ?>
<?php endif; ?></td>
                <td><?php echo $this->_tpl_vars['CheckStatus'][$this->_tpl_vars['item']['status']]; ?>
</td>
                <td><a href="offer.php?do=edit&id=<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['_modify']; ?>
</a>&nbsp;&nbsp;<?php if ($this->_tpl_vars['item']['status'] == 1): ?><a href="offer.php?do=refresh&id=<?php echo $this->_tpl_vars['item']['id']; ?>
" title="<?php echo $this->_tpl_vars['_extension_time']; ?>
"><?php echo $this->_tpl_vars['_repeating']; ?>
</a>&nbsp;&nbsp;<a href="offer.php?do=update&id=<?php echo $this->_tpl_vars['item']['id']; ?>
" title="<?php echo $this->_tpl_vars['_update_site']; ?>
"><?php echo $this->_tpl_vars['_update']; ?>
</a><?php endif; ?>&nbsp;&nbsp;<a href="offer.php?do=moderate&id=<?php echo $this->_tpl_vars['item']['id']; ?>
"  onclick="return window.confirm('<?php echo $this->_tpl_vars['_you_should_pay_for_this']; ?>
');"><?php echo $this->_tpl_vars['_bump_to_top']; ?>
</a>&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['SiteUrl']; ?>
offer/detail.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
" target="_blank"><?php echo $this->_tpl_vars['_preview']; ?>
</a></td>
                <td><input name="tradeid[]" type="checkbox" id="id_<?php echo $this->_tpl_vars['item']['id']; ?>
" value="<?php echo $this->_tpl_vars['item']['id']; ?>
"></td>
              </tr>
              <?php endforeach; else: ?>
              <?php endif; unset($_from); ?>
            </tbody>
          </table>
          <div class="actions">
             <input type="submit" name="del" value="<?php echo $this->_tpl_vars['_delete_message']; ?>
" class="btn" onclick="return window.confirm('<?php echo $this->_tpl_vars['_ok_delete']; ?>
');">&nbsp;
              <input type="submit" name="refresh" value="<?php echo $this->_tpl_vars['_repeating_information']; ?>
" class="btn" onclick="return window.confirm<?php echo $this->_tpl_vars['_ok_repeating_information']; ?>
">
          </div>
         
          <div>
            <?php echo $this->_tpl_vars['ByPages']; ?>

          </div>
             
      </form>
      <div>
        <?php echo $this->_tpl_vars['_offer_post_attention']; ?>

      </div>
      
    </div>
  </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>