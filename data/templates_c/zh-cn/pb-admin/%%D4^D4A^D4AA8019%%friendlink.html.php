<?php /* Smarty version 2.6.18, created on 2012-01-01 06:09:11
         compiled from friendlink.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'sprintf', 'friendlink.html', 15, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_ads']; ?>
 &raquo; <?php echo $this->_tpl_vars['_friendlink']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_friendlink']; ?>
</h3> 
    <ul class="subnav">
		<li><a class="btn1" href="friendlink.php"><span><?php echo $this->_tpl_vars['_management']; ?>
</span></a></li>
        <li><a href="friendlink.php?do=edit"><?php echo $this->_tpl_vars['_add_or_edit']; ?>
</a></li>
        <li><a href="friendlinktype.php"><?php echo $this->_tpl_vars['_sorts']; ?>
</a></li>
    </ul>
</div>
<div class="tipsblock">
	<ul id="tipslis">
		<li><?php echo ((is_array($_tmp=$this->_tpl_vars['_you_can_use_the_tag_call'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, $this->_tpl_vars['_friend_links']) : sprintf($_tmp, $this->_tpl_vars['_friend_links'])); ?>
</li>
	</ul>
</div>
<div class="tdare">
  <form name="list_frm" id="ListFrm" action="" method="post">
  <table width="100%" cellspacing="0" class="dataTable" summary="<?php echo $this->_tpl_vars['_data_zone']; ?>
">
    <thead>
		<tr>
		  <th class="firstCell"><input type="checkbox" name="idAll" id="idAll" onclick="pbCheckAll(this,'id[]');" title="<?php echo $this->_tpl_vars['_select_switch']; ?>
"></th>
		  <th><label for="idAll"><?php echo $this->_tpl_vars['_the_title']; ?>
</label></th>
		  <th><?php echo $this->_tpl_vars['_link_url']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_logo']; ?>
<?php echo $this->_tpl_vars['_picture']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_the_industry']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_the_city']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_display_order']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_action']; ?>
</th>
		</tr>
	</thead>
    <tfoot>
		<tr>
		  <th></th>
		  <th><label for="idAll"><?php echo $this->_tpl_vars['_the_title']; ?>
</label></th>
		  <th><?php echo $this->_tpl_vars['_link_url']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_logo']; ?>
<?php echo $this->_tpl_vars['_picture']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_the_industry']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_the_city']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_display_order']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_action']; ?>
</th>
		</tr>
	</tfoot>
    <tbody>
		<?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
		<tr class="tatr2">
		  <td class="firstCell"><input type="checkbox" name="id[]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" onclick="pbCheckItem(this,'idAll');" id="item_<?php echo $this->_tpl_vars['item']['id']; ?>
" title="<?php echo $this->_tpl_vars['item']['id']; ?>
"></td>
		  <td><label for="item_<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['title']; ?>
</label></td>
		  <td><a href="<?php echo $this->_tpl_vars['item']['url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['item']['url']; ?>
</a></td>
		  <td><?php if ($this->_tpl_vars['item']['logo']): ?><img src="<?php echo $this->_tpl_vars['item']['logo']; ?>
" height="35" /><?php endif; ?></td>
		  <td><?php echo $this->_tpl_vars['item']['industryname']; ?>
</td>
		  <td><?php echo $this->_tpl_vars['item']['areaname']; ?>
</td>
		  <td><?php echo $this->_tpl_vars['item']['priority']; ?>
</td>
		  <td class="handler">
           <ul id="handler_icon">
            <li><a class="btn_delete" href="friendlink.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
&do=del<?php echo $this->_tpl_vars['addParams']; ?>
" title="<?php echo $this->_tpl_vars['_delete']; ?>
"><?php echo $this->_tpl_vars['_delete']; ?>
</a></li>
            <li><a class="btn_edit" href="friendlink.php?do=edit&id=<?php echo $this->_tpl_vars['item']['id']; ?>
<?php echo $this->_tpl_vars['addParams']; ?>
" title="<?php echo $this->_tpl_vars['_edit']; ?>
"><?php echo $this->_tpl_vars['_edit']; ?>
</a></li>
        </ul>		</tr>
		<?php endforeach; else: ?>
		<tr class="no_data info">
		  <td colspan="8"><?php echo $this->_tpl_vars['_no_datas']; ?>
</td>
		</tr>
		<?php endif; unset($_from); ?>
    </tbody>
	</table>
	<div id="dataFuncs" title="<?php echo $this->_tpl_vars['_action_zone']; ?>
">
    <div class="left paddingT15" id="batchAction">
      <input type="submit" name="del" value="<?php echo $this->_tpl_vars['_delete']; ?>
" class="formbtn batchButton"/>
    </div>
    <div class="pageLinks"><?php echo $this->_tpl_vars['ByPages']; ?>
</div>
    <div class="clear"/>
    </div>
	</form>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>