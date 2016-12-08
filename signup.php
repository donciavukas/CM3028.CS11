<?php
session_start();
include 'DBCONNECT.php';

$first = $_POST['inputName'];
$last = $_POST['#inputSurname'];
$email = $_POST['inputEmail'];
$password = $_POST['inputPassword'];

echo $first;
echo $last;
echo $email;
echo $password;

  
/*
$sql = "INSERT INTO user (first, last, email, password) VALUES('$first', '$last', '$email', '$password')"
$result = mysql_query($db, $sql);
header("Location: index.php");
*/
