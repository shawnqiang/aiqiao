<?php /* Smarty version 2.6.18, created on 2012-01-01 06:06:45
         compiled from news.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'news.html', 49, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_trade_management']; ?>
 &raquo; <?php echo $this->_tpl_vars['_industry_news']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_industry_news']; ?>
</h3> 
    <ul class="subnav">
		<li><a href="news.php" class="btn1"><span><?php echo $this->_tpl_vars['_management']; ?>
</span></a></li>
        <li><a href="news.php?do=edit"><?php echo $this->_tpl_vars['_add_or_edit']; ?>
</a></li>
        <li><a href="newstopic.php"><?php echo $this->_tpl_vars['_topic_news']; ?>
</a></li>        
        <li><a href="newstype.php"><?php echo $this->_tpl_vars['_sorts']; ?>
</a></li>
		<li><a href="newsgather.php"><?php echo $this->_tpl_vars['_collection']; ?>
</a></li>
    </ul>
</div>
<div class="mrightTop"> 
    <div class="fontr"> 
        <form name="search_frm" id="SearchFrm" method="get"> 
        <input type="hidden" name="do" value="search" />
             <div> 
				<?php echo $this->_tpl_vars['_title_keywords']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
<input class="queryInput" type="text" name="q" value="<?php echo $_GET['q']; ?>
" /> 
                <input type="submit" name="search" id="Search" class="formbtn" value="<?php echo $this->_tpl_vars['_searching']; ?>
" /> 
            </div> 
        </form> 
    </div> 
    <div class="fontr"></div> 
</div> 
<div class="tdare">
  <form name="list_frm" id="ListFrm" action="news.php" method="post">
  <table width="100%" cellspacing="0" class="dataTable" summary="<?php echo $this->_tpl_vars['_data_zone']; ?>
">
    <thead>
		<tr>
		  <th class="firstCell"><input type="checkbox" name="idAll" id="idAll" onclick="pbCheckAll(this,'id[]');" title="<?php echo $this->_tpl_vars['_select_switch']; ?>
"></th>
		  <th><label for="idAll"><?php echo $this->_tpl_vars['_the_title']; ?>
</label></th>
		  <th><?php echo $this->_tpl_vars['_bump_to_top']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_if_valid_n']; ?>
(<?php echo $this->_tpl_vars['_effective_period']; ?>
)</th>
		  <th><?php echo $this->_tpl_vars['_clicks']; ?>
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
		  <td><?php if ($this->_tpl_vars['item']['type_id']): ?>[<a title="<?php echo $this->_tpl_vars['Newstypes'][$this->_tpl_vars['item']['type_id']]; ?>
" href="<?php echo $_SERVER['PHP_SELF']; ?>
?do=search&typeid=<?php echo $this->_tpl_vars['item']['type_id']; ?>
"><?php echo $this->_tpl_vars['Newstypes'][$this->_tpl_vars['item']['type_id']]; ?>
</a>]<?php endif; ?><label for="item_<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['title']; ?>
</label><?php if ($this->_tpl_vars['item']['picture'] != ''): ?><span class="icon-pic"></span><?php endif; ?><?php if ($this->_tpl_vars['item']['if_commend']): ?><span class="icon-commend"></span><?php endif; ?></td>
		  <td><?php if ($this->_tpl_vars['item']['if_focus'] > 0): ?><?php echo $this->_tpl_vars['_correct']; ?>
<?php else: ?><?php echo $this->_tpl_vars['_deny']; ?>
<?php endif; ?></td>
		  <td><?php if ($this->_tpl_vars['item']['status'] > 0): ?><?php echo $this->_tpl_vars['_correct']; ?>
<?php else: ?><?php echo $this->_tpl_vars['_deny']; ?>
<?php endif; ?><p style="color: gray;font-style: italic;} " title="<?php echo $this->_tpl_vars['item']['start_time']; ?>
<?php echo $this->_tpl_vars['_arrive_to']; ?>
<?php echo $this->_tpl_vars['item']['end_time']; ?>
"><small><?php echo $this->_tpl_vars['item']['start_time']; ?>
-<?php echo $this->_tpl_vars['item']['end_time']; ?>
</small></p></td>
		  <td><?php echo $this->_tpl_vars['item']['clicked']; ?>
</td>
		  <td><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['created'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>
		  <td class="handler">
          <ul id="handler_icon">
            <li><a class="btn_browse" href="../news/detail.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
" target="_blank" title="<?php echo $this->_tpl_vars['_preview']; ?>
"><?php echo $this->_tpl_vars['_preview']; ?>
</a></li>
            <li><a class="btn_delete" href="news.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
&do=del<?php echo $this->_tpl_vars['addParams']; ?>
" title="<?php echo $this->_tpl_vars['_delete']; ?>
"><?php echo $this->_tpl_vars['_delete']; ?>
</a></li>
            <li><a class="btn_edit" href="news.php?do=edit&id=<?php echo $this->_tpl_vars['item']['id']; ?>
<?php echo $this->_tpl_vars['addParams']; ?>
" title="<?php echo $this->_tpl_vars['_edit']; ?>
"><?php echo $this->_tpl_vars['_edit']; ?>
</a></li>
          </ul>  
		 </td>
		</tr>
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
      <input type="submit" name="focus" value="<?php echo $this->_tpl_vars['_bump_to_top']; ?>
" class="formbtn batchButton"/>
      <input type="submit" name="cancel_focus" value="<?php echo $this->_tpl_vars['_cancel']; ?>
 <?php echo $this->_tpl_vars['_bump_to_top']; ?>
" class="formbtn batchButton"/>
      <input type="submit" name="commend" value="<?php echo $this->_tpl_vars['_commend']; ?>
" class="formbtn batchButton"/>
      <input type="submit" name="cancel_commend" value="<?php echo $this->_tpl_vars['_cancel']; ?>
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