<?php /* Smarty version 2.6.18, created on 2012-01-01 05:59:09
         compiled from index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'sprintf', 'index.html', 20, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript">
var menu = <?php echo $this->_tpl_vars['ActionMenus']; ?>
;
var currTab = 'dashboard';
var firstOpen = [];
</script>
<script type="text/javascript" src="js/index.js" charset="<?php echo $this->_tpl_vars['charset']; ?>
"></script>
<div class="back_nav">
    <div class="back_nav_list">
        <dl>
            <dt><?php echo $this->_tpl_vars['menu']['text']; ?>
</dt>
            <dd><a href="javascript:;" onclick="openItem('<?php echo $this->_tpl_vars['sub_key']; ?>
','<?php echo $this->_tpl_vars['key']; ?>
');none_fn();"><?php echo $this->_tpl_vars['sub_menu']['text']; ?>
</a></dd>
        </dl>
    </div>
    <div class="shadow"></div>
    <div class="close_float"><img src="images/close2.gif" /></div>
</div>
<div id="head">
    <div id="logo"><img src="images/phpb2b_logo.png" /></div>
    <div id="menu"><span><?php echo ((is_array($_tmp=$this->_tpl_vars['_hello'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, "<strong>".($this->_tpl_vars['current_adminer'])."</strong>") : sprintf($_tmp, "<strong>".($this->_tpl_vars['current_adminer'])."</strong>")); ?>
 [<a href="login.php?action=dereg" target="_self" title="<?php echo $this->_tpl_vars['_use_other_account']; ?>
"><?php echo $this->_tpl_vars['_off']; ?>
</a>,<a href="adminer.php?do=profile" title="<?php echo $this->_tpl_vars['_set_your_personal_info']; ?>
" target="workspace"><?php echo $this->_tpl_vars['_account_set']; ?>
</a>,<a href="../logging.php?action=logout&fr=cp"><?php echo $this->_tpl_vars['_login_out']; ?>
</a>]</span>
    <a href="<?php echo $this->_tpl_vars['SiteUrl']; ?>
index.php" target="_blank" class="menu_btn1" title="<?php echo $this->_tpl_vars['_back_to_homepage']; ?>
"><?php echo $this->_tpl_vars['_browse_homepage']; ?>
</a>
    <a href="javascript:;" class="menu_btn1" id="iframe_refresh" title="<?php echo $this->_tpl_vars['_refresh_the_page']; ?>
"><?php echo $this->_tpl_vars['_refresh']; ?>
</a>
    </div>
    <ul id="nav"></ul>
    <div id="headBg"></div>
</div>
<div id="content">
    <div id="left">
        <div id="leftMenus">
            <dl id="submenu">
                <dt><a class="ico1" id="submenuTitle" href="javascript:;"></a></dt>
            </dl>
         </div>
		<div class="copyright">
			<p>Powered by <?php echo $this->_tpl_vars['_soft_name']; ?>
 <?php echo @PHPB2B_VERSION; ?>
</p>
			<p>&copy; 2007-2011 <a href="http://www.phpb2b.com/" target="_blank">UALINK</a> Inc.</p>
		</div>
    </div>
    <div id="right">
        <iframe frameborder="0" style="display:none;" width="100%" id="workspace" name="workspace"></iframe>
    </div>
    <div class="clear"></div>
</div>
</body>
</html>