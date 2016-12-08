<?php
session_start();
//include 'DBCONNECT.php';
$db = mysqli_connect("br-cdbr-azure-south-b.cloudapp.net", "b516a86d1fb393", "e5b1ec77", "web_data");

$first = $_POST['inputName'];
$last = $_POST['inputSurname'];
$email = $_POST['inputEmail'];
$password = $_POST['inputPassword'];

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

//$sql = "INSERT INTO user (first, last, email, password) VALUES('$first', '$last', '$email', '$password')"
//$sql = "INSERT INTO user (id, first, last, email, password) VALUES(1,'hi', 'bye', 'hello@gmail.com', '123')"
//  $sql = 'INSERT INTO user '.
 //     '(first, last, email, password) '.
  //    'VALUES (inputName, inputSurname, inputEmail, inputPassword)';

//$result = mysqli_query($db, $sql);

mysqli_query($db,"SELECT * FROM users");
mysqli_query($db,"INSERT INTO users (first,last,email, password) 
VALUES ('s', 'd', 'h@gmail.com', 'g')");
header("Location: index.php");
mysqli_close($db);

