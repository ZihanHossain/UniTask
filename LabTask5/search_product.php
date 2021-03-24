<?php

require 'show_product.php';
if($_POST["searchproduct"] == 'Search')
{
    $products = fetchProductByName($_POST['name']);
    $trigger = 'asdasdasd';
}


?>

<!DOCTYPE html>
<html>

<body>
    <!-- [SEARCH FORM] -->
    <form method="POST" action="search_product.php">
        <h1>SEARCH FOR PRODUCT</h1>
        <input type="text" name="name" required />
        <input type="submit" name="searchproduct" value="Search" />
    </form>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Buying Price</th>
                <th>Selling Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $i => $product) : ?>
                <tr>
                    <td><?php echo $product['name'] ?></td>
                    <td><?php echo $product['buying_price'] ?></td>
                    <td><?php echo $product['selling_price'] ?></td>
                    <td><a href="controller/editProduct.php?id=<?php echo $product['id'] ?>">Edit</a>&nbsp<a href="controller/deleteProduct.php?id=<?php echo $product['id'] ?>">Delete</a></td>
                </tr>
            <?php endforeach; ?>


        </tbody>


    </table>

</body>

</html>