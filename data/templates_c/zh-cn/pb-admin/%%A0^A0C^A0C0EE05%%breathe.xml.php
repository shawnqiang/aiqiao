<?php /* Smarty version 2.6.18, created on 2012-01-06 01:02:03
         compiled from file:/home/shawnqiang/www/aiqiao/data/examples/breathe.xml */ ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="utf-8"<?php echo '?>'; ?>

<data>
	<channel>
		<?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
		<item>
			<link><?php echo $this->_tpl_vars['item']['link']; ?>
</link>
			<image><?php echo $this->_tpl_vars['item']['image']; ?>
</image>
		</item>
		<?php endforeach; endif; unset($_from); ?>
	</channel>
	<config>	
		<roundCorner>0</roundCorner>
		<autoPlayTime>6.5</autoPlayTime>
		<isHeightQuality>false</isHeightQuality>
		<blendMode>normal</blendMode>
		<transDuration>1</transDuration>
		<windowOpen>_self</windowOpen>
		<btnSetMargin>auto 5 5 auto</btnSetMargin>
		<btnDistance>20</btnDistance>
		<titleBgColor>0xC08C3A</titleBgColor>
		<titleTextColor>0xffffff</titleTextColor>
		<titleBgAlpha>.75</titleBgAlpha>
		<titleMoveDuration>1</titleMoveDuration>
		<btnAlpha>.7</btnAlpha>	
		<btnTextColor>0xffffff</btnTextColor>	
		<btnDefaultColor>0x1B3433</btnDefaultColor>
		<btnHoverColor>0xff9900</btnHoverColor>
		<btnFocusColor>0xff6600</btnFocusColor>
		<changImageMode>click</changImageMode>
		<isShowBtn>true</isShowBtn>
		<isShowTitle>false</isShowTitle>
		<scaleMode>noBorder</scaleMode>
		<transform>breathe</transform>
		<isShowAbout>false</isShowAbout>
		<titleFont>Arial Black</titleFont>
	</config>
</data>