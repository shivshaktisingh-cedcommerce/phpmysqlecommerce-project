<?php 
// session_start();
 include "connection.php";
 if(isset($_POST['submit'])){
     $name=$_POST['name'];
     $email=$_POST['email'];
     $contact=$_POST['contact'];
     $password=$_POST['password'];
     $role = 'user';
     
     $check = "SELECT * FROM Users WHERE email = '$email'";
     
     $select = mysqli_query($conn,$check);
      if(mysqli_num_rows($select) != 0) {
      exit('This username already exists');
      }
     else {
        $query = "INSERT into Users(`name`,`email`,`contact`,`password`,`role`) VALUES('$name','$email','$contact','$password','$role')";
        $result = mysqli_query($conn,$query);
        $_SESSION['name']=$name;
        header("Location:login.php");
     }
}
 
 
   ?>