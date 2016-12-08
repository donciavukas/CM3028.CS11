<?ph
	include 'DBCONNECT.php'

	$email = $_POST ['inputName'];
	$password = $_POST ['inputPassword'];

	$sql = "SELECT email user WHERE email = $email AND password=$password";
	$result = mysqli_query($db,$sql);

	if(!$row = mysqli_fetch_assoc($result)){
		echo "Incorrect"
	}else{
		echo "Logged in"
	}

