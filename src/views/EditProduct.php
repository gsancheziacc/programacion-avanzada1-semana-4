<?php
//page for edit product from index.php with id
require '../models/ProductModel.php';
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $id = $_GET['id'];
    $product = getProduct($id);
	if($product == null) {
        header('Location: ../index.php');
	}
}
?>

<html lang="ES">
<head>
    <title>Edit Product</title>
</head>
<body style="margin-inline: 20%">
	<h1>Editar Producto</h1>
	<div style="width: 100%;">
		<form method="post" action="../actions/Product/update.php" style="display: grid; grid-column-gap: 50px; grid-template-columns: 30% 70%">
			<input type="hidden" name="id" value="<?php echo $id; ?>"/>
			<label for="code">Código</label>
			<input type="text" name="code" id="code" value="<?php echo $product['Code']; ?>" required>

			<label for="category">Categoría:</label>
			<input type="text" name="category" id="category" value="<?php echo $product['Category']; ?>" required>

			<label for="name">Nombre:</label>
			<input type="text" name="name" id="name" value="<?php echo $product['Name']; ?>" required>

			<label for="description">Descripción:</label>
			<input type="text" name="description" id="description" value="<?php echo $product['Description']; ?>" required>

			<label for="price">Precio:</label>
			<input type="text" name="price" id="price" value="<?php echo $product['Price']; ?>" required>

			<label for="stock">Stock:</label>
			<input type="text" name="stock" id="stock" value="<?php echo $product['Stock']; ?>" required>

			<br/>
			<input type="submit" value="Actualizar" style="max-width: 100px; min-height: 35px">
		</form>
	</div>
</body>
</html>
