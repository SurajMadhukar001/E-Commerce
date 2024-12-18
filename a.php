<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link rel="stylesheet" href="a.css">
</head>
<body>
    <div class="Container">
    <nav class="navbar navbar-expand-lg bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav> 
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <ul class="navbar-nav me-auto">
    <li class="nav-item">
      <a href="sign.php" class="nav-link">Sign Up As a Guest</a>
    </li>
    <li class="nav-item">
      <a href="login.php" class="nav-link">Login</a>
      <li class="nav-item">
      <a href="#" class="nav-link">Continue With Google</a>
    </li>
    </li>
  </ul>
</nav>
<div class="bg-light">
  <h3 class="text-center">Product In Our Store</h3>
<p class="text-center">!! We Prefer The Best Quality All Over The World !!</p>
</div>
<div class="row">
  <div class="col-md-10">
    <div class="row">
      <div class="col-md-3 mb-2"><div class="card">
  <img src="b1.jpg.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-danger">View More</a>
  </div>
</div></div>
      <div class="col-md-3 mb-2"><div class="card">
  <img src="b4.jpg.avif" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-danger">View More</a>
  </div>
</div></div>
      <div class="col-md-3 mb-2"><div class="card">
  <img src="b7.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-danger">View More</a>
  </div>
</div></div>
      <div class="col-md-3 mb-2"><div class="card">
  <img src="b5.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-danger">View More</a>
  </div>
</div></div>
    </div>
  </div>
  
<div class="col-md-2 bg-secondary p-0">
  <!-- Now We are Creating The Sidebar -->
   <ul class="navbar-nav me-auto text-center">
    <li class="nav-item bg-info">
      <a href="#" class="nav-link"><h4>Delivery Brands</h4></a>
    </li>
<?php
$select_brands="SELECT * FROM `iant`";
$result_brands=mysqli_query($connection,$select_brands);
// $fetch_data=mysqli_fetch_assoc($result_brands);
// echo $fetch_data['Tittle'];
while ($rows_data=mysqli_fetch_assoc($result_brands)){
  $brand_tittle=$rows_data["Tittle"];
  echo "<li class='nav-link text-light'>$brand_tittle</li>";
}

?>
    <li class="nav-item bg-info">
      <a href="#" class="nav-link"><h4>Category</h4></a>
    </li>
<?php
$select_category="SELECT * FROM `category`";
$result_category=mysqli_query($connection,$select_category);

while ($rows_data=mysqli_fetch_assoc($result_category)){
  $category_tittle=$rows_data["Name"];
  echo "<li class='nav-link text-light'>$category_tittle</li>";
}

?>
    <!-- <li class="nav-item">
      <a href="#" class="nav-link">Brand 1</a>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link">Brand 2</a>
    </li> 
    <li class="nav-item">
      <a href="#" class="nav-link">Brand 3</a>
    </li>
    <li class="nav-item" style="background-color: pink;">
      <a href="#" class="nav-link">Brand 4</a>
    </li>
   </ul>
   <ul class="navbar-nav me-auto text-center">
    <li class="nav-item bg-info">
      <a href="#" class="nav-link"><h4>Categories</h4></a>
    </li> -->

    <!-- <li class="nav-item">
      <a href="#" class="nav-link">Category 1</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">Category 2</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">Category 3</a>
    </li>
    <li class="nav-item" style="background-color: pink;">
      <a href="#" class="nav-link">Category 4</a>
    </li> -->
   <!-- </ul> -->

   </div>
    </div>
</body>
</html>