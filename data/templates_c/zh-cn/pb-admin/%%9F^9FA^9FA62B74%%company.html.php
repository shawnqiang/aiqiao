<?php /* Smarty version 2.6.18, created on 2012-01-01 06:06:26
         compiled from company.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'company.html', 24, false),array('function', 'the_url', 'company.html', 71, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_trade_management']; ?>
 &raquo; <?php echo $this->_tpl_vars['_yellow_page']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_yellow_page']; ?>
</h3> 
    <ul class="subnav">
		<li><a class="btn1" href="company.php"><span><?php echo $this->_tpl_vars['_management']; ?>
</span></a></li>
        <li><a href="company.php?do=edit"><?php echo $this->_tpl_vars['_add_or_edit']; ?>
</a></li>
        <li><a href="companytype.php"><?php echo $this->_tpl_vars['_types']; ?>
</a></li>
        <li><a href="albumtype.php"><?php echo $this->_tpl_vars['_album_category']; ?>
</a></li>
    </ul>
</div>
<div class="mrightTop">
	<div class="fontl">
		<?php if ($this->_tpl_vars['TotalAmount'] > 0): ?><span><a href="<?php echo $_SERVER['PHP_SELF']; ?>
?do=search&status=0"><?php echo $this->_tpl_vars['_moderated']; ?>
</a><em>(<?php echo $this->_tpl_vars['TotalAmount']; ?>
)</em></span><?php endif; ?>
	</div>
    <div class="fontr"> 
        <form name="search_frm" id="SearchFrm" method="get"> 
        <input type="hidden" name="do" value="search" />
             <div> 
                <select class="querySelect" name="companytype" id="companytype">
					<option value="0"><?php echo $this->_tpl_vars['_company']; ?>
 <?php echo $this->_tpl_vars['_types']; ?>
</option>
                	<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['CompanyTypes'],'selected' => $this->_tpl_vars['smaty']['get']['companytype']), $this);?>

              	</select>
                <select class="querySelect" name="status" id="companystatus">
					<option value="-1"><?php echo $this->_tpl_vars['_checked_status']; ?>
</option>
                    <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['CheckStatus'],'selected' => $this->_tpl_vars['smaty']['get']['status']), $this);?>

                </select>
				<?php echo $this->_tpl_vars['_cp_username_n']; ?>
<input class="queryInput" type="text" name="member[username]" value="<?php echo $_GET['member']['username']; ?>
" /> 
				<?php echo $this->_tpl_vars['_company_name']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
<input class="queryInput" type="text" name="company[name]" value="<?php echo $_GET['company']['name']; ?>
" />
                <input type="submit" name="search" id="Search" class="formbtn" value="<?php echo $this->_tpl_vars['_searching']; ?>
" /> 
            </div> 
        </form> 
    </div> 
    <div class="fontr"></div> 
</div> 
<div class="tdare">
  <form name="list_frm" id="ListFrm" method="post">
  <table width="100%" cellspacing="0" class="dataTable" summary="<?php echo $this->_tpl_vars['_data_zone']; ?>
">
    <thead>
		<tr>
		  <th class="firstCell"><input type="checkbox" name="idAll" id="idAll" onclick="pbCheckAll(this,'id[]');" title="<?php echo $this->_tpl_vars['_select_switch']; ?>
"></th>
		  <th><label for="idAll"><?php echo $this->_tpl_vars['_company_name']; ?>
</label></th>
		  <th><?php echo $this->_tpl_vars['_cp_username']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_trust_star']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_checked_status']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_in_area']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_in_industry']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_action']; ?>
</th>
		</tr>
    </thead>
    <tfoot>
		<tr>
		  <th colspan="8"><div class="pageLinks"><?php echo $this->_tpl_vars['ByPages']; ?>
</div></th>
		</tr>
    <tfoot>
    <tbody>
		<?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
		<input type="hidden" name="member_id[]" value="<?php echo $this->_tpl_vars['item']['member_id']; ?>
">
		<tr class="tatr2">
		  <td class="firstCell"><input type="checkbox" name="id[]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" onclick="pbCheckItem(this,'idAll');" id="item_<?php echo $this->_tpl_vars['item']['id']; ?>
" title="<?php echo $this->_tpl_vars['item']['id']; ?>
"></td>
		  <td><label for="item_<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['CompanyName']; ?>
</label><?php if ($this->_tpl_vars['item']['if_commend'] == 1): ?><span class="icon-commend"></span><?php endif; ?></td>
		  <td><a href="member.php?do=edit&id=<?php echo $this->_tpl_vars['item']['member_id']; ?>
" title="<?php echo $this->_tpl_vars['item']['NickName']; ?>
"><?php echo $this->_tpl_vars['item']['username']; ?>
</a>[<?php echo $this->_tpl_vars['AllMembergroups'][$this->_tpl_vars['item']['membergroup_id']]; ?>
]</td>
		  <td><?php echo $this->_tpl_vars['item']['cache_credits']; ?>
</td>
		  <td><?php echo $this->_tpl_vars['CheckStatus'][$this->_tpl_vars['item']['CompanyStatus']]; ?>
</td>
		  <td><?php echo $this->_tpl_vars['Areas'][1][$this->_tpl_vars['item']['area_id1']]; ?>
<?php echo $this->_tpl_vars['Areas'][2][$this->_tpl_vars['item']['area_id2']]; ?>
</td>
		  <td><?php echo $this->_tpl_vars['Industries'][1][$this->_tpl_vars['item']['industry_id1']]; ?>
<?php echo $this->_tpl_vars['Industries'][2][$this->_tpl_vars['item']['industry_id2']]; ?>
</td>
		  <td class="handler">
           <ul id="handler_icon">
            <li><a class="btn_browse" href="<?php echo smarty_function_the_url(array('module' => 'space','userid' => ($this->_tpl_vars['item']['space_name'])), $this);?>
" target="_blank" title="<?php echo $this->_tpl_vars['_preview']; ?>
"><?php echo $this->_tpl_vars['_preview']; ?>
</a></li>
            <li><a class="btn_edit" href="company.php?do=edit&id=<?php echo $this->_tpl_vars['item']['id']; ?>
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
      <input type="submit" name="check[in]" value="<?php echo $this->_tpl_vars['_check_passed']; ?>
" class="formbtn batchButton"/>
      <input type="submit" name="check[out]" value="<?php echo $this->_tpl_vars['_check_invalid']; ?>
" class="formbtn batchButton"/>
      <input type="submit" name="recommend" value="<?php echo $this->_tpl_vars['_company']; ?>
 <?php echo $this->_tpl_vars['_commend']; ?>
" class="formbtn batchButton"/>
	  <select name="set_group" id="SetGroup" class="actionsel" onchange="$('#ListFrm').submit()">
	  <option value="0"><?php echo $this->_tpl_vars['_pls_select']; ?>
<?php echo $this->_tpl_vars['_membergroup']; ?>
</option>
	  <optgroup label="<?php echo $this->_tpl_vars['_member_group']; ?>
">
      <?php $_from = $this->_tpl_vars['Membergroups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['groupname']):
?>
	  	<option value="<?php echo $this->_tpl_vars['key']; ?>
"><?php echo $this->_tpl_vars['groupname']; ?>
</option>
      <?php endforeach; endif; unset($_from); ?>
	  </optgroup>
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