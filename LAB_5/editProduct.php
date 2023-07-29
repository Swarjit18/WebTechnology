<?php 

require_once 'controller/productInfo.php';
$student = fetchProduct($_GET['id']);


 include "nav.php";



 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="controller/updateProduct.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input value="<?php echo $product['Name'] ?>" type="text" id="name" name="name"><br>
  <label for="id">ID :</label><br>
  <input value="<?php echo $product['id'] ?>" type="text" id="id" name="id"><br>
  <label for="buyingprice">Buying Price:</label><br>
  <input value="<?php echo $product['buyingprice'] ?>" type="text" id="buyingprice" name="buyingprice"><br>
  <label for="sellingprice">Selling Price:</label><br>
  <input value="<?php echo $product['sellingprice'] ?>" type="text" id="sellingprice" name="sellingprice"><br>
  
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <label>
        <input type="checkbox" name="Display" id="your-checkbox-id">
        Display
  </label>
  <br>
  <input type="submit" name = "updateProduct" value="Update">
  <input type="reset"> 
</form> 

</body>
</html>
