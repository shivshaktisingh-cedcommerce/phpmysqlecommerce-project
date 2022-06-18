<?php  
session_start();
include "connection.php";
if(count($_SESSION["product_in_cart"])){

    
        $quantity=$value['product_quantity'];
        $productid=(int)$value['product_id'];
        $userid=(int)$_SESSION['userid'];
        $status="Pending";
        $address=$_POST['inputAddress'];
        $pincode=$_POST['inputZip'];
        $amount=(string)$_SESSION['total_amount']; 
        // var_dump($userid);
        // var_dump($amount);
        // echo $userid;
        // echo "<br>";
        // echo $address;
        // echo "<br>";
        // echo $pincode;
        // echo "<br>";
        // echo $amount;
       
        $query1="INSERT INTO `Orders`(`user_id`, `status`, `total_amount`, `address`, `pincode`, `order_date`) VALUES ('$userid','$status','$amount','$address','$pincode',NOW());";
        $result = mysqli_query($conn,$query1);
       
       
        $check="SELECT order_id FROM Orders ORDER BY order_id DESC LIMIT 1";
        $result1 = mysqli_query($conn,$check);
        $row = mysqli_fetch_assoc($result1);
        $_SESSION['order_id']=$row['order_id'];
        $order_id=  $_SESSION['order_id'];
       
        foreach($_SESSION['product_in_cart'] as $key => $value){
            $product_id = $value['product_id'];
            $product_quantity = $value['product_quantity'];
            $query2="INSERT INTO `Order_items`(`order_id`, `product_id`, `quantity`) VALUES ('$order_id','$product_id','$product_quantity')";
            $result3 = mysqli_query($conn,$query2);
        }
}
array_splice($_SESSION['product_in_cart'],0,count($_SESSION['product_in_cart']));
header("Location:thankyou.php");


?>