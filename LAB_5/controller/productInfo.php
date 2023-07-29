<?php 

require_once ('model/model.php');

function fetchAllProduct(){
	return showAllProducts();

}
function fetchProduct($id){
	return showProduct($id);

}