<?php

function get_item($id)
{
    if (($handle = fopen("../files/stock.csv", "r")) !== FALSE) {
        $data = array();
        $i = 0;
        while (($tmp = fgetcsv($handle, 1000, ",")) != FALSE)
            $data[] = $tmp;
        fclose($handle);
        while ($data[$i])
        {
            if ($data[$i][3] == $id )
                return($data[$i]);
            $i++;
        }
    }
    return (NULL);
}

function del_basket($id)
{
    $basket = $_SESSION['basket'];
    foreach ($basket as $key => $value)
    {
        if ($value[0] == $id)
        {
            array_splice($basket, $key, 1);
            $_SESSION['basket'] = $basket;
            return (0);
        }
    }
    return (1);
}
function get_total($basket)
{
    include_once("../Model/get_item.php");
    $total = 0;
    foreach ($basket as $value)
    {
        $tmp = get_item($value[0]);
        $total = $total + (intval($tmp[1]) * intval($value[1]));
    }
    return ($total);
}

function get_orders()
{
    if (($handle = fopen("../files/orders.csv", "r")) !== FALSE) {
        $data = array();
        while (($tmp = fgetcsv($handle, 1000, ",")) != false)
            $data[] = $tmp;
        fclose($handle);
        return ($data);
    }
    return (NULL);
}
function put_order($new)
{
    if (($orders = get_orders()) != NULL)
    {
        $fd = fopen("../files/orders.csv", "w");
        $orders[] = $new;
        foreach ($orders as $fields)
            fputcsv($fd, $fields, ",");
    }
    fclose($fd);
}

function place_order()
{
    $new = array();
    $new[0] = count(get_orders());
    $new[1] = $_SESSION['loggued_on_user'];
    $new[2] = time();
    $new[3] = get_total($_SESSION['basket']);
    $basket = $_SESSION['basket'];
    foreach ($basket as $value)
        $new[] = $value[0].":".$value[1];
    put_order($new);
    unset($_SESSION['basket']);
    echo "<h2 >Your order is confirmed!</h2>";
}
?>