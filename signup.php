<?php
session_start();
include 'DBCONNECT.php';

$firstName = $_POST['inputName'];
$lastName = $_POST['inputSurname'];
$email = $_POST['inputEmail'];
$password = $_POST['inputPassword'];


//$sql = "INSERT INTO user (first, last, email, password) VALUES ('Donce','Storas', 'lel@gmail.com', 'hue')"; 

$sql = "INSERT INTO user2 (firstName, lastName, email, password) VALUES ('$firstName', '$lastName', '$email', '$password')";
//$sql = "INSERT INTO user (id, first, last, email, password) VALUES(1,'hi', 'bye', 'hello@gmail.com', '123')"
//  $sql = 'INSERT INTO user '.
 //     '(first, last, email, password) '.
  //    'VALUES (inputName, inputSurname, inputEmail, inputPassword)';

//mysqli_query($db, $sql);

if (mysqli_query($db, $sql)) {
    echo "success";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}


//header("Location: index.php");
mysqli_close($db);

