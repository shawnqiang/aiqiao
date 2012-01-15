<?php /* Smarty version 2.6.18, created on 2012-01-01 05:58:22
         compiled from default/member.purchase.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'formhash', 'default/member.purchase.html', 18, false),array('block', 'good', 'default/member.purchase.html', 29, false),array('modifier', 'default', 'default/member.purchase.html', 76, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['_select_buy_service']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<style type="text/css">
@import url(<?php echo $this->_tpl_vars['theme_img_path']; ?>
css/effect.css);
</style>
<script src="scripts/jquery.tools.js"></script>
<div class="wrapper">
	<div class="tips"><span><?php echo $this->_tpl_vars['position']; ?>
</span></div>  
	<div class="blank6"></div>
         <!-- the tabs -->
        <ul class="tabs2 title_mouse">
              <li><a href="javascript:;"><span><?php echo $this->_tpl_vars['_member_upgrade']; ?>
</span></a></li>
        </ul>
        <!-- tab "panes" -->
	<div class="panes box_bord">
		<div class="charge_txt">
			<table>
				<form method="post" name="apply_frm" id="ApplyFrm" action="<?php echo $_SERVER['PHP_SELF']; ?>
" target="_self" />
				<?php echo smarty_function_formhash(array(), $this);?>

				<input type="hidden" name="do" value="buynow" />
				  <tr>
					<th><?php echo $this->_tpl_vars['_applicant_name']; ?>
</th>
					<td><?php if ($this->_tpl_vars['pb_userid']): ?><?php echo $this->_tpl_vars['pb_username']; ?>
<?php else: ?><input name="username" type="text" id="username"><span>*<span><br>
							<?php echo $this->_tpl_vars['_applicant_name_conditions']; ?>
</span><?php endif; ?></td>
				  </tr>
				  <tr>
					<th><?php echo $this->_tpl_vars['_applicant_type']; ?>
</th>
					<td><label>
					  <select name="good_id" id="GoodId">
							  <?php $this->_tag_stack[] = array('good', array('name' => 'item','row' => "-1")); $_block_repeat=true;smarty_block_good($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
							  <option value="<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['title']; ?>
&nbsp;<?php echo $this->_tpl_vars['item']['price']; ?>
</option>
							  <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_good($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
							</select>
					</label></td>
				  </tr>
				  <tr>
					<th><?php echo $this->_tpl_vars['_telephone']; ?>
</th>
					<td><label>
					  <input name="tel" type="text" class="linehui" id="member_tel" value="<?php echo $this->_tpl_vars['MemberInfo']['tel']; ?>
" disabled="disabled">
							  <span><?php echo $this->_tpl_vars['_left_bracket']; ?>
<a href="javascript:;" onclick="$('#member_tel').attr('disabled',false);"><?php echo $this->_tpl_vars['_modify']; ?>
</a><?php echo $this->_tpl_vars['_right_bracket']; ?>
</span>
					</label></td>
				  </tr>
				  <tr>
					<th><?php echo $this->_tpl_vars['_email']; ?>
</th>
					<td><label>
					  <input name="email" type="text" class="linehui" id="member_email" value="<?php echo $this->_tpl_vars['MemberInfo']['email']; ?>
" disabled="disabled">
							  <span class="fontred"><?php echo $this->_tpl_vars['_left_bracket']; ?>
<a href="javascript:;" onclick="$('#member_email').attr('disabled',false);"><?php echo $this->_tpl_vars['_modify']; ?>
</a><?php echo $this->_tpl_vars['_right_bracket']; ?>
</span>
					</label></td>
				  </tr>				  
				  <tr>
					<th><?php echo $this->_tpl_vars['_select_pay_method']; ?>
</th>
					<td><label>
					  <select name="payment_id" id="PaymentId">
							  <?php $_from = $this->_tpl_vars['payments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
							  <option value="<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['title']; ?>
</option>
							  <?php endforeach; endif; unset($_from); ?>
							</select>
					</label></td>
				  </tr>

				  <tr>
					<th><?php echo $this->_tpl_vars['_description']; ?>
</th>
					<td><label>
					  <input name="content" type="text" class="linehui" id="content" value="" />
					</label></td>
				  </tr>
				  <tr>
					<th>&nbsp;</th>
					<td><input type="button" class="submit_w118" value="<?php echo $this->_tpl_vars['_next_step']; ?>
" onclick="$('#ApplyFrm').submit();"/></td>
				  </tr>
				  </form>
			</table>
		</div>
      </div>
</div>
<script>
var index_val = <?php echo ((is_array($_tmp=@$this->_tpl_vars['index'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
;
</script>
<?php echo '
<script>
$(function() {
$("ul.tabs2").tabs("div.panes > div",{initialIndex:index_val});
});
</script>
'; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>