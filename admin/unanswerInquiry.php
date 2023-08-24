<?php
	session_start();
	error_reporting(0);
	include('includes/dbconnection.php');
	if (strlen($_SESSION['agmsaid']==0)) {
	  header('location:logout.php');
	  } else{
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Unanswer Inquiry | Shop Gallery Management System</title>
	<link href="css/bootstrap.min.css" rel="stylesheet"> 
	<link href="css/bootstrap-theme.css" rel="stylesheet">
	<link href="css/elegant-icons-style.css" rel="stylesheet" />
	<link href="css/font-awesome.min.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet">
	<link href="css/style-responsive.css" rel="stylesheet" />
</head>

<body>
  
  <section id="container" class="">
		<?php include_once('includes/header.php');?>
		<?php include_once('includes/sidebar.php');?>
		<!--main content start-->
		<section id="main-content">
			<section class="wrapper">
				<div class="row">
					  <div class="col-lg-12">
							<h3 class="page-header"><i class="fa fa-table"></i> Unanswer Inquiry</h3>
							<ol class="breadcrumb">
							  <li><i class="fa fa-home"></i><a href="dashboard.php">Home</a></li>
							  <li><i class="fa fa-table"></i>Inquiry</li>
							  <li><i class="fa fa-th-list"></i>Unanswer Inquiry</li>
							</ol>
					  </div>
				</div>
				<!-- page start-->
				<div class="row">
					  <div class="col-sm-12">
							<section class="panel">
								  <header class="panel-heading">
									Unanswer Inquiry
								  </header>
								  <table class="table">
										<thead>
											<tr>
												<tr>
													<th>S.NO</th>                     
													<th>Inquiry Number</th>
													<th>Full Name</th>
													<th>Mobile Number</th>
													<th>Inquiry Date </th>               
													<th>Action</th>
												</tr>
											</tr>
										</thead>
									   <?php
											$ret=mysqli_query($con,"select *from  tblenquiry where (Status='' || Status is null)");
											$cnt=1;
											while ($row=mysqli_fetch_array($ret)) {
										?>            
									<tr>
										  <td><?php echo $cnt;?></td>                
										  <td><?php  echo $row['EnquiryNumber'];?></td>
										  <td><?php  echo $row['FullName'];?></td>
										  <td><?php  echo $row['MobileNumber'];?></td>
										  <td><?php  echo $row['EnquiryDate'];?></td>				  
										  <td><a href="view-enquiry-detail.php?viewid=<?php echo $row['ID'];?>" class="btn btn-success">View Details</a></td>
									</tr>
									<?php 
										$cnt=$cnt+1;
									}?>
								  </table>
							</section>
					  </div>     
				</div>       
				<!-- page end-->
			</section>
		</section>
		<!--main content end-->
		<?php include_once('includes/footer.php');?>
	</section>	
	  <script src="js/jquery.js"></script>
	  <script src="js/bootstrap.min.js"></script>
	  <script src="js/jquery.scrollTo.min.js"></script>
	  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
	  <script src="js/scripts.js"></script>
</body>
</html>
<?php }  ?>
