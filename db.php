<link rel="stylesheet" href="style.css" />
<?php
$servername = "localhost";
$username = "id16728433_qwertyu";
$password = "_zH-z6ct?]#4WGLk";
$dbname = "id16728433_gr";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
{
 die("Connection failed: " . $conn->connect_error);
} 
?>
