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
		$artName=$_POST['name'];
		$artMobnum=$_POST['mobnum'];
		$artEmail=$_POST['email'];
		$artEducate=$_POST['edudetails'];
		$artAward=$_POST['awarddetails'];
		$img=$_FILES["images"]["name"];
		$extension = substr($img,strlen($img)-4,strlen($img));
		
		// allowed extensions
		$allowed_extensions = array(".jpg","jpeg",".png",".gif");
		// Validation for allowed extensions .in_array() function searches an array for a specific value.
		if(!in_array($extension,$allowed_extensions))
		{
			echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
		}
		else
		{
			$proimg=md5($img).$extension;
			move_uploaded_file($_FILES["images"]["tmp_name"],"images/".$proimg);
			$addArt=mysqli_query($con, "INSERT INTO tblartist(Name, MobileNumber, Email, Education, Award,Profilepic) 
									   VALUES ('$artName','$artMobnum','$artEmail','$artEducate','$artAward','$proimg')");
			if ($addArt) 
			{
				echo "<script>alert('Artist details has been added.');</script>";
				echo "<script>window.location.href ='handleArtist.php'</script>";
			}
			else
			{    
				echo "<script>alert('Something Went Wrong. Please try again.');</script>";
			}
	}
}
  ?>
  
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Add Artist | Gallery Shop Management </title>

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
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i>Add Artist Detail</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="dashboard.php">Home</a></li>
              <li><i class="icon_document_alt"></i>Artist</li>
              <li><i class="fa fa-file-text-o"></i>Add Artist Detail</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
             Add Artist Detail
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="post" action="" enctype="multipart/form-data">
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="name" name="name"  type="text" required="true">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Mobile Number</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="mobnum" maxlength="10" name="mobnum"  type="text" required="true" pattern="[0-9]+">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="email" name="email"  type="email" required="true">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Award Details</label>
                    <div class="col-sm-10">
                    
                      <textarea class="form-control" name="awarddetails" required="true"></textarea>
                    </div>
                  </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Image</label>
                    <div class="col-sm-10">
                       <input type="file" class="form-control" name="images" id="images" value="" required="true">
                    </div>
                  </div>
                 <p style="text-align: center;"> <button type="submit" name='submit' class="btn btn-primary">Submit</button></p>
                </form>
              </div>
            </section>
            
          </div>
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
  <script src="js/ckeditor.js" type="text/javascript" ></script>
  <script src="js/form-component.js"></script>
  <script src="js/scripts.js"></script>

</body>

</html>
<?php  } ?>
