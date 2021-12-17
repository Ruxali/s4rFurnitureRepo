<!DOCTYPE html>
<html>
  <?php
    require('../connect.php');
    require('productHandler.php');
  include('adminfiles/session.php');
    include('adminfiles/head.php')
    ?>
    <?php 
$err=[];
$ini_code="NULL";
if(isset($_POST['submit'])){ 
    // print_r($_POST); 
    // print_r($_FILES);
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $status = 1;    
    

        if (isset($_FILES['picture']['error'] )&& $_FILES['picture']['error'] == 0)
        {
            if ($_FILES['picture']['error']<=1024000) 
            {
                $types = ['image/png','image/jpeg','image/gif','image/jpg','image/webp'];
                if (in_array($_FILES['picture']['type'] , $types)) 
                {
                    //generate random number
                    // $file_namea=$image_url1;
                    $file_namea=uniqid().'_'.$_FILES['picture']['name'];
                    //upload files to server
                    if(move_uploaded_file($_FILES['picture']['tmp_name'], 'image/'.$file_namea))
                    {
                        $image_urla="image/$file_namea";
                    }
                    else{
                        $err['file can not move to server'];
                    }
                }
                else{
                    $err['picture']='invalid types';
                }
            }
            else{
                $err['picture']='Image size';
            }       
        }
        else{
            // $err['photo']='file error vayo';
            $image_urla = $_POST['image1'];

        }
        if (isset($_FILES['picture2']['error'] )&& $_FILES['picture2']['error'] == 0)
        {
            if ($_FILES['picture2']['error']<=1024000) 
            {
                $types = ['image/png','image/jpeg','image/gif','image/jpg','image/webp'];
                if (in_array($_FILES['picture2']['type'] , $types)) 
                {
                    //generate random number
                    // $file_namea=$image_url1;
                    $file_namea=uniqid().'_'.$_FILES['picture2']['name'];
                    //upload files to server
                    if(move_uploaded_file($_FILES['picture2']['tmp_name'], 'image/'.$file_namea))
                    {
                        $image_urla="image/$file_namea";
                    }
                    else{
                        $err['file can not move to server'];
                    }
                }
                else{
                    $err['picture2']='invalid types';
                }
            }
            else{
                $err['picture2']='Image size';
            }       
        }
        else{
            // $err['photo']='file error vayo';
            $image_url = $_POST['image2'];

        }
        if (isset($_FILES['picture3']['error'] )&& $_FILES['picture3']['error'] == 0)
        {
            if ($_FILES['picture3']['error']<=1024000) 
            {
                $types = ['image/png','image/jpeg','image/gif','image/jpg','image/webp'];
                if (in_array($_FILES['picture3']['type'] , $types)) 
                {
                    //generate random number
                    // $file_namea=$image_url1;
                    $file_namea=uniqid().'_'.$_FILES['picture3']['name'];
                    //upload files to server
                    if(move_uploaded_file($_FILES['picture3']['tmp_name'], 'image/'.$file_namea))
                    {
                        $image_urla="image/$file_namea";
                    }
                    else{
                        $err['file can not move to server'];
                    }
                }
                else{
                    $err['picture3']='invalid types';
                }
            }
            else{
                $err['picture3']='Image size';
            }       
        }
        else{
            // $err['photo']='file error vayo';
            $image_urlb = $_POST['image3'];

        }
        if (isset($_FILES['picture4']['error'] )&& $_FILES['picture4']['error'] == 0)
        {
            if ($_FILES['picture4']['error']<=1024000) 
            {
                $types = ['image/png','image/jpeg','image/gif','image/jpg','image/webp'];
                if (in_array($_FILES['picture4']['type'] , $types)) 
                {
                    //generate random number
                    // $file_namea=$image_url1;
                    $file_namea=uniqid().'_'.$_FILES['picture4']['name'];
                    //upload files to server
                    if(move_uploaded_file($_FILES['picture4']['tmp_name'], 'image/'.$file_namea))
                    {
                        $image_urla="image/$file_namea";
                    }
                    else{
                        $err['file can not move to server'];
                    }
                }
                else{
                    $err['picture4']='invalid types';
                }
            }
            else{
                $err['picture4']='Image size';
            }       
        }
        else{
            // $err['photo']='file error vayo';
            $image_urlc = $_POST['image4'];

        }


    $id = $_POST['id'];
    	//count no of error into form
	if (count($err) == 0) {
		//include database connection 
		require_once '../connect.php';
		//sql query to insert data into database taken from form
		$sql = "UPDATE products SET `name` = '$name', `price` = '$name',`description` = '$description',`image` = '$image_url' WHERE id='$id'";
		//execute query
		if ($connect->query($sql)){	
            ?>  
            <script type="text/javascript">
            window.location.href = 'productsshow.php?success=1';
            </script>
            <?php
        } else {
			die("Product updated failed $connect->error");
		}
			

	}

}


if(isset($_GET['id'])) {  
    // echo "mission 1 success";
    $id= $_GET['id'];

    $sql = "SELECT * FROM products WHERE id='$id' ";
  $res = mysqli_query($connect,$sql);
  $row = $res->fetch_assoc();

//   $i = 1;
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
          <center><h1>
            PRODUCTS
          </h1></center>
        </section>
          
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-sm-3">
              
            </div>
            <div class="col-sm-6"> 

            <form role="form"  method="post" enctype="multipart/form-data">
              <h1>Update Product</h1>
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Product name</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter product name" name="name" value="<?php echo $row['name'];?>">
                </div>
                <div class="form-group">
                  <label for="price">Price</label>
                  <input type="text" class="form-control" id="price" placeholder="Enter amount" name="price" value="<?php echo $row['price'];?>">
                </div>
                <div class="form-group">
                  <label for="picture">File input</label>
                  <input type="file" id="picture" name="file">
                </div>
                <div class="form-group">
                  <label for="picture">File input</label>
                  <input type="file" id="picture2" name="file">
                </div>
                <div class="form-group">
                  <label for="picture">File input</label>
                  <input type="file" id="picture3" name="file">
                </div>
                <div class="form-group">
                  <label for="picture">File input</label>
                  <input type="file" id="picture4" name="file">
                </div>
                <div class="form-group">
                  <label for="description">Product description</label>
                  <textarea id="description" class="form-control" rows="5" placeholder="Enter description" name="description" value="<?php echo $row['description'];?>">
                  </textarea>
                </div>
                <div class="form-group">
                  <label for="category">Category</label>
                  <select id="category" name="category">
                    <?php
                    include('../connect.php');
                    $cat="SELECT * from categories";
                    $results=mysqli_query($connect,$cat);
                    while($row=mysqli_fetch_assoc($results)){
                    echo "<option value=".$row['id'].">".$row['name']."</option>";
                    }
                    ?>
                  </select>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
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