<?php session_start(); ?>
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
   <?php include "header.php"; ?>
   <?php include "connection.php";
    $sql = "SELECT `product_id`, `product_name`, `product_image`, `product_sale_price`, `product_list_price` FROM `Products` LIMIT 5";
    $sql1 = "SELECT `user_id`, `name`, `email`, `contact`, `password`, `role` FROM `Users` LIMIT 5";
    $result1 = mysqli_query($conn,$sql1);
    $result = mysqli_query($conn,$sql);
        $txt="<h3 class='mx-5'>Products</h3>";
        $txt.="<table class='table table-success table-striped mt-5 mx-2'><tr><td>Product Id</td><td>Product Name</td><td>Product sale Price</td><td>Product list price </td></tr>";
        foreach($result as $row){
           $txt.= '<tr><td>'.$row["product_id"].'</td><td>'.$row["product_name"].'</td><td>'.$row["product_sale_price"].'</td><td>'.$row["product_list_price"].'</td></tr>';
        }
        $txt.="</table>";
        $txt.="<h3 class='mt-5'>Users</h3>";
        $txt.="<table  class='table table-success table-striped mt-5 mx-2'><tr><td>User Id</td><td>User Name</td><td>Email</td><td>Contact</td><td>Password</td><td>Role</td></tr>";
        foreach($result1 as $row1){
           $txt.= '<tr><td>'.$row1["user_id"].'</td><td>'.$row1["name"].'</td><td>'.$row1["email"].'</td><td>'.$row1["contact"].'</td><td>'.$row1["password"].'</td><td>'.$row1["role"].'</td></tr>';
        }
$txt.="</table>";
echo $txt;
    ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script src ="code.js"></script>
</body>
</html>