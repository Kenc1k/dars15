<?php

error_reporting(E_ALL); // Report all errors
ini_set('display_errors', 1);

// use App\App;

// include "autoload.php";
// include "web.php";
// include "App/Helpers/Helpers.php";
// $app = new App();
// echo $app->run();
include "App/Models/Models.php";

$products = Models::get_all();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Product List</h1>

<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
        </tr>
    </thead>
    <tbody>
        <?php if (count($products) > 0): ?>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $product['id'] ?></td>
                    <td><?= $product['name'] ?></td>
                    <td>$<?= number_format($product['price'], 2) ?></td>
                    <td><?= $product['quantity'] ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4">No products available.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<a href="add_product.php">Add Product</a>
<a href="update_product.php">Update Product</a>
<a href="delete_product.php">Delete Product</a>

<?php include "layouts/footer.php"; ?>

</body>
</html>