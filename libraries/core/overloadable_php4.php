<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2075 $
 */
class Overloadable extends PbObject {

	function __construct() {
		$this->overload();
		parent::__construct();
	}

	function overload() {
		if (function_exists('overload')) {
			if (func_num_args() > 0) {
				foreach (func_get_args() as $class) {
					if (is_object($class)) {
						overload(get_class($class));
					} elseif (is_string($class)) {
						overload($class);
					}
				}
			} else {
				overload(get_class($this));
			}
		}
	}
	
	function __call($method, $params, &$return) {
		if (!method_exists($this, 'call__')) {
			trigger_error(sprintf(__('Magic method handler call__ not defined in %s', true), get_class($this)), E_USER_ERROR);
		}
		$return = $this->call__($method, $params);
		return true;
	}
}
Overloadable::overload('Overloadable');

class Overloadable2 extends PbObject {
	
	function __construct() {
		$this->overload();
		parent::__construct();
	}

	function overload() {
		if (function_exists('overload')) {
			if (func_num_args() > 0) {
				foreach (func_get_args() as $class) {
					if (is_object($class)) {
						overload(get_class($class));
					} elseif (is_string($class)) {
						overload($class);
					}
				}
			} else {
				overload(get_class($this));
			}
		}
	}

	function __call($method, $params, &$return) {
		if (!method_exists($this, 'call__')) {
			trigger_error(sprintf(__('Magic method handler call__ not defined in %s', true), get_class($this)), E_USER_ERROR);
		}
		$return = $this->call__($method, $params);
		return true;
	}

	function __get($name, &$value) {
		$value = $this->get__($name);
		return true;
	}

	function __set($name, $value) {
		$this->set__($name, $value);
		return true;
	}
}
Overloadable::overload('Overloadable2');
?>