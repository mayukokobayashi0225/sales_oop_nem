<?php

include "../classes/products.php";

$product = new Product;
$id = $_GET['id'];
$product -> buyProduct($_POST,$id);

?>