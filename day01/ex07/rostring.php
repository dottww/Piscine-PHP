#!/usr/bin/php
<?php

$init = trim(preg_replace('/\s(?=\s)/', '', $argv[1]));

$arr_init = array_filter(explode(" ", $init), 'strlen');;

if (count($arr_init) == 0)
{
	;
}
else if (count($arr_init) == 1)
{
	echo $arr_init[0];
	echo "\n";
}
else
{
	$tmp = array_slice($arr_init, 1);
	foreach ($tmp as $elem) {
		echo $elem . ' ';
	}
	echo $arr_init[0];
	echo "\n";
}

?>