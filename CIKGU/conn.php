<?php
$servername = "localhost";
$username = "root";
$password = "";
$my_db = "btpnpp";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $my_db);

// Check connection
if(mysqli_connect_errno($conn))
{
	echo 'Failed to connect';
}
?>