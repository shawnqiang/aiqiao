<?php /* Smarty version 2.6.18, created on 2012-01-01 06:06:43
         compiled from fair.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_trade_management']; ?>
 &raquo; <?php echo $this->_tpl_vars['_fair']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_fair']; ?>
</h3> 
    <ul class="subnav">
		<li><a class="btn1" href="fair.php"><span><?php echo $this->_tpl_vars['_management']; ?>
</span></a></li>
        <li><a href="fair.php?do=edit"><?php echo $this->_tpl_vars['_add_or_edit']; ?>
</a></li>
        <li><a href="fairtype.php"><?php echo $this->_tpl_vars['_sorts']; ?>
</a></li>
    </ul>
</div>
<div class="mrightTop"> 
    <div class="fontr"> 
        <form name="search_frm" id="SearchFrm" method="get" action="fair.php">
        <input type="hidden" name="do" value="search" />
             <div>
				<?php echo $this->_tpl_vars['_title_keywords']; ?>
 : <input class="queryInput" type="text" name="q" value="<?php echo $_GET['q']; ?>
" /> 
                <input type="submit" name="search" id="Search" class="formbtn" value="<?php echo $this->_tpl_vars['_searching']; ?>
" /> 
            </div> 
        </form> 
    </div> 
    <div class="fontr"></div> 
</div> 
<div class="tdare">
  <form name="list_frm" id="ListFrm" action="" method="post">
  <table width="100%" cellspacing="0" class="dataTable" summary="<?php echo $this->_tpl_vars['_data_zone']; ?>
">
    <thead>
		<tr>
		  <th class="firstCell"><input type="checkbox" name="idAll" id="idAll" onclick="pbCheckAll(this,'id[]');" title="<?php echo $this->_tpl_vars['_select_switch']; ?>
"></th>
		  <th><label for="idAll"><?php echo $this->_tpl_vars['_fair']; ?>
 <?php echo $this->_tpl_vars['_naming']; ?>
</label></th>
		  <th><?php echo $this->_tpl_vars['_times']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_category']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_action']; ?>
</th>
		</tr>
    </thead>
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
"><?php echo $this->_tpl_vars['item']['name']; ?>
</label><?php if ($this->_tpl_vars['item']['picture'] != ''): ?><span class="icon-pic"></span><?php endif; ?><?php if ($this->_tpl_vars['item']['if_commend'] == 1): ?><span class="icon-commend"></span><?php endif; ?></td>
		  <td><?php echo $this->_tpl_vars['item']['begin_date']; ?>
/<?php echo $this->_tpl_vars['item']['end_date']; ?>
</td>
		  <td><?php echo $this->_tpl_vars['Expotypes'][$this->_tpl_vars['item']['expotype_id']]; ?>
</td>
		  <td class="handler">
          <ul id="handler_icon">
            <li><a class="btn_delete" href="fair.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
&do=del<?php echo $this->_tpl_vars['addParams']; ?>
" title="<?php echo $this->_tpl_vars['_delete']; ?>
"><?php echo $this->_tpl_vars['_delete']; ?>
</a></li>
            <li><a class="btn_edit" href="fair.php?do=edit&id=<?php echo $this->_tpl_vars['item']['id']; ?>
<?php echo $this->_tpl_vars['addParams']; ?>
" title="<?php echo $this->_tpl_vars['_edit']; ?>
"><?php echo $this->_tpl_vars['_edit']; ?>
</a></li>
          </ul>  
		  </td>
		</tr>
		<?php endforeach; else: ?>
		<tr class="no_data info">
		  <td colspan="5"><?php echo $this->_tpl_vars['_no_datas']; ?>
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
      <input type="submit" name="up" value="<?php echo $this->_tpl_vars['_setting']; ?>
 <?php echo $this->_tpl_vars['_commend']; ?>
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