<?php
use App\Models\Product;
use PP\Models;

// Fetch all products
$all = Product::get_authories();

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
        <li><a href="/">Mualliflar</a></li>
        <li><a href="/about">Janrlar</a></li>
        <li><a href="/contact">Kitoblar</a></li>
    </ul>

    <h1>Mualliflar</h1>

    <div style="margin-bottom: 20px;">
        <a href="Views/add_products33s.php">
            <button style="padding: 10px 20px; background-color: #28a745; color: white; border: none; cursor: pointer; border-radius: 5px;">
                Muallif qoshish
            </button>
        </a>
    </div>
    <!-- Product Table -->
    <table border="1" cellpadding="10" cellspacing="0" align="center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($all)): ?>
                <?php foreach ($all as $row): ?>
                    <tr>
                        <td><?= $row->id ?></td>
                        <td><?= $row->name ?></td>
                        <td>
                            <!-- Edit Product Button -->
                            <a href="edit_product.php?id=<?= $row->id ?>">
                                <button style="padding: 5px 10px; background-color: #007bff; color: white; border: none; cursor: pointer; border-radius: 5px;">
                                    Edit
                                </button>
                            </a>

                            <!-- Delete Product Button -->
                            <a href="product_list.php?delete_id=<?= $row->id ?>" onclick="return confirm('Are you sure you want to delete this product?')">
                                <button style="padding: 5px 10px; background-color: #dc3545; color: white; border: none; cursor: pointer; border-radius: 5px;">
                                    Delete
                                </button>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">No products found</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
