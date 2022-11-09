<!-- <div class="container">
  <h3>Home</h3>
  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis minima officia accusantium, 
   vero quisquam optio! Totam unde sit nobis qui. Dignissimos placeat dolorem blanditiis numquam? 
   Iusto officiis fugiat aspernatur rerum.</p>
</div> -->

<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="<?php echo base_url()?>/images/pic1.jpg" alt="Chania" width="100%" height="900">
        <div class="carousel-caption">
          <h3>Pic 1</h3>
          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
        </div>
      </div>

      <div class="item">
        <img src="<?php echo base_url()?>/images/pic2.jpg" alt="Chania" width="100%" height="900">
        <div class="carousel-caption">
          <h3>Pic 2</h3>
          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="<?php echo base_url()?>/images/pic3.jpg" alt="Flower" width="100%" height="900">
        <div class="carousel-caption">
          <h3>Pic 3</h3>
          <p>Beautiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>