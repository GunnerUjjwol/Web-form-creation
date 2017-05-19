

<?php

require "includes/connect.php";

    
   
     
      
    $user=$_POST['user'];
    $password=$_POST['password'];

    //Checking admin or not
    $isAdmin=0;
    $checksql="SELECT * FROM info WHERE name='$user' AND admin=1";
    $query=mysqli_query($conn, $checksql) ;
    
    if (mysqli_num_rows($query)>0){
        $isAdmin=1;
    }

    $sql = "SELECT name FROM info WHERE name = '$user' and password = MD5('$password')";
    $result = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);
      
      // If result matched $user and $password, table row must be 1 row
		
      if($count == 1) {
          session_start();
         $_SESSION['user'] = $user;

    if($isAdmin==0){
        //Normal User Profile
        
         header("location: welcomeuser.php");
      }
      
    
    else{
        //Admin Profile
        
        header("location: adminspage.php");
    }
      }
else {
    //Incorrect username / password
         
             //header("location: index.php");
    $error = "Your Login Name or Password is invalid";
          echo "$error";
}

?>