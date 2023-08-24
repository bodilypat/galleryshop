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
            $arttype=$_POST['arttype'];   
	        $eid=$_GET['editid'];
            $editAtt=mysqli_query($con, "UPDATE  tblarttype SET ArtType='$arttype' WHERE ID='$eid'");
            if ($editAtt) {
		            echo "<script>alert('Art type has been updated.');</script>";
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
	  <title>Update Art Type | Art Gallery Management System</title> 
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
    <section id="main-content">
      <section class="wrapper">
            <div class="row">
                  <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-file-text-o"></i>Update Art Type Detail</h3>
                    <ol class="breadcrumb">
                          <li><i class="fa fa-home"></i><a href="dashboard.php">Home</a></li>
                          <li><i class="icon_document_alt"></i>Update Art Type</li>
                          <li><i class="fa fa-file-text-o"></i>Update Art Type Detail</li>
                    </ol>
                  </div>
            </div>
            <div class="row">
                  <div class="col-lg-12">
                        <section class="panel">
                              <header class="panel-heading">Update Art Type Detail</header>
                              <div class="panel-body">
                                    <form class="form-horizontal " method="post" action="">
                              <?php
                                    $eid=$_GET['editid'];
                                    $qAtt=mysqli_query($con,"SELECT * FROM tblarttype WHERE ID='$eid'");
                                    $count=1;
                                    while ($data=mysqli_fetch_array($qAtt)) {
                              ?>
                                          <div class="form-group">
                                              <label class="col-sm-2 control-label">Art Type</label>
                                                  <div class="col-sm-10">
                                                      <input class="form-control" id="arttype" name="arttype"  type="text" required="true" value="<?php  echo $data['ArtType'];?>">
                                                  </div>
                                          </div>
                            
                                <?php } ?>
                                      <p style="text-align: center;"> 
                                          <button type="submit" name='submit' class="btn btn-primary">Update</button>
                                      </p>
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
		  <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
		  <script src="js/form-component.js"></script>
		  <script src="js/scripts.js"></script>
</body>

</html>
<?php  } ?>
