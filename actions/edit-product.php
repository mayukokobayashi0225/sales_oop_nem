<?php

include "../classes/products.php";

$product = new Product;
$id = $_GET['id'];
$product -> updateProduct($_POST,$id);

?>