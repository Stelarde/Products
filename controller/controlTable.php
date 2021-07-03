<?php 
require_once(__DIR__ . '/../model/productModel.php');

$db = new DB;

$product = ! empty( $_POST['product'] ) ? $_POST['product'] : false;
$quantity = ! empty( $_POST['quantity'] ) ? $_POST['quantity'] : false;

if ($product && !$quantity) {
	var_dump($db->hideProduct($product));
}

if ($product && $quantity) {
	var_dump($db->changeQuantity($quantity, $product));
}

return $products = $db->getProducts();
?>