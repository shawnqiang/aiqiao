<?php /* Smarty version 2.6.18, created on 2012-01-19 08:18:35
         compiled from default/brand/list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'pager', 'default/brand/list.html', 18, false),array('function', 'the_url', 'default/brand/list.html', 70, false),array('block', 'news', 'default/brand/list.html', 46, false),array('block', 'brand', 'default/brand/list.html', 59, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['page_title']),'nav_id' => 10)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="main" class="container">
    <div class="breadcrumb"><span><?php echo $this->_tpl_vars['position']; ?>
</span></div>  
    <div class="mod">
            <div class="mod-hd"><h2><?php echo $this->_tpl_vars['_sort_choose']; ?>
</h2></div>
            <div class="mod-bd">
            <?php $_from = $this->_tpl_vars['Types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item1']):
?>
                <a href="brand/list.php?catid=<?php echo $this->_tpl_vars['item1']['id']; ?>
"><span>&bull; <?php echo $this->_tpl_vars['item1']['name']; ?>
</span></a> 
            <?php endforeach; endif; unset($_from); ?> 
            </div>
    </div>

    <div class="row">
        <div class="main-content l-col span13">
            <div class="mod">
                <div class="mod-hd">
                    <div class="pagination2"><?php echo smarty_function_pager(array('rowcount' => ($this->_tpl_vars['paging']['total'])), $this);?>
</div>
                </div>
                <div class="mod-bd">
                    <ul class="info-list media-list">
                        <?php $_from = $this->_tpl_vars['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                         <li class="item-fifth">
                            <a class="image" href="brand/detail.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
"><img src="<?php echo $this->_tpl_vars['item']['image']; ?>
" /></a>
                            <p class="title"><a href="brand/detail.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['name']; ?>
</a></p>
                         </li>
                        <?php endforeach; else: ?>
                            <span style="margin-left:20px;"><?php echo $this->_tpl_vars['_no_brand_and_add']; ?>
</span>
                        <?php endif; unset($_from); ?>
                                 
                    </ul>
                </div>
                <div class="mod-ft">
                    <div class="pagination2"><?php echo smarty_function_pager(array('rowcount' => ($this->_tpl_vars['paging']['total'])), $this);?>
</div>
                </div>
            </div>  
        </div>

        <div class="side-bar r-col span4">
            <div class="mod">
                <div class="mod-hd">
                    <h2><?php echo $this->_tpl_vars['_latest_news']; ?>
</h2>
                </div>
                <div class="mod-bd">
                    <ul>
                        <?php $this->_tag_stack[] = array('news', array('typeid' => 1,'row' => 10,'name' => 'item')); $_block_repeat=true;smarty_block_news($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                         <li><a href="<?php echo $this->_tpl_vars['item']['url']; ?>
">&bull; <?php echo $this->_tpl_vars['item']['title']; ?>
</a></li>
                        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_news($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                    </ul>
                </div>
            </div>

            <div class="mod">
                <div class="mod-hd">
                     <h2><?php echo $this->_tpl_vars['_brands']; ?>
 <?php echo $this->_tpl_vars['_commend']; ?>
</h2>
                </div>
                <div class="mod-bd">
                    <ul>
                        <?php $this->_tag_stack[] = array('brand', array('type' => 'commend','row' => 12)); $_block_repeat=true;smarty_block_brand($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                         <li><?php echo $this->_tpl_vars['brand']['link']; ?>
</li>
                        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_brand($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>  
</div>
	
<script>
$("#SearchFrm").attr("action","<?php echo smarty_function_the_url(array('module' => 'search','do' => 'brand'), $this);?>
");
$("#topMenuProduct").addClass("lcur");
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>