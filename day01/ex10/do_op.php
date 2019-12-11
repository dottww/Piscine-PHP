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

if ($argc != 4) {
	echo "Incorrect Parameters\n";
	return;
}
else
{
	$num1 = trim($argv[1]);
	$op = trim($argv[2]);
	$num2 = trim($argv[3]);

	if(!is_numeric($num1) || !is_numeric($num2) || !is_op($op))
	{	
		echo "Incorrect Parameters\n";
		return;
	}
	else
	{
		if($op=="+")
		{
			echo $num1 + $num2;
		}
		else if($op=="-")
		{
			echo $num1 - $num2;
		}
		else if($op=="*")
		{
			echo $num1 * $num2;
		}
		else if($op=="/")
		{
			echo $num1 / $num2;
		}
		else if($op=="%")
		{
			echo $num1 % $num2;
		}
		echo "\n";
	}
}

?>