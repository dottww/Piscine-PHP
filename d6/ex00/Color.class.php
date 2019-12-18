<?php

Class Color{
	Public $tstr= a;
	static $verbose = FALSE;

	Public function __construct(){
		print('__construct called' . PHP_EOL);
		return;
	}
	public function __destruct(){
		print('__destruct called' . PHP_EOL);
		return;
	}
	public function __to_string(){
		print('__to_string called' . PHP_EOL);
	}
	public static function doc(){
		echo file_get_contents("Color.doc.txt");
	}
	
}

?>
