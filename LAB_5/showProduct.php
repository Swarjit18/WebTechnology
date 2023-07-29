<?php  
require_once 'controller/productInfo.php';

$product = fetchProduct($_GET['id']);


    include "nav.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<tr>
		<th>Name</th>
		<th>ID</th>
		<th>Buying Price</th>
		<th>Selling Price</th>
		
	</tr>
	<tr>
		<td><a href="showProduct.php?id=<?php echo $product['ID'] ?>"><?php echo $product['Name'] ?></a></td>
		<td><?php echo $product['name'] ?></td>
		<td><?php echo $product['id'] ?></td>
		<td><?php echo $product['buyingprice'] ?></td>
		<td><?php echo $product['sellingprice'] ?></td>
		
	</tr>

</table>


</body>
</html>