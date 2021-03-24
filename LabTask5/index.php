<?php

    require 'add_product.php';
    require 'show_product.php';
    $products = fetchAllProducts();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add & Display</title>
</head>
<body>
<fieldset>
    <legend>ADD Product</legend>
    <form method="POST" action="index.php">
    <label>Name: </label>
    <input type="text" name="name"><br><br>
    <label>Buying Price: </label>
    <input type="number" name="bprice"><br><br>
    <label>Selling Price: </label>
    <input type="number" name="sprice"><br><br>
    <hr>
    <button type="submit" value="save" name="save">Save</button>
    </form>

    <a href="search_product.php"><button>Search</button></a>

    <span><?php echo $message; ?></span>
</fieldset>

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
		<?php foreach ($products as $i => $product): ?>
			<tr>
				<td><?php echo $product['name'] ?></td>
				<td><?php echo $product['buying_price'] ?></td>
				<td><?php echo $product['selling_price'] ?></td>
				<td><a href="controller/editProduct.php?id=<?php echo $product['id']?>">Edit</a>&nbsp<a href="controller/deleteProduct.php?id=<?php echo $product['id'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>

</body>
</html>