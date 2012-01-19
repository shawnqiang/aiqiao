<?php /* Smarty version 2.6.18, created on 2012-01-19 08:27:19
         compiled from default/market/detail.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'the_attachment', 'default/market/detail.html', 19, false),array('block', 'market', 'default/market/detail.html', 30, false),array('block', 'offer', 'default/market/detail.html', 41, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['page_title']),'nav_id' => 7)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script src="scripts/jquery.autoresize.js" charset="<?php echo $this->_tpl_vars['charset']; ?>
"></script>
<?php echo '
<script>
$(document).ready(function(){
    $(\'.all_left_con\').autoResize({width: 600});  //ÓÃ·¨
});
</script>
'; ?>

<div id="main" class="container">
    <div class="breadcrumb"><span><?php echo $this->_tpl_vars['position']; ?>
</span></div>
    <div class="row">
        <div class="main-content l-col span13">
            <div class="mod">
                <div class="mod-hd">
                     <h3><?php echo $this->_tpl_vars['item']['name']; ?>
</h3>
                </div>
                <div class="mod-bd">
                     <div><?php echo smarty_function_the_attachment(array('name' => ($this->_tpl_vars['item']['picture'])), $this);?>
<br><?php echo $this->_tpl_vars['item']['content']; ?>
</div>
                </div>
            </div>  
        </div>

        <div class="side-bar r-col span4">
            <div class="mod">
                <div class="mod-hd">
                    <h3><?php echo $this->_tpl_vars['_news_market']; ?>
</h3>
                </div>
                <div class="mod-bd">
                    <?php $this->_tag_stack[] = array('market', array('row' => 10)); $_block_repeat=true;smarty_block_market($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                        <p><?php echo $this->_tpl_vars['market']['link']; ?>
</p>
                    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_market($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                </div>
            </div>
            
            <div class="mod">
                <div class="mod-hd">
                    <h3><?php echo $this->_tpl_vars['_new_offer']; ?>
</h3>
                </div>
                <div class="mod-bd">
                    <?php $this->_tag_stack[] = array('offer', array('row' => 10,'orderby' => "rand()",'titlelen' => '15','name' => 'item')); $_block_repeat=true;smarty_block_offer($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                        <p><?php echo $this->_tpl_vars['item']['link']; ?>
</p>
                    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_offer($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
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