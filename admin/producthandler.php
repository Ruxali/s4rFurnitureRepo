<?php
ob_start();
?>
<?php
require('../connect.php');
//check button click/ form submission
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $category = $_POST['category'];
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
                $fileNameNew = uniqid() . '_' . $fileName;
                $fileDestination = '../uploads/' . $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);

                //image 2
                $filess = $_FILES['file1'];
                $filesName = $_FILES['file1']['name'];
                $filesTmpName = $_FILES['file1']['tmp_name'];
                $filesSize = $_FILES['file1']['size'];
                $filesError = $_FILES['file1']['error'];
                $filesType = $_FILES['file1']['type'];

                $filesExt = explode('.', $filesName);
                $filesActualExt = strtolower(end($filesExt));

                $allowedd = array('jpg', 'jpeg', 'png');

                if (in_array($filesActualExt, $allowedd)) {
                    if ($filesError === 0) {
                        if ($filesSize < 5000000) {
                            $filesNameNew = uniqid() . '_' . $filesName;
                            $filesDestination = '../uploads/' . basename($filesNameNew);
                            move_uploaded_file($filesTmpName, $filesDestination);

                            //insert into db
                            $savecategory = "INSERT INTO products (`name`,`price`,`image1`,`image2`,`description`,`category_id`,`status`) VALUES ('$name', '$price', '$fileDestination', '$filesDestination', '$description', '$category','1')";
                            if ($connect->query($savecategory)) {
                                // if saved entry 
                                #2.header location
                                echo "Inserted successfully!";
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

