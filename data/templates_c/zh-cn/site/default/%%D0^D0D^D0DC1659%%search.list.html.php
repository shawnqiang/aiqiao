<?php /* Smarty version 2.6.18, created on 2012-01-20 08:40:37
         compiled from default/search.list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'sprintf', 'default/search.list.html', 29, false),array('modifier', 'urldecode', 'default/search.list.html', 49, false),array('modifier', 'truncate', 'default/search.list.html', 105, false),array('modifier', 'truncate_multi', 'default/search.list.html', 158, false),array('function', 'the_url', 'default/search.list.html', 45, false),array('function', 'pager', 'default/search.list.html', 128, false),array('function', 'mailto', 'default/search.list.html', 191, false),array('block', 'industry', 'default/search.list.html', 82, false),array('block', 'company', 'default/search.list.html', 156, false),array('block', 'adword', 'default/search.list.html', 168, false),array('block', 'userpage', 'default/search.list.html', 188, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['charset']; ?>
" />
<title><?php echo $this->_tpl_vars['page_title']; ?>
 - <?php echo $this->_tpl_vars['site_title']; ?>
</title>
<base href="<?php echo $this->_tpl_vars['SiteUrl']; ?>
">
<meta name ="keywords" content="<?php echo $this->_tpl_vars['metakeywords']; ?>
">
<meta name ="description" content="<?php echo $this->_tpl_vars['metadescription']; ?>
"> 
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['theme_img_path']; ?>
css/basic.css" />
<script src="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
scripts/jquery.js"></script>
<script src="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
scripts/langs/<?php echo $this->_tpl_vars['JsLanguage']; ?>
.js" charset="<?php echo $this->_tpl_vars['charset']; ?>
"></script>
<script>
var input_keywords = "<?php echo $this->_tpl_vars['_input_keywords']; ?>
";
</script>
<?php echo '
<script>
$(document).ready(function(){
	$("#all_cats").click(function(){
		$("#sub_cats").slideToggle("fast",function(){ $("#all_cats").toggleClass("tbos2"); $("#all_cats").toggleClass("tbos");} );
	});
});
</script>
'; ?>

</head>
<body>
<!--top-->
<div id="shortcuts">
  <div class="container">
  <div class="pull-right"><a href="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
"><?php echo $this->_tpl_vars['_back_portal']; ?>
</a>&nbsp;|&nbsp;<?php if (! $this->_tpl_vars['pb_username']): ?><a href="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
logging.php" id="lb"><?php echo $this->_tpl_vars['_pls_login']; ?>
</a><?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['_hello'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, $this->_tpl_vars['pb_username']) : sprintf($_tmp, $this->_tpl_vars['pb_username'])); ?>
&nbsp;|&nbsp;<a href="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
redirect.php?url=/virtual-office" target="_officeroom"><?php echo $this->_tpl_vars['_my_office_room']; ?>
</a><?php endif; ?></div>
  </div>
</div>
<div id="header">
  <div class="container">
    <div class="row">
      <div class="span4">
        <a href="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
"><img title="logo" src="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
<?php echo $this->_tpl_vars['site_logo']; ?>
" border=0 alt="<?php echo $this->_tpl_vars['site_banner_word']; ?>
"></a>
      </div>
      <div class="span12 offset1">
        <form name="search_frm" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>
">
            <div class="Tit">
              <?php $_from = $this->_tpl_vars['top_modules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['module'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['module']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['module']):
        $this->_foreach['module']['iteration']++;
?>
              <?php if ($this->_tpl_vars['key'] == $_GET['do']): ?>
              <strong><?php echo $this->_tpl_vars['module']; ?>
</strong>&nbsp;&nbsp;&nbsp;&nbsp;
              <?php else: ?>
              <a href="<?php echo smarty_function_the_url(array('module' => 'list','extra' => "do,".($this->_tpl_vars['key'])."|typeid|pos|total_count"), $this);?>
"><?php echo $this->_tpl_vars['module']; ?>
</a>&nbsp;&nbsp;&nbsp;&nbsp;
              <?php endif; ?>
              <?php endforeach; endif; unset($_from); ?>
            </div>
            <input value="<?php echo ((is_array($_tmp=$_GET['q'])) ? $this->_run_mod_handler('urldecode', true, $_tmp) : urldecode($_tmp)); ?>
" name="q" id="kw" size="42" maxlength="90"> <input type="hidden" name="do" value="<?php echo $_GET['do']; ?>
"> <span class="btn_wr"><input type="submit" onmouseout="this.className='btn'" onmousedown="this.className='btn btn_h'" class="btn" id="su" value="<?php echo $this->_tpl_vars['_search_now']; ?>
"></span>
        </form>
      </div>
    </div>
  </div>
</div>
<div id="main" class="container">
  <div class="row">
    <div class="span4 side-bar l-col">
      <div id="gxszHead"><a href="javascript:;" onclick="$('#tbd').toggle();"><?php echo $this->_tpl_vars['_hide_or_show_option']; ?>
</a></div>
        <ul class="info-list">
          <?php $_from = $this->_tpl_vars['modules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['module'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['module']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['module']):
        $this->_foreach['module']['iteration']++;
?>
          <?php if ($this->_foreach['module']['iteration'] == 1): ?>
            <li><dl>
            <dt id="all_cats"><a href="javascript:;" id="link_all_cats" class="q"><?php echo $this->_tpl_vars['_all_of']; ?>
<?php echo $this->_tpl_vars['module']; ?>
</a></dt>
              <dd>
              <ul id="sub_cats" class="info-list">
              <?php $_from = $this->_tpl_vars['cats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key1'] => $this->_tpl_vars['item1']):
?>
              <li class="tbou"><a href="<?php echo smarty_function_the_url(array('module' => 'list','extra' => "typeid,".($this->_tpl_vars['key1'])."|pos|total_count"), $this);?>
" class="q" style="<?php if ($_GET['typeid'] == $this->_tpl_vars['key1']): ?>font-weight:bold;<?php endif; ?>"><?php echo $this->_tpl_vars['item1']; ?>
</a></li>
              <?php endforeach; endif; unset($_from); ?>
              </ul>
              </dd> 
            </dl></li>
            <?php else: ?>
            <li><a href="<?php echo smarty_function_the_url(array('module' => 'list','extra' => "do,".($this->_tpl_vars['key'])."|typeid|pos|total_count"), $this);?>
" class="q"><?php echo $this->_tpl_vars['module']; ?>
</a></li>
          <?php endif; ?>
          <?php endforeach; endif; unset($_from); ?>
        </ul>
      <div class="mod">
        <div class="mod-hd">
          <h3><?php echo $this->_tpl_vars['_sort_screening']; ?>
</h3>
        </div>
        <div class="mod-bd">
          <?php $this->_tag_stack[] = array('industry', array('level' => 1)); $_block_repeat=true;smarty_block_industry($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
          <a title="<?php echo $this->_tpl_vars['industry']['title']; ?>
" href="<?php echo smarty_function_the_url(array('module' => 'list','extra' => "do,".($this->_tpl_vars['key'])."|industryid,".($this->_tpl_vars['industry']['id'])), $this);?>
"><?php echo $this->_tpl_vars['industry']['title']; ?>
</a>
          <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_industry($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
      </div>

      <div class="mod">
        <div class="mod-hd">
          <h3><?php echo $this->_tpl_vars['_orderby_method']; ?>
</h3>
        </div>
        <div class="mod-bd">
          <a title="" href="<?php echo smarty_function_the_url(array('module' => 'list','extra' => "do,".($_GET['do'])."|orderby,dateline"), $this);?>
"><?php echo $this->_tpl_vars['_sort_by_date']; ?>
</a>
        </div>
      </div>
      
    </div>
    <div class="span9 main-content c-col">
      <div><?php echo ((is_array($_tmp=$this->_tpl_vars['_search_result_paging'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ($this->_tpl_vars['highlight_str']), ($this->_tpl_vars['paging']['total']), ($this->_tpl_vars['paging']['from']), ($this->_tpl_vars['paging']['to']), ($this->_tpl_vars['TimeSpend'])) : sprintf($_tmp, ($this->_tpl_vars['highlight_str']), ($this->_tpl_vars['paging']['total']), ($this->_tpl_vars['paging']['from']), ($this->_tpl_vars['paging']['to']), ($this->_tpl_vars['TimeSpend']))); ?>
</div>
      <div id="res" class="med">
        <div>
          <ol>
           <?php $_from = $this->_tpl_vars['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['result'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['result']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['result']['iteration']++;
?>
            <li class="g">  
            <h3 class="r"><font color="#261cdc">[<?php echo $this->_tpl_vars['item']['typename']; ?>
]</font>&nbsp;<a title="<?php echo $this->_tpl_vars['item']['title']; ?>
" target="_blank" href="<?php echo $this->_tpl_vars['item']['url']; ?>
" class="l"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 20) : smarty_modifier_truncate($_tmp, 20)); ?>
</a><?php if ($this->_tpl_vars['item']['gradeimg']): ?><a title="<?php echo $this->_tpl_vars['item']['gradename']; ?>
" href="<?php echo $this->_tpl_vars['item']['url']; ?>
"><img src="<?php echo $this->_tpl_vars['item']['gradeimg']; ?>
" alt="<?php echo $this->_tpl_vars['item']['gradename']; ?>
"></a><?php endif; ?>
            </h3>
            <div class="s">
                <!-- picture -->
                <div class="tbt2">
                <?php if ($this->_tpl_vars['item']['picture'] || $this->_tpl_vars['item']['image']): ?>
                <a target="_blank" href="<?php echo $this->_tpl_vars['item']['url']; ?>
"><img height="70" width="79" src="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
<?php echo $this->_tpl_vars['item']['thumb']; ?>
"></a>
                <?php endif; ?>
                </div><!-- picture END -->
                <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['digest'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 100) : smarty_modifier_truncate($_tmp, 100)); ?>
<br><cite><?php if ($this->_tpl_vars['item']['extra']): ?><?php echo $this->_tpl_vars['item']['extra']; ?>
<?php else: ?><?php echo $this->_tpl_vars['item']['url']; ?>
<?php endif; ?> - (<?php echo $this->_tpl_vars['item']['pubdate']; ?>
)</cite>
            </div>
        
            </li>
            <?php endforeach; else: ?>
            <div id="no_result" style="font-size: 14px; line-height: 200%; color: #000000; text-align: center; padding-top: 40px; width: 560px; word-wrap: break-word;">
            <img src="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
<?php echo $this->_tpl_vars['theme_img_path']; ?>
images/no_result.png">&nbsp;&nbsp;<?php echo $this->_tpl_vars['no_result_tip']; ?>
</div>
            <?php endif; unset($_from); ?>
          </ol>
        </div>
        
        

        <div class="p">
          <div class="jogger"><?php echo smarty_function_pager(array('rowcount' => ($this->_tpl_vars['paging']['total']),'limit' => 10,'txt_prev' => ($this->_tpl_vars['_prev_page']),'txt_next' => ($this->_tpl_vars['_next_page'])), $this);?>
</div>
        </div>
        

        <div class="kgd">
          <div id="rs">
            <table cellpadding="0">
              <tbody>
                <tr>
                  <th class="tt" rowspan="2"><?php echo $this->_tpl_vars['_similar_search']; ?>
</th>
                  <?php $_from = $this->_tpl_vars['similar_search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['similar'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['similar']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['similar']['iteration']++;
?>
                  <th><a href="<?php echo smarty_function_the_url(array('module' => 'list','extra' => "q,".($this->_tpl_vars['item']['title'])."|total_count|pos|typeid"), $this);?>
"><?php echo $this->_tpl_vars['item']['title']; ?>
</a>
                  </th><td></td>
                  <?php if (!($this->_foreach['similar']['iteration'] % 5)): ?>
                  <th></th>
                  </tr><tr>
                  <?php endif; ?>
                  <?php endforeach; endif; unset($_from); ?>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="span4 side-bar r-col">
        <ol>
          <?php $this->_tag_stack[] = array('company', array('row' => 5)); $_block_repeat=true;smarty_block_company($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
          <li style="height: auto; overflow: hidden;">
              <h3><a title="<?php echo $this->_tpl_vars['company']['name']; ?>
" target="_blank" href="<?php echo $this->_tpl_vars['company']['url']; ?>
" id="an1"><?php echo $this->_tpl_vars['company']['name']; ?>
</a></h3><?php echo $this->_tpl_vars['_main_business']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['company']['main_prod'])) ? $this->_run_mod_handler('truncate_multi', true, $_tmp, 25) : smarty_modifier_truncate_multi($_tmp, 25)); ?>

              </li>
          <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_company($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </ol>
    </div>
  </div>

</div>
  <div id="tads" class="tads">
		<ol>
  		<?php $this->_tag_stack[] = array('adword', array('row' => 3)); $_block_repeat=true;smarty_block_adword($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
  		<li class="tas">
  		<div class="vsta">
  			<h3><a target="_blank" href="<?php echo $this->_tpl_vars['adword']['target_url']; ?>
" id="pa1"><?php echo $this->_tpl_vars['adword']['title']; ?>
</a></h3>
  			<span class="ac"><?php echo $this->_tpl_vars['adword']['content']; ?>
</span>
  			<span><cite><?php echo $this->_tpl_vars['adword']['url']; ?>
</cite></span>
  			<table style="margin-top: 4px;" class="slk"><tbody><tr><td style="padding-left: 14px; vertical-align: top;"></td></tr></tbody></table>
  		</div>
  		</li>
  		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_adword($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		</ol>
	</div>





</div>
<div id="footer">
  <div class="container">
    <?php $this->_tag_stack[] = array('userpage', array('row' => 15,'sep' => "<span>|</span>")); $_block_repeat=true;smarty_block_userpage($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
      <?php echo $this->_tpl_vars['page']['link']; ?>

    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_userpage($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <p><?php echo $this->_tpl_vars['site_name']; ?>
 <?php echo $this->_tpl_vars['_copyright']; ?>
&copy;&nbsp;<?php echo $this->_tpl_vars['_service_hotline']; ?>
 <?php echo $this->_tpl_vars['service_tel']; ?>
&nbsp;<?php echo $this->_tpl_vars['_service_email']; ?>
:<?php echo smarty_function_mailto(array('text' => ($this->_tpl_vars['service_email']),'address' => ($this->_tpl_vars['service_email']),'encode' => 'javascript'), $this);?>
&nbsp;<a href="javascript:;" onclick="<?php echo '$(\'html, body\').animate({scrollTop: \'0px\'}, 300);return false;'; ?>
"><?php echo $this->_tpl_vars['_go_top']; ?>
</a>     </p>
    <p><?php echo $this->_tpl_vars['icp_number']; ?>
</p>
    
    
  </div>
</div>
<script language="javascript" src="scripts/highlight.js"></script>
<?php if ($this->_tpl_vars['highlight_str']): ?>
<script>
$('#res div:not("#no_result,#rs")').highlight('<?php echo $this->_tpl_vars['highlight_str']; ?>
');
</script>
<?php endif; ?>
</body>
</html>