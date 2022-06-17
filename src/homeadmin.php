<?php 
include "connection.php";
    $sql = "SELECT `product_id`, `product_name`, `product_image`, `product_sale_price`, `product_list_price` FROM `Products` LIMIT 5";
    $sql1 = "SELECT `user_id`, `name`, `email`, `contact`, `password`, `role` FROM `Users` LIMIT 5";
    $sql2 = "SELECT * FROM `Orders` LIMIT 5";
    
    $result = mysqli_query($conn,$sql);
    $result1 = mysqli_query($conn,$sql1);
    $result2 = mysqli_query($conn,$sql2);
        $txt="<h3 class='mx-5 mt-5'>Products</h3>";
        $txt.="<table class='table table-success table-striped mt-5 mx-2'><tr><td>Product Id</td><td>Product Name</td><td>Product sale Price</td><td>Product list price </td></tr>";
        foreach($result as $row){
           $txt.= '<tr><td>'.$row["product_id"].'</td><td>'.$row["product_name"].'</td><td>'.$row["product_sale_price"].'</td><td>'.$row["product_list_price"].'</td></tr>';
        }
        $txt.="</table>";
        $txt.="<h3 class='mt-5 mx-5'>Users</h3>";
        $txt.="<table  class='table table-success table-striped mt-5 mx-2'><tr><td>User Id</td><td>User Name</td><td>Email</td><td>Contact</td><td>Password</td><td>Role</td></tr>";
        foreach($result1 as $row1){
           $txt.= '<tr><td>'.$row1["user_id"].'</td><td>'.$row1["name"].'</td><td>'.$row1["email"].'</td><td>'.$row1["contact"].'</td><td>'.$row1["password"].'</td><td>'.$row1["role"].'</td></tr>';
        }
        $txt.="</table>";

        $txt.="<h3 class='mt-5 mx-5'>Orders</h3>";
        $txt.="<table  class='table table-success table-striped mt-5 mx-2'><tr><td>Order Id</td><td>User Id</td><td>Status</td><td>Total Amount</td><td>Address</td><td>Pincode</td><td>Order Date</td><td>Delivery Date</td></tr>";
        foreach($result2 as $row2){
           $txt.= '<tr><td>'.$row2["order_id"].'</td><td>'.$row2["user_id"].'</td><td>'.$row2["status"].'</td><td>'.$row2["total_amount"].'</td><td>'.$row2["address"].'</td><td>'.$row2["pincode"].'</td><td>'.$row2["order_date"].'</td><td>'.$row2["delivery_date"].'</td></tr>';
        }
        $txt.="</table>";
        echo $txt;
        ?>