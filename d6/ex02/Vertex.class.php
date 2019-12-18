<?php
require_once("Color.class.php");

class Vertex
{
	private $_x;
	private $_y;
	private $_z;
	private $_w = 1.0;
	private $_color;
	public static $verbose = FALSE;

	public function __construct($vtx)
	{
		if (isset($vtx['x']) && isset($vtx['y']) && isset($vtx['z'])) {
			$this->_x = $vtx['x'];
			$this->_y = $vtx['y'];
			$this->_z = $vtx['z'];
			if (isset($vtx['w']))
				$this->_w = intval($vtx['w']);
			if (isset($vtx['color']) && $vtx['color'] instanceof Color)
				$this->_color = $vtx['color'];
			else
				$this->_color = new Color(array('red' => 255, 'green' => 255, 'blue' => 255));
		}
		if (Self::$verbose == TRUE)
			echo $this->__toString() . " constructed\n";
	}
	public function __destruct()
	{
		if (Self::$verbose == TRUE)
			echo $this->__toString() . " destructed\n";
	}
	function __toString()
	{
		if (Self::$verbose == TRUE) {
			return (sprintf(
				"Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f, Color( red: %3d, green: %3d, blue: %3d ) )",
				$this->_x,
				$this->_y,
				$this->_z,
				$this->_w,
				$this->_color->red,
				$this->_color->green,
				$this->_color->blue
			));
		} else {
			return (sprintf(
				"Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f )",
				$this->_x,
				$this->_y,
				$this->_z,
				$this->_w
			));
		}
	}
	public static function doc()
	{
		echo file_get_contents("Vertex.doc.txt");
	}
	public function get_X()
	{
		return $this->_x;
	}
	public function get_Y()
	{
		return $this->_y;
	}
	public function get_Z()
	{
		return $this->_z;
	}
	public function get_W()
	{
		return $this->_w;
	}
	public function getColor()
	{
		return $this->_color;
	}
	public function setX($value)
	{
		$this->_x = $value;
	}
	public function setY($value)
	{
		$this->_y = $value;
	}
	public function setZ($value)
	{
		$this->_z = $value;
	}
	public function setW($value)
	{
		$this->_w = $value;
	}
	public function setColor($color)
	{
		$this->_color = $color;
	}
}
