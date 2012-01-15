<?php /* Smarty version 2.6.18, created on 2012-01-14 10:43:55
         compiled from card.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'formhash', 'card.html', 35, false),)), $this); ?>
<?php $this->assign('page_title', ($this->_tpl_vars['_business_card'])); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript" src="../scripts/googlemap.js"></script>
<script type="text/javascript" src="../scripts/map_init.js"></script>
<?php echo '
<script type="text/javascript">
$(document).ready(function(){
  	buildMap();
  	pressEnter();
});
function clip(text){
str=eval("document." + text)
str.select()
str = document.selection.createRange();
clipboardData.setData(\'text\',(str.text));
}
</script>
'; ?>

<div id="main" class="container">
    <div class="row">
       <div class="span4 side-bar">
         <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
       </div>
   
     <div class="span12 main-content">
     <div class="page-header">
       <h2><?php echo $this->_tpl_vars['page_title']; ?>
</h2>
     </div>
     <div class="mod">
       <div class="mod-hd">
          <div class="hint"><?php echo $this->_tpl_vars['_must_input_with_star']; ?>
</div>  
       </div>
       <div class="mod-bd">
         <form name="TradeFrm" enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHPSELF']; ?>
">
        <?php echo smarty_function_formhash(array(), $this);?>

         <table class="card" >
              <tr>
                <th><?php echo $this->_tpl_vars['_contact_people']; ?>
</th>
                <td><input type="text" name="company[link_man]" value="<?php echo $this->_tpl_vars['item']['link_man']; ?>
" />
                <font class="dull_gray"><?php echo $this->_tpl_vars['_full_name']; ?>
</font></td>
              </tr>
              <tr>
                <th><?php echo $this->_tpl_vars['_company_name_n']; ?>
</th>
                <td><input name="company[name]" type="text" value="<?php echo $this->_tpl_vars['item']['name']; ?>
" size="35" /> 
                <font class="dull_gray"><?php echo $this->_tpl_vars['_company_full_name']; ?>
</font></td>
              </tr>
              <tr>
                <th><?php echo $this->_tpl_vars['_phone']; ?>
</th>
                <td><input name="data[telcode]" type="text" class="ip" value="<?php echo $this->_tpl_vars['item']['telcode']; ?>
" size="4" maxlength="4">
                -
                  <input name="data[telzone]" type="text" class="ip" value="<?php echo $this->_tpl_vars['item']['telzone']; ?>
" size="4" maxlength="4">
                  -
                  <input name="data[tel]" type="text" class="ip" value="<?php echo $this->_tpl_vars['item']['tel']; ?>
" size="10" maxlength="10" /></td>
              </tr>
              <tr>
                <th><?php echo $this->_tpl_vars['_fax']; ?>
</th>
                <td><input name="data[faxcode]" type="text" class="ip" value="<?php echo $this->_tpl_vars['item']['faxcode']; ?>
" size="4" maxlength="4">
                -
                  <input name="data[faxzone]" type="text" class="ip" value="<?php echo $this->_tpl_vars['item']['faxzone']; ?>
" size="4" maxlength="4">
                  -
                  <input name="data[fax]" type="text" class="ip" value="<?php echo $this->_tpl_vars['item']['fax']; ?>
" size="10" maxlength="10" /></td>
              </tr>
              <tr>
                <th><?php echo $this->_tpl_vars['_address']; ?>
</th>
                <td><input name="company[address]" type="text" id="addressname" value="<?php echo $this->_tpl_vars['item']['address']; ?>
" onblur='givemap()'></td>
              </tr>
              <tr>
                <th><?php echo $this->_tpl_vars['_map_position']; ?>
</th>
                <td><input type="hidden" name="mapaddress" id="address" size="45" value="<?php echo $this->_tpl_vars['item']['map_longitude']; ?>
,<?php echo $this->_tpl_vars['item']['map_latitude']; ?>
"/>
<DIV id="mainmap" style="width:500px;height:300px;border:1px solid #000;"></DIV><br>
<?php echo $this->_tpl_vars['_map_position']; ?>
<span id="spanaddress" style="display: none" onclick="showtxtaddress()"></span><a href="#" style="display: none" onclick="showtxtaddress()">(<?php echo $this->_tpl_vars['_please_select']; ?>
)</a><input type="text" id="txtaddress" name="txtaddress" size="50"><br/>
<?php echo $this->_tpl_vars['_map_coordinate']; ?>
<span id="spanlat_lon"></span>
<input type="hidden" name="maplocation" id="maplocation" value="" /></td>
              </tr>
              <tr>
                <th><?php echo $this->_tpl_vars['_mobile']; ?>
</th>
                <td><input name="company[mobile]" type="text" id="company[mobile]" value="<?php echo $this->_tpl_vars['item']['mobile']; ?>
" /></td>
              </tr>
              <tr>
                <th><?php echo $this->_tpl_vars['_email_addr']; ?>
</th>
                <td><input name="company[email]" type="text" id="company[email]" value="<?php echo $this->_tpl_vars['item']['email']; ?>
" /></td>
              </tr>
                <tr>
                <td colspan="2" align="right">
                <div align="center">
                  <input name="save" type="submit" id="save" class="btn primary" value="<?php echo $this->_tpl_vars['_saving']; ?>
">
                </div></td>
              </tr>                          
      </table>
      <table class="card" >
             <tr>
                <th><?php echo $this->_tpl_vars['_flash_card_code']; ?>
</th>
                <td style="width:370px;"><textarea name="flash_card" style="width:350px;overflow-y:visible;height:150px;font-family:Arial"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" id="FlashVars" width="460" height="250">  
        <param name="movie" value="<?php echo $this->_tpl_vars['SiteUrl']; ?>
images/cards/default.swf?instanceid=<?php echo $this->_tpl_vars['item']['id']; ?>
">  
        <param name="allowScriptAccess" value="sameDomain" />
        <param name="FlashVars" value="" />
        <param name="quality" value="high">   
        <param name="bgcolor" value="#FFFFFF">
        <!--[if !IE]> <-->  
        <embed src="<?php echo $this->_tpl_vars['SiteUrl']; ?>
images/cards/default.swf?instanceid=<?php echo $this->_tpl_vars['item']['id']; ?>
" quality="high" bgcolor="#ffffff" width="550" height="400" name="FlashVars" align="middle" allowScriptAccess="sameDomain" FlashVars="foo=100000" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
        FAIL (the browser should render some flash content, not this).  
        </object>  
        <!--> <![endif]-->  
        </object></textarea></td>
                <td><a href="javascript:clip('TradeFrm.flash_card');" title="<?php echo $this->_tpl_vars['_copy_to_clipboard']; ?>
"><?php echo $this->_tpl_vars['_copy_to_clipboard']; ?>
</a></td>
                <td>&nbsp;</td>
           </tr>                          
        </table>
        </form>
       </div>
     </div>
       
	
        
 
</div>
 </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>