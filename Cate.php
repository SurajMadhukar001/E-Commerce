<?php 
include("db.php");
if(isset($_POST['insert_cate'])){
  $category_tittle=$_POST['cate'];
//   $insert_query="INSERT INTO `iant` (Tittle) VALUES ('$category_tittle')";
//   $result=mysqli_query($connection,$insert_query);
//   if($result){
//     echo "<script>alert('Category Inserted Successfully')</script>";
// }
$selectquery="SELECT * FROM `iant` WHERE Tittle='$category_tittle'";
$result_select=mysqli_query($connection,$selectquery);
$number=mysqli_num_rows($result_select);
if($number>0){
echo "This Category Already Exists";
}
else {
  $insert_query="INSERT INTO `iant` (Tittle) VALUES ('$category_tittle')";
  $result=mysqli_query($connection,$insert_query);
  if ($result){
  echo "Category Has Been Inserted Successfully";
}
}
}

?>
<h2 class="text-center">Insert Brands</h2>
<form action="" class ="mb-2"method="post">
<div class="input-group mb-5">
  <div class="input-group mb-2 w-90 p-2">
  <span class="input-group-text bg-info" id="basic-addon1">
    <i class="fa-solid fa-receipt"></i>
  </span>
  <input type="text" name="cate" class="form-control" placeholder="Insert The Product" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3 w-10">
  <!-- <span class="input-group-text" id="basic-addon1">
    <i class="fa-solid fa-receipt"></i>
  </span> -->
  <input type="submit" value="Insert" class="form-control bg-secondary" name="insert_cate" placeholder="Insert The Product" aria-label="Username" aria-describedby="basic-addon1">
</div>
</form>