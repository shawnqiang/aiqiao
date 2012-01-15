<?php /* Smarty version 2.6.18, created on 2012-01-01 07:28:20
         compiled from plugin.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_plugin']; ?>
 &raquo; <?php echo $this->_tpl_vars['_plugin']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_plugin']; ?>
</h3> 
</div>
<div class="mrightTop"> 
    <div class="fontr"> 
        <form name="search_frm" action="http://www.phpb2b.com/plugin/" id="SearchFrm" method="get" target="_blank">
        <input type="hidden" name="do" value="search" />
             <div> 
				<?php echo $this->_tpl_vars['_keywords']; ?>
<input class="queryInput" type="text" name="q" value="<?php echo $_GET['q']; ?>
" /> 
                <input type="submit" name="search" id="Search" class="formbtn" value="<?php echo $this->_tpl_vars['_search_station_outside']; ?>
" /> 
            </div> 
        </form> 
    </div> 
    <div class="fontr"></div> 
</div> 
<div class="tdare">
  <form name="list_frm" id="ListFrm" action="plugin.php" method="post">
  <table width="100%" cellspacing="0" class="dataTable" summary="<?php echo $this->_tpl_vars['_data_zone']; ?>
">
    <thead>
		<tr>
		  <th class="firstCell"><input type="checkbox" name="idAll" id="idAll" onclick="pbCheckAll(this,'id[]');" title="<?php echo $this->_tpl_vars['_select_switch']; ?>
"></th>
		  <th><label for="idAll"><?php echo $this->_tpl_vars['_the_title']; ?>
</label></th>
		  <th><?php echo $this->_tpl_vars['_version']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_description_n']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_author']; ?>
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
		  <td class="firstCell"><input type="checkbox" name="id[]" <?php if (! $this->_tpl_vars['item']['id']): ?>disabled="disabled"<?php endif; ?> value="<?php echo $this->_tpl_vars['item']['id']; ?>
" onclick="pbCheckItem(this,'idAll');" id="item_<?php echo $this->_tpl_vars['item']['id']; ?>
" title="<?php echo $this->_tpl_vars['item']['id']; ?>
"></td>
		  <td><?php echo $this->_tpl_vars['item']['title']; ?>
</td>
		  <td><?php echo $this->_tpl_vars['item']['version']; ?>
</td>
		  <td><?php echo $this->_tpl_vars['item']['description']; ?>
</td>
		  <td><?php echo $this->_tpl_vars['item']['copyright']; ?>
</td>
		  <td class="handler">
          <ul id="handler_icon">
            <?php if ($this->_tpl_vars['item']['available']): ?>
            <li><a class="btn_config" href="plugin.php?do=edit&id=<?php echo $this->_tpl_vars['item']['id']; ?>
<?php echo $this->_tpl_vars['addParams']; ?>
" title="<?php echo $this->_tpl_vars['_setting']; ?>
"><?php echo $this->_tpl_vars['_setting']; ?>
</a></li>
             <li><a class="btn_uninstall" href="plugin.php?do=uninstall&id=<?php echo $this->_tpl_vars['item']['id']; ?>
<?php echo $this->_tpl_vars['addParams']; ?>
"  title="<?php echo $this->_tpl_vars['_uninstall']; ?>
"><?php echo $this->_tpl_vars['_uninstall']; ?>
</a></li>
             <?php else: ?>
            <li><a class="btn_install" href="plugin.php?entry=<?php echo $this->_tpl_vars['item']['entry']; ?>
&do=install<?php echo $this->_tpl_vars['addParams']; ?>
" title="<?php echo $this->_tpl_vars['_install']; ?>
"><?php echo $this->_tpl_vars['_install']; ?>
</a></li>
            <?php endif; ?>
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
      <input type="submit" name="del" value="<?php echo $this->_tpl_vars['_uninstall']; ?>
" class="formbtn batchButton"/>
    </div>
    <div class="pageLinks"></div>
    <div class="clear"/>
    </div>
	</form>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>