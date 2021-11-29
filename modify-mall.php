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
          <div class="row">
            <div class="col-12 col-md-7">


              <div class="d-flex back-bg ">

                <form class="form-horizontal ">
                  <div class="form-group">
                    <label for="">Mall Name <span>*</span></label>
                    <input type="text" class="form-control" name="product-name" id="" aria-describedby="ProductName" placeholder="Product Name">
                  </div>
                  <div class="form-group">
                    <label for="">Address 1 <span>*</span></label>
                    <textarea class="form-control" id="address1" rows="3" name="address1"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="">Address 2 <span>*</span></label>
                    <textarea class="form-control" id="address2" rows="3" name="address2"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="">Secondary Number <span>*</span></label>
                    <input type="text" class="form-control" name="product-name" id="" aria-describedby="ProductName" placeholder="Product Name">
                  </div>
                  <div class="form-group">
                    <label for="">Country <span>*</span></label>
                    <select class="form-control" name="" id="" placeholder="Choose the country">
                      <option>India</option>
                      <option>USA</option>
                      <option>UAE</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">State <span>*</span></label>
                    <select class="form-control" name="" id="" placeholder="Choose the state">
                      <option>India</option>
                      <option>USA</option>
                      <option>UAE</option>
                    </select>
                  </div>
                  <div class="form-inline mt-3">
                    <div class="form-group col-md-6 col-12 pl-0">
                      <label for="">Upload Mall Logo<span> * </span></label>
                      <input type="file" class="form-control" id="inputGroupFile01">
                      <small>* It Accepts Only PNG and GIF Format Images *</small>
                    </div>
                    <div class="form-group col-md-6 col-12 pr-0">
                      <label for="">Upload Mall Photos</label>
                      <input type="file" class="form-control" id="inputGroupFile01">
                      <small>* It Accepts Only PNG and GIF Format Images *</small>
                    </div>
                  </div>

                  <div class="form-group d-flex justify-content-between mt-3">

                    <span class="text-blue">Convert Your Image Into Png Click Here!!</span>

                    <button class="btn btn-warning btn-sm" type="button" data-toggle="modal" data-target="#show-all-mall">Show All Mall Pics</button>

                  </div>

                  <div class="form-group">
                    <label for="">Floors <span>*</span></label>
                    <select class="form-control" name="" id="" placeholder="Floor">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                      <option>9</option>
                      <option>10</option>
                      <option>11</option>
                      <option>12</option>
                      <option>13</option>
                      <option>14</option>
                      <option>15</option>
                    </select>
                  </div>

                  <!-- Floors Div -->
                  <div class="form-inline">
                    <div class="ml-auto mb-3">
                      <button class="btn btn-info">Add Floor</button>
                    </div>
                  </div>


                  <div class="form-inline alert alert-secondary">
                    <div class="row p-0">
                      <div class="heading">
                        <h4>Floors</h4>
                      </div>
                    </div>
                    <div class="row p-0">

                      <div class="form-group col-md-5 col-12 pl-0">
                        <label for="">Floor name <span> * </span></label>
                        <input type="text" class="form-control" name="product-name" id="" aria-describedby="Floor name" placeholder="Floor name">
                      </div>

                      <div class="form-group col-md-5 col-12 pl-0">
                        <label for="">No of shops <span> * </span></label>
                        <input type="text" class="form-control" name="product-name" id="" aria-describedby="No of shops" placeholder="No of shops">
                      </div>

                      <div class="form-group mt-4 ml-auto col-md-2 pl-0 col-12">
                        <button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">


                    <textarea class="form-control" id="address2" rows="8" name="address2">City The World of Happiness.
Welcome to Vega City, South Bengaluru’s Global Experience Hub. Vega City strives to curate brands, cuisines, and events inculcating global influences with a local flavor, making it the place to be. Developed by the Blue Horizon Hotel Group, Vega City brings to you over 75 international and national brands, more than 23 restaurants, as well as South India’s first-ever PVR Superplex and entertainment opportunities, such as shopping festivals, a kids play zone, and music events, for the whole family to enjoy.</textarea>
                  </div>
                  <div class="form-group text-center">
                    <button class="btn btn-primary btn-md">Update Mall</button>
                  </div>

                  <!-- <div id="myDIV" class="header">
                <h2>My To Do List</h2>
                <input type="text" id="myInput" placeholder="Title...">
                <span onclick="newElement()" class="addBtn">Add</span>
              </div>

              <ul id="myUL">
                <li>Hit the gym</li>
                <li class="checked">Pay bills</li>
                <li>Meet George</li>
                <li>Buy eggs</li>
                <li>Read a book</li>
                <li>Organize office</li>
              </ul> -->

                </form>
              </div>
            </div>
            <div class="col-12 col-md-5" id="sidebar">
              <div class=" d-flex back-bg-2">
                <div class="img-in">
                  <img src="dist/img/io902.jpg" class="img-fluid">
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

  <div class="add-floor-sec">
    <div class="modal fade" id="show-all-mall" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

          <div class="modal-header">

            <div class="wrap-row">

              <div class="col-12 col-md-12">
                <h5 class="modal-title">Mall Images</h5>
              </div>

              <div class="col-12 col-md-12 text-right">
                <button class="btn btn-warning btn-md">Select All</button>
              </div>

            </div>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">

            <div class="wrap-row">
              <div> <img src="dist/img/kfc001.jpg" class="img-fluid" alt="">
                <input type="checkbox" id="01" name="c01" value="">
                <label for="c01"></label>
              </div>
              <div><img src="dist/img/kfc002.jpg" class="img-fluid" alt="">
                <input type="checkbox" id="02" name="c02" value="">
                <label for="c02"></label>
              </div>
              <div><img src="dist/img/kfc003.jpg" class="img-fluid" alt="">
                <input type="checkbox" id="03" name="c03" value="">
                <label for="c03"></label>
              </div>
              <div><img src="dist/img/kfc004.jpg" class="img-fluid" alt="">
                <input type="checkbox" id="04" name="c04" value="">
                <label for="c04"></label>
              </div>
              <div><img src="dist/img/kfc005.jpg" class="img-fluid" alt="">
                <input type="checkbox" id="05" name="c05" value="">
                <label for="c05"></label>
              </div>
              <div><img src="dist/img/kfc004.jpg" class="img-fluid" alt="">
                <input type="checkbox" id="06" name="c06" value="">
                <label for="c06"></label>
              </div>
              <div><img src="dist/img/kfc005.jpg" class="img-fluid" alt="">
                <input type="checkbox" id="07" name="c07" value="">
                <label for="c07"></label>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
            <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">Close</button>
            <button type="button" class="btn btn-danger">Delete</button>
          </div>

        </div>
      </div>
    </div>
  </div>


  <!-- jQuery -->
  <?php include "main_link_js.php"; ?>
  <script type="text/javascript">
    $(function() {
      var offset = $("#sidebar").offset();
      var topPadding = 80;
      $(window).scroll(function() {
        if ($(window).scrollTop() > offset.top) {
          $("#sidebar").stop().animate({
            marginTop: $(window).scrollTop() - offset.top + topPadding
          });
        } else {
          $("#sidebar").stop().animate({
            marginTop: '0px'
          });
        };
      });
    });
  </script>
</body>

</html>