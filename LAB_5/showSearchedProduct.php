<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,td,th{
			border:1px solid black;
		}
	</style>
</head>
<body>

<?php 
    include "nav.php";

?>

<table>
	<thead>
		<tr>
			<th>Product ID</th>
			<th>Product Name</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($allSearchedProducts as $i => $product): ?>
			<tr>
				<td><a href="../showProduct.php?id=<?php echo $product['id'] ?>"><?php echo $product['id'] ?></a></td>
				<td><?php echo $product['name'] ?></td>
				<td><a href="../editProduct.php?id=<?php echo $product['id'] ?>">Edit</a>&nbsp<a href="deleteProduct.php?id=<?php echo $product['id'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>