<html>
<body  style="background-color:powderblue;">

<?php

require "db.php";

$cdquery="SELECT * FROM user";
$cdresult=mysqli_query($conn,$cdquery);
echo "
<table>
<thead><td>Email_Id</td><td>Password</td><td>Mobile_no</td><td>Date_Of_Birth</td><td></td><td></td></thead>
";

while ($cdrow=mysqli_fetch_array($cdresult)) 
{
	echo "
</td><td>".$cdrow[1]."</td><td>".$cdrow[0]."</td><td>".$cdrow[2]."</td><td>".$cdrow[3]."</td><td><a href=\"edit_user.php?mobileno=".$cdrow[2]."\"><button>Edit</button></a></td><td><a href=\"delete_user.php?mobileno=".$cdrow[2]."\"><button>Delete</button></a></td></tr>
";
}
echo "</table>";

echo " <br><a href=\"new_user_form.html\"> Add New User </a><br> ";
echo " <br><a href=\"admin_home.php\">Go Back to Menu!!!</a> ";
?>
</body>
</html>
