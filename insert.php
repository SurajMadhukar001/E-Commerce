<?php
include("db.php");
if(isset($_POST['Insert_Product'])){
    $product_title=$_POST['Product_Title'];
    $product_description=$_POST['Description'];
    $product_keywords=$_POST['Product_Keywords'];
    $product_category=$_POST['Product_Category'];
    $product_price=$_POST['Product_Price'];
    $product_status='true';
    $product_brand=$_POST['Product_Brands'];
    // Acessing The Images
    $product_image1=$_FILES['Product_image1']['name'];
    $product_image2=$_FILES['Product_image2']['name'];
    $product_image3=$_FILES['Product_image3']['name'];
    // Temp Name
    $tmp_image1=$_FILES['Product_image1']['tmp_name'];
    $tmp_image2=$_FILES['Product_image2']['tmp_name'];
    $tmp_image3=$_FILES['Product_image3']['tmp_name'];
    // Now Checking The Conditions
    if($product_title=="" or 
    $product_description=="" or 
    $product_keywords=="" or 
    $product_category=="" or 
    $product_brand=="" or 
    $product_price=="" or 
    $product_image1=="" or 
    $product_image2=="" or 
    $product_image3=="")
    {
    echo "<script>alert('Please Fill All The Fields')</script>";
    }
else {
    move_uploaded_file($tmp_image1,"./Product_Image/$product_image1");
    move_uploaded_file($tmp_image2,"./Product_Image/$product_image2");
    move_uploaded_file($tmp_image3,"./Product_Image/$product_image3"); 
    // Now Inserting The Data
    $insert_products="INSERT INTO `product` 
    (product_id,product_title,
    product_description,product_keywords,
    category_id,brands_id,product_image1,
    product_image2,product_image3,
    product_price,date,stamp) VALUES ('$product_title','$product_description',
    '$product_keywords','$product_category','$product_brand','$product_price',
    '$product_image1','$product_image2','$product_image3',NOW(),'$product_status')";
    $result_query=mysqli_query($connection,$insert_products);
    if($result_query){
        echo "<script>alert('Product Has Been Inserted Successfully')</script>";
    
    

}
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>Document</title>
</head>
<body class="bg-light mt-3">
    <h1 class="text-center">Insert Your Product</h1>
    <form action="" method="post"enctype="multipart/form-data">
        <div class="form-outline mb-4  w-50 m-auto ">
            <label for="Product_Title" class="form-lable">
                Product Title
            </label>
            <input type="text" class=" form-control" placeholder="Enter Product Title" name="Product_Title" id="Product_Title" autocomplete="Off">
        </div>
        <div  class="form-outline mb-4  w-50 m-auto ">
            <label for="Product_Description" class="form-lable">
                Product Description
            </label>
            <input type="text" class=" form-control" placeholder="Enter Product description" name="Description" id="Product_Description" autocomplete="Off">

        </div>
        <div  class="form-outline mb-4  w-50 m-auto ">
            <label for="Product_keyword" class="form-lable">
               Your Product Keywords
            </label>
            <input type="text" class=" form-control" placeholder="Enter Your Products keyword" name="Product_Keywords" id="Product_Keyword" autocomplete="Off">
        </div>
<div class="form-outline mb-4 w-50 m-auto">
    <select name="Product_Category" id="product_categories" class="product_categories form-select">
        <option value="">select a Category</option>
        <?php
        $selectingquery ="SELECT * FROM `category`";
        $result = mysqli_query($connection, $selectingquery);
        while ($row = mysqli_fetch_assoc($result)){
            $category_title=$row['Name'];
            echo "<option value=''>$category_title</option>";
            
        }
        ?>
        <!-- <option value="">PANTS</option>
        <option value="">SHIRT</option>
        <option value="">HUDDIES</option>
        <option value="">COTE</option>
        <option value="">JECKET</option>
        <option value="">T-SHIRT</option> -->
    </select>

</div>
<div class="form-outline mb-4 w-50 m-auto">
    <select name="Product_Brands" id="product_Brand" class="product_categories form-select">
        <option value="">select a Brand</option>
        <?php
        $selectingbrand="SELECT * FROM `iant`";
        $result_brand=mysqli_query($connection,$selectingbrand);
        while($row_brand=mysqli_fetch_assoc($result_brand)){
            $brand_title=$row_brand['Tittle'];
            echo "<option value=''>$brand_title</option>";
        }
        ?>
        <!-- <option value="">ZARA</option>
        <option value="">GUCCI</option>
        <option value="">NIKE</option>
        <option value="">ADDIDAS</option>
        <option value="">LEVIS</option>
        <option value="">DENIM</option> -->
    </select>
</div>
<div class="form-outline mb-4 w-50 m-auto">
<label for="product_image1" class="form-label">Product image1</label>
<input type="file" name="Product_image1" class="form-control" id="Product_image1" required="require">

</div>
<div class="form-outline mb-4 w-50 m-auto">
<label for="product_image2" class="form-label">Product image2</label>
<input type="file" name="Product_image2" class="form-control" id="Product_image2" required="require">

</div>
<div class="form-outline mb-4 w-50 m-auto">
<label for="product_image3" class="form-label">Product image3</label>
<input type="file" name="Product_image3" class="form-control" id="Product_image3" required="require">

</div>
<div class="form-outline mb-4 w-50 m-auto">
    <label for="product_price" class="form-control">Product price</label>
    <input type="text" name="Product_Price" class="form-control" id="product_Price" placeholder="Enter Your Price" autocomplete="off" required="require">
</div>
<div class="form-outline mb-4 w-50 m-auto">
<input type="submit" name="Insert_Product" class="btn btn-info" value="Insert Products">
</div>

</form>
    
</body>
</html>