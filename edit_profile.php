<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Edit Profile</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSS Links -->
  <?php include "main_link_css.php"; ?>

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
            <div class="col-sm-6">
              <h1 class="m-md-0 mb-2">Edit Profile</h1>
            </div><!-- /.col -->
            <div class="col-sm-6 ">
              <p class="text-left text-left text-md-right m-0">Lorem Ipsum dolor sit amet...</p>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <!-- Main content -->
      <section class="content prodict-profile">
        <div class="container-fluid">
          <div class="d-flex back-bg">
            <div class="col-12 col-md-4 p-0">
              <div class="card">
                <div class="card-body">
                  <div class="back-bg-in">
                    <img src="dist/img/kfc003.jpg" class="img-responsive">
                    <div class="user-profile-in">
                      <img src="dist/img/Kfc_logo.png" class="img-responsive">
                    </div>
                  </div>
                  <div class="profile-content-in">
                    <div class="cl-one">
                      <p>User ID</p>
                    </div>
                    <div class="cl-two">:</div>
                    <div class="cl-three">
                      <p>kfc@123</p>
                    </div>
                    <div class="cl-one">
                      <p>Name</p>
                    </div>
                    <div class="cl-two">:</div>
                    <div class="cl-three">
                      <p>KFC</p>
                    </div>
                    <div class="cl-one">
                      <p>Email</p>
                    </div>
                    <div class="cl-two">:</div>
                    <div class="cl-three">
                      <p>kaf@gmail.com</p>
                    </div>
                    <div class="cl-one">
                      <p>Phone</p>
                    </div>
                    <div class="cl-two">:</div>
                    <div class="cl-three">
                      <p>+22 8794 89094</p>
                    </div>
                  </div>
                  <div class="edit-btn"><button type="button" class="btn btn-warning btn-md" data-toggle="modal" data-target="#editprofile">Edit Profile</button></div>
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
      <strong> <a href="#">UTF Technologies</a>.</strong>
      Copyright ©2021 All rights reserved
    </footer>
  </div>
  <!-- ./wrapper -->
  <!-- Edit Password Modal Popup Begins -->
  <!-- Button trigger modal -->
  <!-- Modal -->
  <div class="edit-profile-model">
    <div class="modal fade" id="editprofile" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Edit Mall Organiser</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address<span> * </span></label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Current Password <span> * </span></label>
                <input type="current-password" class="form-control" id="exampleInputPassword1" placeholder="Current Password">
                <small id="emailHelp" class="form-text text-muted">we need your current password to confirm your changes *</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password<span> * </span></label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password confirmation<span> * </span></label>
                <input type="confirm-password" class="form-control" id="exampleInputPassword1" placeholder="Password confirmation">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
            <button type="button" class="btn btn-primary">Back</button>
            <button type="button" class="btn btn-info">Update</button>
          </div>
          <div class="modal-body">
            <div class="alert alert-default-danger text-center" role="alert">
              <h5 class="text-black pb-0">Cancel my account</h5>
              <p>Unhappy? <br /><button class="btn btn-sm btn-danger">Cancel my account</button></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Edit Password Modal Popup Ends -->
  <?php include "main_link_js.php"; ?>
</body>

</html>