<?php

include('connect.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact(name, email, message) VALUES('$name','$email','$message')";
    $connect->query($sql);
    echo "<script> alert('Message successfully sent!');
	window.location.href='index.php';
	</script>";

?>