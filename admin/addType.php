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
          
          $addAtt=mysqli_query($con, "INSERT INTO tblarttype(ArtType) VALUES('$arttype')");
          if ($addAtt) {
            echo "<script>alert('Artist type has been added.');</script>";
            echo "<script>window.location.href ='handleArttype.php'</script>";
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
  <title>Add Art Type | Gallery Shop Management </title>
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
            <h3 class="page-header"><i class="fa fa-file-text-o"></i>Add Art Type</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="dashboard.php">Home</a></li>
              <li><i class="icon_document_alt"></i>Art Type</li>
              <li><i class="fa fa-file-text-o"></i>Add Art Type</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
             Add Art Type
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="post" action="" enctype="multipart/form-data">
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Art Type</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="arttype" name="arttype"  type="text" required="true">
                    </div>
                  </div>
                  
                  <div class="form-group">
                
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
  <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
  <script src="js/form-component.js"></script>
  <script src="js/scripts.js"></script>
</body>
</html>
<?php  } ?>
