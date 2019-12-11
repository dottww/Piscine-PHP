#!/usr/bin/php
<?php
if ($argc > 2) {
	$i = 2;
	$ans=array();
	while ($i < $argc) {
		$arr = explode(":", $argv[$i]);
		if ($argv[1] == $arr[0])
			$ans = $arr[1];
		$i++;
	}
	echo "$ans\n";
}
?>