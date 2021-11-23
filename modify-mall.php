<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Modify Mall</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php include "main_link_css.php"; ?>
  <link rel="stylesheet" href="dist/css/modify-mall-style.css">
  
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
              <h1 class="m-md-0 mb-2">Modify Mall</h1>
            </div><!-- /.col -->

          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <!-- Main content -->
      <section class="content modify-mall-sec">
        <div class="container-fluid">
          <div class="d-flex back-bg">

          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong> <a href="#">UTF Technologies</a>.</strong>
      Copyright ©2021 All rights reserved
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <?php include "main_link_js.php"; ?>
</body>

</html>