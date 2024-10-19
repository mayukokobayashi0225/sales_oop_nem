<?php
    session_start();
    require '../classes/products.php';

    // $product_obj   = new Product;
    // $product       = $product_obj->getProduct();
    // $user = ['first_name' => 'John', 'last_name' => 'Smith', 'username' => 'john', 'photo' => 'NULL'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Add Product</title>
</head>

    <body>
        <nav class="navbar navbar-expand navbar-dark bg-dark" style="margin-bottom: 80;">
            <div class="container">
                <a href="dashboard.php" class="navbar-brand">
                    <h1 class3> Sales</h1>
                </a>
            </div>
            <div class="nabvar-nav">
                <span class="navbar-text"><?= $_SESSION['full_name']?></span>

                <form action="..//actions/logout.php" class="d-flex ms-2">
                    <button type="submit" class="text-danger bg-transparent border-0">Log out</button>
                </form>
            </div>
        </nav>

        <main class="row justify-content-center gx-0">
            <div class="col-4">
                <h2 class="text-center mb-4">Add Product</h2>
                <form action="../actions/add-product.php" method="post" enctype="multipart/form-data">
                    <div class="row justify-content-center mb-3">
                        <div class="mb-3">
                            <label for="product_name" class="form-label">Product Name</label>
                            <input type="text" name="product_name" id="product-name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" name="price" id="price" class="form-control" required>
                        </div>

                        <div class="mb-4">
                            <label for="quantity" class="form-label">quantity</label>
                            <input type="number" name="quantity" id="quantity" class="form-control" maxlength="15" required>
                        </div>
                        
                        <div class="text-end">
                            <a href="dashboard.php" class="btn btn-secondary btn-sm">Cancel</a>
                            <button type="submit" class="btn btn-warning btn-sm px-5">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </main>
    </body>
</html>