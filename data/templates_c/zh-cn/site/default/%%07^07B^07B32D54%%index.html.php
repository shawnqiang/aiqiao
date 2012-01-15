<?php /* Smarty version 2.6.18, created on 2012-01-15 07:08:27
         compiled from default/service/index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'formhash', 'default/service/index.html', 63, false),array('function', 'html_radios', 'default/service/index.html', 68, false),array('block', 'feed', 'default/service/index.html', 112, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['_customer_service_center']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<style type="text/css">
@import url(<?php echo $this->_tpl_vars['theme_img_path']; ?>
css/effect.css);
</style>
<script src="scripts/jquery.tools.js"></script>

<div id="main" class="container">
	<div class="breadcrumb"><span><?php echo $this->_tpl_vars['position']; ?>
</span><?php echo $this->_tpl_vars['_customer_service_center']; ?>
</div>
	<div class="row">
		<div class="span13">
			
         	<div class="page-header">
         		<h2><?php echo $this->_tpl_vars['_customer_service']; ?>
</h2>
         	</div>
         	<ul class="tabs2 title_mouse">
			  <li><a href="javascript:;"><span><?php echo $this->_tpl_vars['_latest_new']; ?>
 <?php echo $this->_tpl_vars['_answers']; ?>
</span></a></li>
			  <li><a href="javascript:;"><span><?php echo $this->_tpl_vars['_latest_new']; ?>
 <?php echo $this->_tpl_vars['_problems']; ?>
</span></a></li>
			</ul>
			<div class="panes box_bord">
				<div class="customer_service">
				   <table>
					  <tr>
						<th><?php echo $this->_tpl_vars['_problems']; ?>
</th>
						<th><?php echo $this->_tpl_vars['_status']; ?>
</th>
						<th><?php echo $this->_tpl_vars['_submit_time']; ?>
</th>
						<th><?php echo $this->_tpl_vars['_reply_time']; ?>
</th>
					  </tr>
	                  <?php $_from = $this->_tpl_vars['AnsweredService']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['AnsweredService'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['AnsweredService']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item2']):
        $this->_foreach['AnsweredService']['iteration']++;
?>
					  <tr>
						<td><div class="title"><span>[<a href="service/list.php?typeid=<?php echo $this->_tpl_vars['item2']['type_id']; ?>
"><?php echo $this->_tpl_vars['item2']['typename']; ?>
</a>]</span><a href="service/detail.php?id=<?php echo $this->_tpl_vars['item2']['id']; ?>
"><?php echo $this->_tpl_vars['item2']['title']; ?>
</a></div></td>
						<td><?php if ($this->_tpl_vars['item2']['revert_content']): ?><span class="answer"><?php echo $this->_tpl_vars['_answered']; ?>
</span><?php else: ?><?php echo $this->_tpl_vars['_no_answer']; ?>
<?php endif; ?></td>
						<td><span<?php if ($this->_tpl_vars['item2']['revert_content']): ?> class="answer"<?php endif; ?>><?php echo $this->_tpl_vars['item2']['submitdate']; ?>
</span></td>
						<td><span<?php if ($this->_tpl_vars['item2']['revert_content']): ?> class="answer"<?php endif; ?>><?php echo $this->_tpl_vars['item2']['revertdate']; ?>
</span></td>
					  </tr>
	                  <?php endforeach; endif; unset($_from); ?>
				  </table>
				</div>
				<div class="customer_service" style="display: none;">
				   <table>
					  <tr>
						<th><?php echo $this->_tpl_vars['_problems']; ?>
</th>
						<th><?php echo $this->_tpl_vars['_status']; ?>
</th>
						<th><?php echo $this->_tpl_vars['_submit_time']; ?>
</th>
						<th><?php echo $this->_tpl_vars['_reply_time']; ?>
</th>
					  </tr>
	                  <?php $_from = $this->_tpl_vars['LatestService']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['LatestService'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['LatestService']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item1']):
        $this->_foreach['LatestService']['iteration']++;
?>
					  <tr>
						<td><div class="title"><span>[<a href="service/list.php?typeid=<?php echo $this->_tpl_vars['item1']['type_id']; ?>
"><?php echo $this->_tpl_vars['item1']['typename']; ?>
</a>]</span><a href="service/detail.php?id=<?php echo $this->_tpl_vars['item1']['id']; ?>
"><?php echo $this->_tpl_vars['item1']['title']; ?>
</a></div></td>
						<td><?php if ($this->_tpl_vars['item1']['revert_content']): ?><span class="answer"><?php echo $this->_tpl_vars['_answered']; ?>
</span><?php else: ?><?php echo $this->_tpl_vars['_no_answer']; ?>
<?php endif; ?></td>
						<td><span<?php if ($this->_tpl_vars['item1']['revert_content']): ?> class="answer"<?php endif; ?>><?php echo $this->_tpl_vars['item1']['submitdate']; ?>
</span></td>
						<td><span<?php if ($this->_tpl_vars['item1']['revert_content']): ?> class="answer"<?php endif; ?>><?php echo $this->_tpl_vars['item1']['revertdate']; ?>
</span></td>
					  </tr>
	                  <?php endforeach; endif; unset($_from); ?>
				  </table>
				</div>
		   	</div>

			<div class="mod" style="margin-top:18px;">
				
				<div class="mod-bd">
					<?php if ($this->_tpl_vars['Errors']): ?><?php echo $this->_tpl_vars['Errors']; ?>
<?php endif; ?>
          		<form action="service/post.php" name="service_frm" id="ServiceFrm" method="post">
					<?php echo smarty_function_formhash(array(), $this);?>

					<input type="hidden" name="save_service" value="save_service">
					<div class="clearfix">
						<label for=""><?php echo $this->_tpl_vars['_service_type']; ?>
</label>
						<div class="input">
							<?php echo smarty_function_html_radios(array('options' => $this->_tpl_vars['ServiceTypes'],'checked' => 1,'name' => "service[type_id]"), $this);?>

						</div>
					</div>
					<div class="clearfix">
						<label for=""><?php echo $this->_tpl_vars['_the_title']; ?>
</label>
						<div class="input">
							<input name="service[title]" type="text" value="<?php echo $this->_tpl_vars['item']['title']; ?>
" />
						</div>
					</div>
					<div class="clearfix">
						<label for=""><?php echo $this->_tpl_vars['_your_name']; ?>
</label>
						<div class="input">
							<input name="service[nick_name]" type="text" />
						</div>
					</div>
					<div class="clearfix">
						<label for=""><?php echo $this->_tpl_vars['_your_email']; ?>
</label>
						<div class="input">
							<input name="service[email]" type="text" value="<?php echo $this->_tpl_vars['item']['email']; ?>
" />
						</div>
					</div>
					<div class="clearfix">
						<label for=""><?php echo $this->_tpl_vars['_added_content']; ?>
</label>
						<div class="input">
							<textarea name="service[content]" cols="60" rows="5"><?php echo $this->_tpl_vars['item']['content']; ?>
</textarea>
						</div>
					</div>
					<div class="actions">
						<input name="" type="submit" value="<?php echo $this->_tpl_vars['_submit']; ?>
" class="btn primary"/>
					</div>    
					  
			  	</form>
				</div>
			</div>	
		</div>


		<div class="span4">
			<div class="mod">
				<div class="mod-hd">
					<h3><?php echo $this->_tpl_vars['_latest_tips']; ?>
</h3>
				</div>
				<div class="mod-bd">
					<ul>
					<?php $this->_tag_stack[] = array('feed', array('row' => '10')); $_block_repeat=true;smarty_block_feed($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					  <li>[link:title]</li>
					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_feed($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					</ul>
				</div>

				
			</div>
			<div class="mod">
				<div class="mod-hd">
					<h3><?php echo $this->_tpl_vars['_warm_reminder']; ?>
</h3>
				</div>
				<div class="mod-bd">
					<p><?php echo $this->_tpl_vars['_reply_submit_issue']; ?>
</p>    
					<p><h2><?php echo $this->_tpl_vars['_contact_us']; ?>
</h2><br />
						<?php echo $this->_tpl_vars['_service_hotline']; ?>
<?php echo $this->_tpl_vars['service_tel']; ?>
<br /></p>
					<p class="break"><?php echo $this->_tpl_vars['_email']; ?>
<a href="mailto:<?php echo $this->_tpl_vars['service_email']; ?>
"><?php echo $this->_tpl_vars['service_email']; ?>
</a></p>
				</div>	
			</div>

			<div class="mod">
				<div class="mod-hd">
					<h3><?php echo $this->_tpl_vars['_service_client']; ?>
</h3>
				</div>
				<div class="mod-bd">
					 <p><a href="service/client.php"><?php echo $this->_tpl_vars['_click_and_preview']; ?>
 <?php echo $this->_tpl_vars['_service_client']; ?>
</a></p>
				</div>	
			</div>
		</div>

		
	</div>	
</div>

<?php echo '
<script>
$(function() {
	$("ul.tabs2").tabs("div.panes > div");
});
</script>
'; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>