<?php /* Smarty version 2.6.18, created on 2012-01-18 12:57:20
         compiled from pms_detail.html */ ?>
<?php $this->assign('page_title', ($this->_tpl_vars['_view_message'])); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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
     
     <div class="offer_info_title"><h2><?php echo $this->_tpl_vars['page_title']; ?>
</h2></div>
     <div class="blank"></div>
	  <form name="message_frm" id="MessageFrm" action="pms.php?do=send&to=<?php echo $this->_tpl_vars['item']['cache_from_username']; ?>
" method="post">
         <table class="offer_info_content">
          <tr>
            <th class="circle_left"><?php echo $this->_tpl_vars['_sender']; ?>
</th>
          <td class="circle_right"><?php echo $this->_tpl_vars['item']['cache_from_username']; ?>
</td>
          </tr>
           <tr>
              <th><?php echo $this->_tpl_vars['_time_n']; ?>
</th>
              <td><?php echo $this->_tpl_vars['item']['pubdate']; ?>
</td>
            </tr>
           <tr>
              <th><?php echo $this->_tpl_vars['_theme_n']; ?>
</th>
              <td><?php echo $this->_tpl_vars['item']['title']; ?>
</td>
             </tr>
          <tr>
			  <th><?php echo $this->_tpl_vars['_content']; ?>
</th>
			  <td><?php echo $this->_tpl_vars['item']['content']; ?>
</td>
          </tr>
          <tr>
			  <th class="circle_bottomleft"></th>
			  <td class="circle_bottomright"><input type="submit" value=" <?php echo $this->_tpl_vars['_reply']; ?>
 " name="submit">&nbsp;<input type="button" value=" <?php echo $this->_tpl_vars['_back']; ?>
 " name="back" onclick="history.go(-1);"></td>
          </tr>
      </table>
	  </form>
   </div>
   </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>