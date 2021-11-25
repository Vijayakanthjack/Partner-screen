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
            <form class="form-horizontal">
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

              <div class="form-group mt-3 text-right">
                <button class="btn btn-warning btn-sm">Show All Mall Pics</button>
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

              <div id="myDIV" class="header">
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
              </ul>

            </form>
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