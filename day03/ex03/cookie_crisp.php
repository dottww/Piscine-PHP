<?php

$name = ($_GET['name']);
$value = ($_GET['value']);
$action = ($_GET['action']);

if ($action == "set") {
	setcookie($name, $value, time() + (3 * 24 * 60 * 60));
} elseif ($action == "get") {
	if ($_COOKIE[$name])
		echo "$_COOKIE[$name]\n";
} elseif ($action == "del") {
	setcookie($name, "", time() - 3600);
}
