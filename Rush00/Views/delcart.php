<?php
session_start();
// include_once("../Model/account_csv.php");
// include_once("../Model/orders_csv.php");
include_once("basket.php");
include_once("product.php");

// $title = "Add to cart ";
if($_POST['id']== "none")
{
	echo "<h2 >You basket is empty.";
}
elseif($_POST['id']== "cancel")
{
	unset($_SESSION['basket']);
	echo "<h2 >You have cancelled your basket.";
}
else
	{
	del_basket($_POST['id']);
	echo "<h2 >You have deleted the " . $_POST['deleted_item'] . " from your basket.";
	}
?>