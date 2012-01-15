<?php /* Smarty version 2.6.18, created on 2012-01-14 11:06:06
         compiled from invite.html */ ?>
<?php $this->assign('page_title', ($this->_tpl_vars['_invitation_code'])); ?>
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
     <div class="page-header">
     	<h2><?php echo $this->_tpl_vars['page_title']; ?>
</h2>
     </div>
     <div class="mod">
     	<div class="mod-hd">
     		<span class="orange"><?php echo $this->_tpl_vars['_friendly_tip']; ?>
</span><?php echo $this->_tpl_vars['_invitation_code_time']; ?>

     	</div>
     	<div class="mod-bd">
     		<table class="bgblue">
            <tr align="center" class="bggray">
              <td width="60%" align="left"><div id="txt"><?php echo $this->_tpl_vars['InviteCode']; ?>
</div></td>
              <td align="center"><a href="javascript:;" id="copy_invite"><?php echo $this->_tpl_vars['_copy']; ?>
</a></td>
            </tr>
          </table>
     	</div>
     </div>
    
   </div>
   </div>
   </div>
<script language="javascript">
var InviteCode = "<?php echo $this->_tpl_vars['InviteCode']; ?>
";
var copy_success = "<?php echo $this->_tpl_vars['_copy_success']; ?>
";
var browser_deny_set = "<?php echo $this->_tpl_vars['_browser_deny_set']; ?>
";
</script>
<?php echo '
<script>
$(\'#copy_invite\').click(function() {
  copyToClipboard(InviteCode);
});
function copyToClipboard(txt) {    
	if(window.clipboardData) {    
		 window.clipboardData.clearData();    
		 window.clipboardData.setData("Text", txt);    
		 alert(copy_success)    
	} else if(navigator.userAgent.indexOf("Opera") != -1) {    
	  window.location = txt;    
	  alert(copy_success)    
	} else if (window.netscape) {    
	  try {    
		   netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");    
	  } catch (e) {    
		   alert(browser_deny_set);    
	  }    
	  var clip = Components.classes[\'@mozilla.org/widget/clipboard;1\'].createInstance(Components.interfaces.nsIClipboard);    
	  if (!clip)    
		   return;    
	  var trans = Components.classes[\'@mozilla.org/widget/transferable;1\'].createInstance(Components.interfaces.nsITransferable);    
	  if (!trans)    
		   return;    
	  trans.addDataFlavor(\'text/unicode\');    
	  var str = new Object();    
	  var len = new Object();    
	  var str = Components.classes["@mozilla.org/supports-string;1"].createInstance(Components.interfaces.nsISupportsString);    
	  var copytext = txt;    
	  str.data = copytext;    
	  trans.setTransferData("text/unicode",str,copytext.length*2);    
	  var clipid = Components.interfaces.nsIClipboard;    
	  if (!clip)    
		   return false;    
	  clip.setData(trans,null,clipid.kGlobalClipboard);    
	  alert(copy_success)    
	}    
}  
</script>
'; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>