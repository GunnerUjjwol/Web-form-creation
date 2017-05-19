<!DOCTYPE html>
<html>
<body>
    
    <?php
    require "includes/connect.php";
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $description=$_POST['description'];
    $post=$_POST['post'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];

  
    
    //Query saved into a variable
    $sql="INSERT into info(name,password,email,age,phone,Address,Description,Post,Gender) 
            VALUES('$name',MD5('$password'),'$email','$age','$phone','$address','$description','$post','$gender')";
    
    if(mysqli_query($conn,$sql)){
        echo "SUCCESSFULLY!! REGISTERED";
        
    }
    else{
        echo "Error :".$sql."<br/>".$conn->connect_error;
    }
    mysqli_close($conn);
    
    ?>
    
    </body>
</html>