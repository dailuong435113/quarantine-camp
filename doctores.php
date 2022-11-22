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
         <!-- doctors -->
      <div class="doctors">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                     <h2>What doctors say..</h2>
                  </div>
               </div>
            </div>
            <div class="row d_flex">
               <div class=" col-md-6">
                     <div id="ho_efcet" class="reader text_align_center">
                        <i><img src="images/doctor1.png" alt="#"/></i>
                        <h3>Dr.Golap den</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                        <span><img src="images/do.png" alt="#"/></span>
                     </div>
                  </div>
                          <div class=" col-md-6">
                     <div id="ho_efcet" class="reader text_align_center">
                        <i><img src="images/doctor2.png" alt="#"/></i>
                        <h3>Dr.Golap den</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                        <span><img src="images/do.png" alt="#"/></span>
                     </div>
                  </div>
               </div>
         </div>
      </div>
      <!-- end cases -->
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