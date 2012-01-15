<?php /* Smarty version 2.6.18, created on 2012-01-01 06:07:24
         compiled from ad.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'ad.html', 61, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script src="<?php echo $this->_tpl_vars['SiteUrl']; ?>
scripts/jquery/jquery.colorbox.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['SiteUrl']; ?>
scripts/jquery/colorbox/colorbox.css" media="screen" rel="stylesheet" type="text/css"/>
<?php echo '
<script>
jQuery(document).ready(function($) {
	$(\'a[rel*=lightbox]\').colorbox() 
})
</script>
'; ?>

<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_ads']; ?>
 &raquo; <?php echo $this->_tpl_vars['_ads']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_ads']; ?>
</h3> 
    <ul class="subnav">
		<li><a class="btn1" href="ad.php"><span><?php echo $this->_tpl_vars['_management']; ?>
</span></a></li>
        <li><a href="ad.php?do=edit"><?php echo $this->_tpl_vars['_add_or_edit']; ?>
</a></li>
    </ul>
</div>
<div class="mrightTop"> 
    <div class="fontr"> 
        <form name="search_frm" id="SearchFrm" method="get"> 
        <input type="hidden" name="do" value="search" />
             <div> 
                <select class="querySelect" name="adzone_id" id="AdzoneId">
				<option value="0"><?php echo $this->_tpl_vars['_pls_select']; ?>
<?php echo $this->_tpl_vars['_adzone']; ?>
</option>
				<?php $_from = $this->_tpl_vars['Adzones']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                <option value="<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['name']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
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
  <table width="100%" cellspacing="0" class="dataTable" summary="<?php echo $this->_tpl_vars['_data_zone']; ?>
">
    <thead>
		<tr>
		  <th class="firstCell"><input type="checkbox" name="idAll" id="idAll" onclick="pbCheckAll(this,'id[]');" title="<?php echo $this->_tpl_vars['_select_switch']; ?>
"></th>
		  <th><label for="idAll"><?php echo $this->_tpl_vars['_the_title']; ?>
</label></th>
		  <th><?php echo $this->_tpl_vars['_position']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_if_online']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_if_valid_n']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_screenshot']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_clicks']; ?>
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
"><?php echo $this->_tpl_vars['item']['title']; ?>
</label></td>
		  <td><a title="<?php echo $this->_tpl_vars['_click_and_search']; ?>
" href="ad.php?do=search&adzone_id=<?php echo $this->_tpl_vars['item']['adzone_id']; ?>
"><?php echo $this->_tpl_vars['item']['adzone']; ?>
</a></td>
		  <td><?php echo $this->_tpl_vars['AdsStatus'][$this->_tpl_vars['item']['state']]; ?>
</td>
		  <td><?php echo $this->_tpl_vars['AdsStatus'][$this->_tpl_vars['item']['status']]; ?>
</td>
		  <td><?php if ($this->_tpl_vars['item']['is_image'] == 1): ?><a href="<?php echo $this->_tpl_vars['item']['src']; ?>
" rel="lightbox"><img class="double-border" src="<?php echo $this->_tpl_vars['item']['src']; ?>
" width="150" /></a><?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['start_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
<?php echo $this->_tpl_vars['_arrive_to']; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['end_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
<?php endif; ?></td>
		  <td><?php echo $this->_tpl_vars['item']['clicked']; ?>
</td>
		  <td class="handler">
          <ul id="handler_icon">
            <li><a class="btn_delete" href="ad.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
&adzone_id=<?php echo $this->_tpl_vars['item']['adzone_id']; ?>
&do=del<?php echo $this->_tpl_vars['addParams']; ?>
" title="<?php echo $this->_tpl_vars['_delete']; ?>
"><?php echo $this->_tpl_vars['_delete']; ?>
</a></li>
            <li><a class="btn_edit" href="ad.php?do=edit&id=<?php echo $this->_tpl_vars['item']['id']; ?>
<?php echo $this->_tpl_vars['addParams']; ?>
" title="<?php echo $this->_tpl_vars['_edit']; ?>
"><?php echo $this->_tpl_vars['_edit']; ?>
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
      <input type="submit" name="down" value="<?php echo $this->_tpl_vars['_set_offline']; ?>
" class="formbtn batchButton"/>
      <input type="submit" name="up" value="<?php echo $this->_tpl_vars['_set_online']; ?>
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