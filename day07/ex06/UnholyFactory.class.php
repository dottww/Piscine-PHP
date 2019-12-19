<?php
include_once('Fighter.class.php');
class UnholyFactory
{
	public $arr = array();

	public function absorb($fighter_instance)
	{
		if ($fighter_instance instanceof Fighter) {
			if (isset($this->arr) && in_array($fighter_instance, $this->arr)) {
				echo "(Factory already absorbed a fighter of type " . $fighter_instance->fighter_str() . ")" . PHP_EOL;
			} else {
				$this->arr[] = $fighter_instance;
				echo "(Factory absorbed a fighter of type " . $fighter_instance->fighter_str() . ")" . PHP_EOL;
			}
		} else {
			echo "(Factory can't absorb this, it's not a fighter)" . PHP_EOL;
		}
	}

	public function fabricate($rf)
	{
		foreach ($this->arr as $ftr) {
			if ($rf == $ftr->fighter_str()) {
				echo "(Factory fabricates a fighter of type " . $rf . ")" . PHP_EOL;
				return $ftr;
			}
		}
		echo "(Factory hasn't absorbed any fighter of type " . $rf . ")" . PHP_EOL;
		return NULL;
	}
}
