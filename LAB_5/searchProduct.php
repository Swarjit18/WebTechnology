<!DOCTYPE html>
<html>
  <body>

    <!-- [SEARCH FORM] -->
    <form method="post" action="controller/findProduct.php">
      <h1>SEARCH FOR PRODUCTS</h1>
      <input type="text" name="name" />
      <input type="submit" name="findProduct" value="Search"/>
      <br>
      <br>
    </form>

<?php 
    include "showAllProducts.php";

?>

 
  </body>
</html>