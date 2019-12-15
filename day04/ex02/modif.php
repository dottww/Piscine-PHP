<?php
$login =  $_POST["login"];
$oldpass = $_POST["oldpw"];
$newpass = $_POST["newpw"];
$submit = $_POST["submit"];
$credential = "../private/passwd";

if (!$login || !$oldpass || !$newpass || $submit != "OK" || !file_exists($credential)) {
	echo "ERROR\n";
	exit();
} else {
	$fd = file_get_contents($credential);
	$data = unserialize($fd);
	if ($data) {

		foreach ($data as $key => $value) {
			if ($value["login"] == $login) {
				if ($value["passwd"] == hash("sha256", $oldpass)) {
					$data[$key]["passwd"] = hash("sha256", $newpass);
					file_put_contents($credential, serialize($data));
					echo "OK\n";
					exit();
				} else {
					echo "ERROR\n";
					exit();
				}
			}
		}
		echo "ERROR\n";
	}
}
?>