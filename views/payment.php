<?php
    session_start();
    require '../classes/products.php';

    $product_obj   = new Product;
    $product       = $product_obj->getProduct($_GET['id']);
    $price = $product_obj->buyProduct($_GET['id'], $_POST['quantity']);
    // URL上で選択されたidを使用しているのでこの場合はGETを使用する、quantityはformから送られた値なのでpost
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Payment</title>
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

        <main class="row justify-content-center gx-0">
            <div class="col-4">
                <h2 class="text-center mb-4">PAYMENT</h2>
                <form action="../actions/pay-product.php?id=<?= $product['id'] ?>" method="post" enctype="multipart/form-data">
                    <div class="row justify-content-center mb-3">
                        
                        <div class="mb-3 col-6">
                            <label for="product-name" class="form-label">Product Name</label>
                            <p class="form-control"><?= $product['product_name'] ?></p>
                        </div>

                        <div class="mb-3 col-6">
                            <label for="last-name" class="form-label" >Price</label>
                            <p class="form-control"><?= $product['price'] ?></p>
                        </div>

                        <div class="mb-4 col-6">
                            <input type="hidden" name="original_quantity" value="<?= $product['quantity'] ?>">
                            <label for="quantity" class="form-label">Quantity of Products</label>
                            <p class="form-control"><?= $product['quantity'] ?></p>
                        </div>

                        <div class="mb-4 col-6">
                            <input type="hidden" name="buy_quantity" value="<?=$_POST['quantity']?>">
                            <label for="quantity" class="form-label fw-bold">Quantity of buying</label>
                            <p class="form-control"><?=$_POST['quantity']?></p>
                        </div>

                        <div class="mb-4">
                            <label for="total_price" class="form-label fw-bold">Total Price</label>
                            <input type="text" name="total_price" id="totalprice" class="form-control" value="<?= $price?>" required>
                            <!-- $priceはbuyproduct methodで引用された値を使用している -->
                        </div>

                        <div class="mb-4">
                            <label for="totsl_pprice" class="form-label fw-bold">Payment</label>
                            <input type="number" name="total_price" id="totalprice" class="form-control" value="" placeholder="Please pay for the right amount" min="<?= $price?>" required>
                            <!-- Total Priceで入力された値よりも小さいとアラートが出るように設定したいからMINを設定している。引用する値は同じく＄priceとしている -->
                        </div>

                        <div class="text-end">
                            <a href="dashboard.php" class="btn btn-secondary btn-sm">Cancel</a>
                            <button type="submit" class="btn btn-warning btn-sm px-5">Pay</button>
                        </div>
                    </div>
                </form>
            </div>
        </main>
    </body>
</html>