<?php

class Color
{
	public $red;
	public $green;
	public $blue;
	public static $verbose = FALSE;

	public function __construct(array $kwargs)
	{
		if (array_key_exists('arg', $kwargs)) {
			$intrgb = intval($kwargs['rgb']);
			$this->red = ($intrgb >> 16) & 0xff;
			$this->green = ($intrgb >> 8) & 0xff;
			$this->blue = ($intrgb >> 0) & 0xff;
		}
		elseif (
			array_key_exists('red', $kwargs) &&
			array_key_exists('green', $kwargs) &&
			array_key_exists('blue', $kwargs)
		) {
			$this->red = intval($kwargs['red']);
			$this->green = intval($kwargs['green']);
			$this->blue = intval($kwargs['blue']);
		}
		if(self::$verbose==TRUE)
		{
			
		}
		return;
	}
	public function __destruct()
	{
		print('__destruct called' . PHP_EOL);
		return;
	}
	public function __to_string()
	{
		print('__to_string called' . PHP_EOL);
	}
	public static function doc()
	{
		echo file_get_contents("Color.doc.txt");
	}
}
