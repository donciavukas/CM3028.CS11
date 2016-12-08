<?php
$db = mysqli_connect("br-cdbr-azure-south-b.cloudapp.net", "b516a86d1fb393", "", "web_data");

if (!$db) {
    die("Connection failed: ".mysqli_connection_error());
}

?>

