

<?php
//connect to sql
session_start();
$db = mysqli_connect("localhost","root","","registration");

if(isset($_POST['login']))
{

      $username = mysqli_real_escape_string($db,$_POST['username']);
      $password = mysqli_real_escape_string($db,$_POST['password']);

     $password = md5($password);//password before storingforsecurity purpose
     $sql = "SELECT * FROM students WHERE username ='$username' AND password ='$password'";
     $result = mysqli_query($db,$sql);
      

      if (mysqli_num_rows($result) == 1){
         $_SESSION['message'] = "username/password are incorrect";
      header("location:LMS.php");
    }else{
  
  $_SESSION['message'] = "you are now logged in";
         $_SEESION['username'] = $username;
    
    } 
}
?>
<html>
<head>
 <link rel="stylesheet" href="css/login.css" type="text/css">
	
	
</head>
<title>Login Now</title>
<body id="body" background="login.jpg">
		<div class="header">
	<h1 align="center">login</h1>
</div>
  <?php

if(isset($_SESSION['message'])){

echo"<div>".$_SESSION['message']."</div>" ;
unset($_SESSION['message']);
}

  ?>
    <div class="container" >
     <img src="register-secure-security-user-login-icon--7.png">
    	<form action="login.php" method="POST">

    		<div class="form-input">
    		<input type="text" name="username" placeholder="Enter Name" required>
    		</div>
    		<div class="form-input">
    		 <input type="password" name="password" placeholder="Password" required>
    		</div>
    		<div class="form_submit">
    		<input type="submit" name="login" value="login">
    		<h3><a href="forgetpw.php">Forgot Password?</h3>
<input type="checkbox" checked="checked">Remember me
		
    		</div>

    	</form>
    	
    </div>

</body>
</html>

<hr>
<?php
include_once("divs/footer.php");
?>