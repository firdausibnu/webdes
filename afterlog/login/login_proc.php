<?php
	session_start();
	include "../connect/a_connect.php";
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$sql = "SELECT * from user where username='$username' and password='$password'";
	$stmt = $db->prepare($sql);
    $stmt->execute();
	
	$numrows = $stmt -> rowCount();
	if($numrows==TRUE){
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		header("Location: ../index.php");
	}
	else{
             echo '<script>alert("username atau password salah, silahkan login kembali");window.location.replace("../../index.html");</script>'; 
	//	header("Location: ../../index.php");
	}
?>