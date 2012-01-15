<?php /* Smarty version 2.6.18, created on 2012-01-04 03:23:51
         compiled from default/special/list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'area', 'default/special/list.html', 28, false),array('block', 'industry', 'default/special/list.html', 46, false),array('function', 'the_url', 'default/special/list.html', 73, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['page_title']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
<style>
#wrap{width:960px;margin:0 auto;background:#FFF;position:relative}
.fenlei{ font-size:14px; font-weight:bold; height:40px; line-height:40px;}
.list_tit{ height:30px; line-height:30px; background-color:#F2F2F2; color:#3C3C3C; font-weight:bold; padding-left:15px; border-bottom:1px solid #ccc; padding-right:14px;}
.list_con{line-height:30px; color:#6F6F6F; padding:7px 0; padding-right:10px;}
.list_con td{line-height:20px; padding:5px 0}
.list_con th{ font-weight:400; text-align:left;}

.list_con1{border-left:1px solid #F2F2F2;border-right:1px solid #F2F2F2; line-height:21px; padding:15px 0 15px 17px;}
.list_con1 a{margin-right:18px;}
.o_expand {
	cursor: hand;
    float: right;
    width: 30px;
}
</style>
'; ?>

<div id="wrap">
<div class="tips"><span><?php echo $this->_tpl_vars['position']; ?>
</span></div>
<div class="blank6"></div>
<div class="list_tit"><span class="fl"><?php echo $this->_tpl_vars['_main_city']; ?>
</span></div>

<table cellspacing="0" cellpadding="0" border="0" width="100%">
  <tbody><tr>
    <td class="list_con1" colspan="3">
		<?php $this->_tag_stack[] = array('area', array('level' => 1)); $_block_repeat=true;smarty_block_area($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<strong><a href="<?php echo $this->_tpl_vars['area']['url']; ?>
" <?php echo $this->_tpl_vars['area']['style']; ?>
 title="<?php echo $this->_tpl_vars['area']['title']; ?>
"><?php echo $this->_tpl_vars['area']['title']; ?>
</a></strong>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_area($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	</td>
    </tr>
  <tr>
    <td height="5" background="<?php echo $this->_tpl_vars['theme_img_path']; ?>
images/clist_bg1.jpg" width="5"></td>
    <td background="<?php echo $this->_tpl_vars['theme_img_path']; ?>
images/clist_bg2.jpg" width="940"></td>
    <td background="<?php echo $this->_tpl_vars['theme_img_path']; ?>
images/clist_bg3.jpg" width="5"></td>
  </tr>
</tbody>
</table>
<div class="blank6"></div>
<div class="list_tit"><span class="fl"><?php echo $this->_tpl_vars['_main_industry']; ?>
</span></div>

<table cellspacing="0" cellpadding="0" border="0" width="100%">
  <tbody><tr>
    <td class="list_con1" colspan="3">
		<?php $this->_tag_stack[] = array('industry', array('level' => 1)); $_block_repeat=true;smarty_block_industry($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<strong><a href="<?php echo $this->_tpl_vars['industry']['url']; ?>
" <?php echo $this->_tpl_vars['industry']['style']; ?>
 title="<?php echo $this->_tpl_vars['industry']['title']; ?>
"><?php echo $this->_tpl_vars['industry']['title']; ?>
</a></strong>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_industry($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	</td>
    </tr>
  <tr>
    <td height="5" background="<?php echo $this->_tpl_vars['theme_img_path']; ?>
images/clist_bg1.jpg" width="5"></td>
    <td background="<?php echo $this->_tpl_vars['theme_img_path']; ?>
images/clist_bg2.jpg" width="940"></td>
    <td background="<?php echo $this->_tpl_vars['theme_img_path']; ?>
images/clist_bg3.jpg" width="5"></td>
  </tr>
</tbody>
</table>
<div style="height: 10px;" class="clearit"></div>

<div class="list_tit">
<span class="fl"><?php echo $this->_tpl_vars['station_name']; ?>
<?php echo $this->_tpl_vars['_sort_by_alpha']; ?>
</span>
<span class="o_expand">
<img alt="<?php echo $this->_tpl_vars['_expand_or_no']; ?>
" title="<?php echo $this->_tpl_vars['_expand_or_no']; ?>
" src="<?php echo $this->_tpl_vars['theme_img_path']; ?>
images/collapsed_yes.gif" onclick="$('#category_list').toggle();" id="category_img">
</span>
</div>
<table cellspacing="0" cellpadding="0" border="0" width="100%" id="category_list">
    <tbody>
  <tr>
    <td class="list_con1" colspan="3">
	<?php $_from = $this->_tpl_vars['alpha_datas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['datas'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['datas']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['datas']['iteration']++;
?>
    <strong><?php echo $this->_tpl_vars['key']; ?>
</strong>&emsp;&nbsp;
		<?php $_from = $this->_tpl_vars['item']['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key1'] => $this->_tpl_vars['item1']):
        $this->_foreach['data']['iteration']++;
?>
			<a href="<?php echo smarty_function_the_url(array('module' => 'special','type' => ($this->_tpl_vars['type']),'id' => ($this->_tpl_vars['item1']['id']),'do' => ($_GET['do'])), $this);?>
" title="<?php echo $this->_tpl_vars['item1']['title']; ?>
 <?php echo $this->_tpl_vars['_sub_station']; ?>
"><?php echo $this->_tpl_vars['item1']['title']; ?>
</a>
		<?php endforeach; endif; unset($_from); ?>
	<br>
	<?php endforeach; endif; unset($_from); ?>
	</td>
    </tr>
  <tr>
    <td height="5" background="<?php echo $this->_tpl_vars['theme_img_path']; ?>
images/clist_bg1.jpg" width="5"></td>
    <td background="<?php echo $this->_tpl_vars['theme_img_path']; ?>
images/clist_bg2.jpg" width="940"></td>
    <td background="<?php echo $this->_tpl_vars['theme_img_path']; ?>
images/clist_bg3.jpg" width="5"></td>

  </tr>
</tbody>
</table>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>