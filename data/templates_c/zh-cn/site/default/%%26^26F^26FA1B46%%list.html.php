<?php /* Smarty version 2.6.18, created on 2012-01-06 06:24:10
         compiled from default/fair/list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'the_url', 'default/fair/list.html', 16, false),array('function', 'pager', 'default/fair/list.html', 24, false),array('modifier', 'date_format', 'default/fair/list.html', 18, false),array('modifier', 'sprintf', 'default/fair/list.html', 32, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['page_title']),'nav_id' => 5)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="main" class="container">
  <div class="breadcrumb"><span><?php echo $this->_tpl_vars['position']; ?>
</span></div>
  <div class="row">
    <div class="span13">
      <div class="mod">
        <div class="mod-hd">
          <h2><span class="title_mouse"><?php echo $this->_tpl_vars['_search_result']; ?>
</span></h2> 
        </div>
        <div class="mod-bd">
          <div class="base_list_content clearfix">  
              <?php $_from = $this->_tpl_vars['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['fair'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fair']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['fair']['iteration']++;
?>
                <div class="base_list clearfix">
                    <?php if ($this->_tpl_vars['item']['picture']): ?><div class="base_list_img"><img src="<?php echo $this->_tpl_vars['item']['image']; ?>
" /></div><?php endif; ?>
                    <div class="base_list_info">
                      <span class="title title_link"><a href="<?php echo smarty_function_the_url(array('module' => 'fair','id' => ($this->_tpl_vars['item']['id'])), $this);?>
"><?php echo $this->_tpl_vars['item']['title']; ?>
</a></span>
                      <p> <?php echo $this->_tpl_vars['item']['description']; ?>
</p>
                      <div class="update_time"><em><?php echo $this->_tpl_vars['_fair_time']; ?>
(<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['begin_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y.%m.%d") : smarty_modifier_date_format($_tmp, "%Y.%m.%d")); ?>
-<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['end_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y.%m.%d") : smarty_modifier_date_format($_tmp, "%Y.%m.%d")); ?>
)</em><?php echo $this->_tpl_vars['_categories']; ?>
[<a href="<?php echo smarty_function_the_url(array('module' => 'search','do' => 'fair','typeid' => ($this->_tpl_vars['item']['expotype_id'])), $this);?>
"><?php echo $this->_tpl_vars['item']['typename']; ?>
</a>]</div>
                      <div class="txt_source"><span class="fr link-underline"><a href="<?php echo smarty_function_the_url(array('module' => 'fair','id' => ($this->_tpl_vars['item']['id'])), $this);?>
"><?php echo $this->_tpl_vars['_visit_full_content']; ?>
...</a></span></div>
                  </div>
                 </div>
                 <hr class="hr_dashed" />
               <?php endforeach; endif; unset($_from); ?>
                <div><div class="pagination2"><?php echo smarty_function_pager(array('rowcount' => ($this->_tpl_vars['paging']['total'])), $this);?>
</div></div>
           </div>
        </div>
      </div>  
    </div>
    <div class="span4">
        <div class="mod">
          <div class="mod-hd">
            <h3><?php echo ((is_array($_tmp=$this->_tpl_vars['_area_choose'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, $this->_tpl_vars['the_area']) : sprintf($_tmp, $this->_tpl_vars['the_area'])); ?>
</h3>
          </div>
          <div class="mod-bd">
            <p>
              <?php $_from = $this->_tpl_vars['Areas'][1]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['area_key'] => $this->_tpl_vars['area_item']):
?>
              <a href="<?php echo smarty_function_the_url(array('module' => 'search','do' => 'fair','areaid' => ($this->_tpl_vars['area_key'])), $this);?>
"><?php echo $this->_tpl_vars['area_item']; ?>
</a><br />
              <?php endforeach; endif; unset($_from); ?>
            </p>
          </div>
        </div>
        <div class="mod">
          <div class="mod-hd">
            <h3><?php echo $this->_tpl_vars['_sort_choose']; ?>
</h3>
          </div>
          <div class="mod-bd">
            <p>
              <?php $_from = $this->_tpl_vars['Type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
                <a href="<?php echo smarty_function_the_url(array('module' => 'search','do' => 'fair','typeid' => ($this->_tpl_vars['key'])), $this);?>
"><?php echo $this->_tpl_vars['item']; ?>
</a><br />
              <?php endforeach; endif; unset($_from); ?>
            </p>
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