<?php

class Color
{
	public $red;
	public $green;
	public $blue;
	public static $verbose = FALSE;

	public function __construct($color)
	{
		if (array_key_exists('rgb', $color)) {
			$intrgb = intval($color['rgb']);
			$this->red = ($intrgb >> 16) & 0xff;
			$this->green = ($intrgb >> 8) & 0xff;
			$this->blue = $intrgb & 0xff;
		} else if (
			array_key_exists('red', $color) &&
			array_key_exists('green', $color) &&
			array_key_exists('blue', $color)
		) {
			$this->red = intval($color['red']);
			$this->green = intval($color['green']);
			$this->blue = intval($color['blue']);
		}
		if (Self::$verbose == TRUE)
			echo $this->__toString() . " constructed.\n";
	}
	public function __destruct()
	{
		if (Self::$verbose == TRUE)
			echo $this->__toString() . " destructed.\n";
	}
	public function __toString()
	{
		return (sprintf("Color( red: %3d, green: %3d, blue: %3d )", $this->red, $this->green, $this->blue));
	}
	public function add($set)
	{
		return (new Color(
			array(
				'red' => $this->red + $set->red,
				'green' => $this->green + $set->green,
				'blue' => $this->blue + $set->blue
			)
		));
	}
	public function sub($set)
	{
		return (new Color(
			array(
				'red' => $this->red - $set->red,
				'green' => $this->green - $set->green,
				'blue' => $this->blue - $set->blue
			)
		));
	}
	public function mult($x)
	{
		return (new Color(
			array(
				'red' => $this->red * $x,
				'green' => $this->green * $x,
				'blue' => $this->blue * $x
			)
		));
	}
	public static function doc()
	{
		echo file_get_contents("Color.doc.txt");
	}
}
