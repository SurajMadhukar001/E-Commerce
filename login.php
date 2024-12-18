<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="lg.css">
</head>
<body>
    <div class="container-fluid my-3">
        <h2 class="text-center">User Login</h2>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-6">
                <form action="" method="post" enctype="multipart/form-data">
                <div class="form-outline mb-4">
                        <label for="User_Username" class="form-label">Username</label>
                        <input type="text" class="form-control" placeholder="Enter Your Username" name="User_Username" id="User_Username" autocomplete="off" required="required">
                    </div>
                    <div class="form-outline mb-4">
                        <label for="User_Password" class="form-label">Password</label>
                        <input type="Password" class="form-control" placeholder="Enter Your Password" name="User_Password" id="User_Password" autocomplete="off" required="required">
                    </div>
                    <div class="">
                        <label for="login_user" class="form-label"></label>
                        <input type="Submit" class="bg-info py-2 px-2 rounded-top" name="login_user" id="login_user" value="Log In">
                        <p>Don't Have An Account? <a href="sign.php">Sign Up</a></p>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
</html>