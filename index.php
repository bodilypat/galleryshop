<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="zxx">
   <head>
     <title>Gallery Shop Management System | Home Page</title>  
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
      <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
      <link href="css/JiSlider.css" rel="stylesheet">
      <link rel="stylesheet" href="css/shop.css" type="text/css" />
	 <link href="css/style.css" rel='stylesheet' type='text/css' media="all">   
   </head> 
   <body>
      <?php include_once('includes/header.php');?>
      <div class="slider text-center">
            <div class="callbacks_container">
               <ul class="rslides" id="slider4">
                  <li>
                     <div class="slider-img one-img">
                        <div class="container">
                           <div class="slider-info ">
                              <h5>The Best Art</h5>
                              <div class="bottom-info">
                                 <p>Art Should be something like a good armchair in which to rest from physical fatigue.</p>
                              </div>
                              <div class="outs_more-buttn">
                                 <a href="about.php">Henri Matisse</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="slider-img two-img">
                        <div class="container">
                           <div class="slider-info ">
                              <h5>Painting<br>For Your Choice</h5>
                              <div class="bottom-info">
                                 <p>I feel that there is nothing more truely artistic than to love people</p>
                              </div>
                              <div class="outs_more-buttn">
                                 <a href="about.php">Vincent van Gogh</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="slider-img three-img">
                        <div class="container">
                           <div class="slider-info">
                              <h5>Best Art And Painting</h5>
                              <div class="bottom-info">
                                 <p>There is nothing like looking. if you want to find something. you  certainly usually fine something. if you look, butit not always quite the some thing you ware after.</p>
                              </div>
                              <div class="outs_more-buttn">
                                 <a href="about.php">J.R.R  Tolkien</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
           
            <div class="clearfix"></div>
         </div>
      <!-- about -->
	  </br>
	  </br>
	  <div id="portfolio">
            <div class="container">
                <div class="row no-gutters">
				<?php
					$qArtt=mysqli_query($con,"SELECT tblarttype.ID as atid,
						   tblarttype.ArtType as typename,
						   tblartproduct.ID as apid,tblartproduct.Title,
						   tblartproduct.Image,tblartproduct.ArtType 
						   FROM tblartproduct join tblarttype on tblarttype.ID=tblartproduct.ArtType");
						   $count=1;
						   while ($row=mysqli_fetch_array($qArtt))
						   {
					?>
                	<div style = "float:left; width:250px; height:250px; margin-left:20px; margin-bottom:20px ">
						<img src = "admin/images/<?php echo $row['Image']?>" height = "250" width = "250"/>	
					</div>
                    <?php } ?>

                </div>
            </div>
        </div>
      <!--new Arrivals -->
      <section class="blog py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
			<h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">New Arrivals</h3>
            <div class="slid-img">
				<ul id="flexiselDemo1">
						<?php
								$qArtt=mysqli_query($con,"SELECT tblarttype.ID as atid,
								   tblarttype.ArtType as typename,
								   tblartproduct.ID as apid,tblartproduct.Title,
								   tblartproduct.Image,tblartproduct.ArtType 
							   FROM tblartproduct join tblarttype on tblarttype.ID=tblartproduct.ArtType");
							   $count=1;
							   while ($row=mysqli_fetch_array($qArtt))
							   {
							?>
								<li>
									 <div class="agileinfo_port_grid">
											<img src="admin/images/<?php echo $row['Image'];?>" width="300" height="300" alt=" " class="img-fluid" />
											<div class="banner-right-icon">
											   <h4 class="pt-3"><?php echo $row['typename'];?></h4>
											</div>
											<div class="outs_more-buttn">
											   <a href="artInquiry.php?eid=<?php echo $row['apid'];?>">Inquiry</a>
											</div>
									 </div>
							   </li>
							   <?php }?>           
					</ul>
				</div>
			</div>
      </section>
      <!--Product-about-->
      <section class="about py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
		 <?php
			$qPage=mysqli_query($con,"SELECT * FROM tblpage WHERE PageType='aboutus' ");
			$count=1;
			while ($row=mysqli_fetch_array($qPage)) 
			{
				?>
					<h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3"><?php  echo $row['PageTitle'];?></h3>
					<div class="about-products-w3layouts">
						 <p><?php  echo $row['PageDescription'];?> </p>
              <?php } ?>
					</div>
			</div>
      </section>   
      <!-- footer -->
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
    
      <script src="js/responsiveslides.min.js"></script>
      <script>
         // use "$(window).load(function() {"
         $(function () {
         	// Slideshow 4
         	$("#slider4").responsiveSlides({
         		auto: true,
         		pager:false,
         		nav:true ,
         		speed: 900,
         		namespace: "callbacks",
         		before: function () {
         			$('.events').append("<li>before event fired.</li>");
         		},
         		after: function () {
         			$('.events').append("<li>after event fired.</li>");
         		}
         	});
         
         });
      </script>
      <script src="js/jquery.flexisel.js"></script>
      <script>
         $(window).load(function() {
         	$("#flexiselDemo1").flexisel({
         		visibleItems: 3,
         		animationSpeed: 3000,
         		autoPlay:true,
         		autoPlaySpeed: 2000,    		
         		pauseOnHover: true,
         		enableResponsiveBreakpoints: true,
         		responsiveBreakpoints: { 
         			portrait: { 
         				changePoint:480,
         				visibleItems: 1
         			}, 
         			landscape: { 
         				changePoint:640,
         				visibleItems:2
         			},
         			tablet: { 
         				changePoint:768,
         				visibleItems: 2
         			}
         		}
         	});
         	
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