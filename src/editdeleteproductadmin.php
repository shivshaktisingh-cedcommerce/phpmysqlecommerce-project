
<?php
 include "connection.php";
 $sql5 = "SELECT * FROM `Products`";
 $result = mysqli_query($conn,$sql5);
 $txt="<h3 class='mx-5 mt-5'>Products</h3>";
 $txt.="<table class='table table-success table-striped mt-5 mx-2'><tr><td>Product Id</td><td>Product Name</td><td>Product image</td><td>Product sale Price</td><td>Product list price </td><td>Product category</td><td>Action</td></tr>";
 foreach($result as $row){
    $txt.= '<tr><td>'.$row["product_id"].'</td><td>'.$row["product_name"].'</td><td>'.$row["product_image"].'</td><td>'.$row["product_sale_price"].'</td><td>'.$row["product_list_price"].'</td><td>'.$row["product_category"].'</td><td><input type="submit" class="btn btn-primary btn-sm" value="Edit"><input type="submit" class="btn btn-danger btn-sm" name="deleteProduct" value="Delete" id='.$row["product_id"].' onclick="Delete(this.id,0);"></td></tr>';
 }
 $txt.="</table>";
 echo $txt;


?>