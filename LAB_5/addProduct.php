<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <?php 
        include "nav.php";

     ?>
   

 <form action="controller/createProduct.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="buyingprice">Buying Price:</label><br>
  <input type="text" id="buyingprice" name="buyingprice"><br>
  <label for="sellingprice">Selling Price:</label><br>
  <input type="text" id="sellingprice" name="sellingprice"><br>
  <label>
        <input type="checkbox" name="Display" id="your-checkbox-id">
        Display
  </label>
  <br>
 
  <input type="submit" name = "createProduct" value="Save">
   
</form> 

</body>
</html>
