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
        $type= get_safe_value($connect,$_GET['type']);
        if($type=='status')
        {
            $operation= get_safe_value($connect,$_GET['operation']);
            $id= get_safe_value($connect,$_GET['id']);
            if($operation=='active')
            {
                $status='1';
            }else{
                $status='0';
            }
            $update_status_sql = "update products set status='$status' where id='$id'";
            mysqli_query($connect,$update_status_sql);
        }
        if($type=='delete')
        {
            $id= get_safe_value($connect,$_GET['id']);
            $delete_sql = "delete from products where id='$id'";
            mysqli_query($connect,$delete_sql);
        }
    }

  $sql = "SELECT c.name AS catname, d.* FROM products d JOIN categories c ON d.category_id = c.id ORDER BY d.id";
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
            PRODUCTS
          </h1>
        </center>
      </section>
      <!-- Main content -->
      <div class="container">

        <div class="col-md-8 col-md-offset-2">

          <h4 class="text-right"><a href="addProducts.php"><u>ADD PRODUCTS</u></a>
          </h4>
          <table class="table table-striped text-center" style="background-color: white;">
            <thead>
              <tr>
                <th style="font-size: large;">ID</th>
                <th style="font-size: large;">Product Name</th>
                <th style="font-size: large;">Category Name</th>
                <th style="font-size: large;">Price</th>
                <th style="font-size: large;">Description</th>
                <th style="font-size: large;">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php

              while ($row = mysqli_fetch_assoc($res)) { ?>
                <tr>

                  <td style="font-size: medium;"><?php echo $row['id'] ?></td>
                  <td style="font-size: medium;"><?php echo $row['name'] ?></td>
                  <td style="font-size: medium;"><?php echo $row['catname'] ?></td>
                  <td style="font-size: medium;"><?php echo $row['price'] ?></td>
                  <td style="font-size: medium;"><?php echo $row['description'] ?></td>
                  <td style="font-size: medium;">
                  <div class="buttons">
                    <?php
                    if ($row['status'] == 1) {
                      echo "<button style='border-radius:6px;' ><a style='color:green;' href = '?type=status&operation=deactive&id=" . $row['id'] . "'>Active</a></button>&nbsp;&nbsp;&nbsp;";
                    } else {
                      echo "<button style='border-radius:6px;'><a style='color:blue;' href = '?type=status&operation=active&id=" . $row['id'] . " '>Deactive</a></button>&nbsp;&nbsp;&nbsp;";
                    }
                    echo "<button style='border-radius:6px;'><a style='color:brown;' href ='updateProducts.php?id=" . $row['id'] . "'>Edit</a></button>&nbsp;&nbsp;&nbsp;";

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