<?php /* Smarty version 2.6.18, created on 2012-01-02 16:55:26
         compiled from default/company/index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'company', 'default/company/index.html', 22, false),array('block', 'area', 'default/company/index.html', 36, false),array('function', 'get', 'default/company/index.html', 65, false),array('function', 'the_url', 'default/company/index.html', 68, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['_yellow_page']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="main" class="container">
    <div class="row">
        <div class="span4 side-bar">
            <div class="mod">
                <div class="mod-hd">
                    <h3><?php echo $this->_tpl_vars['_yellow_page']; ?>
</h3>
                </div>
                <div class="mod-bd">
                    <?php echo $this->_tpl_vars['_find_marketing_company']; ?>

                    <p><a href="<?php if ($this->_tpl_vars['reg_filename'] != ''): ?><?php echo $this->_tpl_vars['reg_filename']; ?>
<?php else: ?>register.php<?php endif; ?>?type=company" class="submit_w118"><?php echo $this->_tpl_vars['_add_company']; ?>
</a></p>
                    <p class="hotline"><?php echo $this->_tpl_vars['_hotline']; ?>
<?php echo $this->_tpl_vars['service_tel']; ?>
</p>
                </div>
            </div>  
            
            <div class="mod">
                <div class="mod-hd">
                    <h3><?php echo $this->_tpl_vars['_new_recommended_company']; ?>
</h3>
                </div>
                <div class="mod-bd">
                    <ul>
                        <?php $this->_tag_stack[] = array('company', array('row' => 11,'name' => 'item')); $_block_repeat=true;smarty_block_company($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                        <li><?php echo $this->_tpl_vars['item']['link']; ?>
</li>
                        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_company($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                    </ul>
                </div>
            </div>
            
            <div class="mod">
                <div class="mod-hd">
                    <h3><?php echo $this->_tpl_vars['_sub_area']; ?>
</h3>
                </div>
                <div class="mod-bd">
                    <ul>
                    <?php $this->assign('do', 'company'); ?>
                    <?php $this->_tag_stack[] = array('area', array('level' => 1,'name' => 'area')); $_block_repeat=true;smarty_block_area($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                        <li><a href="<?php echo $this->_tpl_vars['area']['url']; ?>
"><?php echo $this->_tpl_vars['area']['title']; ?>
</a></li>
                    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_area($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                    </ul>
                </div>
            </div>
            
            <div class="mod">
                <div class="mod-hd">
                     <h3><?php echo $this->_tpl_vars['_join_company']; ?>
</h3>
                </div>
                <div class="mod-bd">
                    <ul>
                        <?php $this->_tag_stack[] = array('company', array('row' => 10,'name' => 'item')); $_block_repeat=true;smarty_block_company($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                        <li><?php echo $this->_tpl_vars['item']['link']; ?>
</li>
                        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_company($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                    </ul>
                </div>
            </div>  


        </div>

        <div class="span13 main-content">
            <div class="mod">
                <div class="mod-hd">
                    <h4><span class="titlebg_m title_mouse"><?php echo $this->_tpl_vars['_industry_sort']; ?>
</span></h4>
                </div>
                <div class="mod-bd">
                    <?php echo smarty_function_get(array('var' => 'IndustryList','from' => 'industry'), $this);?>

                    <?php $_from = $this->_tpl_vars['IndustryList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['level_0'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['level_0']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key0'] => $this->_tpl_vars['item0']):
        $this->_foreach['level_0']['iteration']++;
?>
                    <div class="co_type_c_title clearfix">
                    <span class="more"><a href="<?php echo smarty_function_the_url(array('module' => 'special','type' => 'industry','do' => 'company','id' => ($this->_tpl_vars['item0']['id'])), $this);?>
"><?php echo $this->_tpl_vars['_more']; ?>
</a></span>
                    <h3><em><a href="<?php echo smarty_function_the_url(array('module' => 'search','do' => 'company','industryid' => ($this->_tpl_vars['item0']['id'])), $this);?>
"><?php echo $this->_tpl_vars['item0']['name']; ?>
</a></em></h3>
                    </div>
                    <ul class="clearfix">
                    <?php if ($this->_tpl_vars['item0']['sub']): ?>
                    <?php $_from = $this->_tpl_vars['item0']['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['level_1_industry'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['level_1_industry']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key_level1'] => $this->_tpl_vars['level1']):
        $this->_foreach['level_1_industry']['iteration']++;
?>
                       <li>
                        <a href="<?php echo smarty_function_the_url(array('module' => 'search','do' => 'company','industryid' => ($this->_tpl_vars['level1']['id'])), $this);?>
" title="<?php echo $this->_tpl_vars['level1']['name']; ?>
" class="co_type_f"><?php echo $this->_tpl_vars['level1']['name']; ?>
</a>
                        <br />
                        <?php $_from = $this->_tpl_vars['level1']['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['level_2_industry'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['level_2_industry']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key_level2'] => $this->_tpl_vars['level2']):
        $this->_foreach['level_2_industry']['iteration']++;
?>
                        <a href="<?php echo smarty_function_the_url(array('module' => 'search','do' => 'company','industryid' => ($this->_tpl_vars['level2']['id'])), $this);?>
" title="<?php echo $this->_tpl_vars['level2']['name']; ?>
"><?php echo $this->_tpl_vars['level2']['name']; ?>
</a><em>|</em>
                        <?php endforeach; endif; unset($_from); ?>
                    </li>
                    
                    <?php endforeach; endif; unset($_from); ?>
                    <?php endif; ?>
                    </ul>
                    <?php endforeach; endif; unset($_from); ?>
                </div>

            </div>  

        </div>
    </div>
</div>

<script>
$("#SearchFrm").attr("action","<?php echo smarty_function_the_url(array('module' => 'search'), $this);?>
");
$("#hdDo").val("company");
$("#topMenuCompany").addClass("lcur");
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>