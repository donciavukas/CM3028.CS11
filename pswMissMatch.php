<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
     <?php
    include("dbconnect.php")
      ?>
    
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
  <style>
.bootstrap-iso .form-control:focus{border-color: #5cb85c;  box-shadow: none; -webkit-box-shadow: none;} 
.bootstrap-iso .has-error .form-control:focus{box-shadow: none; -webkit-box-shadow: none;}
</style>
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Sign up</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <div class = "row">
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">        
          <a class="navbar-brand" href="#">Go Porthlen</a>
          
            <ul class="nav nav-pills pull-right">
            <li role="presentation"><a href="index.php">Home</a></li>
            <li role="presentation"><a href="clubs.php">Clubs</a></li>
            <li role="presentation"><a href="#">Contact</a></li>
          </ul>      
          
        </div>
        
        
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
            <a class="btn btn-default" href="register.php">Register</a>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
    </div>

  <body> 
    
    
    

    <div class = "container">
      <div class = "row">
    <div class="form-group">
      <form class="form-signin" action="signup.php" method="POST">
        <h2 class="form-signin-heading">Register new user</h2>
        <label for="inputName" class="sr-only">Name</label>
        <input type="name" name="inputName" class="form-control" placeholder="Name" required autofocus>
        <label for="inputSurname" class="sr-only">Surname</label>
        <input type="name" name="inputSurname" class="form-control" placeholder="Surname" required autofocus>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="inputEmail" class="form-control" placeholder="Email address" required>  
        
        
        
        <label for="inputPassword" class="sr-only control-label" >Passwords do not match</label>
        <input type="password" name="inputPassword" class="form-control" placeholder="Password" required>
        <label for="inputPassword2" class="sr-only label label-warning">Re-enter Password</label>
        <input type="password" name="inputPassword2" class="form-control" placeholder="Re-enter Password" required>
       
        <div class="checkbox">
          <label>
            <input type="checkbox" value="iAgree"> I Agree to the terms of service.
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name = "sButton">Sign up</button>
      </form>
      </div>
        
      </div>
    </div>
   


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
