<?php

include "auth.php";
session_start();
$login = $_POST["login"];
$passwd = $_POST["passwd"];

if (auth($login, $passwd)) {
	$_SESSION["loggued_on_user"] = $login;
	echo "<h2 >You have successfully logged in as user : $login</h2>\n";
} else {
	$_SESSION["loggued_on_user"] = "";
	echo "<h2 >User not exist or wrong password</h2>\n";
	exit();
}
?>