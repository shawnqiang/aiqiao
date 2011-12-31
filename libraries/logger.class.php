<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2257 $
 */
class Logger{
	var $log_file;
	var $fp = null;
	var $ext = ".txt";
	
	function Logger()
	{
		
	}
	
	function lfile($path) {
		$this->log_file = $path;
	}
	
	function lwrite($message = null, $pre = 'log'){
		if (empty($message)) {
			return;
		}
		if (empty($this->log_file)) {
			$this->log_file =  DATA_PATH. 'logs/';
		}
		if (!is_dir($this->log_file)) {
			pb_create_folder($this->log_file);
		}
		$this->log_file = $this->log_file.$pre;
		if (!$this->fp) $this->lopen();
		$script_name = basename($_SERVER['PHP_SELF']);
		$script_name = substr($script_name, 0, -4);
		$time = date('H:i:s');
		fwrite($this->fp, "[$time] [$script_name] [".pb_getenv("REMOTE_ADDR")."] $message\r\n");
		fclose($this->fp);
	}
	
	function lopen(){
		$lfile = $this->log_file;
		$today = date('Ymd');
		$file_name = $lfile . '-' . $today . $this->ext;
		if (!file_exists($file_name)) {
			$log_header = "Time\tFile\tIP\t\tData\r\n";
			file_put_contents($file_name, $log_header);
		}
		$this->fp = fopen($file_name, 'a') or exit("Can't open $lfile!");
	}
}
?>