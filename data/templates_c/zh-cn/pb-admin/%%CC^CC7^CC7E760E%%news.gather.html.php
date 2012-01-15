<?php /* Smarty version 2.6.18, created on 2012-01-01 12:45:21
         compiled from news.gather.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_radios', 'news.gather.html', 30, false),)), $this); ?>
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
        <li><a href="news.php?do=edit"><?php echo $this->_tpl_vars['_add_or_edit']; ?>
</a></li>
        <li><a href="newstopic.php"><?php echo $this->_tpl_vars['_topic_news']; ?>
</a></li>
        <li><a href="newstype.php"><?php echo $this->_tpl_vars['_sorts']; ?>
</a></li>
        <li><a class="btn1" href="newsgather.php"><span><?php echo $this->_tpl_vars['_collection']; ?>
</span></a></li>
    </ul>
</div>
<div class="info">
  <form method="post" action="" id="EditFrm" name="edit_frm">
  <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" />
  <input type="hidden" name="page" value="<?php echo $_GET['page']; ?>
" />
    <table class="infoTable">
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_category']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
</th>
        <td class="paddingT15 wordSpacing5">
        <select name="data[type_id]" id="DataTypeId">
        <?php echo $this->_tpl_vars['NewstypeOptions']; ?>

        </select>
        </td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_deal_the_same_title']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><?php echo smarty_function_html_radios(array('name' => 'throw_similar','options' => $this->_tpl_vars['AskAction'],'checked' => 1,'separator' => ""), $this);?>
</td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_gather_url_and_rules']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><?php echo '          
		<textarea style="width:650px;height:150px;" name="rules">http://www.cpp1.cn/News.htm
/^http:\\/\\/www\\.cpp1\\.cn\\/News\\/[0-9]{4}-[0-9]{1,2}\\/[0-9]{1,2}\\/[0-9]+\\.htm/i
/<span[^>]*id="ctl00_ContentPlaceHolder1_newsShow_ctl00_txtTitle">([^<>]*)<\\/span>/si
/<span[^>]*id="ctl00_ContentPlaceHolder1_newsShow_ctl00_txtBody"[^>]*>(.*?)<\\/span>/si</textarea>'; ?>
<br /><label class="field_notice"><?php echo $this->_tpl_vars['_gather_rules']; ?>
</label></td>
      </tr>      
      <tr>
        <th></th>
        <td class="ptb20">
			<input class="formbtn" type="submit" id="Gather" name="gather" value="<?php echo $this->_tpl_vars['_immediately']; ?>
 <?php echo $this->_tpl_vars['_collection']; ?>
" />		</td>
      </tr>
    </table>
  </form>
</div>
<script src="<?php echo $this->_tpl_vars['SiteUrl']; ?>
scripts/jquery/jquery.colorbox.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['SiteUrl']; ?>
scripts/jquery/colorbox/colorbox.css" media="screen" rel="stylesheet" type="text/css"/>
<script>
var do_not_close_when_doing = "<?php echo $this->_tpl_vars['_do_not_close_when_doing']; ?>
";
</script>
<?php echo '
<script>
$(document).ready(function() {
	$("#Gather").click( function () { 
		$.colorbox({html:do_not_close_when_doing,width:300,height:100}); 
	}); 
});
</script>
'; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>