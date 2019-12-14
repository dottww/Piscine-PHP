<?php

$credential = "../private/passwd";
$folder = "../private";

if (
	isset($_POST["submit"]) && $_POST["submit"] == "OK"
	&&	isset($_POST["login"]) && isset($_POST["passwd"])
) {
	$login =  $_POST["login"];
	$passwd = $_POST["passwd"];
	$submit = $_POST["submit"];
} else {
	echo "ERROR\n";
	exit();
}

if (file_exists($credential)) {
	$fd = file_get_contents($credential);
	$data = unserialize($fd);
} elseif (!file_exists($folder)) {
	mkdir($folder, 0755);
	$data = array();
}

if ($data) {
	foreach ($data as $key => $value) {
		if ($value["login"] == $login) {
			echo "ERROR\n";
			exit();
		}
	}
}
$data[$key + 1]["login"] = $login;
$data[$key + 1]["passwd"] = hash("sha256", $passwd);
file_put_contents($credential, serialize($data));
echo "OK\n";
?>
