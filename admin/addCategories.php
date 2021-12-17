<!DOCTYPE html>
<html>
<?php
require('../connect.php');
require('cathandler.php');
include('adminfiles/session.php');
include('adminfiles/head.php');
// initialize value
$name = "";
$status = "";
$id = "";


if (isset($_GET['updatecat'])) {
  $id = $_GET['updatecat'];
  //fetching data of id to show in form
  $Loremsql = "SELECT  * FROM categories WHERE id = '$id'";
  $Loremresult = $connect->query($Loremsql);
  $Loremdata = [];
  if ($Loremresult->num_rows > 0) {
    while ($Loremrow = $Loremresult->fetch_assoc()) {
      //overwrite value
      $name =  $Loremrow['name'];
      $status =  $Loremrow['status'];
    }
  }
}
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
        <center>
          <h1>
            CATEGORIES
          </h1>
        </center>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-sm-3">

          </div>
          <div class="col-sm-6">

            <form method="post" action="" enctype="multipart/form-data">
              <h1>Add Categories</h1>
              <div class="card-body card-block">
                <div class="form-group">
                  <!-- Hidden id and status  -->
                  <input type="hidden" name="id" id="" value="<?php echo $id?>">
                  <input type="hidden" name="status" id="" value="<?php echo $status?>">

                  <label for="name">Category name</label>

                  <input type="text" name="name" id="" placeholder="Enter categories name" class="form-control" value="<?php echo $name?>">
                </div>
                <div class="form-group">
                  <label for="picture">File input</label>
                  <input type="file" id="picture" name="file">
                </div>
                <div class="box-footer">
                  <!-- showing edit button if came for edit else showng submit button -->
                  <?php if (isset($_GET['updatecat']) != "") { ?>

                    <input type="submit" name="updatecat" class="btn btn-primary" value="Update">
                  <?php } else { ?>

                    <input type="submit" class="btn btn-primary" name="addnewcat" value="Add">
                  <?php } ?>
                </div>
                <div class="field_error" style="color:red; margin-top:15px;">
                  <?php echo $msg ?>
                </div>
              </div>
            </form>
          </div>
        </div>
      </section>
      <!-- /.content -->
      <div class="col-sm-3">
      </div>
    </div>
    <!-- /.content-wrapper -->
  </div>
  <?php
  include('adminfiles/footer.php');
  ?>
</body>

</html>