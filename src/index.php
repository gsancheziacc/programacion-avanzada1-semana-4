<?php
require __DIR__ . '/models/ProductModel.php';
$products = getAllProducts();
?>

<html lang="ES">
<head>
    <title>IACC - TAREA SEMANA 04</title>
</head>
<body>
	<h1>Lista de Productos</h1>
	<form action="actions/Product/create.php" method="post">
		<label for="code">Código</label>
		<input type="text" name="code" id="code" required>
		<label for="category">Categoría</label>
		<input type="text" name="category" id="category" required>
		<label for="name">Nombre:</label>
		<input type="text" name="name" id="name" required>
		<label for="description">Descripción:</label>
		<input type="text" name="description" id="description" required>
		<label for="price">Precio:</label>
		<input type="text" name="price" id="price" required>
		<label for="stock">Stock:</label>
		<input type="text" name="stock" id="stock" required>
		<input type="submit" value="Crear">
	</form>
    <?php if(count($products) > 0): ?>
        <table style="width: 100%; max-width: 100%; margin-bottom: 1rem; border-collapse: collapse">
            <thead>
                <tr>
                    <th style="border: 1px solid">Código</th>
	                <th style="border: 1px solid">Categoría</th>
                    <th style="border: 1px solid">Producto</th>
                    <th style="border: 1px solid">Descripción</th>
                    <th style="border: 1px solid">Precio</th>
                    <th style="border: 1px solid">Cantidad</th>
	                <th style="border: 1px solid">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($products as $product): ?>
                    <tr>
                        <td style="border: 1px solid"><strong><?php echo $product['Code']; ?></strong></td>
	                    <td style="border: 1px solid"><?php echo $product['Category']; ?></td>
                        <td style="border: 1px solid"><?php echo $product['Name']; ?></td>
                        <td style="border: 1px solid"><?php echo $product['Description']; ?></td>
                        <td style="border: 1px solid"><?php echo $product['Price']; ?></td>
                        <td style="border: 1px solid"><?php echo $product['Stock']; ?></td>
	                    <td style="border: 1px solid">
		                    <a href="views/EditProduct.php?id=<?php echo $product['Id']; ?>">Editar</a>
		                    <a href="actions/Product/delete.php?id=<?php echo $product['Id']; ?>">Eliminar</a>
	                    </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No hay productos</p>
    <?php endif; ?>
</body>
</html>
