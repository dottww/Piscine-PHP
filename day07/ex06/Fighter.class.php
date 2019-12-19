<?php

abstract class Fighter
{
	private $_Fighter_type;
	abstract public function fight($target);

	public function __construct($str)
    {
		$this->_Fighter_type = $str;
	}
	public function fighter_str()
    {
		return $this->_Fighter_type;
	}
}
