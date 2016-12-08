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
 
  $sql = "SELECT email FROM user WHERE email = $email";
  $result = mysqli_query($db, $sql);
 
  if(($password == $password2)&&(mysqli_num_rows($result)>0)){
    $sql = "INSERT INTO user (firstName, lastName, email, password) VALUES ('$firstName', '$lastName', '$email', '$password')";
    mysqli_query($db, $sql);
    header("Location: index.php");
  }else{
     $_SESSION['message'] = "The two passwords did not match";
     header("Location: register.php");
  }
}




