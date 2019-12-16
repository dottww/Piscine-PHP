<?php
session_start();
// include_once("../Model/account_csv.php");
// include_once("../Model/orders_csv.php");
// include_once("../Model/basket.php");

// $title = "Add to cart ";

if (isset($_POST['id']) && isset($_POST['qty']))
{
    // include_once("../Model/basket.php");
    $_SESSION['basket'][] = array($_POST['id'], $_POST['qty']);
 
    // echo "foreach echo<br/>";
    // foreach($_SESSION['basket'] as $elem)
    // {
    //     print_r($elem);
    //     echo "<br/>";
    // }
    // echo "END<br/>";
    // print_r ($_SESSION['basket']);
}
echo "<h2 >You have added " . $_POST['qty'] . " unit(s) of ". $_POST['added_item'] . " to your basket.</h2>";
?>
