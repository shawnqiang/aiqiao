<?php /* Smarty version 2.6.18, created on 2012-01-15 06:54:05
         compiled from default/news/index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'newstype', 'default/news/index.html', 6, false),array('block', 'ads', 'default/news/index.html', 15, false),array('block', 'news', 'default/news/index.html', 23, false),array('block', 'topic', 'default/news/index.html', 63, false),array('function', 'the_url', 'default/news/index.html', 7, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['page_title']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="main" class="container">
  <div class="mod second-nav">
      <div id="second_all_nav"><?php echo $this->_tpl_vars['_category_nav']; ?>
</div>
      <div class="news_nav_txt">
      <?php $this->_tag_stack[] = array('newstype', array('row' => 25,'level' => 1,'name' => 'item')); $_block_repeat=true;smarty_block_newstype($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
      <a href="<?php echo smarty_function_the_url(array('module' => 'search','do' => 'news','typeid' => ($this->_tpl_vars['item']['id'])), $this);?>
"><?php echo $this->_tpl_vars['item']['name']; ?>
</a>
      <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_newstype($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      </div>
  </div>

  <div class="row">
    <div class="span4">
      <div class="mod ads">
        <?php $this->_tag_stack[] = array('ads', array('type' => 'focus')); $_block_repeat=true;smarty_block_ads($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><!-- This text is replaced by the Flash movie. --><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ads($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      </div>
      <div class="mod">
        <div class="mod-hd">
          <h2><?php echo $this->_tpl_vars['_hot_news']; ?>
</h2>
        </div>
        <div class="mod-bd">
          <ul class="info-list">
            <?php $this->_tag_stack[] = array('news', array('row' => 10,'titlelen' => '35','name' => 'item','dateline' => ($this->_tpl_vars['date_line']))); $_block_repeat=true;smarty_block_news($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
            <li><?php echo $this->_tpl_vars['item']['link']; ?>
</li>
            <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_news($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>  
          </ul> 
        </div>
      </div>  
    </div>
    <div class="span9">
        <div class="mod ads">

        </div>
        <div class="mod">
          <div class="mod-hd">
             <h2><?php echo $this->_tpl_vars['_latest_news']; ?>
</h2>
          </div>
          <div class="mod-bd">
            <ul class="info-list two-cols-list">
              <?php $this->_tag_stack[] = array('news', array('row' => 44,'titlelen' => '25','name' => 'item')); $_block_repeat=true;smarty_block_news($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
              <li><span class="hot_word"><a href="<?php echo smarty_function_the_url(array('module' => 'search','do' => 'news','typeid' => ($this->_tpl_vars['item']['type_id'])), $this);?>
">[<?php echo $this->_tpl_vars['item']['typename']; ?>
]</a></span><?php echo $this->_tpl_vars['item']['link']; ?>
</li>  
              <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_news($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </ul> 
          </div>
      </div>  
    </div>
    <div class="span4 side-bar">
        <div class="mod">
          <div class="mod-hd">
            <h2><?php echo $this->_tpl_vars['_industry_info']; ?>
</h2>
          </div>
          <div class="mod-bd">
            <?php echo $this->_tpl_vars['Calendar']; ?>

          </div>
        </div>
        
        <div class="mod special-news">
          <div class="mod-hd">
            <h2><?php echo $this->_tpl_vars['_topic_news']; ?>
</h2>
          </div>
          <div class="mod-bd">
             <ul class="info-list">
              <?php $this->_tag_stack[] = array('topic', array('type' => 'news','row' => 3,'name' => 'item')); $_block_repeat=true;smarty_block_topic($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                 <li>
                   <a href="<?php echo $this->_tpl_vars['item']['url']; ?>
" title=""><img src="<?php echo $this->_tpl_vars['item']['src']; ?>
"/></a>
                   <div><?php echo $this->_tpl_vars['item']['link']; ?>
</div>
                 </li>
              <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_topic($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
              </ul>
          </div>
        </div>  
    </div>
  </div>  
</div>

<script>
$("#SearchFrm").attr("action","<?php echo smarty_function_the_url(array('module' => 'search'), $this);?>
");
$("#hdDo").val("news");
$("#topMenuNews").addClass("lcur");
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>