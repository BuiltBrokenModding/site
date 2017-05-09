<?php //include to access $conn

$servername = "nasa.gov"
$username = "site";
$password = "durrILikeApples";

$conn = new mysqli($servername, $username, $password);

$if ($conn->connect_error)
{
	die("Connection failed: " . $conn->connect_error);
}
?>
