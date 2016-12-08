<?php
session_start();
include 'DBCONNECT.php';

mysql_select_db("web_data", $db);

$first = $_POST['inputName'];
$last = $_POST['inputSurname'];
$email = $_POST['inputEmail'];
$password = $_POST['inputPassword'];

$sql = "INSERT INTO 'web_data'.'user' (first, last, email, password) VALUES('$first', '$last', '$email', '$password')"
//$sql = "INSERT INTO user (id, first, last, email, password) VALUES(1,'hi', 'bye', 'hello@gmail.com', '123')"
//  $sql = 'INSERT INTO user '.
 //     '(first, last, email, password) '.
  //    'VALUES (inputName, inputSurname, inputEmail, inputPassword)';

$result = mysql_query($db, $sql);
header("Location: index.php");

