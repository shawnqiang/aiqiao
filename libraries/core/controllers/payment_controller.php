<?php
class Payment extends PbController {
	var $name = "Payment";
    var $config;
    var $payment_dir;
    var $payment_path;
    var $payer;
	
    function Payment()
    {
		$this->payment_dir = 'payments'; 
		$this->payment_path = PHPB2B_ROOT. 'plugins'.DS.'payments'.DS; 
    }
	
	function getPayments(){
		$installed = $this->getInstalled();
		$not_installed = $this->getUninstalled();
		$all = array_merge($installed, $not_installed);
		return $all;
	}
	
	function setPay($pay_code)
	{
		//capital pay
		if (empty($pay_code) && !empty($_REQUEST['v_pmode']) && !empty($_REQUEST['v_pstring']))
		{
		    $pay_code = 'cappay';
		}
		
		//shenzhou pay
		if (empty($pay_code) && ($_REQUEST['ext1'] == 'shenzhou') && ($_REQUEST['ext2'] == PHPB2B_VERSION))
		{
		    $pay_code = 'shenzhou';
		}
		if (is_file($file_name = $this->payment_path.$pay_code.".php")) {
			require($file_name);
			$this->payer = new $pay_code();
		}
	}
	
	function getPay()
	{
		return $this->payer;
	}
	
	function getUninstalled(){
		$uninstalled = $temp = array();
		$installed = $this->getInstalled();
		foreach($installed as $key=>$val){
			$temp[] = $val['name'];
		}
		$template_dir = dir($this->payment_path);
		while($entry = $template_dir->read())  {
			$tpldir = realpath($this->payment_path.$entry);
			if((!in_array($entry, array('.', '..', '.svn'))) && (!in_array($entry, $temp)) && is_dir($tpldir)) {
				require($this->payment_path.$entry.DS."info.inc.php");
				$uninstalled[] = array(
				'name' => $entry,
				'title' => $cfg['title'],
				'description' => $cfg['description'],
				'available' => 0,
				);
			}
		}
		return $uninstalled;
	}
}
?>