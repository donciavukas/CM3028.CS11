<?php
	include 'DBCONNECT.php';
  session_start();

	$email = $_POST ['inputEmail'];
	$password = md5($_POST ['inputPassword']);

	$sql = "SELECT * FROM user WHERE (email = '$email') AND (password='$password')";
	$result = mysqli_query($db,$sql);

	if(!$row = mysqli_fetch_assoc($result)){
		echo "Incorrect";
	}else{
    $_SESSION['id'] = $row['id'];
    $_SESSION['firstName'] = $row['firstName'];
		header("Location: index.php");
	}

