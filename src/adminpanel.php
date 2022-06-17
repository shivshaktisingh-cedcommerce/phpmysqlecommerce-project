<?php 
session_start();
if($_SESSION['name']!="shiv"){
    header("Location:index.php");
}

?>

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
        

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h2 class="mt-2 text-primary" style="text-align:center;">DASHBOARD</h2>
    <div class="container mt-5">
        <form method="POST" action="">
        <div class="row">
            <div class="col">
            <input type="submit" class="btn btn-secondary btn-lg" value="HOME" name="home"></button>
            </div>
            <div class="col">
            <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
             Product management
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><input type="submit" class="btn" name="AddProduct" value="ADD New Product"></li>
                <li><input type="submit" class="btn" name="EditProduct" value="Edit Product"></li>
                
            </ul>
            </div>
            </div>
            <div class="col">
            <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
             User management
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><input type="submit" class="btn" name="AddUser" value="ADD New User"></li>
                <li><input type="submit" class="btn" name="EditUser" value="Edit User"></li>
               
            </ul>
            </div>
            </div>
            <div class="col">
            <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
             Order management
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><input type="submit" class="btn" name="PlaceOrder" value="ADD New Order"></li>
                <li><input type="submit" class="btn" name="EditOrder" value="Edit Order"></li>
                
            </ul>
            </div>            </div>
        </div>
        </form>
    </div>
    <?php
    if(isset($_POST['home'])){
        include "homeadmin.php";
    
    }
    if(isset($_POST['EditProduct'])){ 
       include "editproductadmin.php";
    }
    if(isset($_POST['deleteproductid'])){
        include "connection.php";
        $id=$_POST['deleteproductid'];
        $check=$_POST['table'];
        if($check==0){
            $sql = "DELETE FROM `Products` where product_id='$id'";
            $result=mysqli_query($conn,$sql); 
            echo 0;
        }
        if($check==1){
            $sql = "DELETE FROM `Users` where user_id='$id'";
            $result=mysqli_query($conn,$sql); 
            echo 1;
        }
        if($check==2){
            $sql = "DELETE FROM `Orders` where order_id='$id'";
            $result=mysqli_query($conn,$sql); 
            echo 2;
        }
          
    }
    if(isset($_POST['EditUser'])){ 
        include "edituseradmin.php";
     }
     if(isset($_POST['EditOrder'])){ 
        include "editorder.php";
     }
    ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src ="code.js"></script>
   
    
</body>
</html>