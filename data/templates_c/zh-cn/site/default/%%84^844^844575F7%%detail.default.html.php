<?php /* Smarty version 2.6.18, created on 2012-01-19 08:31:55
         compiled from default/detail.default.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'default/detail.default.html', 51, false),array('modifier', 'nl2br', 'default/detail.default.html', 59, false),array('modifier', 'number_format', 'default/detail.default.html', 72, false),array('block', 'news', 'default/detail.default.html', 84, false),array('function', 'the_url', 'default/detail.default.html', 96, false),)), $this); ?>
﻿<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['page_title']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
<script>
var site_url = "{$SiteUrl}";
var id = "{$item.id}";
var quote_type = "{$quote_type}";
function doZoom(size){
	$(\'#content\').css({
		fontSize:size+\'px\'
	});
}
$(document).ready(function(){
	$("#content img").each(function(){  
		 if($(this).width() > $(this).parent().width()) {  
			 $(this).width("100%");  
		 }  
	});
});
</script>
'; ?>

<?php if ($this->_tpl_vars['item']['trend_data']): ?>
<script type="text/javascript" src="scripts/jquery/jquery.swfobject.js"></script>
<?php echo '
<script>
$(document).ready(
function () {
	$(\'#quoteFlash\').flash(
		{
			swf: \'images/chart.swf\',
			height: 300,
			width: 700,
			wmode: \'transparent\',
			flashvars: {
				//To pass parameters, URLEncode the dataURL. Use escape() in JavaScript
				dataUrl: escape(\'market/quote.php?action=data&type=\'+quote_type+\'&id=\'+id+\'&rand=\'+Math.random())
			}
		}
	);
});
</script>
'; ?>

<?php endif; ?>
<div id="main" class="container">
  <div class="breadcrumb"><span><?php echo $this->_tpl_vars['position']; ?>
</span></div>
  <div class="row">
    
    <div class="main-content l-col span13">
      <div class="mod article">
        <div class="mod-hd">
          <h2 class="title"><span><?php echo $this->_tpl_vars['item']['title']; ?>
</span></h2>
          <p class="info"><?php echo $this->_tpl_vars['_source']; ?>
<span><?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['source'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['site_name']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['site_name'])); ?>
</span> <?php echo $this->_tpl_vars['_post_time']; ?>
<span>(<?php echo $this->_tpl_vars['item']['pubdate']; ?>
)</span><?php echo $this->_tpl_vars['_categories']; ?>
<span><?php echo $this->_tpl_vars['item']['typename']; ?>
</span><?php echo $this->_tpl_vars['_font_size']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
&nbsp;<a href="javascript:void(false);" onclick="doZoom(16);"><?php echo $this->_tpl_vars['_large']; ?>
</a>&nbsp;<a href="javascript:void(false);" onclick="doZoom(14)"><?php echo $this->_tpl_vars['_middle']; ?>
</a>&nbsp;<a href="javascript:void(false);" onclick="doZoom(10)"><?php echo $this->_tpl_vars['_small']; ?>
</a></p>
        </div>
        <div class="mod-bd">
          <div id="quoteFlash"></div>
     
          <?php if ($this->_tpl_vars['item']['picture']): ?>
          <p><img src="<?php echo $this->_tpl_vars['item']['image_url']; ?>
" /></p>
          <?php endif; ?>
          <div class="a-content"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['content'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</div>
      
          
          
        </div>
        <div class="mod-ft">
          <div class="articles-nav">
              <span class="pull-left"><b><?php echo $this->_tpl_vars['_prev_record']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</b><?php echo $this->_tpl_vars['item']['prev_link']; ?>
</a></span>
              <span class="pull-right"><b><?php echo $this->_tpl_vars['_next_record']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</b><?php echo $this->_tpl_vars['item']['next_link']; ?>
 </span>
          </div>
          <div class="article-action">
            <?php if ($this->_tpl_vars['item']['attach_hashid']): ?>[<a href="misc.php?do=download&aid=<?php echo $this->_tpl_vars['item']['attach_hashid']; ?>
" target="_blank"><img src="<?php echo $this->_tpl_vars['theme_img_path']; ?>
images/download.gif" border="0" /><?php echo $this->_tpl_vars['_download_attach']; ?>
</a>] <?php endif; ?>
            <?php if ($this->_tpl_vars['item']['tag']): ?>[<?php echo $this->_tpl_vars['_tags']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
<?php echo $this->_tpl_vars['item']['tag_link']; ?>
] <?php endif; ?>
            <?php if ($this->_tpl_vars['item']['download_article']): ?>[<a href="standard/detail.php?do=downloadtxt&id=<?php echo $this->_tpl_vars['item']['id']; ?>
" target="_blank"><img src="<?php echo $this->_tpl_vars['theme_img_path']; ?>
images/document.gif" border="0" /><?php echo $this->_tpl_vars['_download_article']; ?>
</a>]<?php endif; ?> [<a href="javascript:window.close()"><?php echo $this->_tpl_vars['_close_widow']; ?>
</a>] [<a href="javascript: window.print();"><?php echo $this->_tpl_vars['_print_page']; ?>
</a>] <?php if ($this->_tpl_vars['item']['clicked']): ?><?php echo $this->_tpl_vars['_views']; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['clicked'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : smarty_modifier_number_format($_tmp)); ?>
<?php endif; ?></div>
        </div>
      </div>
    </div>

    <div class="side-bar r-col span4">
      <div class="mod">
        <div class="mod-hd">
           <h3><?php echo $this->_tpl_vars['_related_info']; ?>
</h3>
        </div>
        <div class="mod-bd">
          <ul class="info-list">
          <?php $this->_tag_stack[] = array('news', array('row' => 10,'titlelen' => 32,'typeid' => $this->_tpl_vars['item']['type_id'],'name' => 'r')); $_block_repeat=true;smarty_block_news($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
            <li> <?php echo $this->_tpl_vars['r']['link']; ?>
</li>
          <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_news($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          </ul>
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