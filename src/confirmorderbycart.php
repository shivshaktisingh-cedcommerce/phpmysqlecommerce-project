<?php
session_start();
// include "connection.php";
if(!isset($_SESSION['userid']))
{
  $_SESSION['msg']="You have to login first!";
  header("Location: login.php");
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
<?php include "header.php" ?>

<div id="repeatordertable">
<?php 
 include "connection.php";  ?>
 <div id="productafterdeletion" class="container-fluid">
    <?php 
   
    if(count($_SESSION["product_in_cart"])){
    $txt="<table class='table table-success table-striped m-5 ' style='width:90%;'><thead><tr><th>PRODUCT ID</th><th>PRODUCT NAME</th><th>PRODUCT PRICE</th><th>Quantity</th></thead></tr>";
    $x=0;
    foreach($_SESSION['product_in_cart'] as $key => $value)
    {
        $txt.= "<tr>";

        $txt.="<td>".$value["product_id"]."</td>";
   
        $txt.="<td>".$value["product_name"]."</td>";

        $txt.="<td>".$value['product_price']."</td>";

        $txt.="<td>"  .$value['product_quantity'].  "</td>";
        $x+=($value['product_price']) * $value['product_quantity'];


        $txt.="</tr>";
    }
    $txt.= "</table>";
    $_SESSION['total_amount']=$x;
    echo $txt;
  }
    ?>
</div>
<div class="container mt-5">
 <form class="row g-3" action="ordertable.php" method="POST">
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" name="inputAddress" placeholder="1234 Main St">
  </div>
  
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" name="inputCity">
  </div>

  <div class="col-md-2">
    <label for="inputZip" class="form-label">Pincode</label>
    <input type="text" class="form-control" name="inputZip">
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Total Amount:</label>
    <input type="text" class="form-control text-primary" name="totalAmount"  value="Rs. <?php $x ?>" disabled>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Cash on delivery
      </label>
    </div>
  </div>
  <div class="col-12">
    
    <button type="submit" class="btn btn-primary">Confirm Order</button>

  </div>
</form>
</div>
</body>
</html>