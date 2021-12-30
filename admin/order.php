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
            $update_status_sql = "update order_details set status='$status' where id='$id'";
            mysqli_query($connect,$update_status_sql);
        }
        if($type=='delete')
        {
            $id= get_safe_value($connect,$_GET['id']);
            $delete_sql = "delete from order_details where id='$id'";
            mysqli_query($connect,$delete_sql);
        }
    }

  $sql = "SELECT c.username AS customer,e.address AS address, e.id AS orderid,e.phone AS phone, e.total AS total, f.name AS products, d.* FROM order_details d JOIN customers c ON d.customer_id = c.id  JOIN orders e ON d.order_id = e.id JOIN products f ON d.product_id = f.id ORDER BY d.id  asc"; 
  $res = mysqli_query($connect,$sql);
?>
<?php
include('adminfiles/session.php');
include('adminfiles/head.php');
?>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php
    include('adminfiles/header.php');
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
            ORDERS
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
                <th style="font-size: large; width:100px;">Customer Name</th>
                <th style="font-size: large;">Product Name</th>
                <th style="font-size: large;">Address</th>
                <th style="font-size: large;">Phone</th>
                <th style="font-size: large;">Quantity</th>
                <th style="font-size: large;">Total</th>
                <th style="font-size: large;">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
               
   
              while ($row = mysqli_fetch_assoc($res)) { ?>
                <tr>
                  <td style="font-size: medium;"><?php echo $row['orderid'] ?></td>
                  <td style="font-size: medium;"><?php echo $row['customer'] ?></td>
                  <td style="font-size: medium;"><?php echo $row['products'] ?></td>
                  <td style="font-size: medium;"><?php echo $row['address'] ?></td>
                  <td style="font-size: medium;"><?php echo $row['phone'] ?></td>
                  <td style="font-size: medium;"><?php echo $row['quantity'] ?></td>
                  <td style="font-size: medium;">Rs. <?php echo $row['total'] ?></td>
                  <td style="font-size: medium;">
                  <div class="buttons">
                    <?php
                    if ($row['status'] == 1) {
                        echo "<button style='border-radius:6px;' ><a style='color:green;' href = '?type=status&operation=deactive&id=" . $row['id'] . "'>Delievered</a></button>&nbsp;&nbsp;&nbsp;";
                      } else {
                        echo "<button style='border-radius:6px;'><a style='color:blue;' href = '?type=status&operation=active&id=" . $row['id'] . " '>Order Placed</a></button>&nbsp;&nbsp;&nbsp;";
                      }

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