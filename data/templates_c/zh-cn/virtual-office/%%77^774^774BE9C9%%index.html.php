<?php /* Smarty version 2.6.18, created on 2012-01-13 15:26:00
         compiled from index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'index.html', 6, false),array('block', 'announce', 'index.html', 57, false),)), $this); ?>
<?php $this->assign('page_title', ($this->_tpl_vars['_office_homepage'])); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link href="../scripts/jquery/ui.css" rel="stylesheet" type="text/css"/>
<script src="../scripts/jquery/ui.core.js"></script>
<script>
var service_days = <?php echo ((is_array($_tmp=@$this->_tpl_vars['service_days'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1)); ?>
;
</script>
<?php echo '
<script>
$(document).ready(function() {
	$("#progressbar").progressbar({ value:service_days});
	$("#info-manage").removeClass("current_nav");
	$("#home-page").toggleClass("current_nav");
});
</script>
'; ?>

<div id="main" class="container">
  <div class="row">
    <div class="span4" class="side-bar">
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
    <div class="span8" class="main-content">
      <div class="mod vs-welcome">
          <?php echo $this->_tpl_vars['_my_honour']; ?>
<?php echo ((is_array($_tmp=@$this->_tpl_vars['UserName'])) ? $this->_run_mod_handler('default', true, $_tmp, @$_SESSION['MemberName']) : smarty_modifier_default($_tmp, @$_SESSION['MemberName'])); ?>
&nbsp;<?php echo $this->_tpl_vars['MemberInfo']['gender_name']; ?>
<?php echo $this->_tpl_vars['_the_last_visit_time_was']; ?>
<?php echo $this->_tpl_vars['LastLogin']; ?>

      </div>
      <div class="mod">
        <div class="mod-hd">
          <h2><?php echo $this->_tpl_vars['_basic_info']; ?>
</h2>
        </div>
        <div class="mod-bd">
          <ul>
            <li><?php echo $this->_tpl_vars['_now_you_are']; ?>
<?php echo $this->_tpl_vars['group']['name']; ?>
(<a href="../purchase.php?do=upgrade" title="" target="_blank"><?php echo $this->_tpl_vars['_upgrade_now']; ?>
</a>)(<a href="../purchase.php?do=charge" title="" target="_blank"><?php echo $this->_tpl_vars['_charge_now']; ?>
</a>)<img src="../images/group/<?php echo $this->_tpl_vars['group']['image']; ?>
" alt="<?php echo $this->_tpl_vars['group']['name']; ?>
" /></li>
            <li><?php echo $this->_tpl_vars['_year_service']; ?>
 <?php echo $this->_tpl_vars['MemberInfo']['start_date']; ?>
<?php echo $this->_tpl_vars['_arrive_to']; ?>
<?php echo $this->_tpl_vars['MemberInfo']['end_date']; ?>
</li>
            <li><div id="progressbar"></div>&nbsp;<?php if ($this->_tpl_vars['service_days'] >= 100): ?><strong><?php echo $this->_tpl_vars['_been_expired']; ?>
<a href="../purchase.php?do=upgrade" target="_blank"><?php echo $this->_tpl_vars['_upgrade_now']; ?>
</a></strong><?php endif; ?></li>
          </ul>
        </div>
      </div>
      <div class="mod">
        <div class="mod-hd">
          <h2><?php echo $this->_tpl_vars['_statistics']; ?>
</h2> 
        </div>
        <div class="mod-bd">
          <p class="credit"><strong><?php echo $this->_tpl_vars['_your_account']; ?>
</strong><?php echo $this->_tpl_vars['_balance_amount']; ?>
<em><?php echo ((is_array($_tmp=@$this->_tpl_vars['MemberInfo']['balance_amount'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
</em> | <?php echo $this->_tpl_vars['_your_points']; ?>
<em><?php echo ((is_array($_tmp=@$this->_tpl_vars['MemberInfo']['points'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
</em></p>
          <p class="info"><strong><?php echo $this->_tpl_vars['_information_n']; ?>
</strong><?php $_from = $this->_tpl_vars['items_offer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['items_offer'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['items_offer']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['items_offer']['iteration']++;
?><?php echo $this->_tpl_vars['key']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
<em><?php echo $this->_tpl_vars['item']; ?>
</em> <?php echo $this->_tpl_vars['_number']; ?>
<?php if (! ($this->_foreach['items_offer']['iteration'] == $this->_foreach['items_offer']['total'])): ?> <?php endif; ?><?php endforeach; endif; unset($_from); ?></p>
          <p class="message"><strong><?php echo $this->_tpl_vars['_messages']; ?>
</strong><?php echo $this->_tpl_vars['_common_message']; ?>
 <em><?php echo ((is_array($_tmp=@$this->_tpl_vars['pm']['user'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
</em> <?php echo $this->_tpl_vars['_number']; ?>
 | <?php echo $this->_tpl_vars['_system_message']; ?>
 <em><?php echo ((is_array($_tmp=@$this->_tpl_vars['pm']['system'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
</em> <?php echo $this->_tpl_vars['_number']; ?>
 | <?php echo $this->_tpl_vars['_query_message']; ?>
 <em><?php echo ((is_array($_tmp=@$this->_tpl_vars['pm']['inquery'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
</em> <?php echo $this->_tpl_vars['_number']; ?>
</p>
          <p class="collect"><strong><?php echo $this->_tpl_vars['_favorites']; ?>
</strong><a href="favor.php"><?php echo $this->_tpl_vars['_manage_favorite']; ?>
</a></p>
        </div>
      </div>
     
        

    </div>
    <div class="span-4">
           <div class="notice">
              <h2><?php echo $this->_tpl_vars['_announce']; ?>
</h2>
              <ul>
        <?php $this->_tag_stack[] = array('announce', array('row' => 10)); $_block_repeat=true;smarty_block_announce($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
          <li><a href="<?php echo $this->_tpl_vars['SiteUrl']; ?>
announce/detail.php?id=<?php echo $this->_tpl_vars['announce']['id']; ?>
" target="_blank"><?php echo $this->_tpl_vars['announce']['title']; ?>
</a></li>
        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_announce($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
              </ul>
           </div>
    </div>
  </div>
    
   
        
    
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
