#!/usr/bin/php
<?php

$i = 1;

print_r($argv);

while ($i < $argc) {
	$tmp = $tmp . ' ' . $argv[$i];
	$i++;
}

echo "tmp=\"$tmp\"\n";

$tmp = array_filter(explode(" ", $tmp), 'strlen');
natcasesort($tmp);

foreach ($tmp as $elem) {
	echo "$elem\n";
}

?>