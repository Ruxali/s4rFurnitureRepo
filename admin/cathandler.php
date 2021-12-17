<?php
ob_start();
?>
<?php
require('../connect.php');
$check = "";
$msg = "";

// check if data arrived or not
if (isset($_POST['addnewcat'])) {
    //store data
    $check = $_POST['name'];
    $files = $_FILES['file'];
    //checking duplicate
    $checksql = "SELECT  * FROM categories WHERE name = '$check' ";
    $checkresult = $connect->query($checksql);

    if ($checkresult->num_rows > 0) {
        // if duplicate entry found

        #1. print error message
        $msg = "Category name already exists!";
        // or
        #2.header location
        header("'location: addCatgeories.php'");
    } else {

        //check ectension of image
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png');

        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 5000000) {
                    $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                    $fileDestination = '../uploads/' . $fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);

                    //insert into db
                    $savecategory = "INSERT INTO `categories`(`name`,`status`,`image`) VALUES ('$check','1','$fileDestination')";
                    if ($connect->query($savecategory)) {
                        // if saved entry 
                        #2.header location
                        header("Location: categories.php?uploadsuccess");
                    } else {
                        //if not saved in database print why not error
                        die("insert failed $connect->error");
                    }
                } else {
                    echo "Your file is too large!";
                }
            } else {
                echo "There was an error!";
            }
        } else {
            echo "You cannot upload files of this type";
        }
    }
}
//for update
if (isset($_POST['updatecat'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];
    $name = $_POST['name'];
    $files = $_FILES['file'];

    //check ectension of image
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 5000000) {
                $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                $fileDestination = '../uploads/' . $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);

                //insert into db
                $savecategory = "UPDATE categories SET `name` = '$name', `status`=  '$status', `image`=  '$fileDestination' WHERE id = '$id' ";
                if ($connect->query($savecategory)) {
                    // if saved entry 
                    #2.header location
                    header("Location: categories.php?uploadsuccess");
                } else {
                    //if not saved in database print why not error
                    die("insert failed $connect->error");
                }
            } else {
                echo "Your file is too large!";
            }
        } else {
            echo "There was an error!";
        }
    } else {
        echo "You cannot upload files of this type";
    }  

}
?>

`image2`,`image3`,`image4`, '$image_url', '$image_urlb', '$imageurlc',