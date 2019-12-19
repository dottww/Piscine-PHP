<?php

class NightsWatch implements IFighter
{
	public $fighters = array();
	public function recruit($arg)
	{
			$this->fighters[] = $arg;
	}
	public function fight()
	{
		foreach ($this->fighters as $fighter) {
			if(class_implements($fighter) == class_implements($this))
				$fighter->fight();
		}
	}
}
