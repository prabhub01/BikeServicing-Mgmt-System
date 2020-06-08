<?php

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

  <style type="text/css">
    a {
      text-decoration: none;
    }
  </style>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items justify-content" href="index.html">
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

                  <li class="nav-item active">
                  <a class="nav-link" href="logout.php">
                    <i class="far fa-money-bill-alt"></i>
                    <span>Logout</span></a>
                  </li>


                 


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
                            <h1 class="h3 mb-0 text-gray-800">View Details
                              <br><small style="font-size: 15px;"># Get information of selected bike</small>
                            </h1>
                          </div>

                          <row> 
                            <form class="needs-validation" action="index.php" method="POST" novalidate>
                              <div class="form-row">
                                <div class="col-md-3 mb-3">
                                  <label for="fname">First name</label>
                                  <input type="text" class="form-control" id="fname" name="fname" placeholder="" value="" required>
                                </div>

                                <div class="col-md-3 mb-3">
                                  <label for="lname">Last name</label>
                                  <input type="text" class="form-control" id="lname" name="lname" placeholder="" value="" required>
                                </div>

                                <div class="col-md-3 mb-3">
                                  <label for="add">Address</label>
                                  <input type="text" class="form-control" id="add" name="address" placeholder="" value="" required>
                                </div>

                                <div class="col-md-3 mb-3">
                                  <label for="contact">Contact</label>
                                  <input type="text" class="form-control" id="contact" name="contact" placeholder="" required>
                                </div>
                              </div>


                              <div class="form-row">
                                <div class="col-md-4 mb-3">
                                  <label for="regnum">Registration Num</label>
                                  <input type="text" class="form-control" id="regnum" name="regnum" placeholder="" required>
                                </div>

                                <div class="col-md-4 mb-3">
                                  <label for="engnum">Engine Number</label>
                                  <input type="text" class="form-control" id="engnum" name="enginenum" value="MD634KE52354" disabled>
                                </div>

                                <div class="col-md-4 mb-3">
                                  <label for="framenum">Frame Number</label>
                                  <input type="text" class="form-control" id="framenum" name="framenum" value="KJHG5646894SA" disabled>
                                </div>
                              </div>

                              <div class="form-row">
                                <div class="col-md-4 mb-3">
                                  <label>Model</label>
                                  <input type="text" class="form-control" id="" name="" value="RTR 200 4V" disabled>
                                 
                                </div>

                                <div class="col-md-4 mb-3">
                                  <label for="sold">Purchased From/Dealer's Name</label>
                                  <input type="text" class="form-control" id="sold" name="dealername" value="Araniko Auto Care" disabled>
                                </div>

                                <div class="col-md-4 mb-3">
                                  <label for="date">Date of Purchase</label>
                                  <input type="" class="form-control" id="date" name="date" value="22-06-2018" disabled>
                                </div>
                              </div>

                              <div class="form-row">
                                <button class="btn btn-primary" name="btn-addbike" type="submit"> <a href="newjc.php"> Back </a></button> &nbsp;&nbsp;&nbsp;
                                <button class="btn btn-primary" name="btn-addbike" type="submit">Submit form</button>

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
