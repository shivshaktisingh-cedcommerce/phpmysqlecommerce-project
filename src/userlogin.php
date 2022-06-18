<?php 

 session_start();
 include "connection.php";
 if(isset($_POST['userloginemail'])){
     $password=$_POST['userloginpassword'];
     $email=$_POST['userloginemail'];
     $sql = "SELECT * FROM Users WHERE email = '$email' and password = '$password'";
     $result = mysqli_query($conn,$sql);
     $count = mysqli_num_rows($result);
     $row = mysqli_fetch_assoc($result);
      if($count == 1) {
               
           $_SESSION['name']= $row['name'];
           //echo $_SESSION['name'];
           $_SESSION['userid']= $row['user_id'];
           if($row['role']=='admin'){
            header("Location:adminpanel.php");
           }
           else{
              
              
               header("Location:index.php");

           }
           
          
      }
      else{
          header("Location:login.php");
      }
     
}

 
 
 
   ?>