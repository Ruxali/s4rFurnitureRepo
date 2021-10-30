<!DOCTYPE html>
<html>
  <?php
    include('adminfiles/session.php');
    include('adminfiles/head.php');
    ?>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <?php
        include('adminfiles/header.php')
        ?>
      <!-- Left side column. contains the logo and sidebar -->
      <?php
        include('adminfiles/aside.php');
        ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <center><h1>
            DASHBOARD
          </h1></center>
        </section>
          
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-sm-9">
            <a href="products.php">
                <button style="color: green;">Add Products</button>
                </a>
                <hr>
              </div>
              <div class="col-sm-9">
            <a href="addCategories.php">
                <button style="color: green;">Add Categories</button>
                </a>
                <hr>
              </div>
          </div>
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
    </div>
    <?php
      include('adminfiles/footer.php');
      ?>
  </body>
</html>