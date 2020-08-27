<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("bikepriexpo.com:3306", "bikepri_user", "exploit9827", "bikepri_produk");
$video = "";
 
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
          <div class="m-auto col-md-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-up">

      
          <?php
          if($result_tenant = mysqli_query($link, $sql_tenant)){
            if(mysqli_num_rows($result_tenant) > 0){
              while($row_tenant = mysqli_fetch_array($result_tenant)){
                echo '<div class="iframe-container">
                <div id="player"></div>
              </div>';
                  $video = $row_tenant['vid'];
                  $video = str_replace('https://www.youtube.com/embed/', '', $video);
                  //echo '<iframe width="560" height="315" src="'.$row_tenant['vid'].'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
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
          
            echo '<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="'.$row['image'].'" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="'.$row['image'].'" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="'.$row['image'].'" alt="Third slide">
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


  <script src="assets/js/img_box.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
          // 2. This code loads the IFrame Player API code asynchronously.
 var tag = document.createElement('script');

tag.src = 'https://www.youtube.com/iframe_api';
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
var player;
function onYouTubeIframeAPIReady() {
 player = new YT.Player('player', {
   width: '100%',
   videoId: '<?php echo $video ?>',
   playerVars: { 'autoplay': 1, 'playsinline': 1 },
   events: {
     'onReady': onPlayerReady
   }
 });
}

// 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
  event.target.mute();
 event.target.playVideo();
}

         </script>
  </script>

  

</body>

</html>