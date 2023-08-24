<?php
	session_start();
	error_reporting(0);
	include('includes/dbconnection.php');
	if (strlen($_SESSION['agmsaid']==0)) {
	header('location:logout.php');
	} else{
		if(isset($_POST['submit']))
	{

		$agmsaid=$_SESSION['agmsaid'];
		$pageTitle=$_POST['pagetitle'];
		$pageDes=$_POST['pagedes'];

	$qPage=mysqli_query($con,"UPDATE tblpage SET PageTitle='$pageTitle',PageDescription='$pageDes' WHERE  PageType='aboutus'");

    if ($qPage) {
			echo "<script>alert('About Us has been updated.');</script>";  
			}
			else
			{
				echo "<script>alert('Something went wrong.');</script>";  
			}
		}
  ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		  <link rel="shortcut icon" href="img/favicon.png">
		  <title>About Us | Gallery Shop Management </title> 
		  <!--css-->
		  <link href="css/bootstrap.min.css" rel="stylesheet">
		  <link href="css/bootstrap-theme.css" rel="stylesheet"> 
		  <link href="css/elegant-icons-style.css" rel="stylesheet" />
		  <link href="css/font-awesome.min.css" rel="stylesheet" />
		  <link href="css/style.css" rel="stylesheet">
		  <link href="css/style-responsive.css" rel="stylesheet" />   
		  <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
		  <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
	</head>
	
<body>
 
  <section id="container" class="">
   
   <?php include_once('includes/header.php');?>
   <?php include_once('includes/sidebar.php');?>
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i> About Us</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="dashboard.php">Home</a></li>
              <li><i class="icon_document_alt"></i>About Us</li>
              <li><i class="fa fa-files-o"></i>About Us</li>
            </ol>
          </div>
        </div>
       
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading"> About Us</header>        
            </section>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
             
              <div class="panel-body">
                <div class="form">                         
			<?php
		 
				$qPage=mysqli_query($con,"SELECT * FROM  tblpage WHERE PageType='aboutus'");
				$count=1;
				while ($resultset=mysqli_fetch_array($qPage)) {
			?>
                  <form class="form-validate form-horizontal" method="post" action="">
                    <div class="form-group ">
                      <label for="fullname" class="control-label col-lg-2">Page Title <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input type="text" name="pagetitle" class=" form-control" required= "true" value="<?php  echo $resultset['PageTitle'];?>">
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="address" class="control-label col-lg-2">Page Description <span class="required">*</span></label>
                      <div class="col-lg-10">
                         <textarea class=" form-control" id="pagedes" name="pagedes" type="text" required="true" value=""><?php  echo $resultset['PageDescription'];?></textarea>
                      </div>
                    </div>
                   
                   <?php } ?>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit" name="submit">Update</button>
                       
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </section>
          </div>
        </div>
      </section>
    </section>	
     <?php include_once('includes/footer.php');?>
  </section>
  <!-- JAVASCRIPT-->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <script type="text/javascript" src="js/jquery.validate.min.js"></script>  
  <script src="js/form-validation-script.js"></script>
  <script src="js/scripts.js"></script>
</body>
</html>
<?php }  ?>