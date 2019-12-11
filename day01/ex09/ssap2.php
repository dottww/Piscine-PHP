#!/usr/bin/php
<?php

$i = 1;

while ($i < $argc) {
	$tmp = $tmp . ' ' . $argv[$i];
	$i++;
}

$tmp = array_filter(explode(" ", $tmp), 'strlen');
natcasesort($tmp);

foreach ($tmp as $elem) {
	echo "$elem\n";
}

?>