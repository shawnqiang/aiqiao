<?php /* Smarty version 2.6.18, created on 2012-01-06 04:52:09
         compiled from default/pages/sitemap.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'the_url', 'default/pages/sitemap.html', 20, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['_site_map']),'nav_id' => ($this->_tpl_vars['nav_id']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="main" class="container">
  <div class="breadcrumb"><span><?php echo $this->_tpl_vars['position']; ?>
</span></div>
  <div class="row">
    
    <div class="span13">
      <div class="mod">
        <div class="mod-hd">
          <h2><span class="title_mouse"><?php echo $this->_tpl_vars['_basic_info']; ?>
</span></h2>
        </div>
        <div class="mod-bd">
          <div class="webmap_left_con1">
            <h2><?php echo $this->_tpl_vars['_offer_info']; ?>
</h2>
            <p><a href="buy/"><?php echo $this->_tpl_vars['_Buy']; ?>
</a> <a href="sell/"><?php echo $this->_tpl_vars['_supply']; ?>
</a> <a href="offer/list.php?typeid=8"><?php echo $this->_tpl_vars['_inventory']; ?>
</a> <a href="offer/list.php?typeid=5"><?php echo $this->_tpl_vars['_merchants']; ?>
</a> 
            <a href="offer/list.php?typeid=6"><?php echo $this->_tpl_vars['_join']; ?>
</a> <a href="offer/list.php?typeid=4"><?php echo $this->_tpl_vars['_cooperation']; ?>
</a> <a href="offer/list.php?typeid=3"><?php echo $this->_tpl_vars['_agent']; ?>
</a>
            <a href="offer/list.php?typeid=7"><?php echo $this->_tpl_vars['_wholesale']; ?>
</a></p>
          </div>
          <div class="webmap_left_con2">
            <h2><?php echo $this->_tpl_vars['_important_channel']; ?>
</h2>
            <p><a href="company/"><?php echo $this->_tpl_vars['_yellow_page']; ?>
</a>&nbsp;<a href="<?php echo smarty_function_the_url(array('module' => 'search','do' => 'company','type' => 'commend'), $this);?>
"><?php echo $this->_tpl_vars['_recommend_company_database']; ?>
</a>&nbsp;<a href="product/"><?php echo $this->_tpl_vars['_nventory']; ?>
</a>&nbsp;<a href="news/"><?php echo $this->_tpl_vars['_information']; ?>
</a>&nbsp;<a href="market/"><?php echo $this->_tpl_vars['_professional_market']; ?>
</a>&nbsp;<a href="fair"><?php echo $this->_tpl_vars['_fair']; ?>
</a>&nbsp;<a href="hr/"><?php echo $this->_tpl_vars['_hr']; ?>
</a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="span4">
      <div class="mod">
        <div class="mod-hd">
          <h3><?php echo $this->_tpl_vars['_quick_navigation']; ?>
</h3>
        </div>
        <div class="mod-bd">
          <ul>
            <li><a href="offer/post.php"><?php echo $this->_tpl_vars['_release_supply_offer']; ?>
</a></li>
            <li><a href="service.php"><?php echo $this->_tpl_vars['_client_terms_Service']; ?>
</a></li>
            <li><a href="<?php echo smarty_function_the_url(array('module' => 'page','title' => 'agreement'), $this);?>
" target="_blank"><?php echo $this->_tpl_vars['_web_login_pact']; ?>
</a></li>
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