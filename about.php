<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>Art Gallery Management System | About Us Page</title>
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">  
      <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <link rel="stylesheet" href="css/shop.css" type="text/css" />
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
   </head>
<body>
   
    <?php include_once('includes/header.php');?>   
    <div class="inner_page-banner one-img"></div> 
            <div class="using-border py-3">
                     <div class="inner_breadcrumb  ml-4">
                              <ul class="short_ls">
                                    <li>
                                       <a href="index.html">Home</a><span>/ /</span>            
                                    </li>
                                    <li>About</li>
                              </ul>
                     </div>
            </div>  
            <section class="about py-lg-4 py-md-3 py-sm-3 py-3">
            <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <?php
               $qPage=mysqli_query($con,"SELECT * FROM tblpage WHERE PageType='aboutus' ");
               $count=1;
               while ($data=mysqli_fetch_array($qPage)) {
            ?>
               <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3"><?php  echo $data['PageTitle'];?></h3>
               <div class="about-innergrid-agile text-center">
                      <h4>Welcome To Gallery Shop</h4>
                      <p class="mb-3"> <?php  echo $data['PageDescription'];?></p><br><?php } ?>  
                     <div class=" img-toy-w3l-top"></div>            
               </div>
               <div class="about-sub-inner text-center mt-lg-4 mt-3">
               <h4>Gallery Shop</h4>           
               <div class="row">
                  <div class="col-lg-4 col-md-4 abut-gride">
                     <span class="fas fa-truck"></span>
                     <h5>Shipping</h5>
                     <p class="mt-3"> We have a safe and reliable shipping system.</p>                      
                  </div>
                  <div class="col-lg-4 col-md-4 abut-gride">
                     <span class="fas fa-phone-volume"></span>  
                     <h5>Support</h5><p class="mt-3"> You can inquire during working hours.</p>     
                  </div>
                  <div class="col-lg-4 col-md-4 abut-gride">
                     <span class="fas fa-undo"></span>
                     <h5> Return</h5><p class="mt-3">You can return defective or damaged products during delivery.</p>                  
                  </div>
               </div>
            </div>
         </div>
      </section>
   <?php include_once('includes/footer.php');?>   
      <script src='js/jquery-2.2.3.min.js'></script>
      <script src="js/minicart.js"></script>
      <script>
         toys.render();
         toys.cart.on('toys_checkout', function (evt) {
         	var items, len, i;
         	if (this.subtotal() > 0) {
         		items = this.items();
         		for (i = 0, len = items.length; i < len; i++) {}
         	}
         });
      </script>
      <script src="js/move-top.js"></script>
      <script src="js/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         		$('html,body').animate({
         			scrollTop: $(this.hash).offset().top
         		}, 900);
         	});
         });
      </script>
      <script>
         $(document).ready(function () {
         	var defaults = {
         		containerID: 'toTop', 
         		containerHoverID: 'toTopHover', 
         		scrollSpeed: 1200,
         		easingType: 'linear'
         	};
         	$().UItoTop({
         		easingType: 'easeOutQuart'
         	});
         });
      </script>
      <script src="js/bootstrap.min.js"></script>
   </body>
</html>
