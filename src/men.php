<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Women</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
 <link rel="stylesheet" href="style.css">
 <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php 
include "header.php";
     $sql = "SELECT * FROM Products WHERE product_category = 'Male'";
     $result = mysqli_query($conn,$sql);
     $row = mysqli_fetch_assoc($result); ?>
     <div class="container mt-5">
       <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" id="id">
          <?php      foreach($result as $row){

   echo '<div class="col">
         <div class="card shadow-sm">

          <img class="zoom" src="'.$row["product_image"].'"style="height:200px;width:70%;">
          <a href="productpage.php?id='.$row["product_id"].'" > <div class="card-body">
          <p class="card-text"><strong>'.$row["product_name"].'</strong></p>
          <p class="card-text"><del>'.$row["product_list_price"].'</del>&nbsp;&nbsp;Rs.'.$row["product_sale_price"].'</p>
           <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
               
               <a class="btn btn-sm btn-outline-dark " style="color:red" id="purchase" id_dedo="'.$row["product_id"].'" name='.$row["product_name"].' prolp='.$row["product_list_price"].' prosp='.$row["product_sale_price"].'>Add to cart</a>
             
            </div></a>
            <small class="text-muted">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star-half checked"></span>
            </small>
           </div>
          </div>
         </div>
        </div>
       ';

          }
          ?>
       </div>
       </div>

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src ="code.js"></script>
</body>
</html>

