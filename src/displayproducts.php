<?php 

  //include "connection.php";
 $query = "SELECT * FROM Products ORDER BY product_id";
      $output ="";
     $result = mysqli_query($conn,$query);
     foreach($result as $row){
         $output.= '<div class="col">
                      <div class="card shadow-sm">

                        <img class="zoom" src="'.$row["product_image"].'"style="height:200px;width:70%;">
                           <a href="productpage.php?id='.$row["product_id"].'" > <div class="card-body">
                             <p class="card-text"><strong>'.$row["product_name"].'</strong></p>
                             <p class="card-text"><del>'.$row["product_list_price"].'</del>&nbsp;&nbsp;Rs.'.$row["product_sale_price"].'</p>
                               <div class="d-flex justify-content-between align-items-center">
                                  <div class="btn-group">
                                     
                                     <a class="btn btn-sm btn-outline-secondary" id="purchase" id_dedo="'.$row["product_id"].'" name='.$row["product_name"].' prolp='.$row["product_list_price"].' prosp='.$row["product_sale_price"].'>Add to cart</a>
                                   
                                  </div></a>
                                  <small class="text-muted">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star-half checked"></span>
                                  </small>
                               </div>
                           </div>
                      </div>
                    </div>
                    ';
     }
     echo $output;
    


?>