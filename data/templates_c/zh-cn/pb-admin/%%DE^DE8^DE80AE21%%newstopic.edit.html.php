<?php /* Smarty version 2.6.18, created on 2012-01-01 12:46:22
         compiled from newstopic.edit.html */ ?>
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
		<li><a href="news.php"><?php echo $this->_tpl_vars['_management']; ?>
</a></li>
        <li><a href="newstopic.php"><?php echo $this->_tpl_vars['_topic_news']; ?>
</a></li>
        <li><a class="btn1" href="newstopic.php?do=edit"><span><?php echo $this->_tpl_vars['_add_or_edit']; ?>
</span></a></li>
        <li><a href="newstype.php"><?php echo $this->_tpl_vars['_sorts']; ?>
</a></li>
		<li><a href="newsgather.php"><?php echo $this->_tpl_vars['_collection']; ?>
</a></li>
    </ul>
</div>
<div class="info">
  <form method="post" action="newstopic.php" id="EditFrm" name="edit_frm" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" />
  <input type="hidden" name="page" value="<?php echo $_GET['page']; ?>
" />
    <table class="infoTable">
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_title']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5">          
		<input class="infoTableInput2" name="newstopic[title]" value="<?php echo $this->_tpl_vars['item']['title']; ?>
" /></td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_digest_n']; ?>
</th>
        <td class="paddingT15 wordSpacing5">          
		<input class="infoTableInput2" name="newstopic[description]" value="<?php echo $this->_tpl_vars['item']['description']; ?>
" /></td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_info']; ?>
 <?php echo $this->_tpl_vars['_lists']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><textarea name="data[news]" id="dataNews"><?php echo $this->_tpl_vars['item']['news']; ?>
</textarea><label class="field_notice"><?php echo $this->_tpl_vars['_add_more_than_one_line_on_behalf_of_a_record']; ?>
</label></td>
      </tr>
      <tr>
        <th class="paddingT15"><?php echo $this->_tpl_vars['_picture']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5">
        <input class="infoTableFile2" type="file" name="pic" id="pic" />
          <label class="field_notice"><?php echo $this->_tpl_vars['_image_format_support']; ?>
</label>
          <?php if ($this->_tpl_vars['item']['picture']): ?>
          <br /><span><img src="<?php echo $this->_tpl_vars['item']['image']; ?>
" alt="<?php echo $this->_tpl_vars['item']['name']; ?>
"/></span>
          <?php endif; ?>
        </td>
      </tr>
      <tr>
        <th></th>
        <td class="ptb20">
			<input class="formbtn" type="submit" name="save" value="<?php echo $this->_tpl_vars['_save']; ?>
" />		</td>
      </tr>
    </table>
  </form>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>