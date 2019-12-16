<?php
session_start();
$login =  $_POST["login"];
$passwd = $_POST["passwd"];
$submit = $_POST["submit"];
$credential = "../private/passwd";
$folder = "../private";

if (!$login || !$passwd || $submit != "Create") {
	echo "ERROR\n";
	exit();
}
else{
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
				echo "<h2 >User already exist, please try another ID</h2>";
				exit();
			}
		}
	}
	$data[$key + 1]["login"] = $login;
	$data[$key + 1]["passwd"] = hash("sha256", $passwd);
	file_put_contents($credential, serialize($data));
	$_SESSION["loggued_on_user"] = $login;
	echo "<h2 >You have successfully created user account : $login</h2>";
}

?>