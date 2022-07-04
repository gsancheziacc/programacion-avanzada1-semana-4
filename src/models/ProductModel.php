<?php
require __DIR__ . '/ConnectionDB.php';

/**
 * @return list of products in array
 */
function getAllProducts() {
    $conn = connect();
    $sql = "SELECT P.Id, P.Code, P.Category, P.Name, P.Description, P.Price, P.Stock FROM Product AS P";
    $result = $conn->query($sql);
    $products = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
    }
    return $products;
}

function getProduct($id) {
    $conn = connect();
    $sql = "SELECT P.Id, P.Code, P.Category, P.Name, P.Description, P.Price, P.Stock FROM Product AS P WHERE P.Id = $id";
    $result = $conn->query($sql);
    $product = null;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $product = $row;
        }
    }
    return $product;
}

function createProduct($code, $category, $name, $description, $price, $stock) {
    $conn = connect();
    $sql = "INSERT INTO Product (Code, Category, Name, Description, Price, Stock, CreatedAt, IsActive) VALUES ('$code','$category','$name', '$description', '$price', '$stock', NOW(), 1)";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function updateProduct($id, $code, $category, $name, $description, $price, $stock) {
    $conn = connect();
    $sql = "UPDATE Product SET Code = '$code', Category = '$category', Name = '$name', Description = '$description', Price = '$price', Stock = '$stock' WHERE Id = $id";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function deleteProduct($id) {
    $conn = connect();
    $sql = "DELETE FROM Product WHERE Id = '$id'";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}
