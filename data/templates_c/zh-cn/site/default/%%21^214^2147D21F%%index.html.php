<?php /* Smarty version 2.6.18, created on 2012-01-06 15:31:46
         compiled from default/fair/index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ads', 'default/fair/index.html', 10, false),array('block', 'fair', 'default/fair/index.html', 20, false),array('function', 'the_url', 'default/fair/index.html', 44, false),array('function', 'get_cache', 'default/fair/index.html', 49, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['_fair']),'nav_id' => 5)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="main" class="container">
  

  <div class="row">
    <div class="span13">
      <div class="row">
        <div class="span4">
          <div class="exh_con_img">
           <?php $this->_tag_stack[] = array('ads', array('type' => 'focus','from' => 'fair')); $_block_repeat=true;smarty_block_ads($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><!-- This text is replaced by the Flash movie. --><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ads($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          </div>
        </div>
        <div class="span9">
          <div class="mod">
            <div class="mod-hd">
            <h2><?php echo $this->_tpl_vars['_recommended_fair']; ?>
</h2>
            </div>
            <div class="mod-bd">
              <div class="main clearfix">
                 <?php $this->_tag_stack[] = array('fair', array('type' => 'commend','row' => 1,'infolen' => 35,'name' => 'item')); $_block_repeat=true;smarty_block_fair($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                 <div class="net_content_img"><img src="<?php echo $this->_tpl_vars['item']['src']; ?>
" /></div>
                 <div class="net_content_intro">
                   <h3><?php echo $this->_tpl_vars['item']['link']; ?>
</h3>
                   <p><?php echo $this->_tpl_vars['item']['content']; ?>
&nbsp;&nbsp;<span><a href="<?php echo $this->_tpl_vars['item']['url']; ?>
"><?php echo $this->_tpl_vars['_detail']; ?>
</a></span> </p>
                 </div>
                 <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_fair($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
              </div>
              <div class="net_meeting">
                <ul>
                <?php $this->_tag_stack[] = array('fair', array('row' => 2)); $_block_repeat=true;smarty_block_fair($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                <li><span class="net_meeting_title"><?php echo $this->_tpl_vars['fair']['link']; ?>
</span><span class="net_meeting_time pb_datetime">[<?php echo $this->_tpl_vars['fair']['pubdate']; ?>
]</span></li>
                <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_fair($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                </ul>
                <div class="clear"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
        
      <div class="mod">
        <div class="mod-hd">
          <h2><span class="title_more"><a href="<?php echo smarty_function_the_url(array('module' => 'search','do' => 'fair'), $this);?>
"><span class="raquo">&raquo;</span><?php echo $this->_tpl_vars['_more']; ?>
</a></span><?php echo $this->_tpl_vars['_new_fair']; ?>
</h2>
        </div>
        <div class="mod-bd">
          <div class="exh_recent">
            <ul class="info-list two-cols-list">
             <?php echo smarty_function_get_cache(array('var' => 'types','name' => 'type'), $this);?>

              <?php $this->_tag_stack[] = array('fair', array('row' => 24)); $_block_repeat=true;smarty_block_fair($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                <li><span class="sort"><a href="fair/list.php?typeid=<?php echo $this->_tpl_vars['fair']['expotype_id']; ?>
">[<?php echo $this->_tpl_vars['types']['expotype'][$this->_tpl_vars['fair']['expotype_id']]; ?>
]</a></span><span class="title"><?php echo $this->_tpl_vars['fair']['link']; ?>
</span><span class="date pb_datetime">[<?php echo $this->_tpl_vars['fair']['pubdate']; ?>
]</span></li>
              <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_fair($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </ul>
          </div>
        </div>
      </div>  
    </div>
    <div class="span4">
      <div class="mod">
        <div class="mod-hd">
          <h2><span class="title_more"><a href="fair/list.php"><span class="raquo">&raquo;</span><?php echo $this->_tpl_vars['_more']; ?>
</a></span><?php echo $this->_tpl_vars['_hot_fair']; ?>
</h2>
        </div>
        <div class="mod-bd">
          <ul class="info-list">
            <?php $this->_tag_stack[] = array('fair', array('row' => 10,'type' => 'hot')); $_block_repeat=true;smarty_block_fair($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
            <li><?php echo $this->_tpl_vars['fair']['link']; ?>
</li>
            <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_fair($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          </ul>
        </div>
      </div>  

      <div class="mod search-tool">
        <div class="mod-hd">
          <h2><span class="title_more"><a href="<?php echo smarty_function_the_url(array('module' => 'search','do' => 'fair'), $this);?>
"><span class="raquo">&raquo;</span><?php echo $this->_tpl_vars['_more']; ?>
</a></span><?php echo $this->_tpl_vars['_find_fair']; ?>
</h2>
        </div>
        <div class="mod-bd">
          <form action="fair/list.php" name="search_fair_frm" id="SearchFairFrm">
              <input type="hidden" name="action" value="search">
          
              <label><?php echo $this->_tpl_vars['_keyword']; ?>
</label>
              <div class="input"><input name="q" type="text" style="width:100px; color:gray;" value="<?php echo $this->_tpl_vars['_input_keywords']; ?>
"/></div>
              <div class="actions">
                <input type="button" value="<?php echo $this->_tpl_vars['_search']; ?>
" class="btn" onclick="$('#SearchFairFrm').submit();" />
              </div>
          </form>
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