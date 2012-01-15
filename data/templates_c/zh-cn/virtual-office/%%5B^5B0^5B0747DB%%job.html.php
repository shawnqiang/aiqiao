<?php /* Smarty version 2.6.18, created on 2012-01-14 10:50:37
         compiled from job.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'formhash', 'job.html', 19, false),array('function', 'cycle', 'job.html', 31, false),array('modifier', 'truncate', 'job.html', 32, false),array('modifier', 'strip_tags', 'job.html', 32, false),)), $this); ?>
<?php $this->assign('page_title', ($this->_tpl_vars['_company_job'])); ?>
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
         <a href="job.php?do=edit"  class="btn"><?php echo $this->_tpl_vars['_add']; ?>
</a><?php echo $this->_tpl_vars['_job_list']; ?>

       </div>
       <div class="mod-bd">
         <form name="TradeFrm" method="post" action="<?php echo $_ENV['PHP_SELF']; ?>
">
    <?php echo smarty_function_formhash(array(), $this);?>

      <table class="news">
              <tr>
                <th><p align="left"><strong><?php echo $this->_tpl_vars['_job_title']; ?>
</strong></p></th>
                <th  align="center"><strong><?php echo $this->_tpl_vars['_created_date']; ?>
</strong></th>
                <th align="center" ><strong><?php echo $this->_tpl_vars['_due_date']; ?>
</strong></th>
                <th align="center" ><strong><?php echo $this->_tpl_vars['_status']; ?>
</strong></th>
                <th align="center"><strong><?php echo $this->_tpl_vars['_operation']; ?>
</strong></th>
                </tr>
              <tr>
          <td height="5" colspan="4" align="center" valign="middle"></td></tr>
        <?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
        <tr bgcolor="<?php echo smarty_function_cycle(array('values' => "#F3F3F3,#ffffff"), $this);?>
">
              <td height="25" align="left"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 25) : smarty_modifier_truncate($_tmp, 25)))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
</td>
          <td align="center" valign="middle"><?php echo $this->_tpl_vars['item']['pubdate']; ?>
</td>
          <td align="center" valign="middle"><?php echo $this->_tpl_vars['item']['expire_date']; ?>
</td>
          <td align="center" valign="middle"><?php echo $this->_tpl_vars['CheckStatus'][$this->_tpl_vars['item']['status']]; ?>
</td>
          <td align="center" valign="bottom"><a href="job.php?do=edit&id=<?php echo $this->_tpl_vars['item']['id']; ?>
" target="_self"><?php echo $this->_tpl_vars['_modify']; ?>
</a>&nbsp;<a href="job.php?do=del&id=<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['_delete']; ?>
</a></td>
          </tr>
              <?php endforeach; else: ?>
              <tr><td colspan="4"><div align="center"><?php echo $this->_tpl_vars['_no_datas_now']; ?>
</div></td></tr>
        <?php endif; unset($_from); ?>

          </table>
         
    </form>
       </div>
    
        
		
</div>
</div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>