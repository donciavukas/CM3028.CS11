<?php
	include 'DBCONNECT.php';
  session_start();

	$email = $_POST ['inputEmail'];
	$password = md5($_POST ['inputPassword']);

	$sql = "SELECT * FROM user WHERE (email = '$email') AND (password='$password')";
	$result = mysqli_query($db,$sql);

	if(!$row = mysqli_fetch_assoc($result)){
		echo "Incorrect redirecting in 5 seconds";
    header( "refresh:5;url=index.php" );
	}else{
    $_SESSION['id'] = $row['id'];
    $_SESSION['firstName'] = $row['firstName'];
		header("Location: index.php");
	}

