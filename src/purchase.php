<?php
 session_start();
 
include "connection.php";
if (!isset($_SESSION['product_in_cart'])) {
  $_SESSION['product_in_cart'] = array();
}



if(isset($_POST['proname'])){

    $product=$_POST['proname'];
    $productprice=$_POST['prosp'];
    $product_id=$_POST['pid'];
    $cart_id_user=$_SESSION['userid'];
    $s=1;
    $t=1;
    foreach($_SESSION['product_in_cart'] as $key => $val){   
        if($val['product_name']==$product){
            $s=$_SESSION['product_in_cart'][$key]['product_quantity']++;
            $t=0;

          }
    }
    if($t==1){
        $item=array('cart_id_user'=>$cart_id_user,'product_id'=>$product_id ,'product_name'=>$product,'product_price'=>$productprice,"product_quantity"=>1);
        array_push($_SESSION['product_in_cart'],$item);
       
     } 

       echo count($_SESSION['product_in_cart']);
       exit();

    }

// }
// echo $_POST['id'];
// $txt = $_SERVER['REMOTE_ADDR'];

// $_SESSION['tempid'] = "tempid" . $txt[strlen($txt) - 1];

// if (isset($_POST['id'])) {
//    $proname=$_POST['proname'];
//   // echo "case1";

//   if (!isset($_SESSION['userid'])) {
//     // echo "case2";

//     $txt = $_SERVER['REMOTE_ADDR'];

//     $_SESSION['tempid'] = "tempid" . $txt[strlen($txt) - 1];

//     $check = "select * from cart where p_id='" . $_POST['id'] . "' AND userid='" . $_SESSION['tempid'] . "'";
//     $already = mysqli_query($conn, $check);
//     // print_r($already);
//     if (mysqli_num_rows($already) != 0) {
//       while ($data = mysqli_fetch_assoc($already)) {
//         // echo "case3";
//         if ($data['p_id'] != $_POST['id']) {
//           $q1 = "INSERT INTO cart ( p_id, quantity, userid, product_name, product_sale_price) VALUES (" . $_POST['id'] . ",'1','" . $_SESSION['tempid'] . "'," . $_POST['proname'] . "," . $_POST['prosp'] . ")";
//           $query = mysqli_query($conn, $q1);
//         } else {
//           // echo "case4";
//           $data['quantity'] += 1;
//           $q1 = "UPDATE `cart` SET `quantity`='" . $data['quantity'] . "' WHERE cart_id='" . $data['cart_id'] . "'";
//           $query = mysqli_query($conn, $q1);
//         }
//       }
//     } else {
//       // echo "case31";
//       $q1 = "INSERT INTO cart ( p_id, quantity, userid) VALUES (" . $_POST['id'] . ",'1','" . $_SESSION['tempid'] . "')";
//       $query = mysqli_query($conn, $q1);
//     }
//     $c1 = "select * from cart where userid='" . $_SESSION['tempid'] . "'";

//     $cnt = mysqli_query($conn, $c1);

//     if ($cnt->num_rows > 0) {
//       // echo "case5";

//       echo mysqli_num_rows($cnt);
//     }
//     exit();
//   } 
// }
//   else {
//     // echo "case6";
//     $transfer = "UPDATE cart SET userid='" . $_SESSION['userid'] . "' where userid='" . $_SESSION['tempid'] . "'";
//     mysqli_query($conn, $transfer);
//     $check = "select * from cart where p_id='" . $_POST['id'] . "' AND userid='" . $_SESSION['userid'] . "'";
//     $already = mysqli_query($conn, $check);
//     if (mysqli_num_rows($already) != 0) {
//       while ($data = $already->fetch_assoc()) {
//         // echo "case7";
//         if ($data['p_id'] != $_POST['id']) {
//           $q1 = "INSERT INTO cart ( p_id, quantity, userid) VALUES (" . $_POST['id'] . ",'1','" . $_SESSION['userid'] . "')";;
//           $query = mysqli_query($conn, $q1);
//         } else {
//           // echo "case8";
//           $data['quantity'] += 1;
//           $q1 = "UPDATE `cart` SET `quantity`='" . $data['quantity'] . "' WHERE cart_id='" . $data['cart_id'] . "'";
//           $query = mysqli_query($conn, $q1);
//         }
//       }
//     } else {
//       // echo "case81";
//       $q1 = "INSERT INTO cart ( p_id, quantity, userid) VALUES (" . $_POST['id'] . ",'1','" . $_SESSION['userid'] . "')";
//       $query = mysqli_query($conn, $q1);
//     }


//     // echo "case9";
//     $c1 = "select * from cart where userid='" . $_SESSION['userid'] . "'";
//     $cnt = mysqli_query($conn, $c1);
//     echo mysqli_num_rows($cnt);
//     exit();
//   }

// if (!isset($_POST['id'])) {
//   if (!isset($_SESSION['userid'])) {
//     // echo "case10";
//     $c1 = "select * from cart where userid='" . $_SESSION['tempid'] . "'";

//     $cnt = mysqli_query($conn, $c1);

//     if ($cnt->num_rows > 0) {
//       // echo "case11";
//       echo mysqli_num_rows($cnt);
//     }
//   } else {
//     // echo "case12";
//     $transfer = "UPDATE cart SET userid='" . $_SESSION['userid'] . "' where userid='" . $_SESSION['tempid'] . "'";
//     mysqli_query($conn, $transfer);
//     $c1 = "select * from cart where userid='" . $_SESSION['userid'] . "'";
//     $cnt = mysqli_query($conn, $c1);
//     echo mysqli_num_rows($cnt);
//   }
// }
