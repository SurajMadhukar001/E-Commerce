<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
.logo{
    width: 7%;
    height: 7%;
    
}
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.admin_img{
    width: 100px;
    object-fit: contain;
}


    </style>
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="carrt.jpg.png" alt=""class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Welcome as Guest</a>
                            <!-- now we will design the second child -->
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
        <div class="bg-dark">
            <h3 class="text-center p-2 text-white">Manage Your Admin Details</h3>
            <!-- designing the third child -->
        </div>
        <div class="row">
            <div class="col-md-12 bg-warning d-flex">
                <div>
                    <a href="">
                        <img class="admin_img" src="adminnn.jpg.png" alt="#">
                    </a>
                    <p class="text-black p-2 text-center">Suraj</p>
                </div>
                <div class="button text-center p-3">
                    <button class="btn btn-primary"><a href="" class="nav-link text-white  my-1">Insert Product</a></button>
                    <button class="btn btn-primary"><a href="" class="nav-link text-white  my-1">View Product</a></button>
                    <button class="btn btn-primary"><a href="ad.php?inscate" class="nav-link text-white my-1">Insert Categories</a></button>
                    <button class="btn btn-primary"><a href="" class="nav-link text-white my-1">View Categories</a></button>
                    <button class="btn btn-primary"><a href="ad.php?cate" class="nav-link text-white my-1">Insert Brands</a></button>
                    <button class="btn btn-primary"><a href="" class="nav-link text-white my-1">View Brands</a></button>
                    <button class="btn btn-primary"><a href="" class="nav-link text-white my-1">All Orders</a></button>
                    <button class="btn btn-primary"><a href="" class="nav-link text-white my-1">All Payments</a></button>
                    <button class="btn btn-primary"><a href="" class="nav-link text-white my-1">List Users</a></button>
                    <button class="btn btn-primary"><a href="" class="nav-link text-white my-1">Log Out</a></button>
            
            </div>
        </div>
        <div class="container">
            <?php
            if(isset($_GET['cate'])){
                include 'Cate.php';
            }
            if(isset($_GET['inscate'])){
                include 'Cateins.php';
            }
            ?>
        </div>
    </div>
</body>
</html>