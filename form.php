<?php
include_once("divs/top.php");
?>
<hr>
<?php
//connect to sql
session_start();
$db = mysqli_connect("localhost","root","","registration");

if(isset($_POST['submit'])){
	session_start();
	$indexno = mysqli_real_escape_string($db,$_POST['indexno']);
	$username = mysqli_real_escape_string($db,$_POST['username']);
	$email = mysqli_real_escape_string($db,$_POST['email']);
	$password = mysqli_real_escape_string($db,$_POST['password']);
	$password2 = mysqli_real_escape_string($db,$_POST['password2']);



	if ($password == $password2){
		$password = md5($password);//password before storing for security purpose
		$sql = "INSERT INTO students(indexno,username,email,password) VALUES('$indexno','$username','$email','$password')";
      mysqli_query($db, $sql);
      $_SESSION['message'] = "you are now logged in";
      $_SEESION['username'] = $username;
      header("location:login.php");
	}else{
		$_SESSION['message'] = "the two passwords do not match";
	}
}
?>


<html>
<head>
<title>sign in</title>
<link rel="stylesheet" type="text/css" href="css/form.css">
</head>
<body id="body" background="login.jpg">
		<div class="header">

<h2 align="center">Sign in</h2>


  <div class="imgcontainer">
  
  </div>
<?php

if(isset($_SESSION['message'])){

echo"<div>".$_SESSION['message']."</div>" ;
unset($_SESSION['message']);
}

  ?>

 <div class="container" >
     
    	<form action="form.php" method="POST">

    		<table>
  
  <tr>
    <td><label><b>IndexNO</b></label></td>
    <td><input type="text" placeholder="Enter Your number" name="indexno" class="textInput" required></td><br>
</tr>
<tr>
    <td><label><b>Username</b></label></td>
    <td><input type="text" placeholder="Enter Your Name" name="username" class="textInput"required><br></td>
    </tr>
    <tr>
<td><lable><b>Email Address</b></lable></td>
<td><input type="text" placeholder="Enter Your Email" name="email"><br></td>
 </tr>
<tr> 

<td><lable><b>password:</b></lable></td>
<td><input type="password" name="password" ><br></td>
</tr>

<tr>
        <td><label><b>Confirm password</b></lable></td>
        <td><input type="password" name="password2" ></td>
      </tr><tr>
 
    <td><button type="submit" name="submit" value="register">Sign In</button></td>
</tr>
   </table>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    
  </div>


   </div>

    	
    	
    </div>

</body>
</html>


<?php
include_once("divs/footer.php");
?>




  