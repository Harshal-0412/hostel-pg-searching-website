<?php
$host="localhost";
$user="root";
$password="";
$db="login";

mysql_connect($host,$user,$password);
$mysql_select_db($db);

if(isset($_POST['uname']))
{
    $username=$_POST['uname'];
    $password=$_POST['psd'];

    $sql="select * from login_page where uname='".$username."'AND psd='".$password."' limit 1";

    $result = mysql_query($sql);

    if(mysql_num_rows($result)==1)
    {
        echo "you have successfully logged in";
        exit();
    }
    else
    {
        echo "you have entered invalid details";
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>login page</title>
    </head>
    <style>
        body 
        {
          font-family: Arial;
  color: white;
}
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 12px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}
.container {
  padding: 40px;
  text-align: left;
  margin: 30px;
}
.split {
  height: 65%;
  width: 25%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

.left {
  left: 385px;
  top: 150px;
  background-color: #111;
}

.right {
  right: 385px;
  top: 150px;
  background-color: rgb(0, 187, 255);
}

.centered {
  position: relative;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

.centereds img {
  width: 400px;
   height: 475px;
}
    </style>
    <body>
        <div class="split left">
            <div class="centereds">
              <img src="img_avatar.png" alt="Avatar woman">
              
            </div>
          </div>
          
          <div class="split right">
            <div class="centered">
                <div class="container">
                    <h1 style="text-align: center; padding: 0px;">Login page</h1>
                    <form name="f1" action = "#" onsubmit ="returnvalidation()" method = "POST"> 
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>
              
                    <label for="psd"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psd" required>
                      
                    <button type="submit">Login</button>
                    <label>
                      <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                    </form>
                  </div>
          </div>
    </body>
    <script>
       function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
      </script>
</html>