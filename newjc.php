<?php
session_start();
include ("external/db.php");
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

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
                      <h1 class="h3 mb-0 text-gray-800">New Servicing
                        <br><small style="font-size: 15px;"># Create a Job Card to service your bike</small>
                      </h1>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                      <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                      </div>
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size: 15px;">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Contact</th>
                                <th>Reg. Num</th>
                               <!--  <th>Engine</th>
                                <th>Chasis</th> -->
                                <th>Model</th>
                                <th>Action</th>


                              </tr>
                            </thead>

                            <tbody>
                              <tr>
                                <?php 
                                include('external/db.php');
                                $sqlget= "SELECT * FROM customer";
                                $result=mysqli_query($conn, $sqlget);
                                if (!$result) {
                                  echo "query error";
                                }
                                ?>

                                <?php
                                while ($row=mysqli_fetch_assoc($result)) {
                                  ?>

                                  <td> <?php echo $row['id']; ?> </td>
                                  <td><?php echo $row['fname'] . " " . $row['lname']; ?></td>
                                  <td><?php echo $row['address']; ?></td>
                                  <td><?php echo $row['number']; ?></td>
                                  <td><?php echo $row['regnumber']; ?></td>
                                  <td><?php echo $row['model']; ?></td> 
                                  <td>
                                    <a href="inspect.php?id=<?php echo $row['id']?>"> <i class="fas fa-tools"></i></a>  &nbsp;&nbsp;&nbsp;&nbsp;   

                                    <a href="view.php?id=<?php echo $row['id']?>"> <i class="fas fa-eye"></i></a>
                                  </td>
                                   </tr>
                              <?php }?>
                                    <!-- <tr>
                                      <td>1</td>
                                      <td>Prabhu Budhathoki</td>
                                      <td>Banepa 13</td>
                                      <td>9861723432</td>
                                      <td>Ba 95 Pa 5263</td>
                                      <td>MD64JHDMNBKJ</td>
                                      <td>CH67JHGKGJHK</td>
                                      <td>RTR 200 4V</td>
                                      <td>
                                        <a href="inspect.html">Service</a>
                                      </td>
                                    </tr> -->
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>

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
                  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
                  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

                  <!-- Page level custom scripts -->
                  <script src="js/demo/datatables-demo.js"></script>

                </body>

                </html>
