<?php
session_start();
include_once("basket.php");

// place_order();

if (isset($_POST['action']) && $_POST['action'] == "buy") {
		place_order();
}
else if (isset($_POST['action']) && $_POST['action'] == "log")
{
	echo "<h2 >You haven't logged in, please log in to proceed</h2>";
}
else if (isset($_POST['action']) && $_POST['action'] == "none")
{
	echo "<h2 >Your basket is empty, please add something.</h2>";
}
?>