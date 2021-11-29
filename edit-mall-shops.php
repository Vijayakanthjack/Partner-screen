<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Edit Moll Shops</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include "main_link_css.php"; ?>
  <!-- CREATE/MODIFY SHOPS CSS-->
  <link rel="stylesheet" href="dist/css/edit-shops-style.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div id="preloader">
    <div class="sk-three-bounce">
      <div class="sk-child sk-bounce1"></div>
      <div class="sk-child sk-bounce2"></div>
      <div class="sk-child sk-bounce3"></div>
    </div>
  </div>
  <div class="wrapper">
    <!-- Navbar -->
    <?php include "header-menu.php"; ?>
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <?php include "side-menu.php"; ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div style="padding-top:4.4em;"></div>
      <div class="content-header" id="dashboard-con">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <h1 class="m-md-0 mb-2">Edit Mall Shops</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <!-- Main content -->
      <section class="content edit-mall-shops-sec">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 col-md-12">
              <div class="back-bg">
                <button class="btn btn-primary btn-sm" onclick="location.href='operations.php'"><i class="fas fa-angle-left"></i> Back</button>
                <div class="t-heading">
                  <h3>Lower Floor</h3>

                  <div style="overflow-x:auto;">
                    <table class="table table-striped table-responsive" width="100%">
                      <thead>
                        <tr>
                          <th>Shop No</th>
                          <th>Shop Size (sq.ft)</th>
                          <th>Shop Owner</th>
                          <th>Shop Name</th>
                          <th>Category</th>
                          <th>Shop Rent (per month)</th>
                          <th>Contact Number</th>
                          <th>Shop Logo</th>
                          <th>Change Shop Logo</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Shop No">
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Shop Size">
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Shop Owner Name">
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Shop No">
                            </div>
                          </td>
                          <td>
                            <div class="form-group">

                              <select class="form-control" name="" id="" placeholder="None Selected">
                                <option>India</option>
                                <option>USA</option>
                                <option>UAE</option>
                              </select>
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Shop Rent">
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Contact no">
                            </div>
                          </td>
                          <td>
                            <div class="img-in"><img src="dist/img/lgs/logo-0002.jpg" alt="" class="img-fluid"></div>
                          </td>
                          <td>
                            <div class="form-group">

                              <input type="file" class="form-control" id="inputGroupFile01">
                              <small>* It Accepts Only PNG and GIF Format Images *</small>
                            </div>
                          </td>
                          <td><button class="btn btn-info btn-sm" onclick="location.href='operations.php'">Remove Shop</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>

                <hr />

                <div class="t-heading">
                  <h3>First Floor</h3>
                  <div style="overflow-x:auto;">
                    <table class="table table-striped table-responsive" width="100%">
                      <thead>
                        <tr style="background-color:#36659e !important">
                          <th>Shop No</th>
                          <th>Shop Size (sq.ft)</th>
                          <th>Shop Owner</th>
                          <th>Shop Name</th>
                          <th>Category</th>
                          <th>Shop Rent (per month)</th>
                          <th>Contact Number</th>
                          <th>Shop Logo</th>
                          <th>Change Shop Logo</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Shop No">
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Shop Size">
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Shop Owner Name">
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Shop No">
                            </div>
                          </td>
                          <td>
                            <div class="form-group">

                              <select class="form-control" name="" id="" placeholder="None Selected">
                                <option>India</option>
                                <option>USA</option>
                                <option>UAE</option>
                              </select>
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Shop Rent">
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Contact no">
                            </div>
                          </td>
                          <td>
                            <div class="img-in"><img src="dist/img/lgs/logo-0002.jpg" alt="" class="img-fluid"></div>
                          </td>
                          <td>
                            <div class="form-group">

                              <input type="file" class="form-control" id="inputGroupFile01">
                              <small>* It Accepts Only PNG and GIF Format Images *</small>
                            </div>
                          </td>
                          <td><button class="btn btn-info btn-sm" onclick="location.href='operations.php'">Remove Shop</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <hr />

                <div class="t-heading">
                  <h3>Second Floor</h3>
                  <div style="overflow-x:auto;">
                    <table class="table table-striped table-responsive" width="100%">
                      <thead>
                        <tr style="background-color:#b65855 !important">
                          <th>Shop No</th>
                          <th>Shop Size (sq.ft)</th>
                          <th>Shop Owner</th>
                          <th>Shop Name</th>
                          <th>Category</th>
                          <th>Shop Rent (per month)</th>
                          <th>Contact Number</th>
                          <th>Shop Logo</th>
                          <th>Change Shop Logo</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Shop No">
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Shop Size">
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Shop Owner Name">
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Shop No">
                            </div>
                          </td>
                          <td>
                            <div class="form-group">

                              <select class="form-control" name="" id="" placeholder="None Selected">
                                <option>India</option>
                                <option>USA</option>
                                <option>UAE</option>
                              </select>
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Shop Rent">
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Contact no">
                            </div>
                          </td>
                          <td>
                            <div class="img-in"><img src="dist/img/lgs/logo-0002.jpg" alt="" class="img-fluid"></div>
                          </td>
                          <td>
                            <div class="form-group">

                              <input type="file" class="form-control" id="inputGroupFile01">
                              <small>* It Accepts Only PNG and GIF Format Images *</small>
                            </div>
                          </td>
                          <td><button class="btn btn-info btn-sm" onclick="location.href='operations.php'">Remove Shop</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <hr />

                <div class="t-heading">
                  <h3>Third Floor</h3>
                  <div style="overflow-x:auto;">
                    <table class="table table-striped table-responsive" width="100%">
                      <thead>
                        <tr style="background-color:#6f8b34 !important">
                          <th>Shop No</th>
                          <th>Shop Size (sq.ft)</th>
                          <th>Shop Owner</th>
                          <th>Shop Name</th>
                          <th>Category</th>
                          <th>Shop Rent (per month)</th>
                          <th>Contact Number</th>
                          <th>Shop Logo</th>
                          <th>Change Shop Logo</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Shop No">
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Shop Size">
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Shop Owner Name">
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Shop No">
                            </div>
                          </td>
                          <td>
                            <div class="form-group">

                              <select class="form-control" name="" id="" placeholder="None Selected">
                                <option>India</option>
                                <option>USA</option>
                                <option>UAE</option>
                              </select>
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Shop Rent">
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Contact no">
                            </div>
                          </td>
                          <td>
                            <div class="img-in"><img src="dist/img/lgs/logo-0002.jpg" alt="" class="img-fluid"></div>
                          </td>
                          <td>
                            <div class="form-group">

                              <input type="file" class="form-control" id="inputGroupFile01">
                              <small>* It Accepts Only PNG and GIF Format Images *</small>
                            </div>
                          </td>
                          <td><button class="btn btn-info btn-sm" onclick="location.href='operations.php'">Remove Shop</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <hr />

                <div class="t-heading">
                  <h3>Fourth Floor</h3>
                  <div style="overflow-x:auto;">
                    <table class="table table-striped table-responsive" width="100%">
                      <thead>
                        <tr style="background-color:#623f90 !important">
                          <th>Shop No</th>
                          <th>Shop Size (sq.ft)</th>
                          <th>Shop Owner</th>
                          <th>Shop Name</th>
                          <th>Category</th>
                          <th>Shop Rent (per month)</th>
                          <th>Contact Number</th>
                          <th>Shop Logo</th>
                          <th>Change Shop Logo</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Shop No">
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Shop Size">
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Shop Owner Name">
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Shop No">
                            </div>
                          </td>
                          <td>
                            <div class="form-group">

                              <select class="form-control" name="" id="" placeholder="None Selected">
                                <option>India</option>
                                <option>USA</option>
                                <option>UAE</option>
                              </select>
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Shop Rent">
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Contact no">
                            </div>
                          </td>
                          <td>
                            <div class="img-in"><img src="dist/img/lgs/logo-0002.jpg" alt="" class="img-fluid"></div>
                          </td>
                          <td>
                            <div class="form-group">

                              <input type="file" class="form-control" id="inputGroupFile01">
                              <small>* It Accepts Only PNG and GIF Format Images *</small>
                            </div>
                          </td>
                          <td><button class="btn btn-info btn-sm" onclick="location.href='operations.php'">Remove Shop</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <hr />
                <div class="text-center">
                  <button class="btn btn-primary btn-md">Update Shop</button>
                </div>

              </div>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong> .</strong>
      Copyright ©2021 All rights reserved
    </footer>
  </div>
  <!-- ./wrapper -->
  <!-- jQuery -->
  <?php include "main_link_js.php"; ?>
</body>

</html>