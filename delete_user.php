<html>
<body <body style="background-color:powderblue;">

<?php

require "db.php";

$sql = "DELETE from user where mobileno= ('".$_GET["mobileno"]."')";
echo $_GET["mobileno"];

if ($conn->query($sql) === TRUE) {
    echo " '".$_POST["sname"]."': Record deleted successfully";
} else {
    echo "Error:" . $conn->error;
}

echo "<br> <a href=\"home.php\">Go Back to Admin Menu!!!</a> ";

$conn->close();
?>

</body>
</html>

