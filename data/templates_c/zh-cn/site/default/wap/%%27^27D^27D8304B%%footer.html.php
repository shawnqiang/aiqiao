<?php /* Smarty version 2.6.18, created on 2012-01-06 02:20:51
         compiled from default/wap/footer.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'the_url', 'default/wap/footer.html', 4, false),array('modifier', 'date_format', 'default/wap/footer.html', 8, false),)), $this); ?>
<br/>
<a href="javascript:window.history.back();"><?php echo $this->_tpl_vars['_go_back']; ?>
</a>
<a href="javascript:window.refresh();"><?php echo $this->_tpl_vars['_refresh_page']; ?>
</a>
<a href="<?php echo smarty_function_the_url(array('module' => 'wap'), $this);?>
">WAP<?php echo $this->_tpl_vars['_home_page']; ?>
</a>
<a href="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
" target="_blank" style="background: url(<?php echo $this->_tpl_vars['WebRootUrl']; ?>
<?php echo $this->_tpl_vars['theme_img_path']; ?>
wap/images/external.png) center right no-repeat;padding-right: 13px;"><?php echo $this->_tpl_vars['_webpage_version']; ?>
</a>
<br/>
<br/><?php echo $this->_tpl_vars['_service_hotline']; ?>
<?php echo $this->_tpl_vars['service_tel']; ?>
<br/>
<small><?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m/%d/%Y %H:%M") : smarty_modifier_date_format($_tmp, "%m/%d/%Y %H:%M")); ?>
</small><br/>
<a href="http://wap.phpb2b.com/" target="_blank" style="text-decoration:none;color:#000000;background: url(<?php echo $this->_tpl_vars['WebRootUrl']; ?>
<?php echo $this->_tpl_vars['theme_img_path']; ?>
wap/images/external.png) center right no-repeat;padding-right: 13px;"><cite>Powered by PHPB2B</cite></a>
</div>
</body>
</html>