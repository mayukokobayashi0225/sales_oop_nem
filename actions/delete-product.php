<?php
include "../classes/Products.php";

$id = $_GET['id'];
//after push delete button, it create new user Object
$product = new Product;

//calls the method delete
$product -> delete($id);

?>