<?php 
  session_start();
  if(empty($_SESSION['loggedin_id']))
  {
    header("Location: index.php");
  } else {

  include("db_connection.php");
    if(isset($_GET['id'])) {
        $cat_id = $_GET['id'];
        $sql = "SELECT * FROM category where category_id = '$cat_id'";
        $result = $conn->query($sql)->fetch_array();
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Naina Silks</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <?php include "sidebar.php"; ?>
                <!-- End of Sidebar -->

                <!-- Content Wrapper -->
                <div id="content-wrapper" class="d-flex flex-column">

                    <!-- Main Content -->
                    <div id="content">

                        <!-- Topbar -->
                        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-0 static-top shadow">

                            <!-- Sidebar Toggle (Topbar) -->
                            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                <i class="fa fa-bars"></i>
                            </button>

                            <!-- Topbar Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <div class="topbar-divider d-none d-sm-block"></div>

                                <!-- Nav Item - User Information -->
                                <li class="nav-item dropdown no-arrow">
                                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Welcome Admin</span>
                                        <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                                    </a>
                                    <!-- Dropdown - User Information -->
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                        <!-- End of Topbar -->

                        <!-- Begin Page Content -->
                        <div class="">
                            <!-- Page Heading -->
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            </div>
                            <div class="">

                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary" style="text-transform: capitalize;">Add Category</h6>
                                    </div>
                                    <div class="card-body" style="background: #f8f9fc;">
                                        <div class="table-responsive">
                                            <div class="col-lg-12">
                                                <div class="col-lg-4 col-xs-6" style="float: right;margin-bottom: 15px;text-align: right;">
                                                    <!-- small box -->
                                                    <div class="small-box bg-green">
                                                        <a href="total_categories.php" class="small-box-footer">View Total Categories <i class="fa fa-arrow-circle-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <form class="user" method="post" action="sav_files/sav_category.php" style="clear: both;" enctype="multipart/form-data">
                                                <!-- <input type="hidden" name="type_id" value="<?php if(isset($result)) { echo $result['type']; } ?>" id="typeId"> -->
                                                <input type="hidden" name="cat_id" value="<?php if(isset($result)) { echo $result['category_id']; } ?>" id="doctor_id">
                                                <div class="col-lg-12">
                                                    <div class="">
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 mb-4 mb-sm-0">
                                                                <label class="">Category Name</label>
                                                            </div>
                                                            <div class="col-sm-5 mb-8 mb-sm-0">
                                                                <input type="text" class="form-control form-control-user" name="category_name" placeholder="Enter Category Name" required value="<?php if(isset($result)) { echo $result['cat_name']; } ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 mb-4 mb-sm-0">
                                                                <label class="">Status</label>
                                                            </div>
                                                            <div class="col-sm-5 mb-8 mb-sm-0">
                                                                <!-- <input type="text" class="form-control form-control-user" name="type" placeholder="Enter First Name" required> -->
                                                                <select id="type" name="status" class="form-control-user form-control">
                                                                    <option value="">Select Status</option>
                                                                    <option value="1" <?php if(isset($result)) { if($result['status'] == 1) {echo "selected"; } } ?>>Active</option>
                                                                    <option value="0" <?php if(isset($result)) { if($result['status'] == 0) {echo "selected"; } }?>>Inactive</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="form-group row col-sm-12">
                                                    <div class="" style="float:right">
                                                        <input type="submit" class="btn btn-primary btn-user btn-block" name="add_new_order" value="Add Category">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Content Row -->
                            <!-- Content Row -->
                            <!-- Content Row -->
                        </div>
                        <!-- /.container-fluid -->
                    </div>
                    <!-- End of Main Content -->
                    <?php //include "footer.php"; ?>
                </div>
                <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">??</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="sav_files/logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>
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
        <script type="text/javascript">
            $(function() {
                var typeId = $('#typeId').val();
                $('.proceduresDiv').hide(); 
                $('#type').change(function(){
                    if($('#type').val() == '1') {
                        $('.proceduresDiv').show(); 
                    } else {
                        $('.proceduresDiv').hide(); 
                    } 
                });

                if(typeId == 1) {
                    $('.proceduresDiv').show();
                } else {
                    $('.proceduresDiv').hide();
                }
            });
        </script>

    </body>

    </html>
    <?php } ?>