#!/usr/bin/php
<?php

function ft_split($str)
{
	$tmp = array_filter(explode(" ", $str), 'strlen' );
	sort($tmp);
	return $tmp;
}

?>