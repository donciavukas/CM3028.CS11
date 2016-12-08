<?php
session_start();
include 'DBCONNECT.php';

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

$first = $_POST['inputName'];
$last = $_POST['inputSurname'];
$email = $_POST['inputEmail'];
$password = $_POST['inputPassword'];

//$sql = "INSERT INTO user (first, last, email, password) VALUES('$first', '$last', '$email', '$password')"
$sql = "INSERT INTO user (id, first, last, email, password) VALUES(1,'hi', 'bye', 'hello@gmail.com', '123')"
$result = mysql_query($sql, $db);
header("Location: index.php");

