<?php
require '../../models/ProductModel.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $code = $_POST['code'];
    $category = $_POST['category'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    createProduct($code, $category, $name, $description, $price, $stock);
    header('Location: ../../index.php');
}


