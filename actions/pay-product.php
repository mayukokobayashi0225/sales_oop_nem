<?php

include "../classes/products.php";

$product = new Product;
$id = $_GET['id'];
$product->updateQuantity($id,$_POST['original_quantity'],$_POST['buy_quantity']);

?>