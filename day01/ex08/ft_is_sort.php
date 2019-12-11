#!/usr/bin/php
<?php

function ft_is_sort($tab) {

	$default = $tab;
	sort($tab);

	$flag = true;
	foreach ($tab as $key => $value) {
		if ($value != $default[$key]) {
			$flag = false;
			break;
		}
	}
	if ($flag) {
		return 1;
	} else {
		return 0;
	}
}

// include("ft_is_sort.php");

// $ck = array(50, 100, 150,1);
// $tab = array("!/@#;^", "42", "Hello World", "hi", "zZzZzZz");
// // $tab[] = "What are we doing now ?";

// if (ft_is_sort($tab)) {
// 	echo "The array is sorted\n";
// } else {
// 	echo "The array is not sorted\n";
// }

?>