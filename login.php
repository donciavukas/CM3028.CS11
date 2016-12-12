<?php
	include 'DBCONNECT.php';
  session_start();

	$email = mysqli_real_escape_string($db ,$_POST['inputEmail']);
  $password = mysqli_real_escape_string($db ,$_POST['inputPassword']);
	$password = md5($password);

	$sql = "SELECT * FROM user WHERE (email = '$email') AND (password='$password')";
	$result = mysqli_query($db,$sql);

	if(!$row = mysqli_fetch_assoc($result)){
		echo "Incorrect details";
    echo "Redirecting in 5 seconds";
    header( "refresh:5;url=index.php" );
	}else{
    $_SESSION['id'] = $row['id'];
    $_SESSION['firstName'] = $row['firstName'];
		header("Location: index.php");
	}

