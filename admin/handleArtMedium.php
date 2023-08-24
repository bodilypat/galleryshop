<?php
  session_start();
  error_reporting(0);
  include('includes/dbconnection.php');
  if (strlen($_SESSION['agmsaid']==0)) {
    header('location:logout.php');
    } else{

      if(isset($_GET['delid']))
      {
          $did=intval($_GET['delid']);
          
          $delArtm=mysqli_query($con,"DELETE FROM tblartmedium WHERE ID='$did'");

          echo "<script>alert('Data deleted');</script>"; 
          echo "<script>window.location.href = 'handleArtMedium.php'</script>";     
      }

  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Manage Art Medium| Gallery Shop Management </title>
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
            <h3 class="page-header"><i class="fa fa-table"></i> Manage Art Medium</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="dashboard.php">Home</a></li>
              <li><i class="fa fa-table"></i>Manage Art Medium</li>
              <li><i class="fa fa-th-list"></i>Manage Art Medium</li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-sm-12">
            <section class="panel">
                  <header class="panel-heading">Manage Art Medium</header>              
                      <table class="table">
                          <thead>                                      
                              <tr>
                                  <th>S.NO</th>                        
                                  <th>Medium of Art</th>                            
                                  <th>Creation Date</th>                          
                                  <th>Action</th>
                              </tr>
                              </tr>
                          </thead>
                      <?php
                          $qArtm=mysqli_query($con,"SELECT * FROM  tblartmedium");
                          $count=1;
                          while ($data=mysqli_fetch_array($qArtm)) {
                      ?>
                              <tr>
                                  <td><?php  echo $count;?></td>
                                  <td><?php  echo $data['ArtMedium'];?></td>
                                  <td><?php  echo $data['CreationDate'];?></td>
                                  <td><a href="editArtMedium.php?editid=<?php echo $data['ID'];?>" class="btn btn-success">Edit</a> || <a href="handleArtMedium.php?delid=<?php echo $data['ID'];?>" class="btn btn-danger">Delete</a></td>
                              </tr>
                        <?php 
                            $count=$count+1;
                        }?>

                      </table>
              </section>
          </div>    
        </div>
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
