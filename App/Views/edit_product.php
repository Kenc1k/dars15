<?php
use App\Models\Product;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>

    <form action="" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?= $product->name ?>" required>

        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" value="<?= $product->quantity ?>" required>

        <label for="price">Price:</label>
        <input type="number" name="price" value="<?= $product->price ?>" required>

        <button type="submit">Update Product</button>
    </form>
</body>
</html>
