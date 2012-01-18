<?php /* Smarty version 2.6.18, created on 2012-01-18 12:07:33
         compiled from default/banner.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'default/banner.html', 35, false),array('function', 'formhash', 'default/banner.html', 53, false),)), $this); ?>
	<!-- Topbar
    ================================================== -->
    <div id="header" class="space-header">
      <div class="container">
       	  <div class="shortcuts">
       	  		<ul>
       	  			<li><a href="javascript:;" onclick="javascript:$('#AddFriendFrm').submit();"><?php echo $this->_tpl_vars['_add_friend']; ?>
</a></li>
       	  			<li><a href="<?php echo $this->_tpl_vars['Menus']['feedback']; ?>
"><?php echo $this->_tpl_vars['_feed_back_to_company']; ?>
</a></li>
       	  		</ul>
       	  </div>
      </div>
    </div>
    <div id="main_nav" class="space-nav">
    	<div id="nav_inner" class="container">
    	 <a class="brand pull-left" href="#" ><?php echo $this->_tpl_vars['COMPANY']['name']; ?>
</a>
    	 <ul class="nav">
            <li id="space_index"><a href="<?php echo $this->_tpl_vars['Menus']['index']; ?>
"><?php echo $this->_tpl_vars['_home_page']; ?>
</a></li>
			<li id="space_intro"><a href="<?php echo $this->_tpl_vars['Menus']['intro']; ?>
"><?php echo $this->_tpl_vars['_space_intro']; ?>
</a></li>
			<li id="space_product"><a href="<?php echo $this->_tpl_vars['Menus']['product']; ?>
"><?php echo $this->_tpl_vars['_product_show']; ?>
</a></li>
			<li id="space_offer"><a href="<?php echo $this->_tpl_vars['Menus']['offer']; ?>
"><?php echo $this->_tpl_vars['_offer']; ?>
</a></li>
			<li id="space_news"><a href="<?php echo $this->_tpl_vars['Menus']['news']; ?>
"><?php echo $this->_tpl_vars['_space_news']; ?>
</a></li>
			<li id="space_album"><a href="<?php echo $this->_tpl_vars['Menus']['album']; ?>
"><?php echo $this->_tpl_vars['_space_album']; ?>
</a></li>
			<li id="space_hr"><a href="<?php echo $this->_tpl_vars['Menus']['job']; ?>
"><?php echo $this->_tpl_vars['_space_hr']; ?>
</a></li>
			<li id="space_contact"><a href="<?php echo $this->_tpl_vars['Menus']['contact']; ?>
"><?php echo $this->_tpl_vars['_contact_us']; ?>
</a></li>
          </ul>
        </div>
    </div>

	<!-- <div class="head">
		<ul class="list1">
			<li class="company"><a href="javascript:;" onclick="javascript:$('#AddFriendFrm').submit();"><?php echo $this->_tpl_vars['_add_friend']; ?>
</a></li>
			<li class="message"><a href="<?php echo $this->_tpl_vars['Menus']['feedback']; ?>
"><?php echo $this->_tpl_vars['_feed_back_to_company']; ?>
</a></li>
		</ul>
		<div class="global_link">
			<span title="<?php echo $this->_tpl_vars['_integrity_index']; ?>
">(<?php echo ((is_array($_tmp=@$this->_tpl_vars['MEMBER']['credits'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
)</span>
			<ul class="list2">
				<li id="space_index"><a href="<?php echo $this->_tpl_vars['Menus']['index']; ?>
"><?php echo $this->_tpl_vars['_home_page']; ?>
</a></li>
				<li id="space_intro"><a href="<?php echo $this->_tpl_vars['Menus']['intro']; ?>
"><?php echo $this->_tpl_vars['_space_intro']; ?>
</a></li>
				<li id="space_product"><a href="<?php echo $this->_tpl_vars['Menus']['product']; ?>
"><?php echo $this->_tpl_vars['_product_show']; ?>
</a></li>
				<li id="space_offer"><a href="<?php echo $this->_tpl_vars['Menus']['offer']; ?>
"><?php echo $this->_tpl_vars['_offer']; ?>
</a></li>
				<li id="space_news"><a href="<?php echo $this->_tpl_vars['Menus']['news']; ?>
"><?php echo $this->_tpl_vars['_space_news']; ?>
</a></li>
				<li id="space_album"><a href="<?php echo $this->_tpl_vars['Menus']['album']; ?>
"><?php echo $this->_tpl_vars['_space_album']; ?>
</a></li>
				<li id="space_hr"><a href="<?php echo $this->_tpl_vars['Menus']['job']; ?>
"><?php echo $this->_tpl_vars['_space_hr']; ?>
</a></li>
				<li id="space_contact"><a href="<?php echo $this->_tpl_vars['Menus']['contact']; ?>
"><?php echo $this->_tpl_vars['_contact_us']; ?>
</a></li>
			</ul>
			<div class="clear"></div>
		</div>
		<div class="imgabsolute"><h1><?php echo $this->_tpl_vars['COMPANY']['name']; ?>
<?php if ($this->_tpl_vars['COMPANY']['english_name']): ?>(<?php echo $this->_tpl_vars['COMPANY']['english_name']; ?>
)<?php endif; ?></h1></div>
		<div class="imgabsolute2"><img src="<?php echo $this->_tpl_vars['GROUP']['image']; ?>
" alt="<?php echo $this->_tpl_vars['GROUP']['name']; ?>
" /></div>
		<div id="tips"><?php echo $this->_tpl_vars['_current_position']; ?>
<a href="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
"><?php echo $this->_tpl_vars['site_name']; ?>
</a>&raquo;<a href="<?php echo $this->_tpl_vars['Menus']['index']; ?>
"><?php echo $this->_tpl_vars['COMPANY']['name']; ?>
</a></div>
	</div> -->
	<form name="add_friend_frm" id="AddFriendFrm" action="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
virtual-office/link.php" method="post" target="_blank">
	<?php echo smarty_function_formhash(array(), $this);?>

	<input type="hidden" name="save" value="save">
	<input name="spacelink[title]" type="hidden" value="<?php echo $this->_tpl_vars['COMPANY']['name']; ?>
">
	<input name="spacelink[url]" type="hidden" value="<?php echo $this->_tpl_vars['space_url']; ?>
">
	</form>