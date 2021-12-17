<?php
error_reporting(0);
if (empty($_SESSION['username'] AND $_SESSION['password'])) {
	echo "<script> alert('Please Log In');
		window.location.href='login-register.php';
		</script>";
}

?>