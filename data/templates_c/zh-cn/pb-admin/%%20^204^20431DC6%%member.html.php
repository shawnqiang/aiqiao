<?php /* Smarty version 2.6.18, created on 2012-01-01 06:00:21
         compiled from member.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'member.html', 22, false),array('function', 'iplocation', 'member.html', 64, false),array('modifier', 'date_format', 'member.html', 62, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_member_center']; ?>
 &raquo; <?php echo $this->_tpl_vars['_member']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_member']; ?>
</h3> 
    <ul class="subnav">
		<li><a class="btn1" href="member.php"><span><?php echo $this->_tpl_vars['_management']; ?>
</span></a></li>
        <li><a href="member.php?do=edit"><?php echo $this->_tpl_vars['_add_or_edit']; ?>
</a></li>
        <li><a href="membertype.php"><?php echo $this->_tpl_vars['_sorts']; ?>
</a></li>        
        <li><a href="memberemail.php"><?php echo $this->_tpl_vars['_email_addr']; ?>
</a></li>        
    </ul>
</div>
<div class="mrightTop"> 
    <div class="fontr"> 
        <form name="search_frm" id="SearchFrm" method="get"> 
        <input type="hidden" name="do" value="search" />
             <div> 
				<?php echo $this->_tpl_vars['_cp_username']; ?>
 <input class="queryInput" type="text" name="member[name]" id="member_name" value="<?php echo $_GET['member']['name']; ?>
" /> 
                <select class="querySelect" name="groupid" id="Groupid">
				<option value="-1"><?php echo $this->_tpl_vars['_membership_type']; ?>
</option>
				<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['MembergroupOptions'],'selected' => $_GET['groupid']), $this);?>

				</select>
				<select name="member[status]" id="member_status">
				<option value="-1"><?php echo $this->_tpl_vars['_checked_status']; ?>
</option>
				<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['MemberStatus'],'selected' => $_GET['member']['status']), $this);?>

				</select>
                <input type="submit" name="search" id="Search" class="formbtn" value="<?php echo $this->_tpl_vars['_searching']; ?>
" /> 
            </div> 
        </form> 
    </div> 
    <div class="fontr"></div> 
</div> 
<div class="tdare">
  <form name="list_frm" id="ListFrm" action="" method="post">
  <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>
" />
  <table width="100%" cellspacing="0" class="dataTable" summary="<?php echo $this->_tpl_vars['_data_zone']; ?>
" id="dataZone">
		<thead>
			<tr>
			  <th class="firstCell"><input type="checkbox" name="idAll" id="idAll" onclick="pbCheckAll(this,'id[]');" title="<?php echo $this->_tpl_vars['_select_switch']; ?>
"></th>
			  <th><label for="idAll"><?php echo $this->_tpl_vars['_cp_username']; ?>
</label></th>
			  <th><?php echo $this->_tpl_vars['_times']; ?>
</th>
			  <th><?php echo $this->_tpl_vars['_checked_status']; ?>
</th>
			  <th><?php echo $this->_tpl_vars['_ip_address']; ?>
</th>
			  <th><?php echo $this->_tpl_vars['_trust_type']; ?>
</th>
			  <th><?php echo $this->_tpl_vars['_membergroup']; ?>
</th>
			  <th><?php echo $this->_tpl_vars['_integral']; ?>
</th>
			  <th><?php echo $this->_tpl_vars['_trust_star']; ?>
</th>
			  <th><?php echo $this->_tpl_vars['_action']; ?>
</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
			  <th colspan="10"><div class="pageLinks"><?php echo $this->_tpl_vars['ByPages']; ?>
</div></th>
			</tr>
		<tfoot>
		<tbody>
			<?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
			<tr class="tatr2">
			  <td class="firstCell"><?php if ($this->_tpl_vars['item']['candelete']): ?><input type="checkbox" name="id[]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" onclick="pbCheckItem(this,'idAll');" id="item_<?php echo $this->_tpl_vars['item']['id']; ?>
" title="<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php endif; ?></td>
			  <td><label for="item_<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['username']; ?>
</label><br><span style="color:gray;" title="<?php echo $this->_tpl_vars['item']['NickName']; ?>
"><small><?php echo $this->_tpl_vars['item']['NickName']; ?>
</small></span></td>
			  <td><?php if ($this->_tpl_vars['item']['pubdate'] > $this->_tpl_vars['today_timestamp']): ?><img src="images/new.gif" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['pubdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%H:%M:%S') : smarty_modifier_date_format($_tmp, '%H:%M:%S')); ?>
"/><?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['pubdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m-%d %H:%M") : smarty_modifier_date_format($_tmp, "%m-%d %H:%M")); ?>
<?php endif; ?>&nbsp;</td>
			  <td><?php echo $this->_tpl_vars['MemberStatus'][$this->_tpl_vars['item']['status']]; ?>
</td>
			  <td><?php echo $this->_tpl_vars['item']['reg_ip']; ?>
<?php echo smarty_function_iplocation(array('ip' => ($this->_tpl_vars['item']['reg_ip'])), $this);?>
</td>
			  <td><?php if ($this->_tpl_vars['item']['trust_image']): ?><?php echo $this->_tpl_vars['item']['trust_image']; ?>
<?php endif; ?></td>
			  <td><?php if ($this->_tpl_vars['item']['membergroup_id']): ?><a href="member.php?do=search&groupid=<?php echo $this->_tpl_vars['item']['membergroup_id']; ?>
"><img src="<?php echo $this->_tpl_vars['item']['group_image']; ?>
" border="0" alt="<?php echo $this->_tpl_vars['Membergroups'][$this->_tpl_vars['item']['membergroup_id']]['name']; ?>
" /></a><?php endif; ?></td>
			  <td><?php echo $this->_tpl_vars['item']['points']; ?>
</td>
			  <td><?php echo $this->_tpl_vars['item']['credits']; ?>
</td>
			  <td class="handler">
              <ul id="handler_icon">
                <?php if ($this->_tpl_vars['item']['candelete']): ?><li><a class="btn_delete" href="member.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
&do=del<?php echo $this->_tpl_vars['addParams']; ?>
" title="<?php echo $this->_tpl_vars['_delete']; ?>
"><?php echo $this->_tpl_vars['_delete']; ?>
</a></li><?php endif; ?>
                <li><a class="btn_edit" href="member.php?do=edit&id=<?php echo $this->_tpl_vars['item']['id']; ?>
<?php echo $this->_tpl_vars['addParams']; ?>
" title="<?php echo $this->_tpl_vars['_edit']; ?>
"><?php echo $this->_tpl_vars['_edit']; ?>
</a></li>
              </ul>
              </td>
			</tr>
			<?php endforeach; else: ?>
			<tr class="no_data info">
			  <td colspan="10"><?php echo $this->_tpl_vars['_no_datas']; ?>
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
		<select name="pb_action" id="PbAction" class="actionsel" onchange="javascript:document.list_frm.submit()">
		<option value="0"><?php echo $this->_tpl_vars['_pls_select']; ?>
<?php echo $this->_tpl_vars['_action']; ?>
</option>
		<optgroup label="<?php echo $this->_tpl_vars['_checked_status']; ?>
">
		<option value="status_1"><?php echo $this->_tpl_vars['_check_passed']; ?>
</option>
		<option value="status_3"><?php echo $this->_tpl_vars['_no_verify_passing']; ?>
</option>
		<option value="status_0"><?php echo $this->_tpl_vars['_check_invalid']; ?>
</option>
		<option value="status_4"><?php echo $this->_tpl_vars['_forbid']; ?>
</option>
		<option value="status_2"><?php echo $this->_tpl_vars['_moderated']; ?>
</option>
		</optgroup>
		<optgroup label="<?php echo $this->_tpl_vars['_setting']; ?>
 <?php echo $this->_tpl_vars['_membership_type']; ?>
">
		<?php $_from = $this->_tpl_vars['Membertypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['usertype'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['usertype']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key1'] => $this->_tpl_vars['item1']):
        $this->_foreach['usertype']['iteration']++;
?>
		<option value="membertype_<?php echo $this->_tpl_vars['key1']; ?>
"><?php echo $this->_tpl_vars['item1']; ?>
</option>
		<?php endforeach; endif; unset($_from); ?>
		</optgroup>
		<optgroup label="<?php echo $this->_tpl_vars['_setting']; ?>
 <?php echo $this->_tpl_vars['_member_group']; ?>
">
		<?php $_from = $this->_tpl_vars['MembergroupOptions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['MembergroupOptions'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['MembergroupOptions']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key2'] => $this->_tpl_vars['item2']):
        $this->_foreach['MembergroupOptions']['iteration']++;
?>
		<option value="membergroup_<?php echo $this->_tpl_vars['key2']; ?>
"><?php echo $this->_tpl_vars['item2']; ?>
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