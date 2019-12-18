<?php

class Vertex
{
	public $x;
	public $y;
	public $z;
	public $w = 1;
	public $color = array('red' => 255,'green' => 255,'blue' => 255);
	static $verbose = FALSE;

	public function __construct($vtx)
	{
		if (array_key_exists('x', $vtx) &&array_key_exists('y', $vtx) &&array_key_exists('z', $vtx))
		{
			$this->x = intval($vtx['x']);
			$this->y = intval($vtx['y']);
			$this->z = intval($vtx['z']);
			if(array_key_exists('w', $vtx))
				$this->w = intval($vtx['w']);
			if(array_key_exists('color', $vtx))
				$this->color = new Color($vtx['color']);
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
