<?php /* Smarty version 2.6.18, created on 2012-01-06 04:03:18
         compiled from default/friendlink.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'friendlink', 'default/friendlink.html', 12, false),array('function', 'formhash', 'default/friendlink.html', 26, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['_apply_friendlink']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="main" class="container">
  <div class="breadcrumb"><span><?php echo $this->_tpl_vars['position']; ?>
</span></div>
  <div class="row">
    <div class="span4">
      <div class="mod">
        <div class="mod-hd">
          <h2><?php echo $this->_tpl_vars['_friend_links']; ?>
</h2>
        </div>
        <div class="mod-bd">
          <ul>
             <?php $this->_tag_stack[] = array('friendlink', array()); $_block_repeat=true;smarty_block_friendlink($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
              <li><?php echo $this->_tpl_vars['link']['link']; ?>
</li>
             <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_friendlink($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          </ul>
        </div>
      </div>
    </div>
    <div class="span13">
      <div class="mod">
        <div class="mod-hd">
          <h2><?php echo $this->_tpl_vars['_apply_friendlink']; ?>
</h2>
        </div>
        <div class="mod-bd">
          <form action="friendlink.php" method="post" name="friendlink_frm" id="FriendlinkFrm">
          <?php echo smarty_function_formhash(array(), $this);?>

          <input type="hidden" name="do" value="apply_friendlink">
          <table class="add_link_rightcon_info">
            <tr>
              <th><?php echo $this->_tpl_vars['_local_sitename']; ?>
</th>
              <td align="left"><?php echo $this->_tpl_vars['site_name']; ?>
</td>
            </tr>
            <tr>
              <th><?php echo $this->_tpl_vars['_local_siteurl']; ?>
</th>
              <td align="left"><?php echo $this->_tpl_vars['site_url']; ?>
</td>
            </tr>
            <tr>
              <th><?php echo $this->_tpl_vars['_local_sitelogo']; ?>
</th>
              <td rowspan="2" align="left"><img src="<?php echo $this->_tpl_vars['site_logo']; ?>
" alt="<?php echo $this->_tpl_vars['site_title']; ?>
"></td>
            </tr>
            <tr align="left">
              <th height="25">&nbsp;</th>
            </tr>
            <tr>
              <th><?php echo $this->_tpl_vars['_local_logourl']; ?>
</th>
              <td align="left"><?php echo $this->_tpl_vars['SiteUrl']; ?>
<?php echo $this->_tpl_vars['site_logo']; ?>
</td>
            </tr>
         
             <tr>
                <th><?php echo $this->_tpl_vars['_your_site_name']; ?>
</th>
                <td ><input name="friendlink[title]" type="text" size="20"  class="form_text"/></td>
              </tr>
              <tr>
                <th><?php echo $this->_tpl_vars['_your_site_address']; ?>
</th>
                <td><input name="friendlink[url]" type="text" size="20"  class="form_text"/></td>
              </tr>
              <tr>
                <th><?php echo $this->_tpl_vars['_your_site_logo']; ?>
</th>
                <td><input name="friendlink[logo]" type="text" size="20"  class="form_text"/></td>
              </tr>
              <tr>
                <th><?php echo $this->_tpl_vars['_contact_mail']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
                <td><input name="data[email]" type="text" size="20"  class="form_text"/></td>
              </tr>
              <tr>
                <th><?php echo $this->_tpl_vars['_your_site_description']; ?>
</th>
                <td><textarea name="friendlink[description]" cols="40" rows="5"></textarea></td>
              </tr>
              
              <tr>
                <th></th>
                <td><input name="btn_friendlink" type="button" value="<?php echo $this->_tpl_vars['_submit']; ?>
" class="btn" onclick="$('#FriendlinkFrm').submit();"/>&nbsp;&nbsp;&nbsp;&nbsp;<input name="reset" type="reset" value="<?php echo $this->_tpl_vars['_reset']; ?>
" class="btn"/></td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>