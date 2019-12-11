#!/usr/bin/php
<?php

function ft_split($str)
{
	$tmp = array_filter(explode(" ", $str), 'strlen');
	sort($tmp);
	return $tmp;
}

$i = 1;

while ($i < $argc) {
	$tmp = $tmp . ' ' . $argv[$i];
	$i++;
}

$tmp = ft_split($tmp);

foreach ($tmp as $elem) {
	echo "$elem\n";
}

?>