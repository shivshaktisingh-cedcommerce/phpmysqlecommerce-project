<?php session_start();  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
<?php
include "header.php"; 

// include "connection.php";
if(isset($_GET['id'])){
    $product_id = $_GET['id'];
    $check = "SELECT * FROM Products WHERE product_id = '$product_id'";
    $result = mysqli_query($conn,$check);
    $txt ="";
    foreach($result as $row){
        $txt.="<div style='display:flex'>";
        $txt.="<div>";
        $txt.='<img class="mx-5 mt-5"src="'.$row["product_image"].'"style="height:300px;width:auto;">';
        $txt.="</div>";
        $txt.="<div>";
        $txt.= '<h2 class="text-dark mx-5 mt-5">Product Id:'.$row["product_id"].'</h2>';
        $txt.='<h3 class="text-primary mx-5">Product Name:'.$row["product_name"].'</h3>';
        $txt.='<h3 class="text-primary mx-5">Product sale price:'.$row["product_sale_price"].'</h3>';
        $txt.='<h3 class="text-primary mx-5">Product list price'.$row["product_list_price"].'</h3>';
        $txt.= '<a href="confirmorder.php" class="btn btn-sm btn-outline-secondary mx-5 mt-5" id="purchase"> Place Your Order</a>';
        $txt.= '<a href="index.php" class="btn btn-sm btn-outline-secondary mt-5">  Go back to home page</a>';
        $txt.="</div>";
        $txt.="</div>";
        }
        echo $txt;

}
?>    
</body>
</html>
