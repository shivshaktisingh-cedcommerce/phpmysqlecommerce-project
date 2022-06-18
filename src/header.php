<?php 
include "connection.php" ?>
<header>
  
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="index.php" class="navbar-brand d-flex align-items-center">
      <i class="bi bi-shop" style="font-size:16px;"></i>
            <strong class="mx-2">Aroma Hub</strong>
      </a>
      <a href="index.php" class="navbar-brand d-flex align-items-center">
            <strong class="mx-2">Home</strong>
      </a>
      <a href="men.php" class="navbar-brand d-flex align-items-center">
            <strong class="mx-2">Men</strong>
      </a>
      <a href="women.php" class="navbar-brand d-flex align-items-center">
            <strong class="mx-2">Women</strong>
      </a>
      <a href="more.php" class="navbar-brand d-flex align-items-center">
            <strong class="mx-2">More</strong>
      </a>
      <a href="cart.php" class="navbar-brand d-flex align-items-center">
            <strong class="mx-2"><i class="bi bi-cart" style="font-size:18px;"><span class="badge rounded-pill bg-danger" id="quant">0</span></i></strong>
      </a>
      <a href="#" class="navbar-brand d-flex align-items-center mx-2 text-light"> 
      <?php if(isset($_SESSION['name'])){?><i class="bi bi-person"></i> <?php echo $_SESSION['name'];echo '<button class="btn secondary " onclick="window.location.href=\'logout.php\'" id="logout">Logout</button>'; }?>
      
      </a>
      
      
  
  
     
    </div>
  </div>
</header>