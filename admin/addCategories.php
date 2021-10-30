<!DOCTYPE html>
<html>
<?php
    ob_start();
?>
<?php
require('../connect.php');
require('functions.php');
$name='';
  $msg='';

  if(isset($_GET['id']) && $_GET['id']!=''){
    $id=get_safe_value($connect,$_GET['id']);
    $res=mysqli_query($connect,"select * from categories where id='$id'");
    $check=mysqli_num_rows($res);
    if($check>0){
        $row=mysqli_fetch_assoc($res);
        $name=$row['name'];
    }else{
        header('Location:categories.php');
        die();
    }
  }

  if(isset($_POST['submit']))
  {
        $name=get_safe_value($connect,$_POST['name']);

        $res=mysqli_query($connect,"select * from categories where name='$name'");
        $check=mysqli_num_rows($res);
        if($check>0){
            if(isset($_GET['id']) && $_GET['id']!=''){
                $getData=mysqli_fetch_assoc($res);
                if($id==$getData['id']){

                }else{
                $msg="Categories already exists."; 
                }
            }else{
                $msg="Categories already exists."; 
            }
        }

        if($msg==''){
            if(isset($_GET['id']) && $_GET['id']!=''){
                mysqli_query($connect,"update categories set name='$name' where id='$id'");
            }else{
                mysqli_query($connect,"insert into categories(name,status) values('$name','1')");
            }
            header('Location:categories.php');
            
            die();
        }
                   
    }
?>
  <?php
  include('adminfiles/session.php');
    include('adminfiles/head.php')
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
            CATEGORIES
          </h1></center>
        </section>
          
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-sm-3">
              
            </div>
            <div class="col-sm-6"> 

            <form method="post">
            <h1>Add Categories</h1>
                            <div class="card-body card-block">
                                <div class="form-group">
                                
                  <label for="name">Category name</label>
                  
                                    <input type="text" name="name" placeholder="Enter categories name"
                                        class="form-control" required value="<?php echo $name?>">
                                </div>
                                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
                                <div class="field_error" style="color:red; margin-top:15px;">
                                    <?php echo $msg?>
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