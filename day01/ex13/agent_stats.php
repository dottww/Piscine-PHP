#!/usr/bin/php
<?php

// $fp1 = readfile("php://stdin");
// echo($fp1);
$fp2 = file("php://stdin");
print_r($fp2);

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