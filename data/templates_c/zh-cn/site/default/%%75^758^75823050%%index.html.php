<?php /* Smarty version 2.6.18, created on 2012-01-06 01:52:03
         compiled from default/special/index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'announce', 'default/special/index.html', 5, false),array('block', 'ads', 'default/special/index.html', 31, false),array('block', 'news', 'default/special/index.html', 86, false),array('block', 'product', 'default/special/index.html', 109, false),array('block', 'fair', 'default/special/index.html', 144, false),array('block', 'offer', 'default/special/index.html', 220, false),array('block', 'company', 'default/special/index.html', 252, false),array('block', 'area', 'default/special/index.html', 282, false),array('modifier', 'urlencode', 'default/special/index.html', 25, false),array('modifier', 'date_format', 'default/special/index.html', 87, false),array('modifier', 'truncate_multi', 'default/special/index.html', 118, false),array('function', 'the_attachment', 'default/special/index.html', 63, false),array('function', 'the_url', 'default/special/index.html', 95, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['page_title']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="main" class="container">
    <dl>
        <dt><?php echo $this->_tpl_vars['_announce']; ?>
</dt>
        <?php $this->_tag_stack[] = array('announce', array('row' => 4)); $_block_repeat=true;smarty_block_announce($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
            <dd><?php echo $this->_tpl_vars['announce']['link']; ?>
</dd>
        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_announce($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </dl>

    <div class="row">
        <div class="span4 side-bar">
            <div class="mod">
                <div class="mod-hd">
                    <h3 class="title"><?php echo $this->_tpl_vars['_service_entrance']; ?>
</h3>
                </div>
                <div class="mod-bd">
                     <ul class="portallist">
                        <li class="list-1st"><a href="offer/post.php?typeid=2&industryid=<?php echo $_GET['industryid']; ?>
&areaid=<?php echo $_GET['areaid']; ?>
" title=""><span><?php echo $this->_tpl_vars['_publish']; ?>
 <?php echo $this->_tpl_vars['_supply']; ?>
 <?php echo $this->_tpl_vars['_information']; ?>
</span></a></li>
                        <li class="list-1st"><a href="offer/post.php?typeid=1&industryid=<?php echo $_GET['industryid']; ?>
&areaid=<?php echo $_GET['areaid']; ?>
" title=""><span><?php echo $this->_tpl_vars['_publish']; ?>
 <?php echo $this->_tpl_vars['_buy']; ?>
 <?php echo $this->_tpl_vars['_information']; ?>
</span></a></li>
                        <li class="list-1st"><a href="offer/post.php?typeid=5&industryid=<?php echo $_GET['industryid']; ?>
&areaid=<?php echo $_GET['areaid']; ?>
" title=""><span><?php echo $this->_tpl_vars['_publish']; ?>
 <?php echo $this->_tpl_vars['_merchants']; ?>
 <?php echo $this->_tpl_vars['_information']; ?>
</span></a></li>
                        <li class="list-1st"><a href="offer/post.php?typeid=11&industryid=<?php echo $_GET['industryid']; ?>
&areaid=<?php echo $_GET['areaid']; ?>
" title=""><span><?php echo $this->_tpl_vars['_publish']; ?>
 <?php echo $this->_tpl_vars['_wholesale']; ?>
 <?php echo $this->_tpl_vars['_information']; ?>
</span></a></li>
                        <li class="list-1st"><a href="help/" title=""><span><?php echo $this->_tpl_vars['_help_center']; ?>
</span></a></li>
                        <li class="list-2nd"><a href="service/" title=""><span><?php echo $this->_tpl_vars['_customer_service']; ?>
</span></a></li>
                        <?php $_from = $this->_tpl_vars['member_types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                        <li class="list-2nd"><a href="<?php if ($this->_tpl_vars['reg_filename'] != ''): ?><?php echo $this->_tpl_vars['reg_filename']; ?>
<?php else: ?>register.php<?php endif; ?>?typename=<?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
" title="<?php echo $this->_tpl_vars['item']; ?>
"><span><?php echo $this->_tpl_vars['_register']; ?>
<?php echo $this->_tpl_vars['item']; ?>
</span></a></li>
                        <?php endforeach; endif; unset($_from); ?>
                        <li class="list-3rd"><a href="redirect.php?url=/virtual-office/ads.php" title=""><span><?php echo $this->_tpl_vars['_online_ads']; ?>
</span></a></li>
                    </ul>
                </div>
            </div>
            <?php $this->_tag_stack[] = array('ads', array('typeid' => 6,'row' => 5)); $_block_repeat=true;smarty_block_ads($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
            <div class="mod">
                <div class="mod-hd">
                    <h4 class="fd-hide"><?php echo $this->_tpl_vars['ads']['title']; ?>
</h4>
                </div>
                
                <div class="mod-bd">
                    <dl class="cell-2nd">
                        <dt>
                            <a class="a-img" href="<?php echo $this->_tpl_vars['ads']['url']; ?>
" title="" linkf="ads">
                                <?php echo $this->_tpl_vars['ads']['thumb']; ?>

                            </a>
                        </dt>
                        <dd class="description"><a href="<?php echo $this->_tpl_vars['ads']['url']; ?>
" title="" linkf="ads"><?php echo $this->_tpl_vars['ads']['title']; ?>
</a></dd>
                    </dl>
                </div>
            </div>
            <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ads($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

        </div>

        <div class="span9 main-content" >
            <div class="mod">
                <div class="mod-hd">
                    <h4>Slider</h4>
                </div>
                
                <div class="mod-bd f-slider" id="js-slider">
                    <ul class="f-slider-list unstyled">
                        <li>
                            <a class="a-img" href="member.php" title="">
                                <?php if ($this->_tpl_vars['topic']['picture'] != ''): ?>
                                <?php echo smarty_function_the_attachment(array('name' => ($this->_tpl_vars['topic']['picture'])), $this);?>
"
                                <?php else: ?>                    
                                <img src="attachment/sample/breathe-index1.jpg" alt="" />
                                <?php endif; ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div> 

            <div class="mod">
                <div class="cell-header common-header-1st">
                    <h3 class="title"><em><?php echo $this->_tpl_vars['_latest_news']; ?>
</em></h3>
                    <div class="fixed-rb"></div>
                    <div class="fd-right">
                        <a href="news/" title="<?php echo $this->_tpl_vars['_more']; ?>
" class="btn-customize" id="js-customize-1st"><em><?php echo $this->_tpl_vars['_more']; ?>
</em></a>
                    </div>
                </div>
                <div class="topic_content" id="js-tab-1st">
                   
                    <div id="info-default" class="info-default">
                        <div class="info-list">
                        <ul class="unstyled">
                        <?php $this->_tag_stack[] = array('news', array('row' => 10,'industryid' => ($this->_tpl_vars['industry_id']),'areaid' => ($this->_tpl_vars['area_id']))); $_block_repeat=true;smarty_block_news($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                        <li><span class="txt-2nd"><?php echo $this->_tpl_vars['news']['link']; ?>
</span><span class="date"><?php echo ((is_array($_tmp=$this->_tpl_vars['news']['created'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m-%d") : smarty_modifier_date_format($_tmp, "%m-%d")); ?>
</span></li>
                        <?php if ($this->_tpl_vars['news']['rownum'] == 4): ?>
                        </ul>
                        
                        <ul class="unstyled">
                        <?php endif; ?>
                        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_news($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                        </ul>
                            <div><a class="more" title="<?php echo $this->_tpl_vars['_more']; ?>
" href="<?php echo smarty_function_the_url(array('module' => 'search','do' => 'news','typeid' => 1), $this);?>
"><?php echo $this->_tpl_vars['_more']; ?>
</a></div>
                        </div>

                    </div>
                </div>
            </div> 

            <div class="mod">
                <div class="hd">
                    <h3><?php echo $this->_tpl_vars['_recommended']; ?>
</h3>
                </div>
                <div class="bd">
                    <div class="obj-activity-1st">
                        <ul class="list">
                            <?php $this->_tag_stack[] = array('product', array('row' => 2,'type' => 'image','industryid' => ($this->_tpl_vars['industry_id']),'areaid' => ($this->_tpl_vars['area_id']))); $_block_repeat=true;smarty_block_product($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                            <li>
                                <dl class="cell-3rd">
                                    <dt>
                                       <a class="a-img" href="<?php echo $this->_tpl_vars['product']['url']; ?>
" title="<?php echo $this->_tpl_vars['product']['title']; ?>
">
                                            <img src="<?php echo $this->_tpl_vars['product']['thumb']; ?>
" alt="<?php echo $this->_tpl_vars['product']['title']; ?>
 " />
                                        </a>
                                    </dt>
                                    <dd class="description"><?php echo $this->_tpl_vars['product']['link']; ?>
</dd>
                                    <dd class="txt"><?php echo ((is_array($_tmp=$this->_tpl_vars['product']['content'])) ? $this->_run_mod_handler('truncate_multi', true, $_tmp, 25) : smarty_modifier_truncate_multi($_tmp, 25)); ?>
</dd>
                                </dl>
                            </li>
                            <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_product($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                        </ul>
                    </div>
                    <div class="info-list">
                        <ul class="cell-list-txt">
                            <?php $this->_tag_stack[] = array('product', array('row' => 5,'industryid' => ($this->_tpl_vars['industry_id']),'areaid' => ($this->_tpl_vars['area_id']))); $_block_repeat=true;smarty_block_product($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                            <li>
                                <span class="txt"><?php echo $this->_tpl_vars['product']['link']; ?>
</span>
                                <span class="date"><?php echo ((is_array($_tmp=$this->_tpl_vars['product']['created'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m-%d") : smarty_modifier_date_format($_tmp, "%m-%d")); ?>
</span>
                            </li>
                            <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_product($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="mod">
                <div class="mod-hd">
                    <h3 class="title"><?php echo $this->_tpl_vars['_recommended_fair']; ?>
</h3>
                    <a class="more" title="<?php echo $this->_tpl_vars['_more']; ?>
" href="<?php echo smarty_function_the_url(array('module' => 'search','do' => 'fair'), $this);?>
"><?php echo $this->_tpl_vars['_more']; ?>
</a>
                </div>
                <div class="mod-bd">
                    <ul class="list">
                        <?php $this->_tag_stack[] = array('fair', array('row' => 2,'infolen' => 28,'industryid' => ($this->_tpl_vars['industry_id']),'areaid' => ($this->_tpl_vars['area_id']))); $_block_repeat=true;smarty_block_fair($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                        <li>
                            <dl class="cell-3rd fd-clr">
                                <dt><a title="<?php echo $this->_tpl_vars['fair']['name']; ?>
" href="<?php echo $this->_tpl_vars['fair']['url']; ?>
" class="a-img"><img src="<?php echo $this->_tpl_vars['fair']['thumb']; ?>
" alt="<?php echo $this->_tpl_vars['fair']['title']; ?>
" border="0"></a></dt>
                                <dd class="description"><a title="<?php echo $this->_tpl_vars['fair']['name']; ?>
" href="<?php echo $this->_tpl_vars['fair']['url']; ?>
"><?php echo $this->_tpl_vars['fair']['title']; ?>
</a></dd>
        
                                <dd class="txt"><?php echo $this->_tpl_vars['fair']['content']; ?>
</dd>
                            </dl>
                        </li>
                        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_fair($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                    </ul>
                    <div class="obj-station">
                        <div class="cell-header">
                            <h3 class="title"><?php echo $this->_tpl_vars['_new_fair']; ?>
</h3>
                            <div class="float-rt">
                                <a class="more" title="<?php echo $this->_tpl_vars['_more']; ?>
" href="fair/"><?php echo $this->_tpl_vars['_more']; ?>
</a>
                            </div>
                        </div>
                        <div class="topic_content info-list">
                            <div class="obj-activity-1st">
                                <ul class="list">
                                    <?php $this->_tag_stack[] = array('fair', array('row' => 2,'infolen' => 28,'industryid' => ($this->_tpl_vars['industry_id']),'areaid' => ($this->_tpl_vars['area_id']))); $_block_repeat=true;smarty_block_fair($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                                    <li>
                                        <dl class="cell-3rd fd-clr">
                                            <dt><a title="<?php echo $this->_tpl_vars['fair']['name']; ?>
" href="<?php echo $this->_tpl_vars['fair']['url']; ?>
" class="a-img"><img src="<?php echo $this->_tpl_vars['fair']['thumb']; ?>
" alt="<?php echo $this->_tpl_vars['fair']['title']; ?>
" border="0"></a></dt>
                                            <dd class="description"><a title="<?php echo $this->_tpl_vars['fair']['name']; ?>
" href="<?php echo $this->_tpl_vars['fair']['url']; ?>
"><?php echo $this->_tpl_vars['fair']['title']; ?>
</a></dd>
                    
                                            <dd class="txt"><?php echo $this->_tpl_vars['fair']['content']; ?>
</dd>
                                        </dl>
                                    </li>
                                    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_fair($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
                
        </div>

        <div class="span4">
            <div class="mod">
                <div class="mod-hd">
                    
                </div>
                <div class="mod-bd">
                    <?php if ($this->_tpl_vars['pb_username'] == ''): ?>
                    <div class="cell-header">
                        <h4 class="title"><?php echo $this->_tpl_vars['_login_and_see_more']; ?>
</h4>
                        <div class="btn-login" id="js-login-float">
                            <a href="logging.php" title="<?php echo $this->_tpl_vars['_user_login']; ?>
" target="_self"><?php echo $this->_tpl_vars['_user_login']; ?>
</a>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="topic_content">
                        <p class="tel"><?php echo $this->_tpl_vars['_service_hotline']; ?>
<a class="value" href="#" title=""><?php echo $this->_tpl_vars['service_tel']; ?>
</a></p>
                    </div>
                </div>
            </div>

            <div class="mod">
                <div class="mod-hd">
                    <h3 class="title"><?php echo $this->_tpl_vars['_offer_info']; ?>
</h3>
                    <a title="<?php echo $this->_tpl_vars['_more']; ?>
 <?php echo $this->_tpl_vars['_offer_info']; ?>
" href="offer/" class="btn-customize" id="js-customize-2nd"><em><?php echo $this->_tpl_vars['_more']; ?>
</em></a>
                </div>
                <div class="mod-bd">
                    <div class="obj-buyerdynamic-1st">
                    <div class="cell-header">
                        <h4 class="title"><?php echo $this->_tpl_vars['_newest_sell']; ?>
</h4>
                        <div class="float-rt">
                            <a title="<?php echo $this->_tpl_vars['_more']; ?>
" href="<?php echo smarty_function_the_url(array('module' => 'serach','do' => 'news'), $this);?>
" class="more"><?php echo $this->_tpl_vars['_more']; ?>
</a>
                        </div>
                    </div>
                    <div id="js-hotRender" class="topic_content">
                        <ol class="hotsearch">
                        <?php $this->_tag_stack[] = array('offer', array('row' => 10,'titlelen' => 5,'industryid' => ($this->_tpl_vars['industry_id']),'areaid' => ($this->_tpl_vars['area_id']))); $_block_repeat=true;smarty_block_offer($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                        <li><?php echo $this->_tpl_vars['offer']['iteration']; ?>
&nbsp;<a title="<?php echo $this->_tpl_vars['offer']['title']; ?>
" href="<?php echo $this->_tpl_vars['offer']['url']; ?>
"><?php echo $this->_tpl_vars['offer']['title']; ?>
</a></li>
                        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_offer($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                        </ol>
                    </div>
                    </div>
                    <div class="obj-buyerdynamic-2nd">
                        <div class="cell-header">
                            <h4 class="title"><?php echo $this->_tpl_vars['_newest_buy']; ?>
</h4>
                            <div class="float-rt">
                                <a title="<?php echo $this->_tpl_vars['_more']; ?>
" href="<?php echo smarty_function_the_url(array('module' => 'serach','do' => 'news'), $this);?>
" class="more"><?php echo $this->_tpl_vars['_more']; ?>
</a>
                            </div>
                        </div>
                        <div class="topic_content" id="js-tab-2nd">
                            <div class="f-tab-b buying" id="buyingBox">
                            <ul class="cell-list-txt" id="buyingSubBox" style="height: 648px;">
                            <?php $this->_tag_stack[] = array('offer', array('row' => 5,'titlelen' => 12,'industryid' => ($this->_tpl_vars['industry_id']),'areaid' => ($this->_tpl_vars['area_id']))); $_block_repeat=true;smarty_block_offer($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                            <li><?php echo $this->_tpl_vars['offer']['link']; ?>
<span><?php echo ((is_array($_tmp=$this->_tpl_vars['offer']['submit_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m-%d") : smarty_modifier_date_format($_tmp, "%m-%d")); ?>
</span></li>
                            <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_offer($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mod">
                <div class="mod-hd">
                    <h3 class="title"><?php echo $this->_tpl_vars['_commend']; ?>
 <?php echo $this->_tpl_vars['_seller']; ?>
</h3><a title="<?php echo $this->_tpl_vars['_more']; ?>
" href="special/?type=area&areaid=<?php echo $_GET['areaid']; ?>
" class="more"><?php echo $this->_tpl_vars['_more']; ?>
</a>
                </div>
                <div class="mod-bd">
                    <ul class="cell-list-txt">
                        <?php $this->_tag_stack[] = array('company', array('row' => 5,'titlelen' => 34,'infolen' => 35,'name' => 'item','industryid' => ($this->_tpl_vars['industry_id']),'areaid' => ($this->_tpl_vars['area_id']))); $_block_repeat=true;smarty_block_company($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                        <?php if ($this->_tpl_vars['item']['iteration'] == 1 && $this->_tpl_vars['item']['picture'] != ''): ?>
                        <li>
                            <dl class="cell-3rd">
                            <dt>
                                    <a title="<?php echo $this->_tpl_vars['item']['title']; ?>
" href="<?php echo $this->_tpl_vars['item']['url']; ?>
" class="a-img">
                                        <img alt="<?php echo $this->_tpl_vars['item']['title']; ?>
" src="<?php echo $this->_tpl_vars['item']['logo']; ?>
" />
                                    </a>
                                </dt>
                                <dd class="description"><?php echo $this->_tpl_vars['item']['link']; ?>
</dd>
                                <dd class="txt"><?php echo $this->_tpl_vars['item']['content']; ?>
</dd>
                            </dl>
                        </li>
                        <?php else: ?>
                        <li><?php echo $this->_tpl_vars['item']['link']; ?>
</li>
                        <?php endif; ?>
                        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_company($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                    </ul>
                </div>
            </div>

            <div class="mod">
                <div class="mod-hd">
                    <h3 class="title"><?php echo $this->_tpl_vars['_similars']; ?>
 <?php echo $this->_tpl_vars['_the_area']; ?>
</h3>
                    <a title="<?php echo $this->_tpl_vars['_more']; ?>
" href="special/?type=area&areaid=<?php echo $_GET['areaid']; ?>
" class="more"><?php echo $this->_tpl_vars['_more']; ?>
</a>
                </div>
                <div class="mod-bd">
                    <table cellspacing="0" cellpadding="0" class="tab-category">
                        <tbody>
                            <tr>
                                <?php $this->_tag_stack[] = array('area', array('depth' => "-1")); $_block_repeat=true;smarty_block_area($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                                <td class="<?php if ($this->_tpl_vars['area']['title'] == ''): ?>no-data<?php endif; ?>"><a title="<?php echo $this->_tpl_vars['area']['title']; ?>
" href="special/?type=area&areaid=<?php echo $this->_tpl_vars['area']['id']; ?>
&id=<?php echo $this->_tpl_vars['area']['id']; ?>
&level=<?php echo $this->_tpl_vars['area']['level']+1; ?>
"><?php echo $this->_tpl_vars['area']['title']; ?>
</a></td>
                                <?php if (!($this->_tpl_vars['area']['iteration'] % 4)): ?>
                                </tr>
                                <tr>
                                <?php endif; ?>
                                <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_area($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                            </tr>
                        </tbody>
                    </table>
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