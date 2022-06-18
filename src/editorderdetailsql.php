<?php
session_start();
if(!isset($_SESSION['order'])){
    $_SESSION=array();
}
if(isset($_POST['editorderid'])){
    $editid=$_POST['editorderid'];
}
include "connection.php";
$sql = "SELECT * FROM `Orders` where order_id='$editid'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
array_push($_SESSION['order'],$row['status']);
array_push($_SESSION['order'],$row['total_amount']);
array_push($_SESSION['order'],$row['address']);
array_push($_SESSION['order'],$row['pincode']);
array_push($_SESSION['order'],$row['order_date']);
array_push($_SESSION['order'],$row['delivery_date']);
echo $_SESSION['order'];




?>