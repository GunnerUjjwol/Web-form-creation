<?php

require "includes/connect.php";
//getting id from url
$id = $_POST['idd'];


if (isset($_POST['update'])){    
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
      // header("Location: adminspage.php");
    
    }
}

?>
<?php
 
//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM info WHERE id='$id'");
 
while($res=mysqli_fetch_array($result))
{
    $name = $res['name'];
    $age = $res['age'];
    $email = $res['email'];
   
    $phone=$res['phone'];
    $address=$res['Address'];
    $description=$res['Description'];
    $post=$res['Post'];
    $gender=$res['Gender'];
  }
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>EDIT</title>
    <style>
        body{
            
            background-color: floralwhite;
            

        }
        form{
            background-color: darkseagreen;
            border:solid;       
            width: 25%;
            padding-left: 40;
            padding-bottom: 30;
            
        }
       
        .checkbox{
            padding-left: 20 ;
        }
        h3,h4{
            text-align: center;
            color: blueviolet;
        }
        
      
    
    </style>
    
   
    
    </head>
    
    <body>
        <form method="post" action="edit.php">
            <h3>CONTACT DETAILS</h3>
            <h4>Edit the details</h4>
            <hr width=50%>
            <div><table>
                <tr>
                    <td><label>Name</label></td><td><input type="text" name="name" size="20" value="<?php echo $name;?>"></td></tr>
                <tr>
                    <td><label>Email</label></td><td><input type="email" name="email" value="<?php echo $email;?>"></td></tr>
       
                <tr>
                    <td><label>Age</label></td><td><input type="text" name="age" size="20" value="<?php echo $age;?>"></td></tr>
                <tr>
                <td><label>Phone</label></td><td><input type="text" name="phone" value="<?php echo $phone;?>"></td></tr>


            <tr>
                <td><label>Gender</label></td><td><input type="radio" name="gender" value="Male">Male<br>
                <input type="radio" name="gender" value="Female">Female</td></tr>
        
            
            <tr><td><label>Post:</label></td>
            <td><select name="post">
            <option >Manager</option>
            <option >Engineer</option>
            <option >Project Head</option>
            <option >Intern</option>
                </select></td></tr>
                
                <br><br>
            <tr><td><label>Address</label></td>
               <td><textarea name="address" value="<?php echo $address;?>"></textarea></td> </tr><br><br>
            <tr><td><label>Description</label></td>
           <td><textarea name="description" rows="5" cols="20" value="<?php echo $description;?>"></textarea></td> </tr>
                <tr>       
                    <td>&nbsp;</td>
            <td><input type='submit' name='update' value='Update'></td></tr>
            </table></div>
            
            <br><br>
           
	
          
        </form>
    
    </body>
</html>