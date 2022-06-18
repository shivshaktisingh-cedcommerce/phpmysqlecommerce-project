
<?php
 include "connection.php";
 $sql = "SELECT * FROM `Users` where role != 'admin'";
 $result = mysqli_query($conn,$sql);
 $txt="<h3 class='mx-5 mt-5'>Users</h3>";
 $txt.="<table class='table table-success table-striped mt-5 mx-2'><tr><td>User Id</td><td>User Name</td><td>User email</td><td>User contact</td><td>User passworde </td><td>Role</td><td>Action</td></tr>";
 foreach($result as $row){
    $txt.= '<tr><td>'.$row["user_id"].'</td><td>'.$row["name"].'</td><td>'.$row["email"].'</td><td>'.$row["contact"].'</td><td>'.$row["password"].'</td><td>'.$row["role"].'</td><td><input type="submit" class="btn btn-primary btn-sm" id='.$row["user_id"].' onclick="EditAdmin(this.id);" value="Edit"><input type="submit" class="btn btn-danger btn-sm" name="deleteProduct" value="Delete" id='.$row["user_id"].' onclick="Delete(this.id,1);"></td></tr>';
 }
 $txt.="</table>";
 echo $txt;


?>