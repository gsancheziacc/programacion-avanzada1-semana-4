<?php
require '../../models/ProductModel.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $code = $_POST['code'];
    $category = $_POST['category'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    updateProduct($id, $code, $category, $name, $description, $price, $stock);
    header('Location: ../../index.php');
}