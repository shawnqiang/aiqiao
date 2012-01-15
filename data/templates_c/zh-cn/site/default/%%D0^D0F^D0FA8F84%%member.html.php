<?php /* Smarty version 2.6.18, created on 2012-01-11 16:21:57
         compiled from default/member.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'urlencode', 'default/member.html', 35, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['_member_reg']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
<style type="text/css">  
label.error {
  font-weight: bold;
  color: #b80000;
}
</style>
'; ?>

<div id="main" class="container">
  <div class="subnav">
    <div class="alert-message"><span class="step_01"><?php echo $this->_tpl_vars['_fill_reg_info']; ?>
</span><span class="step_02"><?php echo $this->_tpl_vars['_reg_success']; ?>
</span></div>
  </div>
  <div class="mod">
    <div class="mod-hd">
      <h2><span class="title_mouse"><?php echo $this->_tpl_vars['_choose_reg_type']; ?>
</span><span class="title_telephone"><?php echo $this->_tpl_vars['_issue_contact']; ?>
<?php echo $this->_tpl_vars['service_tel']; ?>
</span></h2>
    </div>
    <div class="mod-bd">
      <h3><?php echo $this->_tpl_vars['_choose_reg_type_conditions']; ?>
</h3>
      <div class="row">
             <div class="span12">
                <table class="reg_member_list no_outline">
                  <tr>
                    <?php $_from = $this->_tpl_vars['MemberTypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                    <th><?php echo $this->_tpl_vars['item']['name']; ?>
</th>
                    <?php endforeach; endif; unset($_from); ?>
                  </tr>
                  <tr>
                    <?php $_from = $this->_tpl_vars['MemberTypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                    <td width="25%"><p><?php echo $this->_tpl_vars['item']['description']; ?>
</p></td>
                    <?php endforeach; endif; unset($_from); ?>
                  </tr>
                  <tr>
                    <?php $_from = $this->_tpl_vars['MemberTypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                    <td><a href="<?php if ($this->_tpl_vars['reg_filename'] != ''): ?><?php echo $this->_tpl_vars['reg_filename']; ?>
<?php else: ?>register.php<?php endif; ?>?typename=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
" class="btn"><?php echo $this->_tpl_vars['_register_now']; ?>
<?php echo $this->_tpl_vars['item']['name']; ?>
</a></td>
                    <?php endforeach; endif; unset($_from); ?>
                  </tr>
                </table>
             </div>
             <div class="span4 pull-right"><?php echo $this->_tpl_vars['SiteDescription']; ?>
</div>
      </div>
    </div>
  </div>

</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>