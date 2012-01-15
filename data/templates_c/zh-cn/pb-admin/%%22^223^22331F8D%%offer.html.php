<?php /* Smarty version 2.6.18, created on 2012-01-01 05:59:44
         compiled from offer.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
<style>
.row-actions {font-size:12px; color:#CCCCCC;}
</style>
'; ?>

<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_trade_management']; ?>
 &raquo; <?php echo $this->_tpl_vars['_offer']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_offer']; ?>
</h3> 
    <ul class="subnav">
		<li><a class="btn1" href="offer.php"><span><?php echo $this->_tpl_vars['_management']; ?>
</span></a></li>
        <li><a href="offer.php?do=edit"><?php echo $this->_tpl_vars['_add_or_edit']; ?>
</a></li>
        <li><a href="offer.php?do=setting"><?php echo $this->_tpl_vars['_setting']; ?>
</a></li>
        <li><a href="offertype.php"><?php echo $this->_tpl_vars['_sorts']; ?>
</a></li>
    </ul>
</div>
<div class="mrightTop"> 
    <div class="fontr"> 
        <form name="search_frm" id="SearchFrm" method="get" action="offer.php"> 
        <input type="hidden" name="do" value="search" />
             <div> 
                <select class="querySelect" name="type_id">
				<option value="0"><?php echo $this->_tpl_vars['_types']; ?>
</option>
                <?php $_from = $this->_tpl_vars['TradeTypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
                <option value="<?php echo $this->_tpl_vars['key']; ?>
" <?php if ($this->_tpl_vars['key'] == $_GET['type_id']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['item']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
				</select>
				<?php echo $this->_tpl_vars['_title_keywords']; ?>
 : <input class="queryInput" type="text" name="q" value="<?php echo $_GET['q']; ?>
" /> 
				<?php echo $this->_tpl_vars['_adwords']; ?>
<input class="queryInput" type="text" name="adwords" value="<?php echo $_GET['adwords']; ?>
" /> 
				<?php echo $this->_tpl_vars['_cp_username']; ?>
 : <input class="queryInput" type="text" name="username" value="" />
                <select class="querySelect" name="display_pg">
				<option value="0"><?php echo $this->_tpl_vars['_eve_page_display']; ?>
 <?php echo $this->_tpl_vars['_record_amount']; ?>
</option>
				<option value="10" <?php if ($_GET['display_pg'] == 10): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['_eve_page_display']; ?>
10</option>
				<option value="20" <?php if ($_GET['display_pg'] == 20): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['_eve_page_display']; ?>
20</option>
				<option value="30" <?php if ($_GET['display_pg'] == 30): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['_eve_page_display']; ?>
30</option>
				</select>
                <input type="submit" class="formbtn" value="<?php echo $this->_tpl_vars['_searching']; ?>
" /> 
            </div> 
        </form> 
    </div> 
    <div class="fontr"></div> 
</div> 
<div class="tdare">
  <form name="list_frm" id="ListFrm" action="" method="post">
  <input type="hidden" name="page" value="<?php echo $_GET['page']; ?>
" />
  <table width="100%" cellspacing="0" class="dataTable" summary="<?php echo $this->_tpl_vars['_data_zone']; ?>
">
    <thead>
		<tr>
		  <th class="firstCell"><input type="checkbox" name="idAll" id="idAll" onclick="pbCheckAll(this,'id[]');" title="<?php echo $this->_tpl_vars['_select_switch']; ?>
"></th>
		  <th></th>
		  <th><label for="idAll"><?php echo $this->_tpl_vars['_the_title']; ?>
</label></th>
		  <th><?php echo $this->_tpl_vars['_types']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_cp_username']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_checked_status']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_pub_date']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_expire_date']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_action']; ?>
</th>
		</tr>
    <thead>
    <tfoot>
		<tr>
		  <th colspan="9"><div class="pageLinks"><?php echo $this->_tpl_vars['ByPages']; ?>
</div></th>
		</tr>
    <tfoot>
    <tbody>
		<?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
		<tr class="tatr2">
		  <td class="firstCell"><input type="checkbox" name="id[]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" onclick="pbCheckItem(this,'idAll');" id="item_<?php echo $this->_tpl_vars['item']['id']; ?>
" title="<?php echo $this->_tpl_vars['item']['id']; ?>
"></td>
		  <td><?php if ($this->_tpl_vars['item']['created'] >= $this->_tpl_vars['today_timestamp']): ?><span class="icon-new"></span><?php endif; ?><?php if ($this->_tpl_vars['item']['if_commend'] == 1): ?><span class="icon-commend"></span><?php endif; ?><?php if ($this->_tpl_vars['item']['TradePicture'] != ''): ?><span class="icon-pic"></span><?php endif; ?><?php if ($this->_tpl_vars['item']['if_urgent']): ?><span class="icon-hurry"></span><?php endif; ?></td>
		  <td><label for="item_<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['title']; ?>
</label>
		  <?php if ($this->_tpl_vars['item']['adwords']): ?>
		  <div class="row-actions"><a <?php echo $this->_tpl_vars['item']['style']; ?>
 title="<?php echo $this->_tpl_vars['item']['title']; ?>
"><?php echo $this->_tpl_vars['item']['adwords']; ?>
</a></div>
		  <?php endif; ?>
		  </td>
		  <td><a href="offer.php?do=search&type_id=<?php echo $this->_tpl_vars['item']['type_id']; ?>
" style="text-decoration: none;"><?php echo $this->_tpl_vars['TradeTypes'][$this->_tpl_vars['item']['type_id']]; ?>
</a></td>
		  <td><a href="member.php?do=edit&id=<?php echo $this->_tpl_vars['item']['member_id']; ?>
"><?php echo $this->_tpl_vars['item']['username']; ?>
</a></td>
		  <td><?php echo $this->_tpl_vars['CheckStatus'][$this->_tpl_vars['item']['status']]; ?>
</td>
		  <td class="pb_datetime"><?php echo $this->_tpl_vars['item']['pubdate']; ?>
<br><span style="color:gray;" title="<?php echo $this->_tpl_vars['_last_modified']; ?>
"><small><?php echo $this->_tpl_vars['item']['moddate']; ?>
</small></span></td>
		  <td class="pb_datetime"><?php if ($this->_tpl_vars['item']['if_expire']): ?><span style="color:red;" title="<?php echo $this->_tpl_vars['item']['expdate']; ?>
"><?php echo $this->_tpl_vars['item']['if_expire']; ?>
</span><?php else: ?><?php echo $this->_tpl_vars['item']['expdate']; ?>
<?php endif; ?></td>
		  <td class="handler">
           <ul id="handler_icon">
            <li><a class="btn_resend" href="offer.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
&do=refresh<?php echo $this->_tpl_vars['addParams']; ?>
" title="<?php echo $this->_tpl_vars['_trade_refresh']; ?>
"><?php echo $this->_tpl_vars['_trade_refresh']; ?>
</a></li>
             <li><a class="btn_browse"  href="<?php echo $this->_tpl_vars['SiteUrl']; ?>
offer/detail.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
<?php echo $this->_tpl_vars['addParams']; ?>
" target="_blank" title="<?php echo $this->_tpl_vars['_preview']; ?>
"><?php echo $this->_tpl_vars['_preview']; ?>
</a></li>
            <li><a class="btn_edit" href="offer.php?do=edit&id=<?php echo $this->_tpl_vars['item']['id']; ?>
&type_id=<?php echo $_GET['type_id']; ?>
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
      <input type="submit" name="commend" value="<?php echo $this->_tpl_vars['_commend']; ?>
" class="formbtn batchButton"/>
      <input type="submit" name="urgent_batch" value="<?php echo $this->_tpl_vars['_set_urgent']; ?>
" class="formbtn batchButton"/>
      <input type="submit" name="cancel_urgent_batch" value="<?php echo $this->_tpl_vars['_cancle']; ?>
 <?php echo $this->_tpl_vars['_urgent']; ?>
" class="formbtn batchButton"/>
      <input type="submit" name="refresh" value="<?php echo $this->_tpl_vars['_trade_refresh']; ?>
" class="formbtn batchButton"/>
      <input type="submit" name="export" value="<?php echo $this->_tpl_vars['_data_export']; ?>
" class="formbtn batchButton"/>
	  <select name="status_batch" id="StatusBatch" onchange="$('#ListFrm').submit();">
      	<option value="-1"><?php echo $this->_tpl_vars['_set_status']; ?>
</option>
        <option value="0"><?php echo $this->_tpl_vars['_check_invalid']; ?>
</option>
        <option value="1"><?php echo $this->_tpl_vars['_check_passed']; ?>
</option>
      </select>
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