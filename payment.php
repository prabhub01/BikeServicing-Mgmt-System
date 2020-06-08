
 <?php  
 // $connect = mysqli_connect("localhost", "root", "", "test_db");  
 if(isset($_POST['submit'])){
 $number = count($_POST["name"]);  
 echo $number;
  print_r ($_POST["name"]);
}
  // if($number > 0)  
 // {  
 //      for($i=0; $i<$number; $i++)  
 //      {  
 //           if(trim($_POST["name"][$i] != ''))  
 //           {  
 //                $sql = "INSERT INTO tbl_name(name) VALUES('".mysqli_real_escape_string($connect, $_POST["name"][$i])."')";  
 //                mysqli_query($connect, $sql);  

 //           }  
 //      }  
 //      echo "Data Inserted";  
 // }  
 // else  
 // {  
 //      echo "Please Enter Name";  
 // }  
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


  <style>
    #h1{
      display: none;
    }
  </style>
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
                <span>Servicing</span></a>
              </li>

            <!-- Divider -->
                <hr class="sidebar-divider">

              <li class="nav-item active">
                <a class="nav-link" href="payment.php">
                  <i class="far fa-money-bill-alt"></i>
                  <span>Payment</span></a>
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
                          <h1 class="h3 mb-0 text-gray-800">Payment
                            <br><small style="font-size: 15px;"># Create your total bill and ready to checkout</small>
                          </h1>
                        </div>

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                          <div class="card-header py-3">
                            <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
                            <div class="form-row">
                              <div class="col-md-2 mb-3">
                                <label>Date : 2076/2/5</label>
                              </div>
                            </div>

                            <div class="form-row">
                              <div class="col-md-3 mb-3">
                                <label for="fullname">Full Name</label>
                                <input type="text" class="form-control" id="fullname" placeholder="" value="" required>
                              </div>


                              <div class="col-md-2 mb-3">
                                <label for="Address">Address</label>
                                <input type="text" class="form-control" id="Address" placeholder="" value="" required>
                              </div>

                              <div class="col-md-2 mb-3">
                                <label for="contact">Contact</label>
                                <input type="text" class="form-control" id="contact" placeholder="" value="" required>
                              </div>

                              <div class="col-md-2 mb-3">
                                <label for="Bikenum">Reg Num</label>
                                <input type="text" class="form-control" id="Bikenum" placeholder="" value="" required>
                              </div>

                              <div class="col-md-2 mb-3">
                                <label>Model</label>
                                <select class="form-control" required>
                                  <option></option>
                                  <option value="RTR 200 4V">RTR 200 4V</option>
                                  <option value="RTR 160 4V">RTR 160 4V</option>
                                  <option value="RR 310">RR 310</option>
                                  <option value="RTR 160">RTR 160</option>
                                  <option value="Starcity+">Starcity+</option>
                                  <option value="Phoenix">Phoenix</option>
                                </select>
                              </div>


                            </div>

                          </div>
                          <div class="card-body">
                            <!-- <div class="table-responsive">
                              <table class="table table-bordered" id="" width="100%" cellspacing="0">
                              <form name="add_name" id="add_name">  
                                <thead>
                                  <tr>
                                    <th>S.N.</th>
                                    <th>Part Number</th>
                                    <th>Part Name</th>
                                    <th>Quantity</th>
                                    <th>Rate</th>
                                    <th>Total</th>
                                  </tr>
                                </thead>

                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>N952546</td>
                                    <td>Mobile Filter</td>
                                    <td>1</td>
                                    <td>95</td>
                               </tr>
                             </tbody>
                             </form> 
                           </table>
                         </div> -->


                         
                          <form name="add_name" id="add_name">
                            <div class="table-responsive">  
                           <table class="table table-bordered" id="dynamic_field">  
                           <thead>
                                  <tr>
                                    <th>S.N.</th>
                                    <th>Part Number</th>
                                    <th>Part Name</th>
                                    <th>Quantity</th>
                                    <th>Rate</th>
                                    <th>Total</th>
                                  </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <td colspan="5" style="text-align: right;">Total</td>
                                    <td>Rs. 54521</td>
                                </tr>
                                <tr>
                                    <td colspan="5" style="text-align: right;">Discount %</td>
                                    <td><input type="number" name="" class="form-control name_list"></td>
                                </tr>
                                <tr>
                                    <td colspan="5" style="text-align: right;">Grand Total</td>
                                    <td>Rs. 525852</td>
                                </tr>
                            </tfoot>
                            <tbody>
                            <tr>  
                              <td></td>
                             <td><input type="text" name="name[]" placeholder="" class="form-control name_list" required /></td>  
                             <td><input type="text" name="name[]" placeholder="" class="form-control name_list" required /></td> 
                             <td><input type="text" name="name[]" placeholder="" class="form-control name_list" required /></td> 
                             <td><input type="text" name="name[]" placeholder="" class="form-control name_list" required /></td> 
                             <td><input type="text" name="name[]" placeholder="" class="form-control name_list" required /></td> 
                             <td><button type="button" name="add" id="add" class="btn btn-success"><i class="fas fa-plus-circle"></i></button></td>  
                           </tr> 
                           </tbody>
                         </table>  
                         <input type="button" name="submit" id="submit" class="btn btn-info" value="Calculate" />  
                         </div> 
                         </form>
                       



                     </div>
                   </div>

                   <div class="card-body">
                    <div class="row">
                      <div id="h1">
                        <row class="card shadow mb-4"> 
                          <form class="needs-validation" novalidate style="padding: 20px;">

                            <div class="form-row">
                              <div class="col-md-3 mb-3">
                                <label for="date">Date</label>
                                <input type="date" class="form-control" id="date" placeholder="" value="" required>
                              </div>

                              <div class="col-md-2 mb-3">
                                <label for="cusid">Customer ID</label>
                                <input type="text" class="form-control" id="cusid" placeholder="" required>
                              </div>
                            </div>

                            <div class="form-row">
                              <div class="col-md-3 mb-3">
                                <label for="fname">First name</label>
                                <input type="text" class="form-control" id="fname" placeholder="" value="" required>
                              </div>

                              <div class="col-md-3 mb-3">
                                <label for="lname">Last name</label>
                                <input type="text" class="form-control" id="lname" placeholder="" value="" required>
                              </div>

                              <div class="col-md-3 mb-3">
                                <label for="add">Address</label>
                                <input type="text" class="form-control" id="add" placeholder="" value="" required>
                              </div>

                              <div class="col-md-3 mb-3">
                                <label for="contact">Contact</label>
                                <input type="text" class="form-control" id="contact" placeholder="" required>
                              </div>
                            </div>


                            <div class="form-row">
                              <div class="col-md-4 mb-3">
                                <label for="regnum">Registration Num</label>
                                <input type="text" class="form-control" id="regnum" placeholder="" required>
                              </div>

                              <div class="col-md-4 mb-3">
                                <label for="engnum">Engine Number</label>
                                <input type="text" class="form-control" id="engnum" placeholder="" required>
                              </div>

                              <div class="col-md-4 mb-3">
                                <label for="framenum">Frame Number</label>
                                <input type="text" class="form-control" id="framenum" placeholder="" required>
                              </div>
                            </div>

                            <div class="form-row">
                              <div class="col-md-3 mb-3">
                                <label>Model</label>
                                <select class="form-control" required>
                                  <option>Select your Bike's Model</option>
                                  <option value="RTR 200 4V">RTR 200 4V</option>
                                  <option value="RTR 160 4V">RTR 160 4V</option>
                                  <option value="RR 310">RR 310</option>
                                  <option value="RTR 160">RTR 160</option>
                                  <option value="Starcity+">Starcity+</option>
                                  <option value="Phoenix">Phoenix</option>
                                </select>
                              </div>

                              <div class="col-md-3 mb-3">
                                <label for="date">Date of Purchase</label>
                                <input type="date" class="form-control" id="date" placeholder="" required>
                              </div>

                              <div class="col-md-2 mb-3">
                                <label for="km">Current km</label>
                                <input type="text" class="form-control" id="km" placeholder="" required>
                              </div>

                              <div class="col-md-2 mb-3">
                                <label for="servicingnum">Servicing Number</label>
                                <input type="number" class="form-control" id="servicingnum" placeholder="" required>
                              </div>

                              <div class="col-md-2 mb-3">
                                <label>Servicing Type</label>
                                <select class="form-control">
                                  <option value="Free">Free</option>
                                  <option value="Paid">Paid</option>
                                </select>
                              </div>
                            </div>

                            <div class="form-row">
                              <div class="col-md-4 mb-3">
                                <label for="txtarea">Problems</label> <br>
                                <textarea class="form-control" id="txtarea" rows="5"></textarea>
                              </div>

                              <div class="col-md-2 mb-3">
                                <label>Mechanic Name</label>
                                <select class="form-control">
                                  <option value="Nikesh">Nikesh</option>
                                  <option value="Shyam">Shyam</option>
                                  <option value="Harry">Harry</option>
                                  <option value="Prakash">Prakash</option>
                                </select>
                              </div>

                              <div class="col-md-2 mb-3">
                                <label for="checkintime">Checkin Time</label>
                                <input type="time" class="form-control" id="checkintime" placeholder="" required>
                              </div>
                            </div>
                            <hr size="5">
                            <div class="form-row">
                              <div class="col-md-4 mb-3">
                                <label for="remarks">Remarks on Problems</label> <br>
                                <textarea class="form-control" id="remarks" rows="5" placeholder="Please mention what problems are fixed and what not. Also make any remark if needed"></textarea>
                              </div>

                              <div class="col-md-4 mb-3">
                                <label for="parts">Parts Used</label> <br>
                                <textarea class="form-control" id="parts" rows="5" placeholder="Please note down all the parts used"></textarea>
                              </div>

                              <div class="col-md-3 mb-3">
                                <label for="nextdate">Next Servicing Date</label>
                                <input type="date" class="form-control" id="nextdate" placeholder="" required> <br>
                                <label for="nextkm">Next Servicing km</label>
                                <input type="num" class="form-control" id="nextkm" placeholder="" required>
                              </div>


                            </div>
                            <div class="form-row">
                              <button class="btn btn-primary" type="submit">Submit form</button>
                            </div>
                          </form>
                        </row>
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

        <script>  
         $(document).ready(function(){  
          var i=1;  
          $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td></td><td><input type="text" name="name[]" placeholder="" class="form-control name_list" /></td><td><input type="text" name="name[]" placeholder="" class="form-control name_list" /></td><td><input type="text" name="name[]" placeholder="" class="form-control name_list" /></td><td><input type="text" name="name[]" placeholder="" class="form-control name_list" /></td><td><input type="text" name="name[]" placeholder="" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
         });  
          $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
         });  
          $('#submit').click(function(){            
           $.ajax({  
            url:"name.php",  
            method:"POST",  
            data:$('#add_name').serialize(),  
            success:function(data)  
            {  
             document.write (data);  
             $('#add_name')[0].reset();  
           }  
         });  
         });  
        });  
      </script>
