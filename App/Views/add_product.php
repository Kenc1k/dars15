<?php
use App\Models\Models;

$title = "Add New Product";

ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>
<body>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>

    <h1>Add New Product</h1>

    <!-- Add Product Form -->
    <form action="process_add_product.php" method="POST" enctype="multipart/form-data">
        <div>
            <label for="name">Product Name:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div>
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" required>
        </div>

        <div>
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" required>
        </div>

        <div>
            <label for="image">Product Image:</label>
            <input type="file" id="image" name="image" required>
        </div>

        <button type="submit">Add Product</button>
    </form>

    <h1>Footer</h1>
    <footer>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, consectetur voluptatem. Esse quidem vel blanditiis quisquam. Vel perspiciatis animi pariatur autem atque sint rerum quasi, quos obcaecati quod nam fugit!</p>
    </footer>
</body>
</html>

<?php
$content = ob_get_clean();
echo $content;
