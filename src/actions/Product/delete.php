<?php
require '../../models/ProductModel.php';
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $id = $_GET['id'];
    deleteProduct($id);
    header('Location: ../../index.php');
}
