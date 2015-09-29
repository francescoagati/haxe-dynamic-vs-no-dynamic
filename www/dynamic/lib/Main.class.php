<?php

class Main {
	public function __construct(){}
	static function pippo() { return call_user_func(self::$pippo); }
	public static $pippo = null;
	static function main() {
		Main::pippo();
	}
	function __toString() { return 'Main'; }
}
Main::$pippo = array(new _hx_lambda(array(), "Main_0"), 'execute');
function Main_0() {
	{
		haxe_Log::trace("pippa", _hx_anonymous(array("fileName" => "Main.hx", "lineNumber" => 8, "className" => "Main", "methodName" => "pippo")));
	}
}
