<?php
session_start();
include 'DBCONNECT.php';

$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO user (first, last, email, password) VALUES('$first', '$last', '$email', '$password')"
$result = mysql_query($db, $sql);
header("Location: index.php");
