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
    
    <!-- cases -->
      <div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                     <h2>Take Action</h2>
                     <p>making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful</p>
                  </div>
               </div>
            </div>
            <div class="row d_flex">
               <div class=" col-md-4">
                  <div class="latest text_align_center">
                     <figure><img src="images/cases1.png" alt="#"/></figure>
                     <div class="nostrud">
                        <h3>Cases 01</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                     </div>
                  </div>
               </div>
               <div class=" col-md-4">
                  <div class="latest text_align_center">
                     <figure><img src="images/cases2.png" alt="#"/></figure>
                     <div class="nostrud">
                        <h3>Cases 02</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                     </div>
                  </div>
               </div>
               <div class=" col-md-4">
                  <div class="latest text_align_center">
                     <figure><img src="images/cases3.png" alt="#"/></figure>
                     <div class="nostrud">
                        <h3>Cases 03</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end cases -->
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