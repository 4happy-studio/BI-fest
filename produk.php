<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("bikepriexpo.com:3306", "bikepri_user", "exploit9827", "bikepri_produk");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$id = $_GET['id_tenant'];
// Attempt select query execution
$sql = "SELECT * FROM produk WHERE id_tenant ='$id'";
$sql_tenant = "SELECT * FROM tenant WHERE id = '$id'";

 

?>
<!-- COPYRIGHT 4HAPPY STUDIO 2020
Game developer Batam Indonesia
www.4happy-studio.com -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kepri Syahfest 2020</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/LOGO SYAHFEST 2020 200px.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=https://fonts.googleapis.com/css?family=Inconsolata:400,500,600,700|Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
  header {
    position: relative;
    background-color: black;
    height: 100vh;
    min-height: 25rem;
    width: 100%;
    overflow: hidden;
  }
  
  header video {
    position: absolute;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: 0;
    -ms-transform: translateX(-50%) translateY(-50%);
    -moz-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
  }
  
  header .banner {
    position: absolute;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: 0;
    -ms-transform: translateX(-50%) translateY(-50%);
    -moz-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
  }
  

  header .container {
    position: relative;
    z-index: 2;
  }
  
  header .overlay {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: black;
    opacity: 0.5;
    z-index: 1;
  }
  
  @media (pointer: coarse) and (hover: none) {
    
  }
  #section-video video {
     display: block; 
  }
.btn.btn-custom-lg,
.btn.btn-custom-sm,
.btn.btn-custom-xs {
  border-radius: 0;
}
/*Global*/

.btn.btn-square {
  border-radius: 0;
}

.fbg { 
  background-image:url(assets/img/MESJID.png);
	background-position: right; 
	background-repeat: no-repeat; 
  background-size: cover; 
  padding-bottom: 200px;
}
</style>





</head>

<nav class="navbar navbar-light" style="position: relative; background-color: #445552; z-index: 2; height: 20%;">
 
  <a class="navbar-brand mx-auto" href="#">
    <img src="assets/img/bi logo.png" width="200" class="mx-2" alt="">
    <img src="assets/img/LOGO RTF.png" width="100"  class="mx-2" alt="">
  </a>
  
</nav>




<body>
  

  <main id="main">
    <div class="card text-center">

      
    </div>
    <!-- ======= Works Section ======= -->
    <section class="section site-portfolio">

      
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-md-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-up">
          <?php
          if($result_tenant = mysqli_query($link, $sql_tenant)){
            if(mysqli_num_rows($result_tenant) > 0){
              while($row_tenant = mysqli_fetch_array($result_tenant)){
                  echo '<h2><b>'.$row_tenant['name'].'</b></h2>';
                  echo '<p class="mb-0">'.$row_tenant['desc'].'</p>';
              }
              // Free result set
              mysqli_free_result($result);
            }else{
              echo "No records matching your query were found.";
            }
          }else{
            echo "ERROR: Could not able to execute $sql_tenant. " . mysqli_error($link);    
          }
          ?>

            
          </div>
        </div>
        <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
          
          
              
              
              
              <?php
              if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){

            echo '<div class="item 3d col-sm-6 col-md-4 col-lg-4 mb-4">
            <div class="card">
              <a href="#" class="item-wrap fancybox">
                <div class="work-info">
                  <h3></h3>
                  <p>Klik untuk fullscreen foto</p>
                </div>
                <img class="img-fluid" src="'.$row['image'].'">';
            echo '</a>
            <div class="card-body text-center">';
            echo '<h5 class="card-title"><b>'. $row['name'].'</b></h5>';
            echo '<p class="card-text">'. $row['desc'].'</p>';
            //echo '<img class="img-fluid" src="'. $row['image'].'">';
            echo '</div>';
            echo '<div class="card-footer">
            <a href=".$row['urlproduk']" class="btn btn-lg btn-block btn-outline-warning btn-square align-items-center">Beli Disini</a>
          </div>';
          echo '</div>
          </div>';
        }
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);


    
}

// Close connection
mysqli_close($link);

?>
            


          
         
          
        </div>
    </section><!-- End  Works Section -->
  </main><!-- End #main -->

   <!-- Contact-->

<!-- Footer-->

<footer class="bg-light py-5">
    <div class="container"><div class="small text-center text-muted">Informasi : +62813 6400 7996 (WA Only) | Email : rtf.kepri2020@gmail.com 
      | Copyright © 2020 - BANK INDONESIA</div>
    </div>
</footer>


  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>