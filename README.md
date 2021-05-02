# Grootan_information_Journal
My aim is to make information journal where new user can register by giving E-mail, password, phone number and Dtae of Birth.
while submitting the data will be saved in Database.
where we have done database in XAMPP control panelwhich it is easy to do and user friendly.
I have made the the database with the name of rg, where E-mail contains varchar, phone number contains the integer and DoB contains data file.
The data form the Database will be displayed in our web application which the user will see the registration details on the web application retriving from the database.
The end user can edit the registration details and delete the user details on it.



DELETING THE USER CODE:
<?php

require "db.php";

$sql = "DELETE from user where mobileno= ('".$_GET["mobileno"]."')";
echo $_GET["mobileno"];
if ($conn->query($sql) === TRUE) {
    echo " '".$_POST["sname"]."': Record deleted successfully";
} else {
    echo "Error:" . $conn->error;
}
echo "<br> <a href=\"home.php\">Go Back to Menu!!!</a> ";

$conn->close();
?>





DP.php CODE:

<link rel="stylesheet" href="style.css" />
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gr";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
{
 die("Connection failed: " . $conn->connect_error);
} 
?>



