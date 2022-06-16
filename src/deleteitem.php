<?php 
session_start();
	if(isset($_POST['rowtodelete'])){
		$delete=$_POST['rowtodelete'];
		$count=0;
		
		foreach($_SESSION['product_in_cart'] as $key => $value){
			//echo $value['ID'];
			if($value['product_id'] == $delete ){
			break;}
			else $count++;
		}
		array_splice($_SESSION['product_in_cart'],$count,1);
	
    $txt="<table class='table table-success table-striped m-5' style='width:90%;'><thead><tr><th>PRODUCT ID</th><th>PRODUCT NAME</th><th>PRODUCT PRICE</th><th>Quantity</th><th>Action</th></thead></tr>";
    $x=0;
    foreach($_SESSION['product_in_cart'] as $key => $value)
    {
        $txt.= "<tr>";

        $txt.="<td>".$value["product_id"]."</td>";
   
        $txt.="<td>".$value["product_name"]."</td>";

        $txt.="<td>".$value['product_price']."</td>";

        $txt.="<td>".$value['product_quantity']."</td>";
        $x+=($value['product_price']) * $value['product_quantity'];

        $txt.="<td><button type='button' id=".$value["product_id"]." class='btn btn-secondary'>Delete</button></td>";

        $txt.="</tr>";
    }
    $txt.= "</table>";
    $txt.= "<h3 class='m-5'>TOTAL AMOUNT:  <span class='text-primary'> Rs. $x/</span>";
    echo $txt;
}

    ?>

	





