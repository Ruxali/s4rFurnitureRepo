<?php
include('../connect.php');
if(isset($_POST['update']))
{
	$newid=$_POST['form_id'];
	$newname=$_POST['name'];
	$newprice=$_POST['price'];
	$newdesc=$_POST['description'];
	$newcat=$_POST['category'];


$sql="UPDATE products set name='$newname', price='$newprice', description='$newdesc', category_id='$newcat' where id='$newid' ";

if(mysqli_query($connect,$sql)) {
	echo"Updated Successfully";
	header('location: productsshow.php');
} else {
	header('location: index.php');
}

}
