#!/usr/bin/php
<?php

function is_op($str)
{
	if (
		$str == "+"
		||
		$str == "-"
		||
		$str == "*"
		||
		$str == "/"
		||
		$str == "%"
	)
		return 1;
	else
		return 0;
}

if ($argc != 2) {
	echo "Incorrect Parameters\n";
	return;
} else {
	$str = trim(preg_replace('/\s/', '', $argv[1]));
	$i = 0;
	$op_count = 0;
	$flag1 = 0;
	$flag2 = 0;
	while ($i < strlen($str)) {
		if (is_op($str[$i])) {
			$op = $str[$i];
			$num1 = substr($str, 0, $i);
			$num2 = substr($str, $i + 1);
			$op_count++;
			if ($op_count > 1) {
				echo "Syntax Error\n";
				return;
			}
		} else if (is_numeric($str[$i])) {
			if ($op_count == 0)
				$flag1 = 1;
			else if ($op_count == 1)
				$flag2 = 1;
		} else {
			echo "Syntax Error\n";
			return;
		}
		$i++;
	}
	if ($op_count == 1 && $flag1 == 1 && $flag2 == 1) {
		if (!is_numeric($num1) || !is_numeric($num2) || !is_op($op)) {
			echo "Syntax Error\n";
			return;
		} else {
			if ($op == "+") {
				echo $num1 + $num2;
			} else if ($op == "-") {
				echo $num1 - $num2;
			} else if ($op == "*") {
				echo $num1 * $num2;
			} else if ($op == "/") {
				echo $num1 / $num2;
			} else if ($op == "%") {
				echo $num1 % $num2;
			}
			echo "\n";
		}
	} else {
		echo "Syntax Error\n";
		return;
	}
}

?>