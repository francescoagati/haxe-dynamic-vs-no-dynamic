<?php

class Main {
	public function __construct(){}
	static function pippo() {
		haxe_Log::trace("pippa", _hx_anonymous(array("fileName" => "Main.hx", "lineNumber" => 8, "className" => "Main", "methodName" => "pippo")));
	}
	static function main() {
		Main::pippo();
	}
	function __toString() { return 'Main'; }
}
