
<?php
 include "connection.php";
 $sql = "SELECT * FROM `Users` where role != 'admin'";
 $result = mysqli_query($conn,$sql);
 $txt="<h3 class='mx-5 mt-5'>Users</h3>";
 $txt.="<table class='table table-success table-striped mt-5 mx-2'><tr><td>Product Id</td><td>Product Name</td><td>Product image</td><td>Product sale Price</td><td>Product list price </td><td>Product category</td><td>Action</td></tr>";
 foreach($result as $row){
    $txt.= '<tr><td>'.$row["user_id"].'</td><td>'.$row["name"].'</td><td>'.$row["email"].'</td><td>'.$row["contact"].'</td><td>'.$row["password"].'</td><td>'.$row["role"].'</td><td><input type="submit" class="btn btn-primary btn-sm" value="Edit"><input type="submit" class="btn btn-danger btn-sm" name="deleteProduct" value="Delete" id='.$row["user_id"].' onclick="Delete(this.id,1);"></td></tr>';
 }
 $txt.="</table>";
 echo $txt;


?>