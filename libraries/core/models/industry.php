<?php
class Industries extends PbModel {
	var $name = "Industry";
	var $info;

 	function Industries()
 	{
		parent::__construct();
 	}
 	
 	function setInfo($id)
 	{
 		$result = $this->dbstuff->GetRow("SELECT * FROM {$this->table_prefix}industries WHERE id='".$id."'");
 		if (!($result) || empty($result)) {
 			return null;
 		}else {
 			$this->info = $result;
 			return $result;
 		}
 	}
 	
 	function getInfo()
 	{
 		return $this->info;
 	}

	function getCacheIndustry($module = 0)
	{
		$data = include(CACHE_PATH. "industry.php");
		return $data;
	}
	
	function getIndustry()
	{
		include(CACHE_PATH. "cache_industry.php");
		return $_PB_CACHE['industry'];
	}
	
	function getSubDatas($id, $extra = false)
	{
		$return = $result = array();
		$row = $this->dbstuff->GetRow("SELECT * FROM {$this->table_prefix}industries WHERE id=".$id);
		if (!empty($row)) {
			$return[$id] = $row['name'];
			$result = $this->dbstuff->GetArray("SELECT t2.id,t2.name FROM {$this->table_prefix}industries t1 LEFT JOIN {$this->table_prefix}industries t2 ON t2.parent_id=t1.id WHERE t1.id='".$row['id']."'");
		}
		if (!empty($result)) {
			foreach ($result as $key=>$val) {
				$return[$val['id']] = $val['name'];
			}
		}
		return $return;
	}
	
	function getMinalId()
	{
		$args = func_get_args();
		if (!empty($args)) {
			foreach ($args as $key=>$val) {
				if($val==0) return intval($args[$key-1]);
			}
		}else {
			return false;
		}
	}	
	
 	function disSubOptions($id, $prefix = "")
 	{
 		$r = array();
 		if (!empty($id)) {
 			$this->dbstuff->setFetchMode(ADODB_FETCH_ASSOC);
 			$sql = "SELECT * FROM ".$this->table_prefix."industries WHERE id=".$id;
 			$result = $this->GetRow($sql);
 			if (!empty($result)) {
	 			if ($result['level']==3) {
	 				$sql = "SELECT t1.id AS ".$prefix."id1, t2.id as ".$prefix."id2, t3.id as ".$prefix."id3 FROM ".$this->table_prefix."industries AS t1 LEFT JOIN ".$this->table_prefix."industries AS t2 ON t2.parent_id = t1.id LEFT JOIN ".$this->table_prefix."industries AS t3 ON t3.parent_id = t2.id WHERE t3.id = ".$id;
	 				$r = $this->GetRow($sql);
	 			}elseif ($result['level']==2){
	 				$sql = "SELECT t1.id AS ".$prefix."id1, t2.id as ".$prefix."id2 FROM ".$this->table_prefix."industries AS t1 LEFT JOIN ".$this->table_prefix."industries AS t2 ON t2.parent_id = t1.id WHERE t2.id = ".$id;
	 				$r = $this->GetRow($sql);
	 			}else{
	 				$r[$prefix.'id1'] = $id;
	 			}
 			}
 		}
 		return $r;
 	}
 	
 	function disSubNames($id, $sep = "&raquo;", $link = false, $do = null)
 	{
 		$ids = $this->disSubOptions($id);
 		$tmp_controller = new PbController();
 		if (is_null($sep)) {
 			$sep = "&raquo;";
 		}
 		include(CACHE_PATH. "cache_industry.php");
 		$datas = $tmp_controller->array_multi2single($_PB_CACHE['industry']);
 		$tmp_ids = $ids;
 		foreach ($ids as $key=>$val) {
 			if($link){
 				$tmp = ltrim($key, "id");
 				switch ($tmp) {
 					case 1:
 						$the_id = implode(",", $ids);
 						break;
 					case 2:
 						unset($tmp_ids["id1"]);
 						$the_id = implode(",", $tmp_ids);
 						break;
 					default:
 						$the_id = $val;
 						break;
 				}
 				if (!function_exists("smarty_function_the_url")) {
 					require(PHPB2B_ROOT."app/slug/function.the_url.php");
 				}
 				$r[] = "<a href='".smarty_function_the_url(array("module"=>"search", "do"=>$do, "industryid"=>$the_id))."' rel='special_link'>".$datas[$val]."</a>";
 			}else{
 				$r[] = $datas[$val];
 			}
 		}
 		unset($_PB_CACHE);
 		return implode($sep, $r);
 	}
	
 	function getConditionIds($id)
 	{
 		$r = null;
 		if (!empty($id)) {
 			$this->dbstuff->setFetchMode(ADODB_FETCH_ASSOC);
 			$sql = "SELECT * FROM ".$this->table_prefix."industries WHERE id=".$id;
 			$result = $this->GetRow($sql);
 			if (!empty($result)) {
	 			if ($result['level']==3) {
	 				$r = $id;
	 			}elseif ($result['level']==2){
	 				$sql = "SELECT t1.id AS id1, t2.id as id2, t3.id as id3 FROM ".$this->table_prefix."industries AS t1 LEFT JOIN ".$this->table_prefix."industries AS t2 ON t2.parent_id = t1.id LEFT JOIN ".$this->table_prefix."industries AS t3 ON t3.parent_id = t2.id WHERE t2.id = ".$id;
	 				$rr = $this->GetArray($sql);
	 				foreach ($rr as $val) {
	 					$tmp[] = $val['id1'];
	 					$tmp[] = $val['id2'];
	 					$tmp[] = $val['id3'];
	 				}
	 				unset($tmp[0]);
	 				$r = array_unique($tmp);
	 			}else{
	 				$sql = "SELECT t1.id AS id1, t2.id as id2, t3.id as id3 FROM ".$this->table_prefix."industries AS t1 LEFT JOIN ".$this->table_prefix."industries AS t2 ON t2.parent_id = t1.id LEFT JOIN ".$this->table_prefix."industries AS t3 ON t3.parent_id = t2.id WHERE t1.id = ".$id;
	 				$rr = $this->GetArray($sql);
	 				foreach ($rr as $val) {
	 					$tmp[] = $val['id1'];
	 					$tmp[] = $val['id2'];
	 					$tmp[] = $val['id3'];
	 				}
	 				$r = array_unique($tmp);
	 			}
 			}
 		}
 		return $r;
 	}
 	
 	function getTypeOptions()
 	{
 		require(CACHE_PATH. "cache_industry.php");
 		$this->typeOptions = '';
 		$this->dbstuff->setFetchMode(ADODB_FETCH_ASSOC);
 		$this->params['data'] = $this->dbstuff->GetArray("SELECT id,parent_id,name,level FROM ".$this->table_prefix."industries ORDER BY level ASC,display_order ASC");
 		$tmp_arr = array();
 		foreach ($this->params['data'] as $key=>$val) {
 			$tmp_arr[$val['id']] = $this->params['data'][$key];
 		}
 		unset($key, $val);
 		foreach ($_PB_CACHE['industry'][1] as $key=>$val) {
 			$this->typeOptions.='<option value="'.$key.'" class="option-level0">';
 			$this->typeOptions.=str_repeat('&nbsp;&nbsp;', 0) . $val;
 			$this->typeOptions.='</option>' . "\n";
 			foreach ($_PB_CACHE['industry'][2] as $key2=>$val2) {
 				if ($tmp_arr[$key2]['parent_id'] == $key) {
		 			$this->typeOptions.='<option value="'.$key2.'" class="option-level1">';
		 			$this->typeOptions.=str_repeat('&nbsp;&nbsp;', 1) . $val2;
		 			$this->typeOptions.='</option>' . "\n";
		 			foreach ($_PB_CACHE['industry'][3] as $key3=>$val3) {
		 				if ($tmp_arr[$key3]['parent_id'] == $key2) {
				 			$this->typeOptions.='<option value="'.$key3.'" class="option-level2">';
				 			$this->typeOptions.=str_repeat('&nbsp;&nbsp;', 2) . $val3;
				 			$this->typeOptions.='</option>' . "\n";
		 				}
		 			}
 				}
 			}
 		}
 		return $this->typeOptions;
 	}
 	
 	function updateCache()
 	{
 		return true;
 	}
}
?>