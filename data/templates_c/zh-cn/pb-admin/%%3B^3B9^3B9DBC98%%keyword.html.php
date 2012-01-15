<?php /* Smarty version 2.6.18, created on 2012-01-01 06:06:56
         compiled from keyword.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_trade_management']; ?>
 &raquo; <?php echo $this->_tpl_vars['_information']; ?>
<?php echo $this->_tpl_vars['_keywords']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_information']; ?>
<?php echo $this->_tpl_vars['_keywords']; ?>
</h3> 
</div>
<div class="mrightTop"> 
    <div class="fontr"> 
        <form name="search_frm" action="keyword.php" id="SearchFrm" method="get">
        <input type="hidden" name="do" value="search" />
             <div>
				<?php echo $this->_tpl_vars['_title_keywords']; ?>
 : <input class="queryInput" type="text" name="q" value="<?php echo $_GET['q']; ?>
" /> 
                <input type="submit" id="Search" class="formbtn" value="<?php echo $this->_tpl_vars['_searching']; ?>
" /> 
            </div> 
        </form> 
    </div> 
    <div class="fontr"></div> 
</div> 
<div class="tdare">
  <form name="list_frm" id="ListFrm" action="keyword.php" method="post">
  <table width="100%" cellspacing="0" class="dataTable" summary="<?php echo $this->_tpl_vars['_data_zone']; ?>
">
    <thead>
		<tr>
		  <th class="firstCell"><input type="checkbox" name="idAll" id="idAll" onClick="pbCheckAll(this,'id[]');" title="<?php echo $this->_tpl_vars['_select_switch']; ?>
"></th>
		  <th><label for="idAll"><?php echo $this->_tpl_vars['_the_title']; ?>
</label></th>
		  <th><?php echo $this->_tpl_vars['_clicks']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_types']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_if_valid_n']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_action']; ?>
</th>
		</tr>
    </thead>
    <tbody>
		<?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['adzone'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['adzone']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['adzone']['iteration']++;
?>
		<tr class="tatr2">
		  <td class="firstCell"><input type="checkbox" name="id[]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" onClick="pbCheckItem(this,'idAll');" id="item_<?php echo $this->_tpl_vars['item']['id']; ?>
" title="<?php echo $this->_tpl_vars['item']['id']; ?>
"></td>
		  <td><label for="item_<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['title']; ?>
</label></td>
		  <td><?php echo $this->_tpl_vars['item']['hits']; ?>
</td>
		  <td><?php echo $this->_tpl_vars['item']['type_name']; ?>

		  <td><?php echo $this->_tpl_vars['Status'][$this->_tpl_vars['item']['status']]; ?>
</td>
		  <td class="handler">
           <ul id="handler_icon">
            <li><a class="btn_delete" href="keyword.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
&do=del" title="<?php echo $this->_tpl_vars['_delete']; ?>
"><?php echo $this->_tpl_vars['_delete']; ?>
</a></li>
            <li><a class="btn_edit" href="keyword.php?do=edit&id=<?php echo $this->_tpl_vars['item']['id']; ?>
<?php echo $this->_tpl_vars['addParams']; ?>
" title="<?php echo $this->_tpl_vars['_edit']; ?>
"><?php echo $this->_tpl_vars['_edit']; ?>
</a></li>
          </ul> 
		 </td>
		</tr>
		<?php endforeach; else: ?>
		<tr class="no_data info">
		  <td colspan="6"><?php echo $this->_tpl_vars['_no_datas']; ?>
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