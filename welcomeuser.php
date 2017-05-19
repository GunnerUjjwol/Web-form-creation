<?php
        session_start();
        if(!isset($_SESSION['user']))
        {
                header("location: index.php");
        }
        $user=$_SESSION['user'];
?>


<html>
   <body background="includes/image2.jpg">
<?php

require  "includes/connect.php";
    
    echo "<center>";
//$user=$_SESSION['user'];
echo '<h3>Welcome '.$user;
echo "</h3>";
echo '<hr width=50%>';
echo '<br> Here are your details';

$sql="SELECT * FROM info where name='".$user."'";
$result=$conn->query($sql);
$row=mysqli_fetch_array($result);


echo "<br><br><br>";

    
    echo "<table border='2'>";
    echo "<tr><td>Name</td><td>$row[name]</td></tr>";
    echo "<tr><td>Phone</td><td>$row[phone]</td></tr>";
    echo "<tr><td>Email</td><td>$row[email]</td></tr>";
    echo "<tr><td>Age</td><td>$row[age]</td></tr>";
    echo "<tr><td>Gender</td><td>$row[Gender]</td></tr>";
    echo "<tr><td>Post</td><td>$row[Post]</td></tr>";
    echo "<tr><td>Address</td><td>$row[Address]</td></tr>";
    echo "<tr><td>Description</td><td>$row[Description]</td></tr>";
    

echo "</table>";

echo '<br><a href="Logout.php">Logout';
    
        
?>
    </body>
</html>