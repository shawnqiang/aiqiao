<?php /* Smarty version 2.6.18, created on 2012-01-05 13:48:01
         compiled from menu.html */ ?>
<div id="admin-menu">
	<?php if ($this->_tpl_vars['menu']['offer']): ?>
	<div class="mod">
		<div class="mod-hd">
			<h3><?php echo $this->_tpl_vars['_business_information']; ?>
</h3>
		</div>
		<div class="mod-bd">
			<p><a href="offer.php?do=edit"><?php echo $this->_tpl_vars['_release_supply']; ?>
</a></p>
			<p><a href="offer.php"><?php echo $this->_tpl_vars['_our_offer']; ?>
</a></p>
			<p><a href="favor.php"><?php echo $this->_tpl_vars['_our_favorites']; ?>
</a></p>
			<p><a href="stat.php"><?php echo $this->_tpl_vars['_buy_statistics']; ?>
</a></p>
			<p><a href="pms.php?type=inquery"><?php echo $this->_tpl_vars['_customer_inquiry']; ?>
</a></p>
		</div>
	</div>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['menu']['product']): ?>
	<div class="mod">
		<div class="mod-hd">
			<h3><?php echo $this->_tpl_vars['_information_management']; ?>
</h3>
		</div>
		<div class="mod-bd">
			<p><a href="product.php?do=edit"><?php echo $this->_tpl_vars['_release_products']; ?>
</a></p>
			<p><a href="product.php"><?php echo $this->_tpl_vars['_our_productse']; ?>
</a></p>
			<p><a href="price.php"><?php echo $this->_tpl_vars['_my_product_price']; ?>
</a></p>
			<p><a href="producttype.php"><?php echo $this->_tpl_vars['_categories_management']; ?>
</a></p>
			<p><a href="brand.php"><?php echo $this->_tpl_vars['_brand_manage']; ?>
</a></p>
		</div>
	</div>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['menu']['company']): ?>
	<div class="mod">
		<div class="mod-hd">
			<h3><?php echo $this->_tpl_vars['_company_information']; ?>
</h3>
		</div>
		<div class="mod-bd">
			<p><a href="company.php"><?php echo $this->_tpl_vars['_basic_information']; ?>
</a> </p>
			<p><a href="album.php"><?php echo $this->_tpl_vars['_company_album']; ?>
</a></p>
			<p><a href="card.php"><?php echo $this->_tpl_vars['_card_information']; ?>
</a></p>
			<p><a href="news.php"><?php echo $this->_tpl_vars['_company_news']; ?>
</a></p>
			<p><a href="job.php"><?php echo $this->_tpl_vars['_hr']; ?>
</a></p>
			<p><a href="link.php" title="<?php echo $this->_tpl_vars['_friendlink']; ?>
"><?php echo $this->_tpl_vars['_link_exchange']; ?>
</a></p>
		</div>
	</div>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['menu']['pms']): ?>
	<div class="mod">
		<div class="mod-hd">
			<h3><?php echo $this->_tpl_vars['_exchange_information']; ?>
</h3>
		</div>
		<div class="mod-bd">
			<p><a href="pms.php"><?php echo $this->_tpl_vars['_sms']; ?>
</a></p>
			<p><a href="pms.php?do=send"><?php echo $this->_tpl_vars['_send_message']; ?>
</a></p>
		</div>
	</div>
	<?php endif; ?>
	<div class="mod">
		<div class="mod-hd">
			<h3><?php echo $this->_tpl_vars['_self_service']; ?>
</h3>
		</div>
		<div class="mod-bd">
			<p><a href="ads.php"><?php echo $this->_tpl_vars['_site_advertising']; ?>
</a></p>
			<p><a href="spread.php"><?php echo $this->_tpl_vars['_keyword_advertising']; ?>
</a></p>
			<p><a href="space.php"><?php echo $this->_tpl_vars['_diy_website']; ?>
</a></p>
			<p><a href="order.php"><?php echo $this->_tpl_vars['_order_manage']; ?>
</a></p>
		</div>
	</div>
	<?php if ($this->_tpl_vars['menu']['basic']): ?>
	<div class="mod">
		<div class="mod-hd">
			<h3><?php echo $this->_tpl_vars['_system_settings']; ?>
</h3>
		</div>
		<div class="mod-bd">
			<p><a href="personal.php"><?php echo $this->_tpl_vars['_profile']; ?>
</a></p>
			<p><a href="changepass.php"><?php echo $this->_tpl_vars['_change_password']; ?>
</a></p>
			<p><a href="invite.php"><?php echo $this->_tpl_vars['_our_invitation_code']; ?>
</a></p>
		</div>
	</div>
	<?php endif; ?>
</div>
