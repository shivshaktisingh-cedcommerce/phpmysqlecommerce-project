
<?php
 include "connection.php";
 $sql = "SELECT * FROM `Orders`";
 $result = mysqli_query($conn,$sql);
 $txt="<h3 class='mx-5 mt-5'>Orders</h3>";
 $txt.="<table class='table table-success table-striped mt-5 mx-2'><tr><td>Order Id</td><td>User Id</td><td>Status</td><td>Total Amount</td><td>Address </td><td>Pincode</td><td>Order Date</td><td>Delivery Date</td><td>Action</td></tr>";
 foreach($result as $row){
    $txt.= '<tr><td>'.$row["order_id"].'</td><td>'.$row["user_id"].'</td><td>'.$row["status"].'</td><td>'.$row["total_amount"].'</td><td>'.$row["address"].'</td><td>'.$row["pincode"].'</td><td>'.$row["order_date"].'</td><td>'.$row["delivery_date"].'</td><td><input type="submit" id='.$row["order_id"].' class="btn btn-primary btn-sm" onclick="EditAdmin(this.id);" value="Edit"><input type="submit" class="btn btn-danger btn-sm" name="deleteProduct" value="Delete" id='.$row["order_id"].' onclick="Delete(this.id,2);"></td></tr>';
 }
 $txt.="</table>";
 echo $txt;


?>