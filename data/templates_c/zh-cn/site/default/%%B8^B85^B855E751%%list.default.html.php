<?php /* Smarty version 2.6.18, created on 2012-01-15 07:30:01
         compiled from default/list.default.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'the_url', 'default/list.default.html', 11, false),array('function', 'pager', 'default/list.default.html', 32, false),array('modifier', 'truncate_multi', 'default/list.default.html', 22, false),array('modifier', 'default', 'default/list.default.html', 26, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['page_title']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="main" class="container">
  <div class="breadcrumb"><span><?php echo $this->_tpl_vars['position']; ?>
</span></div>
  <div class="row">
    <div class="span13">
      <div class="page-header">
        <h2><?php echo $this->_tpl_vars['_search_result']; ?>
</h2>
      </div>
      <div class="mod">
        <div class="mod-hd">
          <h2><strong><?php echo $this->_tpl_vars['_puglish_time']; ?>
</strong><a href="<?php echo smarty_function_the_url(array('module' => 'list','extra' => "filter,2592000"), $this);?>
"><?php echo $this->_tpl_vars['_this_month']; ?>
</a><a href="<?php echo smarty_function_the_url(array('module' => 'list','extra' => "filter,604800"), $this);?>
"><?php echo $this->_tpl_vars['_this_week']; ?>
</a><a href="<?php echo smarty_function_the_url(array('module' => 'list','extra' => "filter,86400"), $this);?>
"><?php echo $this->_tpl_vars['_today_hours']; ?>
</a></h2>
        </div>
        <div class="mod-bd">
          <ul>
            
          
           
           <?php $_from = $this->_tpl_vars['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['items'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['items']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['items']['iteration']++;
?>
                <li>
                    <?php if ($this->_tpl_vars['item']['picture']): ?><div class="base_list_img"><img src="<?php echo $this->_tpl_vars['item']['image']; ?>
" /></div><?php endif; ?>
                    <div class="base_list_info">
                      <h4><a href="<?php echo smarty_function_the_url(array('id' => ($this->_tpl_vars['item']['id']),'module' => ($this->_tpl_vars['module'])), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('truncate_multi', true, $_tmp, 80) : smarty_modifier_truncate_multi($_tmp, 80)); ?>
</a></h4>
                      <p> <?php echo $this->_tpl_vars['item']['digest']; ?>
</p>
                      <p><span><em><?php echo $this->_tpl_vars['_update_time']; ?>
(<?php echo $this->_tpl_vars['item']['pubdate']; ?>
)</em></span>
                        <span><?php echo $this->_tpl_vars['_categories']; ?>
[<a href="<?php echo smarty_function_the_url(array('module' => 'list','extra' => "typeid,".($this->_tpl_vars['item']['type_id'])), $this);?>
"><?php echo $this->_tpl_vars['item']['typename']; ?>
</a>]</span></p>
                      <p><span><?php echo $this->_tpl_vars['item']['clicked']; ?>
 <?php echo $this->_tpl_vars['_visited']; ?>
&nbsp;<?php echo $this->_tpl_vars['_source']; ?>
<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['source'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['site_name']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['site_name'])); ?>
</span><span class=""><a href="<?php echo smarty_function_the_url(array('id' => ($this->_tpl_vars['item']['id']),'module' => ($this->_tpl_vars['module'])), $this);?>
"><?php echo $this->_tpl_vars['_visit_full_content']; ?>
...</a></span></p>
                  </div>
                 </li>
                
               <?php endforeach; endif; unset($_from); ?>
            </ul>
            <div class="pagination2"><?php echo smarty_function_pager(array('rowcount' => ($this->_tpl_vars['paging']['total'])), $this);?>
</div>
           
        </div>
      </div>
    </div>
    <div class="span4">
      <div class="mod">
        <div class="mod-hd">
          <h3><?php echo $this->_tpl_vars['_category_nav']; ?>
</h3>
        </div>
        <div class="mod-bd">
          <ul>
            <?php $_from = $this->_tpl_vars['SubCats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item1']):
?>
            <li><a href="<?php echo smarty_function_the_url(array('module' => 'list','extra' => "typeid,".($this->_tpl_vars['item1']['id'])), $this);?>
"><?php echo $this->_tpl_vars['item1']['name']; ?>
</a></li>
            <?php endforeach; endif; unset($_from); ?>
          </ul>
        </div>
      </div>
      <div class="mod">
        
        <div class="mod-bd">
          <form action="<?php echo smarty_function_the_url(array('module' => 'search','do' => 'news'), $this);?>
" method="get" id="NewsSearchFrm">
          <p><input type="text" name="q" value="" class="input"/ style="margin-left:0; width:180px;"></p>
          <input type="button" value="<?php echo $this->_tpl_vars['_search']; ?>
" onclick="$('#NewsSearchFrm').submit();" class="btn"/></form>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
$("#SearchFrm").attr("action","<?php echo smarty_function_the_url(array('module' => 'search'), $this);?>
");
$("#topMenuNews").addClass("lcur");
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>