<?php

function get_products()
{
    $fd = fopen("../files/stock.csv", "r");
    if ($fd != NULL)
    {
        $data = array();
        while (($tmp = fgetcsv($fd, 1000, ",")) != false)
                $data[] = $tmp;
        fclose($fd);
        return ($data);
    }
    return (NULL);
}

// $data = get_products();
// print_r( $data );

function disp_products($category)
{
    $productdb = get_products();
    echo '<div class="products-container">';
    foreach ($productdb as $item)
    {
        if ($item[4] == $category)
        {?>
            <div class="product">
                <div class="image-container"><img src="../resources/<?php echo $item[2];?>" alt="product image"></div>
                <p><?php echo $item[0];?><span class="price"> : <?php echo $item[1];?> €</span></p>
                <form method="post" action="addcart.php">
                    <select name="qty">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <input type="hidden" name="added_item" value="<?php echo $item[0]; ?>">
                    <button type="submit" name="id" value="<?php echo $item[3];?>">Add to cart</button>
                </form>
            </div>
        <?php }
    }
    echo '</div>';
}
?>