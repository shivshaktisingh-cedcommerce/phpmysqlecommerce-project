<?php 
session_start();
$idtoincrement = $_GET['id'];
foreach($_SESSION["product_in_cart"] as $key=>$value){
    if($value["product_id"]==$idtoincrement){
        $_SESSION["product_in_cart"][$key]["product_quantity"]++;
        break;
    }
}
header("Location:cart.php");


?>
