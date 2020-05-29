<?php 
include './includes/db.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>E-Commerce Website</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- bootstrap-cdn -->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <!-- style-css -->
      <link rel="stylesheet" href="./style.css">
      <!-- font-awesome -->
      <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>

  <body>
    <!-- welcome portion -->
    <div id="top" class="row conatiner-fluid">
      <div class="col-lg-6 offer">
      <button class="btn btn-primary btn-sm">Welcome</button>
          <a href="checkout.php">4 Items in your cart | Total $40</a>
      </div> 
      <div class="col-lg-6 offer">
        <a href="#"> Registration </a> | <a href="#"> Account </a> | <a href="#"> Go to Cart </a>  | <a href="#"> Login </a> 
      </div> 
    </div>

<!-- navigation--->
  <section id="navigation">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand ml-5 mr-1" href="#">M&M FORCE</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-ellipsis-v"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto ml-5">
          <li class="nav-item">
            <a class="nav-link" href="#">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">SHOP</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">MY ACCOUNT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">SHOPPING CART</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="#">CONTACT US</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-danger" type="submit">Search</button>
        </form>
      </div>
    </nav>
  </section>
    
<!-- slider -->
  <section id="slider">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox" style=" width:100%; height: 30rem !important;">
        <?php
        $slider_sql = "SELECT * FROM slider limit 1";
        $slider_result=mysqli_query($conn,$slider_sql);
        while($slider_row=mysqli_fetch_assoc($slider_result)){
          $slider_name= $slider_row['slide_name'];
          $slider_img= $slider_row['slide_image'];
          echo "<div class='carousel-item active' data-interval='2000' data-pause='hover'>
          <img src='./images/$slider_img' class='d-block w-100'>
          </div>";
        }
        
        $slider_sql = "SELECT * FROM slider limit 1,3";
        $slider_result=mysqli_query($conn,$slider_sql);
        while($slider_row=mysqli_fetch_assoc($slider_result)){
          $slider_name= $slider_row['slide_name'];
          $slider_img= $slider_row['slide_image'];
          echo "<div class='carousel-item' data-interval='2000' data-pause='hover'>
          <img src='./slider-images/$slider_img' class='d-block w-100'>
          </div>";
        }
      ?>
        </div>
        
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>

  <!-- cards-row1 -->
  <section id="cards">
    <div class="row">
      <div class="col-lg-3">
        <div class="card">
          <img src="./admin_area/product_images/product-1.jpeg" class="card-img-top" alt="mobile">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="card">
          <img  src="./admin_area/product_images/product-2.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="card">
          <img  src="./admin_area/product_images/product-3.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="card">
          <img  src="./admin_area/product_images/product-4.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
  </section>

   <!-- cards-row2 -->
   <section id="cards">
    <div class="row">
      <div class="col-lg-3">
        <div class="card">
          <img src="./admin_area/product_images/product-5.jpeg" class="card-img-top" alt="mobile">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="card">
          <img  src="./admin_area/product_images/product-6.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="card">
          <img  src="./admin_area/product_images/product-7.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-outline-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="card">
          <img  src="./admin_area/product_images/product-8.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  </body>
</html>
