<?php session_start();
error_reporting(0);
 if(!isset($_SESSION['name'])){
    header("Location:login.php");
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
 <link rel="stylesheet" href="style.css">
 <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
    
<?php 
 include "header.php";
 include "connection.php";  ?>
 <div id="productafterdeletion" class="container-fluid">
    <?php 
   
    if(count($_SESSION["product_in_cart"])){
    $txt="<table class='table table-success table-striped m-5 ' style='width:90%;'><thead><tr><th>PRODUCT ID</th><th>PRODUCT NAME</th><th>PRODUCT PRICE</th><th>Quantity</th><th>Action</th></thead></tr>";
    $x=0;
    foreach($_SESSION['product_in_cart'] as $key => $value)
    {
        $txt.= "<tr>";

        $txt.="<td>".$value["product_id"]."</td>";
   
        $txt.="<td>".$value["product_name"]."</td>";

        $txt.="<td>".$value['product_price']."</td>";

        $txt.="<td><a href='increasequant.php?id=".$value["product_id"]."'<i class='bi bi-arrow-up' style='background-color:powderblue;'></i></a>      "  .$value['product_quantity'].  "      <a href='decreasequant.php?id=".$value["product_id"]."' <i class='bi bi-arrow-down ' style='background-color:red;'></i></a></td>";
        $x+=($value['product_price']) * $value['product_quantity'];

        $txt.="<td><button type='button' id=".$value["product_id"]." class='btn btn-secondary remove'>Delete</button></td>";

        $txt.="</tr>";
    }
    $txt.= "</table>";
    $txt.= "<h3 class='m-5'>TOTAL AMOUNT:  <span class='text-primary'> Rs. $x/</span>";
    $txt.= '<a href="confirmorder.php" class="btn btn-sm btn-outline-secondary mx-5 mt-5" id="purchase"> Place Your Order</a>';
    echo $txt;
   }
   else{
       echo "<h3 class='text-primary m-5'>Please Add few items in your bag</h3> ";
   }
    ?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script src ="code.js"></script>
</div>
</body>
</html>