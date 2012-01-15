<?php /* Smarty version 2.6.18, created on 2012-01-06 06:20:55
         compiled from default/fair/detail.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'the_attachment', 'default/fair/detail.html', 34, false),array('function', 'formhash', 'default/fair/detail.html', 63, false),array('function', 'the_url', 'default/fair/detail.html', 80, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['page_title']),'nav_id' => 5)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script language="javascript" src="scripts/jquery/jquery.form.js"></script>
<?php echo '
<script type="text/javascript">
$(document).ready( function() {
	$("#rp").hide();
    var options = { 
		//url:\'virtual-office/fair.php\',
        target:        \'#rp\',   // target element(s) to be updated with server response 
        beforeSubmit:  function(){$("#rp").show();},  // pre-submit callback 
        success:       function(html){alert(html);},  // post-submit callback 
        timeout:   3000 
    }; 
    $(\'#btnJoinFair\').click(function() { 
        $("#JoinFair").ajaxSubmit(options); 
        return false; 
    });
});
</script>
'; ?>

<div id="main" class="container">
	<div class="breadcrumb"><span><?php echo $this->_tpl_vars['position']; ?>
</span></div>
	<div class="row">
		<div class="span13 main-content">
			<div class="page-heading">
				<h1><?php echo $this->_tpl_vars['item']['name']; ?>
</h1>
			</div>

			<div class="mod">
				<div class="mod-hd">
					<h2><span class="title_mouse"><?php echo $this->_tpl_vars['_fair_introduction']; ?>
</span></h2> 
				</div>
				<div class="mod-bd">
					<?php echo smarty_function_the_attachment(array('name' => ($this->_tpl_vars['item']['picture'])), $this);?>

					<p><?php echo $this->_tpl_vars['item']['description']; ?>
</p>
				</div>
			</div>

			<div class="mod">
				<div class="mod-hd">
					<h2><span class="title_mouse"><?php echo $this->_tpl_vars['_fair_content']; ?>
</span></h2>  
				</div>
				<div class="mod-bd">
					<?php echo $this->_tpl_vars['_fair_time']; ?>
 <?php echo $this->_tpl_vars['item']['begin_date']; ?>
 <?php echo $this->_tpl_vars['_arrive_to']; ?>
 <?php echo $this->_tpl_vars['item']['end_date']; ?>
<br />
					<?php echo $this->_tpl_vars['_address']; ?>
 <?php echo $this->_tpl_vars['item']['address']; ?>
<br />
					<?php echo $this->_tpl_vars['_fair_size']; ?>
 <?php echo $this->_tpl_vars['item']['scope']; ?>
<br />
					<?php echo $this->_tpl_vars['_organizer']; ?>
<?php echo $this->_tpl_vars['item']['hosts']; ?>
<br />
					<?php echo $this->_tpl_vars['_sponsor']; ?>
 <?php echo $this->_tpl_vars['item']['organisers']; ?>
<br />
					<?php echo $this->_tpl_vars['_support']; ?>
 <?php echo $this->_tpl_vars['item']['sponsors']; ?>
<br />
					<?php echo $this->_tpl_vars['_co_organizer']; ?>
 <?php echo $this->_tpl_vars['item']['co_organisers']; ?>
<br />
					<?php echo $this->_tpl_vars['_contact']; ?>
 <?php echo $this->_tpl_vars['item']['contacts']; ?>
<br />
					<?php echo $this->_tpl_vars['_notes']; ?>
 <?php echo $this->_tpl_vars['item']['important_notice']; ?>
<br />
				</div>
			</div>
		</div>
		<div class="span4 side-bar">
			<div class="mod">
				<div class="mod-hd">
					<h3><?php echo $this->_tpl_vars['_fair_enter_name']; ?>
</h3>
				</div>
				<div class="mod-bd">
					<form name="join_fair" id="JoinFair" action="virtual-office/fair.php" method="post">
					  <?php echo smarty_function_formhash(array(), $this);?>

				      <input type="hidden" name="do" value="join" />
				      <input type="hidden" name="is_ajax" value="1" />
				      <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['item']['id']; ?>
">
					  <span style="display: inline-block">
				      <input type="button" name="btn_join_fair" id="btnJoinFair" class="submit_w91" value="<?php echo $this->_tpl_vars['_enter_name_fair']; ?>
"/></span>
					  &nbsp;&nbsp;<span id="rp" style="display: inline-block"><img src="images/loading.gif" /></span>
				    </form>
				</div>
			</div>	
			<div class="mod">
				<div class="mod-hd">
					<h3><?php echo $this->_tpl_vars['_fair_business']; ?>
</h3>
				</div>
				<div class="mod-bd">
					<ul class="ex_con_rightlist" >
				        <?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['expomember'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['expomember']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['expomember']):
        $this->_foreach['expomember']['iteration']++;
?>
						<li><a href="<?php echo smarty_function_the_url(array('module' => 'space','userid' => ($this->_tpl_vars['expomember']['userid'])), $this);?>
" target="_blank"><?php echo $this->_tpl_vars['expomember']['name']; ?>
</a></li>
				        <?php endforeach; endif; unset($_from); ?>
					</ul>
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