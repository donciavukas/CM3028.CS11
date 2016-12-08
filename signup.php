<?php
include 'DBCONNECT.php';
session_start();

if(isset($_POST['sButton'])){
  session_start();
  $firstName = $_POST['inputName'];
  $lastName = $_POST['inputSurname'];
  $email = $_POST['inputEmail'];
  $password = $_POST['inputPassword'];
  $password2 = $_POST['inputPassword2'];
  $sql1 = "SELECT email FROM user WHERE email = '".$email"'";
  $result = mysqli_query($db, $sql1);
  
  if(($password == $password2)&&($email != $result)){
    $sql = "INSERT INTO user (firstName, lastName, email, password) VALUES ('$firstName', '$lastName', '$email', '$password')";
    mysqli_query($db, $sql);
    $_SESSION['message'] = "You are now logged in";
    $_SESSION['email'] = $email;
    header("Location: index.php");
  }else{
     $_SESSION['message'] = "The two passwords did not match";
  }
}

//$sql = "INSERT INTO user (first, last, email, password) VALUES ('Donce','Storas', 'lel@gmail.com', 'hue')"; 

//$sql = "INSERT INTO user (id, first, last, email, password) VALUES(1,'hi', 'bye', 'hello@gmail.com', '123')"
//  $sql = 'INSERT INTO user '.
 //     '(first, last, email, password) '.
  //    'VALUES (inputName, inputSurname, inputEmail, inputPassword)';

/*
if (mysqli_query($db, $sql)) {
    echo "success";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
*/

//header("Location: index.php");
mysqli_close($db);

