<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'DBCONNECT.php';
session_start();
if(isset($_POST['sButton'])){
  session_start();
  
  $firstName = mysqli_real_escape_string($db, $_POST['inputName']);
  $lastName = mysqli_real_escape_string($db, $_POST['inputSurname']);
  $email = mysqli_real_escape_string($db, $_POST['inputEmail']);
  $password = mysqli_real_escape_string($db, $_POST['inputPassword']);
  $password2 = mysqli_real_escape_string($db, $_POST['inputPassword2']);
 
  $sql = "SELECT email FROM user WHERE (email = '$email')";
  $result = mysqli_query($db, $sql);
 
  if(($password == $password2)&&(mysqli_num_rows($result)==0)){
    $password = md5($password);
    $sql = "INSERT INTO user (firstName, lastName, email, password) VALUES ('$firstName', '$lastName', '$email', '$password')";
    mysqli_query($db, $sql);
    header("Location: index.php");
  }else{
     $_SESSION['message'] = "The two passwords did not match";
     header("Location: register.php");
  }
}




