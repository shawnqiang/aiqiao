<?php /* Smarty version 2.6.18, created on 2012-01-01 06:06:55
         compiled from companynews.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'companynews.html', 42, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_trade_management']; ?>
 &raquo; <?php echo $this->_tpl_vars['_companynews']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_companynews']; ?>
</h3> 
    <ul class="subnav">
		<li><a class="btn1" href="companynews.php"><span><?php echo $this->_tpl_vars['_management']; ?>
</span></a></li>
		<li><a href="companynewstype.php"><?php echo $this->_tpl_vars['_types']; ?>
</a></li>
    </ul>
</div>
<div class="mrightTop"> 
    <div class="fontr"> 
        <form name="search_frm" id="SearchFrm" method="get"> 
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
		  <th><label for="idAll"><?php echo $this->_tpl_vars['_company_name']; ?>
</label></th>
		  <th><?php echo $this->_tpl_vars['_the_title']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_clicks']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_status']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_pub_date']; ?>
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
"><?php echo $this->_tpl_vars['item']['companyname']; ?>
</label></td>
		  <td><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 35) : smarty_modifier_truncate($_tmp, 35)); ?>
</td>
		  <td><?php echo $this->_tpl_vars['item']['clicked']; ?>
</td>
		  <td><?php echo $this->_tpl_vars['item']['common_status']; ?>
</td>
		  <td class="pb_datetime"><?php echo $this->_tpl_vars['item']['pubdate']; ?>
</td>
		  <td class="handler">
          <ul id="handler_icon">
            <li><a class="btn_delete" href="companynews.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
&do=del" title="<?php echo $this->_tpl_vars['_delete']; ?>
"><?php echo $this->_tpl_vars['_delete']; ?>
</a></li>
            <li><a class="btn_browse" href="companynews.php?do=view&id=<?php echo $this->_tpl_vars['item']['id']; ?>
" title="<?php echo $this->_tpl_vars['_cp_view']; ?>
"><?php echo $this->_tpl_vars['_cp_view']; ?>
</a></li>
            <li><a class="btn_up" href="news.php?do=edit&action=convert&companynewsid=<?php echo $this->_tpl_vars['item']['id']; ?>
" title="<?php echo $this->_tpl_vars['_pushed_to_the_news']; ?>
"><?php echo $this->_tpl_vars['_pushed_to_the_news']; ?>
</a></li>
          </ul>  
		  </td>
		</tr>
		<?php endforeach; else: ?>
		<tr class="no_data info">
		  <td colspan="7"><?php echo $this->_tpl_vars['_no_datas']; ?>
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
      <input type="submit" name="check" value="<?php echo $this->_tpl_vars['_check_passed']; ?>
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