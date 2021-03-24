<?php 

require_once '../show_product.php';
$product = fetchProduct($_GET['id']);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="updateProduct.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input value="<?php echo $product['name'] ?>" type="text" id="name" name="name"><br>
  <label for="surname">Surname:</label><br>
  <input value="<?php echo $product['buying_price'] ?>" type="text" id="buying_price" name="buying_price"><br>
  <label for="username">User Name:</label><br>
  <input value="<?php echo $product['selling_price'] ?>" type="text" id="selling_price" name="selling_price"><br>
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name = "updateProduct" value="Update">
  <input type="reset"> 
</form> 

</body>
</html>