<?php

session_start();

if (!isset($_SESSION["loggued_on_user"]) || $_SESSION["loggued_on_user"] == "")
	echo "<h2 >You are not logged in.</h2>";
else {
	$login = $_SESSION["loggued_on_user"];
	$credential = "../private/passwd";
	$fd = file_get_contents($credential);
	$data = unserialize($fd);
	if ($data) {
		foreach ($data as $key => $value) {
			if ($value["login"] == $login) {
				// echo "<h2 >You account key=" . $key. " login=".$value["login"] . " have been deleted.</h2>";
				echo "<h2 >You account \"" . $value["login"] . "\" have been deleted.</h2>";
				array_splice($data, $key, 1);
				file_put_contents($credential, serialize($data));
				unset($_SESSION["loggued_on_user"]);
				exit;
			}
		}
	}
}
