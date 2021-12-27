<!DOCTYPE html>
<html>
<style>
    .buttons{
      display: flex;
      justify-content: center;
    }
  </style>
<?php
 require('../connect.php');
 require('functions.php');
    if(isset($_GET['type']) && $_GET['type']!='')
    {
        
        if($type=='delete')
        {
            $id= get_safe_value($connect,$_GET['id']);
            $delete_sql = "delete from contact where id='$id'";
            mysqli_query($connect,$delete_sql);
        }
    }

  $sql = "select * from contact order by id asc";
  $res = mysqli_query($connect,$sql);
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
        <center>
          <h1>
            MESSAGES
          </h1>
        </center>
      </section>
      <!-- Main content -->
      <div class="container">

        <div class="col-md-8 col-md-offset-2">

          <table class="table table-striped text-center" style="background-color: white;">
            <thead>
              <tr>
                <th style="font-size: large;">ID</th>
                <th style="font-size: large;">Name</th>
                <th style="font-size: large;">Email</th>
                <th style="font-size: large;">Message</th>
 
                <th style="font-size: large;">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php

              while ($row = mysqli_fetch_assoc($res)) { ?>
                <tr>
                  <td style="font-size: medium;"><?php echo $row['id'] ?></td>
                  <td style="font-size: medium;"><?php echo $row['name'] ?></td>
                  <td style="font-size: medium;"><?php echo $row['email'] ?></td>
                  <td style="font-size: medium;"><?php echo $row['message'] ?></td>
                  <td style="font-size: medium;">
                  <div class="buttons">
                    <?php
                    

                    echo "<button style='border-radius:6px;'><a style='color:red' href = '?type=delete&id=" . $row['id'] . "'>Delete</a></button>";
                    ?>
                    </div>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>


  </div>
  <?php
  include('adminfiles/footer.php');
  ?>
</body>

</html>