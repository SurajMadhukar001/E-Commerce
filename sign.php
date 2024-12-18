<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="Reg.css">
</head>
</head>
<body class="bg-light">
    <div class="container-fluid">
        <h2 class="text-center my-3">New User Registration Form</h2>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="lg-12 col-xl-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-outline mb-4">
                        <label for="User_Username" class="form-label">Username</label>
                        <input type="text" class="form-control" placeholder="Enter Your Username" name="User_Username" id="User_Username" autocomplete="off" required="required">
                    </div>
                    <div class="form-outline mb-4">
                        <label for="User_Email" class="form-label">Email</label>
                        <input type="text" class="form-control" placeholder="Enter Your Email" name="User_Email" id="User_Email" autocomplete="off" required="required">
                    </div>
                    <div class="form-outline mb-4">
                        <label for="User_Image" class="form-label">Image</label>
                        <input type="File" class="form-control" name="User_Image" id="User_Image" required="required">
                    </div>
                    <div class="form-outline mb-4">
                        <label for="User_Password" class="form-label">Password</label>
                        <input type="Password" class="form-control" placeholder="Enter Your Password" name="User_Password" id="User_Password" autocomplete="off" required="required">
                    </div>
                    <div class="form-outline mb-4">
                        <label for="User_Password" class="form-label">Confirm Password</label>
                        <input type="Password" class="form-control" placeholder="Enter Your Password" name="User_Password" id="User_Password" autocomplete="off" required="required">
                    </div>
                    <div class="form-outline mb-4">
                        <label for="User_Number" class="form-label">Mobile Number</label>
                        <input type="Number" class="form-control" placeholder="Enter Mobile Number" name="User_Number" id="User_Password" autocomplete="off" required="required">
                    </div>
                    <div class="">
                        <label for="CreateUserAccount" class="form-label"></label>
                        <input type="Submit" class="bg-info py-2 px-3 rounded-top" name="User_Number" id="CreateUserAccount" value="Submit">
                        <p>Already Have An Account? <a href="login.php">Login</a></p>
                    </div>

                    
                    
                </form>
            </div>
        </div>

    </div>
</body>
</html>