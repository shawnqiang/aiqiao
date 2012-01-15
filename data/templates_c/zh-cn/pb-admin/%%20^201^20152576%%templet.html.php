<?php /* Smarty version 2.6.18, created on 2012-01-01 06:09:42
         compiled from templet.html */ ?>
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
 <?php echo $this->_tpl_vars['_templet']; ?>
 &raquo; <?php echo $this->_tpl_vars['_templet']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_templet']; ?>
</h3> 
</div>
<div class="mrightTop"> 
    <div class="fontr"> 
        <form name="search_frm" id="SearchFrm" method="get">
        <input type="hidden" name="do" value="search" />
             <div> 
				<?php echo $this->_tpl_vars['_keywords']; ?>
<input class="queryInput" type="text" name="q" value="<?php echo $_GET['q']; ?>
" /> 
                <input type="submit" name="search" id="Search" class="formbtn" value="<?php echo $this->_tpl_vars['_search']; ?>
" /> 
            </div> 
        </form> 
    </div> 
    <div class="fontr"></div> 
</div> 
<div class="tdare">
  <form name="list_frm" id="ListFrm" action="" method="post">
  <input type="hidden" name="type" value="user" />
  <table width="100%" cellspacing="0" class="dataTable" summary="<?php echo $this->_tpl_vars['_data_zone']; ?>
">
    <thead>
		<tr>
		  <th class="firstCell"><input type="checkbox" name="idAll" id="idAll" onclick="pbCheckAll(this,'id[]');" title="<?php echo $this->_tpl_vars['_select_switch']; ?>
"></th>
		  <th></th>
		  <th><label for="idAll"><?php echo $this->_tpl_vars['_templet_name']; ?>
</label></th>
		  <th><?php echo $this->_tpl_vars['_directory']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_author']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['_screenshot']; ?>
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
		  <td><?php if ($this->_tpl_vars['item']['is_default'] == 1): ?><img src="images/right.gif" alt="<?php echo $this->_tpl_vars['_default']; ?>
" /><?php endif; ?></td>
		  <td style="color:<?php echo $this->_tpl_vars['item']['style']; ?>
"><label for="item_<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['title']; ?>
</label></td>
		  <td><?php echo $this->_tpl_vars['item']['directory']; ?>
</td>
		  <td><?php echo $this->_tpl_vars['item']['author']; ?>
</td>
		  <td><?php if ($this->_tpl_vars['item']['type'] == 'system' && $this->_tpl_vars['item']['available'] == 1): ?><a href="templet.php?do=setup&name=<?php echo $this->_tpl_vars['item']['name']; ?>
&id=<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['_setup']; ?>
</a> | <?php endif; ?><?php if ($this->_tpl_vars['item']['picture']): ?><a href="<?php echo $this->_tpl_vars['item']['picture']; ?>
" title="" rel="lightbox"><?php echo $this->_tpl_vars['_preview']; ?>
</a><?php else: ?><?php echo $this->_tpl_vars['_preview']; ?>
<?php endif; ?></td>
		  <td class="handler">
           <ul id="handler_icon">
            <?php if ($this->_tpl_vars['item']['available']): ?>
            <li><a class="btn_edit" href="templet.php?do=edit&id=<?php echo $this->_tpl_vars['item']['id']; ?>
&type=<?php echo $this->_tpl_vars['item']['type']; ?>
<?php echo $this->_tpl_vars['addParams']; ?>
" title="<?php echo $this->_tpl_vars['_edit']; ?>
"><?php echo $this->_tpl_vars['_edit']; ?>
</a></li>
             <li><a class="btn_uninstall" href="templet.php?do=uninstall&type=<?php echo $this->_tpl_vars['item']['type']; ?>
&id=<?php echo $this->_tpl_vars['item']['id']; ?>
<?php echo $this->_tpl_vars['addParams']; ?>
" title="<?php echo $this->_tpl_vars['_uninstall']; ?>
"><?php echo $this->_tpl_vars['_uninstall']; ?>
</a></li>
             <?php else: ?>
			 <input type="hidden" name="entry[]" value="<?php echo $this->_tpl_vars['item']['entry']; ?>
" />
            <li><a class="btn_install" href="templet.php?entry=<?php echo $this->_tpl_vars['item']['entry']; ?>
&do=install&type=<?php echo $this->_tpl_vars['item']['type']; ?>
<?php echo $this->_tpl_vars['addParams']; ?>
" title="<?php echo $this->_tpl_vars['_install']; ?>
"><?php echo $this->_tpl_vars['_insatll']; ?>
</a></li>
            <?php endif; ?>
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
    <div class="left paddingT15" id="batchAction"><input type="submit" name="install" value="<?php echo $this->_tpl_vars['_install']; ?>
" class="formbtn batchButton"/></div>
    <div class="left paddingT15" id="batchAction"><input type="submit" name="del" value="<?php echo $this->_tpl_vars['_uninstall']; ?>
" class="formbtn batchButton"/></div>
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