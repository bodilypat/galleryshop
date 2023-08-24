<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>Art Gallery Management System | Contact Us Page</title>
     
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
      <!--headder-->
   <?php include_once('includes/header.php');?>
      <div class="inner_page-banner one-img"></div>     
      <div class="using-border py-3">
         <div class="inner_breadcrumb  ml-4">
            <ul class="short_ls">
               <li>
                  <a href="index.php">Home</a>
                  <span>/ /</span>
               </li>
               <li>Contact</li>
            </ul>
         </div>
      </div>
      <!--subscribe-address-->
      <section class="subscribe">
         <div class="container-fluid">
			 <div class="row">           
					<div class="col-lg-12 col-md-12 address-w3l-right text-center">
						<?php
							$qPage=mysqli_query($con,"SELECT * FROM tblpage where PageType='contactus' ");
							$cnt=1;
							while ($data=mysqli_fetch_array($qPage)) {
						?>
						<h4><?php  echo $data['PageTitle'];?></h4>
						   <div class="address-gried ">
							  <span class="far fa-map"></span><p><?php  echo $data['PageDescription'];?><p>                  
						   </div>		   
						   <div class="address-gried mt-3">
							  <span class="fas fa-phone-volume"></span>
									<p> <?php  echo $data['MobileNumber'];?>
							  <br>Time: <?php  echo $data['Timing'];?></p>
						   </div>			   
						   <div class=" address-gried mt-3">
							  <span class="far fa-envelope"></span>
									<p><?php  echo $data['Email'];?>                    
							  </p>
						   </div><?php } ?>
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
         		containerID: 'toTop', // fading element id
         		containerHoverID: 'toTopHover', // fading element hover id
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