<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>UTF Technologies Products</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="dist/css/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="dist/css/ionicons.min.css">
  <script src="dist/js/a57b6c8938.js" crossorigin="anonymous"></script>
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="dist/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="dist/css/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.css">

  <link rel="stylesheet" href="dist/css/product.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="dist/css/OverlayScrollbars.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

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
    <?php include "side-menu.php"; ?>
    <!-- Main Sidebar Container -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div style="padding-top:4.4em;"></div>
      <div class="content-header" id="dashboard-con">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <h1 class="m-md-0 mb-2">Edit Products</h1>
            </div><!-- /.col -->
            <div class="col-sm-6 ">
              <p class="text-left text-left text-md-right m-0">Lorem Ipsum dolor sit amet...</p>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content prodict-edit">
        <div class="container-fluid">
          <div class="d-flex back-bg">
            <div class="col-12 col-md-12 p-2">

              <!-- <div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" checked>
    Display value
  </label>
</div> -->
              <form class="form-horizontal">

                <div class="form-group">
                  <label for="">Product Name <span>*</span></label>
                  <input type="text" class="form-control" name="product-name" id="" aria-describedby="ProductName" placeholder="Product Name">
                </div>

                <div class="form-inline">

                  <div class="form-group col-md-6 col-6 pl-0">
                    <label for="">Category <span> * </span></label>
                    <input type="text" class="form-control" name="product-name" id="" aria-describedby="Category" placeholder="Category">
                  </div>

                  <div class="form-group  col-md-6 col-6  pr-0">
                    <label for="">Sub Category <span> * </span></label>
                    <input type="text" class="form-control" name="product-name" id="" aria-describedby="Sub Category" placeholder="Sub Category">
                  </div>

                </div>

                <div class="form-inline">

                  <div class="form-group col-md-6 col-6 pl-0">
                    <label for="">Brand Name <span> * </span></label>
                    <input type="text" class="form-control" name="product-name" id="" aria-describedby="Brand Name" placeholder="Brand Name">
                  </div>

                  <div class="form-group  col-md-6 col-6  pr-0 fr-input">
                    <label for="">COD Available <span> * </span></label>

                    <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" checked>

                  </div>

                </div>

                <div class="form-group">
                  <label for="">No of Varients <span>*</span></label>
                  <select class="form-control" name="" id="" placeholder="No of Varients">
                    <option>Variety 1</option>
                    <option>Variety 2</option>
                    <option>Variety 3</option>
                  </select>
                </div>

                <div class="card-body">
                  <h3>Add Varient</h3>

                  <div class="form-inline mt-3">

                    <div class="form-group col-md-3 col-12 pl-0">
                      <label for="">Varient Category <span> * </span></label>
                      <input type="text" class="form-control" name="product-name" id="" aria-describedby="Varient Category" placeholder="Varient Category">
                    </div>

                    <div class="form-group  col-md-3 col-12  pr-0">
                      <label for="">Varient Price <span> * </span></label>
                      <input type="text" class="form-control" name="product-name" id="" aria-describedby="Varient Price" placeholder="Varient Price">
                    </div>

                    <div class="form-group  col-md-3 col-12  pr-0">
                      <label for="">Varient Barcode <span> * </span></label>
                      <input type="text" class="form-control" name="product-name" id="" aria-describedby="Varient Barcode" placeholder="Varient Barcode">
                    </div>

                    <div class="form-group  col-md-3 col-12  pr-0">
                      <label for="">&nbsp;</label>
                      <input type="submit" class="btn btn-sm btn-info" value="Add Varient">
                      <input type="submit" class="btn btn-sm btn-danger" value="Remove Varient">
                    </div>

                  </div>





                </div>

                <div class="form-inline mt-3">
                  <div class="form-group col-md-4 col-12">
                    <label for="">Product Logo <span> * </span></label>
                    <input type="file" class="form-control" id="inputGroupFile01">
                    <small>* It Accepts Only PNG and GIF Format Images *</small>

                  </div>

                  <div class="form-group col-md-4 col-12">
                    <label for="">Product Photos</label>
                    <input type="file" class="form-control" id="inputGroupFile01">
                    <small>* It Accepts Only PNG and GIF Format Images *</small>
                  </div>

                  <div class="form-group col-md-4 col-12">
                    <label for="">Product video(Optional)</label>
                    <input type="file" class="form-control" id="inputGroupFile01">
                    <small>&nbsp;</small>
                  </div>
                </div>

                <div class="form-inline mt-3">
                  <div class="form-group col-md-4 col-12">
                    <label for="">Product SGST <span> * </span></label>
                    <input type="text" class="form-control" name="product-name" id="" aria-describedby="Product SGST" placeholder="Product SGST">

                  </div>

                  <div class="form-group col-md-4 col-12">
                    <label for="">Product CGST <span> * </span></label>
                    <input type="text" class="form-control" name="product-name" id="" aria-describedby="Product CGST" placeholder="Product CGST">
                  </div>

                  <div class="form-group col-md-4 col-12">
                    <label for="">Product Discount <span> * </span></label>
                    <input type="text" class="form-control" name="product-name" id="" aria-describedby="Product Discount" placeholder="Product Discount">
                  </div>
                </div>
                <div class="form-group">
                  <label for="">Product Specification <span>*</span></label>
                  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
                  <script>
                    tinymce.init({
                      selector: 'textarea'
                    });
                  </script>
                  <textarea>Easy (and free!) You should check out our premium features.</textarea>


                </div>

                <div class="form-group">
                  <label for="">Product Description <span>*</span></label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Description here"></textarea>
                </div>



              </form>

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

  <!-- jQuery -->
  <script src="dist/js/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="dist/js/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <!-- Bootstrap 4 -->
  <script src="dist/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->

  <!-- Tempusdominus Bootstrap 4 -->
  <script src="dist/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->

  <!-- overlayScrollbars -->
  <script src="dist/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->


  <script>
    $(window).scroll(function() {
      if ($(this).scrollTop() > 50) {
        $('#main-header').addClass('main-header-color');
      } else {
        $('#main-header').removeClass('main-header-color');
      }
    });
  </script>

</body>

</html>