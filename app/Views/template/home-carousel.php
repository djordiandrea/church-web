<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<head>
   <meta charset="utf-8">
   <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
   <link rel="stylesheet" href="css/stylewise.css"> -->
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <title></title>
</head>
<style>
   .my-nav {
      position: absolute;
      z-index: 10;
      width: 100%;
   }

   .carousel-item {
      height: 100vh;
      background: no-repeat center center scroll;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
   }

   body {
      background-color: black;
   }

   nav .navbar-nav li a {
      color: white !important;
   }

   nav .navbar-brand {
      color: white !important;
   }
</style>

<body>

   <header>
      <nav class=" my-nav navbar navbar-light navbar-expand-lg ">
         <div class="container">
            <a class="navbar-brand" href="#">GEREJA KEHIDUPAN</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="nav navbar-nav navbar-right ml-auto">
                  <li id="about"><a class="nav-link" href="<?php echo base_url() ?>/about">Tentang Kami</a></li> <!-- class="active" -->
                  <li id="renungan"><a class="nav-link" href="<?php echo base_url() ?>/renungan">Renungan</a></li>
                  <li id="news" class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Berita & Peristiwa
                        <span class="caret"></span></a>
                     <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?php echo base_url() ?>/news/gereja">
                           <p style="color:black; font-family: 'Times New Roman'; ">Gereja</p>
                        </a>
                        <a class="dropdown-item" href="<?php echo base_url() ?>/news/sektor">
                           <p style="color:black; font-family: 'Times New Roman'; ">Sektor</p>
                        </a>
                     </div>
                  </li>
                  <li id="jemaat"><a class="nav-link" href="<?php echo base_url() ?>/jemaat">Informasi Jemaat</a></li>
                  <li id="schedule" class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Jadwal Ibadah
                        <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo base_url() ?>/schedule/gereja">
                              <p style="color:black; font-family: 'Times New Roman'; ">Gereja</p>
                           </a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url() ?>/schedule/sektor">
                              <p style="color:black; font-family: 'Times New Roman'; ">Sektor</p>
                           </a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url() ?>/schedule/unit">
                              <p style="color:black; font-family: 'Times New Roman'; ">Unit</p>
                           </a></li>
                     </ul>
                  </li>
                  <li class="nav-link" id="contact"><a href="#">Contact Us</a></li>
               </ul>
            </div>
         </div>
      </nav>

      <div id="carouselExampleIndicators" class="carousel slide my-carousel my-carousel" data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url('<?php echo base_url() ?>/images/img1.jpg')">

            </div>
            <div class="carousel-item " style="background-image: url('<?php echo base_url() ?>/images/img2.jpg')">

            </div>
            <div class="carousel-item " style="background-image: url('<?php echo base_url() ?>/images/img3.jpg')">

            </div>
         </div>
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
         </a>
      </div>


   </header>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</html>