<?php session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ecommerce
    </title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
 <link rel="stylesheet" href="style.css">
 <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">


</head>
<body>
<?php 
error_reporting(0);
include "header.php" ?>

<main>

<div class="container mt-4">
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div id=color>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="one.jpg" style="height:300px;" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
        <h5 class="text-danger mt-3" style="text-align:center"><strong>FLAT 50% OFF ON TOP BRANDS</strong></h5>
      </div>
      
      <div class="carousel-item" data-bs-interval="2000">
        <img src="two.png"style="height:300px;" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
        <h5 class="text-danger mt-3" style="text-align:center"><strong>FLAT 50% OFF ON TOP BRANDS</strong></h5>
      </div>
      
      <div class="carousel-item">
        <img src="three.jpg" style="height:300px;" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
        <h5 class="text-danger mt-3" style="text-align:center"><strong>FLAT 50% OFF ON TOP BRANDS</strong></h5>
      </div>
    </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Aroma Hub</h1>
        <p class="lead text-muted">Aroma Hub is a e-commerce site which has collection of all latest perfumes for men and women.</p>
        <div class="wrapper">
            <div class="typing-demo">
               Aroma Hub is the world<br> most loving Ecommerce site.
            </div>
        </div>
        <p class="mt-2">
          <a href="login.php" class="btn btn-primary my-2">Login Here</a>
          <a href="register.php" class="btn btn-secondary my-2">Register Here</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-3 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" id="id">
     <?php include "displayproducts.php" ?> 
      </div>
    </div>
  </div>

</main>

<?php include "footer.php";  ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src ="code.js"></script>
   
</body>
</html>