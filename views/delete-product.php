<?php
    
    session_start();
    //↑本当はいらないけど、navbarでSESSIONを使いたいから追加している

    //削除した後はオブジェクトを得る必要がないのでrequireは不要、何故ならclassesのproduct.phpに格納されているmethodを使用しないから
    $id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Dalete Product</title>
</head>

<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark" style="margin-bottom: 80px;">
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
        <div class="col-4 text-center">
            <i class="fa-solid fa-triangle-exclamation text-warning display-4 d-block mb-2"></i>
            <h2 class="text-danger mb-5">DELETE PRODUCT</h2>
            <p class="fw-bold">Are you sure you want to delete the Product ?</p>
            <div class="row">
                <div class="col">
                    <a href="dashboard.php" class="btn btn-secondary w-100">Cancel</a>
                </div>
                <div class="col">
                    <form action="../actions/delete-product.php?id=<?=$id?>" method="post">
                        <button type="submit" class="btn btn-outline-danger w-100">Delete</button>
                    </form>
                </div>
            </div>
        </div>

    </main>
</body>
</html>