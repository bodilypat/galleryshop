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
  <title>Answer Inquiry | Gallery Shop Management </title>
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
            <h3 class="page-header"><i class="fa fa-table"></i> Answer Inquiry</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="dashboard.php">Home</a></li>
              <li><i class="fa fa-table"></i>Inquiry</li>
              <li><i class="fa fa-th-list"></i>Answer Inquiry</li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading">
                Answer Inquiry
              </header>
              <table class="table">
                <thead>
                        <tr>
                               <tr>
                                       <th>S.NO</th>                             
                                       <th>Inquiry Number</th>
                                       <th>Full Name</th>
                                       <th>Mobile Number</th>
                                       <th>Inquiry Date</th>
                                       <th>Action</th>
                               </tr>
                         </tr>
                </thead>
               <?php
                          $qInq=mysqli_query($con,"SELECT * FROM  tblenquiry where Status='Answer'");
                          $count=1;
                          while ($data=mysqli_fetch_array($qInq)) {
                ?>              
                <tr>
                        <td><?php echo $count;?></td>
                        <td><?php  echo $data['EnquiryNumber'];?></td>
                        <td><?php  echo $data['FullName'];?></td>
                        <td><?php  echo $data['MobileNumber'];?></td>
                        <td><?php  echo $data['EnquiryDate'];?></td>                  
                        <td>
                            <a href="viewInquiry.php?viewid=<?php echo $row['ID'];?>" class="btn btn-success">View Details</a>
                        </td>
                </tr>
                <?php 
                    $count=$count+1;
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