<?php
session_start();

if (isset($_POST['submit'])) {
  include ("external/db.php");
  $id = mysqli_real_escape_string($conn, $_POST['jc-id']); 
  $km = mysqli_real_escape_string($conn, $_POST['jckm']);
  $servicingn_num = mysqli_real_escape_string($conn, $_POST['jc-sn']);
  $servicingn_type = mysqli_real_escape_string($conn, $_POST['jc-st']);
  $problem = mysqli_real_escape_string($conn, $_POST['jc-problem']);
  $mechanic = mysqli_real_escape_string($conn, $_POST['jc-machanic']);
  $time = mysqli_real_escape_string($conn, $_POST['jc-time']);
  $date = mysqli_real_escape_string($conn, $_POST['jc-date']);
  $regnum = mysqli_real_escape_string($conn, $_POST['jc-reg']);

  $query = "INSERT INTO `jobcard`(`id`, `date`, `time`, `regnum`, `current_km`, `servicing_num`, `servicing_type`, `mechanic_name`, `problem`) VALUES ('$id', '$date', '$time', '$regnum', '$km', '$servicingn_num', '$servicingn_type', '$mechanic', '$problem');";

    $result=mysqli_query($conn, $query);
  if (!$result) {
    die($query."Query Error <br>");
  }else {
     header("Location: newjc.php");
      echo "<script>alert('Job Card Registered and Ready for Print'); </script>";
   
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" href="img/icon.png">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TVS</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items justify-content" href="index.php">
        <!-- <div class="sidebar-brand-icon rotate-n-15">
        </div> -->
        <div class="sidebar-brand-text mx-3">Araniko Auto</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-biking"></i>
          <span>New Bike</span></a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="newjc.php">
            <i class="fas fa-wrench"></i>
            <span>New Servicing</span></a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="inspect.php">
              <i class="far fa-check-square"></i>
              <span>Inspect</span></a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="servicing.php">
                <i class="fas fa-clipboard-check"></i>
                <span>Servicing Record</span></a>
              </li>

              <!-- Divider -->
              <hr class="sidebar-divider">

              <li class="nav-item active">
                <a class="nav-link" href="payment.php">
                  <i class="far fa-money-bill-alt"></i>
                  <span>Payment</span></a>
                </li>


                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                  <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

              </ul>
              <!-- End of Sidebar -->

              <!-- Content Wrapper -->
              <div id="content-wrapper" class="d-flex flex-column" style="padding-top: 40px;">

                <!-- Main Content -->
                <div id="content">

                  <!-- Begin Page Content -->
                  <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                      <h1 class="h3 mb-0 text-gray-800">Inspect
                        <br><small style="font-size: 15px;"># List out the items to check or repair</small>
                      </h1>
                    </div>

                    <row> 

                      <?php
                      $id=$_GET['id'];
                      include('external/db.php');
                      $sqlget= "SELECT * FROM customer WHERE id=$id";
                      $result=mysqli_query($conn, $sqlget);
                      if (!$result) {
                        echo "query error";
                      }
                      while ($row=mysqli_fetch_assoc($result)) {
                        $id= $row['id'];
                        $fname=$row['fname'];
                        $lname=$row['lname'];
                        $caddress=$row['address'];
                        $ccontact=$row['number'];
                        $reg=$row['regnumber'];
                        $engine=$row['enginenumber'];
                        $frame=$row['framenumber'];
                        $model=$row['model'];
                        $date=$row['date'];
                      }
                      ?>

                      <form class="needs-validation" action="inspect.php" method="POST" novalidate>

                        <div class="form-row">
                          <div class="col-md-3 mb-3">
                            <label for="date">Date</label>
                            <input type="" class="form-control" id="date" placeholder="" name="jc-date" value="<?php echo date("Y/m/d"); ?>" required>
                          </div>

                          <div class="col-md-2 mb-3">
                            <label for="cusid">Customer ID</label>
                            <input type="text" class="form-control" id="cusid" name="jc-id" placeholder="" value="<?php echo $id; ?>" required>
                          </div>
                        </div>

                        <div class="form-row">
                          <div class="col-md-3 mb-3">
                            <label for="fname">First name</label>
                            <input type="text" class="form-control" id="fname" placeholder="" value="<?php echo $fname; ?>" required>
                          </div>

                          <div class="col-md-3 mb-3">
                            <label for="lname">Last name</label>
                            <input type="text" class="form-control" id="lname" placeholder="" value="<?php echo $lname; ?>" required>
                          </div>

                          <div class="col-md-3 mb-3">
                            <label for="add">Address</label>
                            <input type="text" class="form-control" id="add" placeholder="" value="<?php echo $caddress; ?>" required>
                          </div>

                          <div class="col-md-3 mb-3">
                            <label for="contact">Contact</label>
                            <input type="text" class="form-control" id="contact" placeholder="" value="<?php echo $ccontact; ?>" required>
                          </div>
                        </div>


                        <div class="form-row">
                          <div class="col-md-4 mb-3">
                            <label for="regnum">Registration Num</label>
                            <input type="text" class="form-control" id="regnum" name="jc-reg" placeholder="" value="<?php echo $reg; ?>" required>
                          </div>

                          <div class="col-md-4 mb-3">
                            <label for="engnum">Engine Number</label>
                            <input type="text" class="form-control" id="engnum" placeholder="" value="<?php echo $engine; ?>" required>
                          </div>

                          <div class="col-md-4 mb-3">
                            <label for="framenum">Frame Number</label>
                            <input type="text" class="form-control" id="framenum" placeholder="" value="<?php echo $frame; ?>" required>
                          </div>
                        </div>

                        <div class="form-row">
                          <div class="col-md-3 mb-3">
                            <label>Model</label>
                            <input type="text" class="form-control" id="" placeholder="" value="<?php echo $model; ?>" required>
                          </div>

                          <div class="col-md-3 mb-3">
                            <label for="date">Date of Purchase</label>
                            <input type="text" class="form-control" id="date" placeholder="" value="<?php echo $date; ?>" required>
                          </div>

                          <div class="col-md-2 mb-3">
                            <label for="km">Current km</label>
                            <input type="text" class="form-control" id="km" name="jckm" placeholder="" required>
                          </div>

                          <div class="col-md-2 mb-3">
                            <label for="servicingnum">Servicing Number</label>
                            <input type="number" class="form-control" id="servicingnum" name="jc-sn" placeholder="" required>
                          </div>

                          <div class="col-md-2 mb-3">
                            <label>Servicing Type</label>
                            <select class="form-control" name="jc-st">
                              <option value="Free">Free</option>
                              <option value="Paid">Paid</option>
                            </select>
                          </div>
                        </div>

                        <div class="form-row">
                          <div class="col-md-4 mb-3">
                            <label for="txtarea">Problems</label> <br>
                            <textarea class="form-control" id="txtarea" name="jc-problem" rows="5"></textarea>
                          </div>

                          <div class="col-md-2 mb-3">
                            <label>Mechanic Name</label>
                            <select class="form-control" name="jc-machanic">
                              <option value="Nikesh">Nikesh</option>
                              <option value="Shyam">Shyam</option>
                              <option value="Harry">Harry</option>
                              <option value="Prakash">Prakash</option>
                            </select>
                          </div>

                          <div class="col-md-2 mb-3">
                            <label for="checkintime">Checkin Time</label>
                            <input type="text" class="form-control" id="checkintime" placeholder="" name="jc-time" value="<?php
                            date_default_timezone_set("Asia/Kathmandu");
                            echo date("h:i a");
                            ?>" required>
                          </div>


                        </div>
                        <div class="form-row">
                          <button class="btn btn-primary" name="submit" type="submit">Submit form</button>

                        </div>
                      </form>
                    </row>

                  </div>
                  <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                  <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                      <span>Copyright &copy; Your Website 2019</span>
                    </div>
                  </div>
                </footer>
                <!-- End of Footer -->

              </div>
              <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
              <i class="fas fa-angle-up"></i>
            </a>

            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="js/demo/chart-area-demo.js"></script>
            <script src="js/demo/chart-pie-demo.js"></script>

          </body>

          </html>
