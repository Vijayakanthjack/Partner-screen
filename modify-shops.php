<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CREATE / MODIFY SHOPS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include "main_link_css.php"; ?>
  <!-- CREATE/MODIFY SHOPS CSS-->
  <link rel="stylesheet" href="dist/css/modify-shops-style.css">
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
              <h1 class="m-md-0 mb-2">CREATE/MODIFY SHOPS</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <!-- Main content -->
      <section class="content create-modify-shops-sec">
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
                          <th>Shop Number</th>
                          <th>Shop Logo</th>
                          <th>Shop Name</th>
                          <th>Shop Owner</th>
                          <th>Shop Contact Number</th>
                          <th>Shop Size(sq.ft)</th>
                          <th>Shop Rent</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>LF 001</td>
                          <td>
                            <div class="img-in"><img src="dist/img/lgs/logo-0001.jpg" alt="" class="img-fluid"></div>
                          </td>
                          <td>New U</td>
                          <td>raj</td>
                          <td>8067922333</td>
                          <td>1200</td>
                          <td>12000</td>
                          <td><button class="btn btn-info btn-sm" onclick="location.href='edit-mall-shops.php'">Edit Shop</button></td>
                        </tr>
                        <tr>
                          <td>LF 001</td>
                          <td>
                            <div class="img-in"><img src="dist/img/lgs/logo-0002.jpg" alt="" class="img-fluid"></div>
                          </td>
                          <td>New U</td>
                          <td>raj</td>
                          <td>8067922333</td>
                          <td>1200</td>
                          <td>12000</td>
                          <td><button class="btn btn-info btn-sm" onclick="location.href='edit-mall-shops.php'">Edit Shop</button></td>
                        </tr>
                        <tr>
                          <td>LF 001</td>
                          <td>
                            <div class="img-in"><img src="dist/img/lgs/logo-0003.jpg" alt="" class="img-fluid"></div>
                          </td>
                          <td>New U</td>
                          <td>raj</td>
                          <td>8067922333</td>
                          <td>1200</td>
                          <td>12000</td>
                          <td><button class="btn btn-info btn-sm" onclick="location.href='operations.php'">Edit Shop</button></td>
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
                      <tr style="background-color:#36659e !important; color:#fff;">
                        <th>Shop Number</th>
                        <th>Shop Logo</th>
                        <th>Shop Name</th>
                        <th>Shop Owner</th>
                        <th>Shop Contact Number</th>
                        <th>Shop Size(sq.ft)</th>
                        <th>Shop Rent</th>
                        <th>Actions</th>
                      </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>LF 001</td>
                          <td>
                            <div class="img-in"><img src="dist/img/lgs/logo-0001.jpg" alt="" class="img-fluid"></div>
                          </td>
                          <td>New U</td>
                          <td>raj</td>
                          <td>8067922333</td>
                          <td>1200</td>
                          <td>12000</td>
                          <td><button class="btn btn-info btn-sm" onclick="location.href='edit-mall-shops.php'">Edit Shop</button></td>
                        </tr>
                        <tr>
                          <td>LF 001</td>
                          <td>
                            <div class="img-in"><img src="dist/img/lgs/logo-0002.jpg" alt="" class="img-fluid"></div>
                          </td>
                          <td>New U</td>
                          <td>raj</td>
                          <td>8067922333</td>
                          <td>1200</td>
                          <td>12000</td>
                          <td><button class="btn btn-info btn-sm" onclick="location.href='edit-mall-shops.php'">Edit Shop</button></td>
                        </tr>
                        <tr>
                          <td>LF 001</td>
                          <td>
                            <div class="img-in"><img src="dist/img/lgs/logo-0003.jpg" alt="" class="img-fluid"></div>
                          </td>
                          <td>New U</td>
                          <td>raj</td>
                          <td>8067922333</td>
                          <td>1200</td>
                          <td>12000</td>
                          <td><button class="btn btn-info btn-sm" onclick="location.href='edit-mall-shops.php'">Edit Shop</button></td>
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
                          <th>Shop Number</th>
                          <th>Shop Logo</th>
                          <th>Shop Name</th>
                          <th>Shop Owner</th>
                          <th>Shop Contact Number</th>
                          <th>Shop Size(sq.ft)</th>
                          <th>Shop Rent</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>LF 001</td>
                          <td>
                            <div class="img-in"><img src="dist/img/lgs/logo-0001.jpg" alt="" class="img-fluid"></div>
                          </td>
                          <td>New U</td>
                          <td>raj</td>
                          <td>8067922333</td>
                          <td>1200</td>
                          <td>12000</td>
                          <td><button class="btn btn-info btn-sm" onclick="location.href='edit-mall-shops.php'">Edit Shop</button></td>
                        </tr>
                        <tr>
                          <td>LF 001</td>
                          <td>
                            <div class="img-in"><img src="dist/img/lgs/logo-0002.jpg" alt="" class="img-fluid"></div>
                          </td>
                          <td>New U</td>
                          <td>raj</td>
                          <td>8067922333</td>
                          <td>1200</td>
                          <td>12000</td>
                          <td><button class="btn btn-info btn-sm" onclick="location.href='edit-mall-shops.php'">Edit Shop</button></td>
                        </tr>
                        <tr>
                          <td>LF 001</td>
                          <td>
                            <div class="img-in"><img src="dist/img/lgs/logo-0003.jpg" alt="" class="img-fluid"></div>
                          </td>
                          <td>New U</td>
                          <td>raj</td>
                          <td>8067922333</td>
                          <td>1200</td>
                          <td>12000</td>
                          <td><button class="btn btn-info btn-sm" onclick="location.href='edit-mall-shops.php'">Edit Shop</button></td>
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
                          <th>Shop Number</th>
                          <th>Shop Logo</th>
                          <th>Shop Name</th>
                          <th>Shop Owner</th>
                          <th>Shop Contact Number</th>
                          <th>Shop Size(sq.ft)</th>
                          <th>Shop Rent</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>LF 001</td>
                          <td>
                            <div class="img-in"><img src="dist/img/lgs/logo-0001.jpg" alt="" class="img-fluid"></div>
                          </td>
                          <td>New U</td>
                          <td>raj</td>
                          <td>8067922333</td>
                          <td>1200</td>
                          <td>12000</td>
                          <td><button class="btn btn-info btn-sm" onclick="location.href='edit-mall-shops.php'">Edit Shop</button></td>
                        </tr>
                        <tr>
                          <td>LF 001</td>
                          <td>
                            <div class="img-in"><img src="dist/img/lgs/logo-0002.jpg" alt="" class="img-fluid"></div>
                          </td>
                          <td>New U</td>
                          <td>raj</td>
                          <td>8067922333</td>
                          <td>1200</td>
                          <td>12000</td>
                          <td><button class="btn btn-info btn-sm" onclick="location.href='edit-mall-shops.php'">Edit Shop</button></td>
                        </tr>
                        <tr>
                          <td>LF 001</td>
                          <td>
                            <div class="img-in"><img src="dist/img/lgs/logo-0003.jpg" alt="" class="img-fluid"></div>
                          </td>
                          <td>New U</td>
                          <td>raj</td>
                          <td>8067922333</td>
                          <td>1200</td>
                          <td>12000</td>
                          <td><button class="btn btn-info btn-sm" onclick="location.href='edit-mall-shops.php'">Edit Shop</button></td>
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
                          <th>Shop Number</th>
                          <th>Shop Logo</th>
                          <th>Shop Name</th>
                          <th>Shop Owner</th>
                          <th>Shop Contact Number</th>
                          <th>Shop Size(sq.ft)</th>
                          <th>Shop Rent</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>LF 001</td>
                          <td>
                            <div class="img-in"><img src="dist/img/lgs/logo-0001.jpg" alt="" class="img-fluid"></div>
                          </td>
                          <td>New U</td>
                          <td>raj</td>
                          <td>8067922333</td>
                          <td>1200</td>
                          <td>12000</td>
                          <td><button class="btn btn-info btn-sm" onclick="location.href='edit-mall-shops.php'">Edit Shop</button></td>
                        </tr>
                        <tr>
                          <td>LF 001</td>
                          <td>
                            <div class="img-in"><img src="dist/img/lgs/logo-0002.jpg" alt="" class="img-fluid"></div>
                          </td>
                          <td>New U</td>
                          <td>raj</td>
                          <td>8067922333</td>
                          <td>1200</td>
                          <td>12000</td>
                          <td><button class="btn btn-info btn-sm" onclick="location.href='edit-mall-shops.php'">Edit Shop</button></td>
                        </tr>
                        <tr>
                          <td>LF 001</td>
                          <td>
                            <div class="img-in"><img src="dist/img/lgs/logo-0003.jpg" alt="" class="img-fluid"></div>
                          </td>
                          <td>New U</td>
                          <td>raj</td>
                          <td>8067922333</td>
                          <td>1200</td>
                          <td>12000</td>
                          <td><button class="btn btn-info btn-sm" onclick="location.href='edit-mall-shops.php'">Edit Shop</button></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                  <hr />

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