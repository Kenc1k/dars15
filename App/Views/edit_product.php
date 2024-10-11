<?php
use App\Models\Product;

$id = $_GET['id'];
$product = Product::get_all($id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    Product::update($id, $name, $quantity, $price); 
    header('Location: product_list.php'); 
    exit;
}
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
