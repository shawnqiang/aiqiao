<?php /* Smarty version 2.6.18, created on 2012-01-01 06:13:27
         compiled from htmlcache.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_system_tool']; ?>
 &raquo; <?php echo $this->_tpl_vars['_caches']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_caches']; ?>
</h3> 
    <ul class="subnav">
		<?php if ($_GET['do'] == 'clear'): ?>
	  	<li><a href="htmlcache.php"><?php echo $this->_tpl_vars['_updating']; ?>
</a></li>		
      	<li><a class="btn1" href="htmlcache.php?do=clear"><span><?php echo $this->_tpl_vars['_clearing']; ?>
</span></a></li>
        <?php else: ?>
	  	<li><a class="btn1" href="htmlcache.php"><span><?php echo $this->_tpl_vars['_updating']; ?>
</span></a></li>		
      	<li><a href="htmlcache.php?do=clear"><?php echo $this->_tpl_vars['_clearing']; ?>
</a></li>
        <?php endif; ?>
    </ul>
</div>
<div class="mrightTop"> 
	<?php if ($_GET['do'] == 'clear'): ?>
    <div class="fontl"> 
        <form name="edit_frm" id="EditFrm" method="post">
        <input type="hidden" name="do" value="clear" />
             <div class="left"> 
               <label for="htmlcache"><input type="checkbox" name="data[type][]" id="htmlCache" value="htmlcache" /><?php echo $this->_tpl_vars['_caches']; ?>
 <?php echo $this->_tpl_vars['_page']; ?>
 <?php echo $this->_tpl_vars['_file']; ?>
</label>
               <label for="memberCache"><input type="checkbox" name="data[type][]" id="memberCache" value="membercache" /><?php echo $this->_tpl_vars['_caches']; ?>
 <?php echo $this->_tpl_vars['_member']; ?>
 <?php echo $this->_tpl_vars['_data']; ?>
</label>
               <label for="spaceCache"><input type="checkbox" name="data[type][]" id="spaceCache" value="spacecache" /><?php echo $this->_tpl_vars['_caches']; ?>
 <?php echo $this->_tpl_vars['_space']; ?>
 <?php echo $this->_tpl_vars['_data']; ?>
</label>
               <label for="dbCache"><input type="checkbox" name="data[type][]" id="dbCache" value="dbcache" /><?php echo $this->_tpl_vars['_caches']; ?>
 <?php echo $this->_tpl_vars['_label']; ?>
 <?php echo $this->_tpl_vars['_data']; ?>
</label>
               <label for="dataCache"><input type="checkbox" name="data[type][]" id="dataCache" value="smartycache" checked="checked" /><?php echo $this->_tpl_vars['_templet_style']; ?>
 <?php echo $this->_tpl_vars['_caches']; ?>
 <?php echo $this->_tpl_vars['_file']; ?>
</label>
               <label for="dataCompile"><input type="checkbox" name="data[type][]" id="dataCompile" value="smartycompile" /><?php echo $this->_tpl_vars['_template_compilation']; ?>
 <?php echo $this->_tpl_vars['_file']; ?>
</label>
               <input type="submit" name="save" id="Save" class="formbtn" value="<?php echo $this->_tpl_vars['_clear_now']; ?>
" /> 
            </div> 
        </form> 
    </div> 
    <?php else: ?>
    <div class="fontl"> 
        <form name="edit_frm" id="EditFrm" method="post">
        <input type="hidden" name="do" value="update" />
             <div class="left"> 
               <label for="dataTypeSetting"><input type="checkbox" name="data[type][]" id="dataTypeSetting" value="setting" checked="checked" /><?php echo $this->_tpl_vars['_basic']; ?>
 <?php echo $this->_tpl_vars['_data']; ?>
</label>
               <label for="dataTypeBasic"><input type="checkbox" name="data[type][]" id="dataTypeBasic" value="ext" checked="checked" /><?php echo $this->_tpl_vars['_extension']; ?>
 <?php echo $this->_tpl_vars['_data']; ?>
</label>
               <label for="dataTypeArea"><input type="checkbox" name="data[type][]" id="dataTypeArea" value="area" checked="checked" /><?php echo $this->_tpl_vars['_the_area']; ?>
 <?php echo $this->_tpl_vars['_data']; ?>
</label>
               <label for="dataTypeIndustry"><input type="checkbox" name="data[type][]" id="dataTypeIndustry" value="industry" checked="checked" /><?php echo $this->_tpl_vars['_the_industry']; ?>
 <?php echo $this->_tpl_vars['_data']; ?>
</label>
               <label for="dataTypeLanguage"><input type="checkbox" name="data[type][]" id="dataTypeLanguage" value="language" /><?php echo $this->_tpl_vars['_lang_pack']; ?>
</label>
               <label for="dataTypeOptions"><input type="checkbox" name="data[type][]" id="dataTypeOptions" value="options" /><?php echo $this->_tpl_vars['_options']; ?>
</label>
                <input type="submit" name="save" id="Save" class="formbtn" value="<?php echo $this->_tpl_vars['_immediately']; ?>
<?php echo $this->_tpl_vars['_updating']; ?>
" /> 
            </div> 
        </form> 
    </div> 
    <?php endif; ?>
    <div class="fontr"></div> 
</div> 
<div class="tdare"></div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>