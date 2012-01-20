<?php /* Smarty version 2.6.18, created on 2012-01-20 09:06:14
         compiled from default/offer/index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ads', 'default/offer/index.html', 6, false),array('block', 'offer', 'default/offer/index.html', 20, false),array('block', 'company', 'default/offer/index.html', 74, false),array('block', 'product', 'default/offer/index.html', 86, false),array('modifier', 'date_format', 'default/offer/index.html', 17, false),array('function', 'the_url', 'default/offer/index.html', 96, false),array('function', 'get', 'default/offer/index.html', 99, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['_search_offer']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="main" class="container">
  
  <!-- <div class="ads" style="margin-bottom:18px;">
    <div class="fullsrceen_ad"><?php $this->_tag_stack[] = array('ads', array('typeid' => 2,'name' => 'ads1')); $_block_repeat=true;smarty_block_ads($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><span><?php echo $this->_tpl_vars['ads1']['link']; ?>
</span><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ads($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
  </div> -->

  <div class="row">
    <div class="side-bar l-col span5">
      <div class="mod">
        <div class="mod-hd">
          <h2><?php echo $this->_tpl_vars['_new_offer']; ?>
</h2>
        </div>
        <div class="mod-bd">
          
              <h4><span id="currentDate"><?php echo $this->_tpl_vars['_today_is']; ?>
<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</span></h4>
                
              <ul class="info-list">
              <?php $this->_tag_stack[] = array('offer', array('row' => 10,'name' => 'item')); $_block_repeat=true;smarty_block_offer($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                <li class="even">
                <span class="even_width"><?php echo $this->_tpl_vars['item']['link']; ?>
</span>
                <span class="even_padding">[<?php echo $this->_tpl_vars['item']['typename']; ?>
]</span>
                <span class="even_padding"><?php echo $this->_tpl_vars['item']['pubdate']; ?>
</span>
                </li>
              <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_offer($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
              </ul>
        </div>
      </div>
      
    </div>
    <div class="main-content c-col span8">
      <div><?php $this->_tag_stack[] = array('ads', array('typeid' => 3)); $_block_repeat=true;smarty_block_ads($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><!-- This text is replaced by the Flash movie. --><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ads($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
    </div>
    <div class="side-bar r-col span4">
      <div class="mod">
        <div class="mod-hd">
          <h5><?php echo $this->_tpl_vars['_welcome_join']; ?>
<?php echo $this->_tpl_vars['site_name']; ?>
</h5>
        </div>
        <div class="mod-bd">
            <div class="offer_list_top3_c1 cursor-hand">
              <ul class="info-list"><?php echo $this->_tpl_vars['_offer_introduction']; ?>
</ul>
            </div>
            <div class="offer_list_top3_c2">
              <h2><span><a href="member.php" title="<?php echo $this->_tpl_vars['_free_reg']; ?>
"><?php echo $this->_tpl_vars['_free_reg']; ?>
</a></span></h2>
              <?php echo $this->_tpl_vars['_reg_and_upgrade_vip']; ?>

              <?php echo $this->_tpl_vars['_service_hotline']; ?>
<span class="font14" ><?php echo $this->_tpl_vars['service_tel']; ?>
</span>
            </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="side-bar l-col span5">
      <div class="mod">
        <div class="mod-hd">
          <h2><?php echo $this->_tpl_vars['_urgent_buy']; ?>
</h2>
        </div>
        <div class="mod-bd">
          <ul class="info-list">
            <?php $this->_tag_stack[] = array('offer', array('row' => 8,'name' => 'item')); $_block_repeat=true;smarty_block_offer($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
            <li><?php echo $this->_tpl_vars['item']['link']; ?>
</li>
            <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_offer($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          </ul>
        </div>
      </div>
      <div class="mod">
        <div class="mod-hd">
          <h2><?php echo $this->_tpl_vars['_commend']; ?>
 <?php echo $this->_tpl_vars['_seller']; ?>
</h2>
        </div>
        <div class="mod-bd">
            <ul class="info-list">
               <?php $this->_tag_stack[] = array('company', array('row' => 8)); $_block_repeat=true;smarty_block_company($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
               <li><?php echo $this->_tpl_vars['company']['link']; ?>
</li>
               <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_company($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </ul>
        </div>
      </div>  
      <div class="mod">
        <div class="mod-hd">
          <h2><?php echo $this->_tpl_vars['_stored_product']; ?>
</h2>
        </div>
        <div class="mod-bd">
          <ul class="info-list">
             <?php $this->_tag_stack[] = array('product', array('row' => 8,'name' => 'item')); $_block_repeat=true;smarty_block_product($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
             <li><?php echo $this->_tpl_vars['item']['link']; ?>
</li>
             <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_product($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          </ul>
        </div>
      </div>    
    </div>
    <div class="main-content r-col span12">
        <div class="mod">
          <div class="mod-hd">
            <h3><a href="<?php echo smarty_function_the_url(array('module' => 'search','industryid' => ($this->_tpl_vars['item0']['id']),'do' => 'offer'), $this);?>
"><?php echo $this->_tpl_vars['item0']['name']; ?>
</a><a href="offer/list.php?industryid=<?php echo $this->_tpl_vars['item0']['id']; ?>
"><?php echo $this->_tpl_vars['_more']; ?>
</a></h3>
          </div>
          <div class="mod-bd">
            <?php echo smarty_function_get(array('var' => 'IndustryList','from' => 'industry'), $this);?>

                <?php $_from = $this->_tpl_vars['IndustryList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['level_0'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['level_0']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key0'] => $this->_tpl_vars['item0']):
        $this->_foreach['level_0']['iteration']++;
?>
                
                <?php if ($this->_tpl_vars['item0']['sub']): ?>
                <?php $_from = $this->_tpl_vars['item0']['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['level_1_industry'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['level_1_industry']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key_level1'] => $this->_tpl_vars['level1']):
        $this->_foreach['level_1_industry']['iteration']++;
?>
                <div class="fl">
                    <a href="<?php echo smarty_function_the_url(array('module' => 'search','industryid' => ($this->_tpl_vars['level1']['id']),'do' => 'offer'), $this);?>
" title="<?php echo $this->_tpl_vars['level1']['name']; ?>
" class="co_type_f"><?php echo $this->_tpl_vars['level1']['name']; ?>
</a>
                    <br />
                    <?php $_from = $this->_tpl_vars['level1']['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['level_2_industry'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['level_2_industry']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key_level2'] => $this->_tpl_vars['level2']):
        $this->_foreach['level_2_industry']['iteration']++;
?>
                    <a href="<?php echo smarty_function_the_url(array('module' => 'search','industryid' => ($this->_tpl_vars['level2']['id']),'do' => 'offer'), $this);?>
" title="<?php echo $this->_tpl_vars['level2']['name']; ?>
"><?php echo $this->_tpl_vars['level2']['name']; ?>
</a><em>|</em>
                    <?php endforeach; endif; unset($_from); ?>
                </div>
                <?php endforeach; endif; unset($_from); ?>
                <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
          </div>
        </div>  

    </div>
  </div>
</div>
<script>
$("#SearchFrm").attr("action","offer/list.php");
$("#topMenuOffer").addClass("lcur");
</script>   
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>