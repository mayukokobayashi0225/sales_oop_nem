<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>LOGIN</title>
</head>

<body class="bg-light">
    <div style="height: 100vh">
        <div class="row h-100 m-0">
            <div class="card w-25 mx-auto my-auto">
                <div class="card-header bg-white border-0 py-3">
                    <h1 class="text-center">LOGIN</h1>
                </div>
                <div class="card-body">
                    <form action="../actions/login.php" method="post">
                        <input type="text"name="username" placeholder="USERNAME" class="form-control mb-2">
                        <input type="password"name="password" placeholder="PASSWORD" class="form-control mb-5">
                       <button type="submit" class="btn btn-primary w-100">Log In</button>
                    </form>
                    <p class="text-center mt-3 small"><a href="register.php">Create Account</a></p>
                </div>
            </div>
        </div>
    </div>
    


</body>

</html>