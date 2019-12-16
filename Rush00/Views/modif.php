<?php
$login =  $_POST["login"];
$oldpass = $_POST["oldpw"];
$newpass = $_POST["newpw"];
$submit = $_POST["submit"];
$credential = "../private/passwd";

// echo $_POST["login"];
// echo $_POST["oldpw"];
// echo $_POST["newpw"];
// echo $_POST["submit"];

if (!$login || !$oldpass || !$newpass || !file_exists($credential)) {
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
					echo "<h2 >You have suceesfully changed your password</h2>";
					exit();
				} else {
					echo "<h2 >Something went wrong, please try again</h2>";
					exit();
				}
			}
		}
	}
}
?>