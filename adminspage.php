<?php
        session_start();
        if(!isset($_SESSION['user']))
        {
                header("location: index.php");
        }
        $user=$_SESSION['user'];
?>

<html>
    <head>
    
    </head>
   <body background="includes/image2.jpg">
<?php

require  "includes/connect.php";
    
    echo "<center>";
//$user=$_SESSION['user'];
echo '<h1>Welcome '.$user;
echo "</h1>";
echo '<h5>This is the Admins page</h5>';
echo '<hr width=50%>';
echo '<br>Here are all the details from database';

echo "<br><br>";
echo '<br><a href="registration.html">Add new member<br><br>';
echo "<table border='2'>";
 echo "<tr><th>Name</th><th>Email</th><th>Age</th><th>Phone</th><th>Gender</th><th>Post</th><th>Address</th><th colspan='3'>Description</th></tr>";

$sql="SELECT * FROM info";
$result=$conn->query($sql);

while($row=mysqli_fetch_array($result)){
    echo "<tr><td>$row[name]</td><td>$row[email]</td><td>$row[age]</td><td>$row[phone]</td><td>$row[Gender]</td><td>$row[Post]</td><td>$row[Address]</td><td>$row[Description]</td><td><form action='delete.php' method='post'>
	<input type='hidden' name='id' value= $row[id]>
	<input type='submit' name='submit' value='Delete'>
	</form></td>
     <td><form action='edit.php' method='post'>
	<input type='hidden' name='idd' value= $row[id]>
	<input type='submit' name='edit' value='Edit'>
	</form></td>

   
	</tr>";
}
echo "</table>";

echo '<br><a href="Logout.php">Logout<br>';
    echo '<br>';
?>
 <?php
include("includes/charts1.php");
?>
       
</body>
</html>