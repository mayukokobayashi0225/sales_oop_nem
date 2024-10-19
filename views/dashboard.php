<?php
    session_start();
    // include '..//classes/Users.php';
    // $user_obj = new User;
    // $all_users = $user_obj->getAllusers(); //$all_users is an option

    include '../classes/products.php'; 
    $product_obj = new Product;
    $all_products = $product_obj->displayProducts();
    //foreach($variable as $key => $value)

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="../assets/css/style.css">
        <title>Dashboard</title>
    </head>

    <body>
        <nav class="navbar navbar-expand navbar-dark bg-dark" style="margin-bottom: 80;">
            <div class="container">
                <a href="dashboard.php" class="navbar-brand">
                    <h1 class3>Sales</h1>
                </a>
            </div>
            <div class="nabvar-nav">
                <span class="navbar-text"><?= $_SESSION['full_name']?></span>

                <form action="..//actions/logout.php" class="d-flex ms-2">
                    <button type="submit" class="text-danger bg-transparent border-0">Log out</button>
                </form>
            </div>
        </nav>
        <!-- comment -->
        <div class="row justify-content-center">
            <div class="col-6">
                <h2 class="text-center">Products</h2>
                <a href="../views/add-product.php" class="btn btn-outline-success">Add Product</a>
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($all_products as $product){?>
                            <!-- $user = ['photo' => 'asdasd',] -->
                        <tr>
                            <td><?= $product['id']?></td>
                            <td><?= $product['product_name']?></td>
                            <td><?= $product['price']?></td>
                            <td><?= $product['quantity']?></td>
                            <td>
                                <a href="edit-product.php?id=<?= $product['id'] ?>" class="btn btn-outline-warning" title="Edit">
                                                        <!-- URL parameters idぶらぶら -->
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a>
                                <a href="delete-product.php?id=<?= $product['id'] ?>" class="btn btn-outline-danger" title="Delete">
                                    <i class="fa-regular fa-trash-can"></i>
                                </a>
                                <a href="buy-product.php?id=<?= $product['id'] ?>" class="btn btn-outline-primary" title="Buy">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </a>
                            </td>
                        <?php } ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>