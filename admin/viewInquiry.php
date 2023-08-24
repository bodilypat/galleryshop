<?php
    session_start();
    error_reporting(0);
    include('includes/dbconnection.php');
    if (strlen($_SESSION['agmsaid']==0)) {
        header('location:logout.php');
        } else{
          if(isset($_POST['submit']))
          {    
             $qid=$_GET['viewid'];
             $remark=$_POST['remark'];
             $status='Answer';
     
             $qEnquiry=mysqli_query($con, "UPDATE  tblenquiry SET AdminRemark='$remark',Status='$status' where ID='$qid'");
             if ($qEnquiry) {
                      echo '<script>alert("Remarks has been updated")</script>';
              }
              else
                  {
                      echo '<script>alert("Something Went Wrong. Please try again")</script>';
                  }
          } 

?>
<!DOCTYPE html>
<html lang="en">
<head>
	  <link rel="shortcut icon" href="img/favicon.png">
	  <title>View Enquiry | Gallery Shop Management System</title>
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
								<h3 class="page-header"><i class="fa fa-table"></i>View Inquiry</h3>
								<ol class="breadcrumb">
								  <li><i class="fa fa-home"></i><a href="dashboard.php">Home</a></li>
								  <li><i class="fa fa-table"></i>Inquiry</li>
								  <li><i class="fa fa-th-list"></i>View Inquiry</li>
								</ol>
						</div>
				</div>
					<!-- page start-->
				<div class="row">
					<div class="col-sm-12">
						<section class="panel">
							<header class="panel-heading"> View Inquiry Details </header>                           
										  <?php
											  $id=$_GET['viewid'];
											  $qPro=mysqli_query($con,"SELECT tblartproduct.*,tblenquiry.* FROM tblenquiry 
																	  JOIN tblartproduct ON tblartproduct.ID=tblenquiry.Artpdid 
																	  WHERE tblenquiry.ID='$cid'");
											  $count=1;
											  while ($row=mysqli_fetch_array($qPro)) {
										   ?>
									<table border="1" class="table table-bordered mg-b-0">
										<tr>
											  <th>Inquiry Number</th>
											  <td colspan="3"><?php  echo $row['EnquiryNumber'];?></td>
										</tr> 
										<tr>
											  <th>Full Name</th>
											  <td><?php  echo $row['FullName'];?></td>                          
											  <th>Art Name</th>
											  <td><?php  echo $row['Title'];?><br />
												  <a href="edit-art-product-detail.php?editid=<?php echo $row['Artpdid'];?>"  target="_blank">View Details</a>
											  </td>
										</tr>  
										<tr>
											  <th>Art Reference Number</th>
											  <td><?php  echo $row['RefNum'];?></td>
											  <th>Email</th>
											  <td><?php  echo $row['Email'];?></td>
									   </tr>
										<tr>  
											  <th>MobileNumber</th>
											  <td><?php  echo $row['MobileNumber'];?></td>                                
											  <th>Inquiry Date</th>
											  <td><?php  echo $row['EnquiryDate'];?></td>
										</tr>
										<tr>
											  <th>Message</th>
											  <td><?php  echo $row['Message'];?></td>      
											  <th>Status</th>
											  <td> <?php  
												  if($row['Status']=="")
												  {
													echo "Unanswer Enquiry";
												  }
												  if($row['Status']=="Answer")
												  {
													echo "Answer Enquiry";
												  }
													  ;?></td>
												  </tr>
										  <?php if($row['Status']==""){ ?>
										  <form name="submit" method="post"> 
												<tr>
													  <th>Remark :</th>
													  <td>
														  <textarea name="remark" placeholder="" rows="5" cols="14" 
														   class="form-control wd-450" required="true"></textarea>
													  </td>
												</tr>
												<tr align="center">
													  <td colspan="2">
															<button type="submit" name="submit" class="btn btn-primary btn-sm">
																	<i class="fa fa-dot-circle-o">
																	</i> Update
															</button>
													  </td>
												</tr>
										  </form>
										  <?php } else { ?>
												<tr>
												  <th>Remark</th>
												  <td colspan="3"><?php echo $row['AdminRemark']; ?></td>
												</tr>
												<tr>
													  <th>Remark date</th>
													  <td colspan="3"> <?php echo $row['AdminRemarkdate']; ?>  </td></tr>
												<?php } ?>
									  <?php } ?>
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
