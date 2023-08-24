 <?php
	session_start();
	error_reporting(0);
	include('includes/dbconnection.php');
	if (strlen($_SESSION['agmsaid']==0)) 
	{
	  header('location:logout.php');
	} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  
  <title>Gallery Shop Management - Admin Dashboard</title>

  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="css/fullcalendar.css" rel="stylesheet" />
  <link href="css/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="css/owl.carousel.css" rel="stylesheet"  type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <link href="css/widgets.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
 
</head>

<body>
	 
	<section id="container" class="">
		<?php include_once('includes/header.php');?>						
		<?php include_once('includes/sidebar.php');?>			
		<section id="main-content">
			<section class="wrapper">
						<!--overview start-->
				<div class="row">
					<div class="col-lg-12">
						<h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
							<ol class="breadcrumb">
								<li><i class="fa fa-home"></i><a href="dashboard.php">Home</a></li>
							    <li><i class="fa fa-laptop"></i>Dashboard</li>
							</ol>
			    	</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="info-box green-bg">
					        <?php $qArtist=mysqli_query($con,"SELECT * FROM tblartist");
								  $artNum=mysqli_num_rows($qArtist);
							  ?>
									<i class="fa fa-user"></i>
							   		<div class="count"><?php echo $artNum;?></div>
									<div class="title"> 
										<a class="dropdown-item" href="handleArtist.php">Total Artist</a>
									</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="info-box brown-bg">
							<?php $qUnq=mysqli_query($con,"SELECT * FROM tblenquiry WHERE Status='' || Status is null");
								  $unqNum=mysqli_num_rows($qUnq);
								?>
									<i class="fa fa-file"></i>
									<div class="count"><?php echo $enqNum;?></div>
									<div class="title"> 
										<a class="dropdown-item" href="unanswerInquiry.php">Total Unanswer Enquiry</a>
									</div>
						</div>
					</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="info-box brown-bg">
					    		 <?php $qInq=mysqli_query($con,"SELECT * FROM tblenquiry WHERE Status='Answer'");
								       $inqNum=mysqli_num_rows($qInq);
					    	     ?>
										<i class="fa fa-file"></i>
										<div class="count"><?php echo $inqNum;?></div>
										<div class="title"> 
											<a class="dropdown-item" href="answerInquiry.php">Total Answer Enquiry</a>
										</div>
							</div>
						</div>					    					       
					</div>
					<div class="row">
						 <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="info-box dark-bg">
								<?php $qAtt=mysqli_query($con,"SELECT * FROM tblarttype");
									  $attNum=mysqli_num_rows($qAtt);
								?>
									<i class="fa fa-file"></i>
										<div class="count"><?php echo $attNum;?></div>
										<div class="title"> 
											<a class="dropdown-item" href="handleArttype.php">Total Art Type</a>
										</div>
							</div>							
					    </div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						     <div class="info-box brown-bg">
						    	 <?php $qArtm=mysqli_query($con,"SELECT * FROM tblartmedium");
									   $artmNum=mysqli_num_rows($qArtm);
								 ?>
								 <i class="fa fa-file"></i>
								 <div class="count"><?php echo $artmNum;?></div>
								 <div class="title"> 
						    		  <a class="dropdown-item" href="handleArtMedium.php">Total Art Medium</a>
									 </div>
								</div>							
							</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="info-box dark-bg">
								 <?php $qProd=mysqli_query($con,"SELECT * FROM tblartproduct");
							    	   $prodNum=mysqli_num_rows($qProd);
							 	 ?> 
								    <i class="fa fa-file"></i>
								    <div class="count"><?php echo $prodNum;?></div>
							        <div class="title"> 
										<a class="dropdown-item" href="handleProduct.php">Total Art Product</a>
									</div>
							</div>								
						</div>						       
					</div>											
				<?php include_once('includes/footer.php');?>
	 		</section>		 
		</section>
			<!--main content end-->
   </section>
	  
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/jquery-ui-1.9.2.custom.min.js" type="text/javascript" ></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="js/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/fullcalendar.min.js"></script>
    <script src="assets/fullcalendar.js"></script>
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <script src="js/jquery.customSelect.min.js"></script>
    <script src="js/Chart.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
