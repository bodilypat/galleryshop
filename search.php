<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>Art Gallery Management System | Product Page</title>  
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
      <link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">    
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">    
      <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
   </head>
   <body>
      <!--headder-->
      <?php include_once('includes/header.php');?>
      <!-- banner -->
      <div class="inner_page-banner one-img"></div>    
      <div class="using-border py-3">
         <div class="inner_breadcrumb  ml-4">
            <ul class="short_ls">
               <li>
                  <a href="index.php">Home</a>
                  <span>/ </span>
               </li>
               <li>Products</li>
            </ul>
         </div>
      </div>
      <!--show Now-->  
      <section class="contact py-lg-4">
         <div class="container-fluid py-lg-5">
            <h3 class="title text-center mb-lg-5"><h2 class="head" align="center">
               Search Result Againt keyword <span style="color:red">"<?php echo $_POST['search'];?>"</span></h2>
               <hr />
            <div class="row">
               <div class="side-bar col-lg-3">
                  <div class="search-hotel">
                     <h3 class="agileits-sear-head">Search Here..</h3>
                     <form action="#" method="post">
                        <input type="search" placeholder="Product name..." name="search" required="">
                        <input type="submit" value=" ">
                     </form>
                  </div>
                  <!--preference -->
                  <div class="left-side">
                     <h3 class="agileits-sear-head">Art Type</h3>
                     <ul>
                        <li>
                           <?php
                                $qArtt=mysqli_query($con,"SELECT * FROM tblarttype");
								$cnt=1;
								while ($row=mysqli_fetch_array($qArtt)) {
							?>
                           <a class="nav-link" href="product.php?cid=<?php  echo $row['ID'];?>&&artname=<?php  echo $row['ArtType'];?>"><span class="span"><?php  echo $row['ArtType'];?></span></a> <?php } ?>
                        </li>                     
                     </ul>
                  </div>
                  <!-- // preference -->               
               </div>
               <div class="left-ads-display col-lg-9">
                  <div class="row">
                  <?php
						$searchinput=$_POST['search'];
						$qResult=mysqli_query($con,"SELECT tblarttype.ID as atid,tblarttype.ArtType as typename,
							tblartproduct.ID as apid,tblartproduct.Title,
							tblartproduct.Image,tblartproduct.ArtType 
							FROM tblartproduct join tblarttype on tblarttype.ID=tblartproduct.ArtType  
							WHERE tblartproduct.Title like '%$searchinput%'");
						$count=1;
						$num_rows=mysqli_num_rows($qResult);
						if($num_rows>0)
						{ 
							while ($resultset=mysqli_fetch_array($qResult)) {
					?>
                     <div class="col-lg-4 col-md-6 col-sm-6 product-men women_two">
                        <div class="product-toys-info">
                           <div class="men-pro-item">
                              <div class="men-thumb-item">
                                 <img src="admin/images/<?php echo $resultset['Image'];?>" class="img-thumbnail" alt="">
                                 <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                       <a href="singleProduct.php?pid=<?php  echo $resultset['apid'];?>" class="link-product-add-cart"> View Details</a>
                                    </div>
                                 </div>
                                 <!-- <span class="product-new-top">New</span> -->
                              </div>
                              <div class="item-info-product">
                                 <div class="info-product-price">
                                    <div class="grid_meta">
                                       <div class="product_price">
                                          <h4 >
                                             <a href="singleProduct.php?pid=<?php  echo $resultset['apid'];?>" style="color:#000"><?php  echo $resultset['Title'];?></a>
                                          </h4>
                                          <div class="product_price">
                                             <h4>
                                             <button class="btn btn-success"><a href="artInquiry.php?eid=<?php echo $resultset['apid'];?>" style="color:#fff">Inquiry</a></button></h4>
                                          </div>
                                       </div>                                   
                                    </div>                     
                                 </div>
                                 <div class="clearfix"></div>
                              </div>
                           </div>
                        </div>
                     </div><?php } } else { ?>
						    <h3 align="center" style="color:red;">No Record Found</h3>
                     <?php } ?>           
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- //show Now-->
     <?php include_once('includes/footer.php');?>
		  <script src='js/jquery-2.2.3.min.js'></script>
		  <script src="js/minicart.js"></script>
		  <script src="js/bootstrap.min.js"></script>
   </body>
</html>
