<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("includes/main.php");

?>
   <!-- body -->
   <body class="main-layout inner_page">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- top -->
      
      <!-- end header -->
      <!-- end banner -->
     <!-- coronata -->
      <div class="coronata">
         <div class="container">
            <div class="row d_flex grid">
               <div class="col-md-7">
                  <div class="coronata_img text_align_center">
                     <figure><img src="images/corona.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-5 oder1">
                  <div class="titlepage text_align_left">
                     <h2>Our News</h2>
                     <p>when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using
                     </p>
                     <a class="read_more" href="coronata.html">About More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end coronata -->
      <!--  footer -->
      <?php

      include("includes/footer.php");
      
      ?>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>