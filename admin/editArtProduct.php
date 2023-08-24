<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['agmsaid']==0)) {
	  header('location:logout.php');
	  }
	  else{

		if(isset($_POST['submit']))
		  {
		   
			$proTitle=$_POST['title'];
			$proDimension=$_POST['dimension'];
			$proOrientation=$_POST['orientation'];
			$proSize=$_POST['size'];
			$proArtist=$_POST['artist'];
			$proArttype=$_POST['arttype'];
			$proArtmed=$_POST['artmed'];
			$proSprice=$_POST['sprice'];
			$prodDescription=$_POST['description'];
			$eid=$_GET['editid'];

			$editPro=mysqli_query($con, "UPDATE tblartproduct SET Title='$title',
								Dimension='$proDimension',
								Orientation='$proOrientation',
								Size='$proSize',
								Artist='$proArtist',
								ArtType='$proArttype',
								ArtMedium='$proArtmed',
								SellingPricing='$proSprice',
								Description='$proDescription' 
								WHERE ID='$eid'");
			if ($editPro) {
		  
			echo "<script>alert('Art product has been updated.');</script>";
		  }
		  else
			{
			  echo "<script>alert('Something Went Wrong. Please try again.');</script>";
			}
		  }
 ?>
 
<!DOCTYPE html>
<html lang="en">

<head>
  
  <title>Add Art Product | Gallery Shop Management System</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/daterangepicker.css" rel="stylesheet" />
  <link href="css/bootstrap-datepicker.css" rel="stylesheet" />
  <link href="css/bootstrap-colorpicker.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
</head>
<body>
  <section id="container" class="">
    <?php include_once('includes/header.php');?>
    <?php include_once('includes/sidebar.php');?>
    <!--main content start-->
    <section id="main-content" style="color:#000">
        <section class="wrapper">
			<div class="row">
				  <div class="col-lg-12">
						<h3 class="page-header"><i class="fa fa-file-text-o"></i>Add Art Product Detail</h3>
						<ol class="breadcrumb">
						    <li><i class="fa fa-home"></i><a href="dashboard.php">Home</a></li>
						    <li><i class="icon_document_alt"></i>Art Product</li>
						    <li><i class="fa fa-file-text-o"></i>Art Product Detail</li>
						</ol>
				  </div>
			</div>
            <div class="row">      
                <form class="form-horizontal " method="post" action="" enctype="multipart/form-data">
				<?php
					$cid=$_GET['editid'];
					$query=mysqli_query($con,"SELECT tblarttype.ID as atid,
												tblarttype.ArtType as typename,
												tblartmedium.ID as amid,
												tblartmedium.ArtMedium as amname,
												tblartproduct.ID as apid,tblartist.ID as arid,
												tblartist.Name,tblartproduct.Title,
												tblartproduct.Dimension,
												tblartproduct.Orientation,
												tblartproduct.Size,
												tblartproduct.Artist,
												tblartproduct.ArtType,
												tblartproduct.ArtMedium,
												tblartproduct.SellingPricing,
												tblartproduct.Description,
												tblartproduct.Image,
												tblartproduct.RefNum,
												tblartproduct.ArtType 
											FROM tblartproduct join tblarttype on tblarttype.ID=tblartproduct.ArtType join tblartmedium on tblartmedium.ID=tblartproduct.ArtMedium join tblartist on tblartist.ID=tblartproduct.Artist 
											WHERE tblartproduct.ID='$cid'");
					$count=1;
					while ($infoset=mysqli_fetch_array($query)) 
					{
				?>
						<div class="col-lg-6">
							<section class="panel">
								<header class="panel-heading">Update Art Product Detail</header>
								<div class="panel-body">
									  <div class="form-group">
											<label class="col-sm-2 control-label">Title</label>
											<div class="col-sm-10">
												<input class="form-control" id="title" name="title"  type="text" required="true" value="<?php  echo $infoset['Title'];?>" />
											</div>
									  </div>								  
									  <div class="form-group">
											<label class="col-sm-2 control-label">Featured Image</label>
											<div class="col-sm-10">
												 <img src="images/<?php echo $infoset['Image'];?>" width="200" height="150" value="<?php  echo $infoset['Image'];?>">
												 <a href="changeimage.php?editid=<?php echo $infoset['apid'];?>"> &nbsp; Edit Image</a>
											</div>
									  </div>
									  <div class="form-group">
											<label class="col-sm-2 control-label">Dimension</label>
											<div class="col-sm-10">
												<input class="form-control" id="dimension" name="dimension"  type="text" required="true" value="<?php  echo $infoset['Dimension'];?>">
											</div>
									  </div>
								</div>						
							</section>
						</div>				
						<div class="col-lg-6">
							 <section class="panel">
									 <div class="panel-body">
											<div class="form-group">
												<label class="col-sm-2 control-label">Orientation</label>
												<div class="col-sm-10">
													<select class="form-control" id="orientation" name="orientation"  required="true">
															<option value="<?php  echo $infoset['Orientation'];?>"><?php  echo $infoset['Orientation'];?></option>
															<option value="Potrait">Potrait</option>
															<option value="Landscape">Landscape</option>
													</select>
												</div>
											</div>
									
										<div class="form-group">
												<label class="col-sm-2 control-label">Size</label>
												<div class="col-sm-10">
													<select class="form-control" id="size" name="size"  required="true">
														<option value="<?php  echo $infoset['Size'];?>"><?php  echo $infoset['Size'];?></option>
														<option value="Small">Small</option>
														<option value="Medium">Medium</option>
														<option value="Large">Large</option>
													</select>
												</div>
										</div>
										
										<div class="form-group">
												  <label class="col-sm-2 control-label">Artist</label>
												  <div class="col-sm-10">
														 <select class="form-control m-bot15" name="artist" id="artist">
															   <option value="<?php  echo $infoset['arid'];?>"><?php  echo $infoset['Name'];?></option>
																	<?php $qArtist=mysqli_query($con,"SELECT * FROM tblartist");
																		  while($resultset=mysqli_fetch_array($qArtist))
																		  {
																	?>    
															   <option value="<?php echo $resultset['ID'];?>"><?php echo $resultset['Name'];?></option>
																<?php } ?> 
														 </select>
												 </div>
										</div>
										<div class="form-group">
												  <label class="col-sm-2 control-label">Art Type</label>
												  <div class="col-sm-10">
														<select class="form-control m-bot15" name="arttype" id="arttype">
																<option value="<?php  echo $infoset['atid'];?>"><?php  echo $infoset['typename'];?></option>
																<?php $qAtt=mysqli_query($con,"SELECT * FROM tblarttype");
																	  while($data=mysqli_fetch_array($qAtt))
																	  {
																?>    
																<option value="<?php echo $data['ID'];?>"><?php echo $data['ArtType'];?></option>
																<?php } ?> 
														</select>
												  </div>
									   </div>
									   <div class="form-group">
											<label class="col-sm-2 control-label">Art Medium</label>
												 <div class="col-sm-10">
														<select class="form-control m-bot15" name="artmed" id="artmed">
															<option value="<?php  echo $infoset['amid'];?>"><?php  echo $infoset['amname'];?></option>
															<?php $qArtMd=mysqli_query($con,"SELECT * FROM tblartmedium");
																  while($row=mysqli_fetch_array($qArtMd))
																  {
															 ?>    
															<option value="<?php echo $row['ID'];?>"><?php echo $row['ArtMedium'];?></option>
															 <?php } ?> 
														</select>
												</div>
										</div>											 
										<div class="form-group">
											   <label class="col-sm-2 control-label">Selling Price</label>
											   <div class="col-sm-10">
													 <input class="form-control " id="sprice" type="text" name="sprice" required="true" value="<?php  echo $infoset['SellingPricing'];?>">
											   </div>
										</div>								
										<div class="form-group">
											   <label class="col-sm-2 control-label">Art Product Description</label>
											   <div class="col-sm-10">
													<textarea class="form-control " id="description" type="text" name="description" rows="12" cols="4" required="true"><?php  echo $infoset['Description'];?></textarea>
											   </div>
										</div>
								 </div>
							</section>		
						</div>
						<?php } ?>
						<p style="text-align: center;"> <button type="submit" name='submit' class="btn btn-primary">Submit</button></p>
				</form>
			</div>   
		</section>
    </section>
 <?php include_once('includes/footer.php');?>
  </section>
	  <script src="js/jquery.js"></script>
	  <script src="js/bootstrap.min.js"></script>
	  <script src="js/jquery.scrollTo.min.js"></script>
	  <script src="js/jquery.nicescroll.js" type="text/javascript"></script> 
	  <script src="js/jquery-ui-1.9.2.custom.min.js"></script> 
	  <script type="text/javascript" src="js/ga.js"></script>
	  <script src="js/bootstrap-switch.js"></script>
	  <script src="js/jquery.tagsinput.js"></script>
	  <script src="js/jquery.hotkeys.js"></script>
	  <script src="js/bootstrap-wysiwyg.js"></script>
	  <script src="js/bootstrap-wysiwyg-custom.js"></script>
	  <script src="js/moment.js"></script>
	  <script src="js/bootstrap-colorpicker.js"></script>
	  <script src="js/daterangepicker.js"></script>
	  <script src="js/bootstrap-datepicker.js"></script> 
	  <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
	  <script src="js/form-component.js"></script> 
	  <script src="js/scripts.js"></script>
</body>

</html>
<?php  } ?>
