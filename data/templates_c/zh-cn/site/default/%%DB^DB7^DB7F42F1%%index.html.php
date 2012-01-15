<?php /* Smarty version 2.6.18, created on 2012-01-07 00:48:46
         compiled from default/market/index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'area', 'default/market/index.html', 40, false),array('block', 'market', 'default/market/index.html', 49, false),array('function', 'the_url', 'default/market/index.html', 41, false),array('modifier', 'truncate_multi', 'default/market/index.html', 55, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['_market']),'nav_id' => 7)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<style type="text/css">
@import url(<?php echo $this->_tpl_vars['theme_img_path']; ?>
css/effect.css);
</style>
<script src="scripts/jquery.tools.js"></script>
<?php echo '
<script language="javascript" type="text/javascript">
<!--
function setImg(img,width,height){ 
    var scale_w=img.width/width; 
    var scale_h=img.height/height; 
    var scale=scale_w>scale_h?scale_w:scale_h; 
     img.width=img.width/scale; 
    return false; 
}
-->
</script>

'; ?>



<div id="main" class="container">
	<div class="row">
		<div class="span4">
			<div class="mod">
				<div class="mod-hd">
					<h2><?php echo $this->_tpl_vars['_added_market']; ?>
</h2>
				</div>
				<div class="mod-bd">
					<h3 style="text-align: center;"><a href="market/add.php"><?php echo $this->_tpl_vars['_i_would_join']; ?>
</a></h3>
				</div>
			</div>

			<div class="mod">
				<div class="mod-hd">
					<h2><?php echo $this->_tpl_vars['_area_category']; ?>
</h2>
				</div>
				<div class="mod-bd">
					<ul class="info-list">
						<?php $this->_tag_stack[] = array('area', array('level' => 1,'name' => 'item')); $_block_repeat=true;smarty_block_area($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						  <li><a href="<?php echo smarty_function_the_url(array('module' => 'search','do' => 'market','areaid' => ($this->_tpl_vars['item']['id']),'level' => 1), $this);?>
"><?php echo $this->_tpl_vars['item']['title']; ?>
</a></li>
						<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_area($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				   	</ul>
				</div>
			</div>
		</div>
		<div class="span13">
			<ul class="media-items-grid">
			<?php $this->_tag_stack[] = array('market', array('row' => 12,'type' => 'image')); $_block_repeat=true;smarty_block_market($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<li class="media-item two-cols-item">
			
					<a class="image" title="<?php echo $this->_tpl_vars['market']['name']; ?>
" href="<?php echo $this->_tpl_vars['market']['url']; ?>
"><img src="<?php echo $this->_tpl_vars['market']['src']; ?>
"></a>
					
					<p class="name"><?php echo $this->_tpl_vars['_market_name_n']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
<?php echo $this->_tpl_vars['market']['link']; ?>
<br>
					<?php echo $this->_tpl_vars['_mainly_products']; ?>
<span title="<?php echo $this->_tpl_vars['market']['main_business']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['market']['main_business'])) ? $this->_run_mod_handler('truncate_multi', true, $_tmp, 16) : smarty_modifier_truncate_multi($_tmp, 16)); ?>
</span></p>
			
				
			</li>
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_market($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		</ul>
		</div>
	</div>

</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>