<?php
session_start();

include('connect.php');
$username=$_POST['username'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$password2=md5($_POST['password2']);

if ($password==$password2) {
    if((strlen($password) >= 8)){
        $email_check = "SELECT * FROM customers WHERE email = '$email' ";
        $res = mysqli_query($connect, $email_check);
        if(mysqli_num_rows($res) > 0){
            echo "<script> alert('Email already exists');
            window.location.href='login-register.php';
            </script>";
        }else{
        
	$sql="INSERT INTO customers(username, email, password) VALUES('$username','$email','$password')";
	$connect->query($sql);
	echo "<script> alert('Registration successful');
	window.location.href='login-register.php';
	</script>";
}
    }else{
        echo "<script> alert('Password must be at least 8 characters');
	window.location.href='login-register.php';
	</script>";
    }
} else {
	echo "<script> alert('Password did not match');
	window.location.href='login-register.php';
	</script>";
}