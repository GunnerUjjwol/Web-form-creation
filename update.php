 <?php
   require  "includes/connect.php";
    $id=$_POST['submit'];
    $name=$_POST['name'];
    $age=$_POST['age'];
    $email=$_POST['email'];  
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $description=$_POST['description'];
    $post=$_POST['post'];
    $gender=$_POST['gender'];
    
    
    // checking empty fields
    if(empty($name) || empty($age) || empty($email)) {            
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($age)) {
            echo "<font color='red'>Age field is empty.</font><br/>";
        }
        
        if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }        
    } else {    
        //updating the table
        $result = mysqli_query($conn, "UPDATE info SET name='$name',age='$age',email='$email',Address='$address', Post='$post',phone='$phone', Description='$description', Gender='$gender' WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index.php
    //    header("Location: adminspage.php");
    
    }
?>