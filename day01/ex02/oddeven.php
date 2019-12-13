#!/usr/bin/php
<?php
while (1) {

	echo "Enter a number: ";

	$num = fgets(STDIN);
	$num = rtrim($num, "\n\r");
	if (feof(STDIN)) {
		echo "\n";
		exit();
	} else if (!is_numeric($num)) {
		echo "'$num' is not a number";
	} else if (!($num % 2)) {
		echo "The number $num is even";
	} else if ($num % 2) {
		echo "The number $num is odd";
	}
	print("\n");
}

?>