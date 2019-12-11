#!/usr/bin/php
<?php

$i = 1;

while ($i < $argc) {
	$tmp = $tmp . ' ' . $argv[$i];
	$i++;
}

$tmp = array_filter(explode(" ", $tmp), 'strlen');
natcasesort($tmp);

$alpha = array();
foreach ($tmp as $elem) {
	if (ctype_alpha($elem[0])) {
		array_push($alpha, $elem);
	}
}
natcasesort($alpha);

$number = array();
foreach ($tmp as $elem) {
	if (is_numeric($elem[0])) {
		array_push($number, $elem);
	}
}
sort($number, SORT_STRING);

$other = array();
foreach ($tmp as $elem) {
	if (!ctype_alpha($elem[0]) && !is_numeric($elem[0])) {
		array_push($other, $elem);
	}
}
sort($other);

if (count($alpha) > 0) {
	foreach ($alpha as $elem) {
		echo "$elem\n";
	}
}

if (count($number) > 0) {
	foreach ($number as $elem) {
		echo "$elem\n";
	}
}

if (count($other) > 0) {
	foreach ($other as $elem) {
		echo "$elem\n";
	}
}

?>