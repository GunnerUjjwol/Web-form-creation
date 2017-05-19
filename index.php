
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>
            LOGIN
        </title>
        <!--Embedded style-->
        <style>
            
            
        #l1{
        color:blue;
        font-size: 20px;
            }  
        #l2{
        color:blue;
        font-size: 20px;
            } 
           
            .first{
                    position: absolute;
                    left:35%;
                    top:30%;
                    background-color:powderblue;
                    background-size: contain;
                    border: 3px solid;
                    position: absolute;
                    align-content: center;
            
            }
            
            .link{
                position:relative;
                float:right;
            }
            
        </style>
    
    </head>
    <body background="includes/image1.jpg">
        <div class="first">
        <form action="validatelogin.php" method="post" style= "width:400px; padding:20px">
            <label id="l1">Username</label>
            <input type="text" size="20" name="user" id="s1"><br><br>
            <label id="l2">Password</label>
            <input type="password" size="20" placeholder="*****" name="password" id="n1"><br><br>
            <div>
            <input type="submit" value="Login" name="submit">
            <a href="registration.html" class="link">NEW USER?
            
            </div>
            
        </form>
        </div>
           
</body></html>