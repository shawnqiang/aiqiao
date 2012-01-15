<?php /* Smarty version 2.6.18, created on 2012-01-15 06:39:38
         compiled from default/header.html */

$this->_cache_serials['/home/shawnqiang/www/aiqiao/data/templates_c/zh-cn/site/default//%%81^81F^81F6D955%%header.html.inc'] = '086d8fed3836e31b081d0d1cb53cab89';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strip_tags', 'default/header.html', 7, false),array('modifier', 'truncate_multi', 'default/header.html', 8, false),array('modifier', 'sprintf', 'default/header.html', 82, false),array('modifier', 'default', 'default/header.html', 118, false),array('function', 'the_url', 'default/header.html', 20, false),array('function', 'get_cache', 'default/header.html', 78, false),array('block', 'cacheless', 'default/header.html', 68, false),)), $this); ?>
<?php
function _smarty_tplfunc_086d8fed3836e31b081d0d1cb53cab89_0(&$_smarty)
{
$_smarty->_tag_stack[] = array('cacheless', array()); $_block_repeat=true;smarty_block_cacheless($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], null, $_smarty, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
        <ul class="unstyled">
            <li class="pull-left">
                <a class="index" href="javascript:;" onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('<?php echo $_smarty->_tpl_vars['SiteUrl']; ?>
');"><?php echo $_smarty->_tpl_vars['_set_home_page']; ?>
</a>
                <a href="<?php echo $_SERVER['REQUEST_URI']; ?>
" onclick="javascript:window.external.addFavorite(this.href, this.title);return false;" rel="sidebar" title="<?php echo $_smarty->_tpl_vars['site_name']; ?>
"><?php echo $_smarty->_tpl_vars['_add_favorite']; ?>
</a>
            </li>
            <li class="pull-right">
                <a href="service/"><?php echo $_smarty->_tpl_vars['_customer_service']; ?>
</a>
                <a href="offer/post.php"><?php echo $_smarty->_tpl_vars['_free_post']; ?>
</a>
                <a href="standard/"><?php echo $_smarty->_tpl_vars['_standards']; ?>
</a>
                <span id="language_bar"><?php echo smarty_function_get_cache(array('name' => 'language'), $_smarty);?>
</span>
            </li>
            <li style="text-align:center;">
                <?php if ($_smarty->_tpl_vars['pb_username'] != ""): ?>
                <span id="hdLoginBar"><em><?php echo ((is_array($_tmp=$_smarty->_tpl_vars['_hello'])) ? $_smarty->_run_mod_handler('sprintf', true, $_tmp, $_smarty->_tpl_vars['pb_username']) : sprintf($_tmp, $_smarty->_tpl_vars['pb_username'])); ?>
&nbsp;</em>
                <a href="redirect.php?url=/virtual-office/" target="_blank">[<?php echo $_smarty->_tpl_vars['_my_office_room']; ?>
]</a>
                <?php if ($_smarty->_tpl_vars['is_admin']): ?><a href="pb-admin/login.php" target="_admin">[<?php echo $_smarty->_tpl_vars['_control_pannel']; ?>
]</a><?php endif; ?>
                <a href="logging.php?action=logout">[<?php echo $_smarty->_tpl_vars['_login_out']; ?>
]</a></span>
                <?php else: ?>
                <span id="hdLoginBar"><em><?php echo ((is_array($_tmp=$_smarty->_tpl_vars['_hello_welcome_to'])) ? $_smarty->_run_mod_handler('sprintf', true, $_tmp, $_smarty->_tpl_vars['site_name']) : sprintf($_tmp, $_smarty->_tpl_vars['site_name'])); ?>
</em>
                <a href="logging.php">&nbsp;[<?php echo $_smarty->_tpl_vars['_pls_login']; ?>
]</a>
                <a href="member.php" title="<?php echo $_smarty->_tpl_vars['_register']; ?>
" ><strong>[<?php echo $_smarty->_tpl_vars['_free']; ?>
 <?php echo $_smarty->_tpl_vars['_register']; ?>
]</strong></a></span>
                <?php endif; ?>
            </li>

            
        </ul>
        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_cacheless($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], $_block_content, $_smarty, $_block_repeat); }  array_pop($_smarty->_tag_stack); 
}



?>
