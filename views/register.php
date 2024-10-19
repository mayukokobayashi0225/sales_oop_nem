<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Register</title>
</head>

<body class="bg-light">
     <div style="height:100vh">
        <div class="row h-100 m-0">
            <div class="col h-100">
                <div class="card w-25 mx-auto my-auto">
                <div class="card-header">
                    <h1 class="text-center">REGISTER</h1>
                </div>
                <div class="card-body">
                    <form action="../actions/register.php" method="post">
                        <div class="mb-3">
                            <lael for="first_name" class="form-label">Frist Name</lael>
                            <input type="text" name="first_name" class="form-control" require autofocus>
                        </div>
                        <div class="mb-3">
                            <lael for="last_name" class="form-label">Last Name</lael>
                            <input type="text" name="last_name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <lael for="username" class="form-label fw-bold">Username</lael>
                            <input type="text" name="username" id= "username" class="form-control fw-bold"  maxlength="15" required>
                        </div>
                        <div class="mb-5">
                            <lael for="password" class="form-label fw-bold">Password</lael>
                            <input type="password" name="password" id= "password" class="form-control"  minlength="8" aria-describedby="password-info" required>
                                <div class="form-text" id="password-info">
                                    Password must be at least 8 characters long.
                                </div>
                        </div>
                        <button type="submit" class="btn btn-success w-100">Register</button>
                    </form>
                </div>
                </div>
                
            </div>
        </div>
     </div>   
</body>
</html>
