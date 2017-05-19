 <?php
 $servername="localhost";
    $username="root";
    $password="";
    $dbname="project1";
    
    //Create connection to the database
    $conn= mysqli_connect($servername,$username,$password,$dbname);
    
    //Check Connection
    if(!$conn){
        die("Connection failed: ".$conn->connect_error);
    }
    ?>