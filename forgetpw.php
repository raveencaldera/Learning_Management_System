<?php
//connect to sql
session_start();
$db = mysqli_connect("localhost","root","","registration");

if(isset($_POST['submit']))
{

      $username = mysqli_real_escape_string($db,$_POST['username']);
      $email = mysqli_real_escape_string($db,$_POST['email']);

   
     $sql = "SELECT * FROM students WHERE username ='$username' AND email ='$email'";
     $result = mysqli_query($db,$sql);
      

      if (mysqli_num_rows($result) == 1){
           $_SESSION['message'] = "username/password are incorrect";
    }else{
  

    $_SESSION['message'] = "you are now logged in";
         $_SEESION['username'] = $username;
      header("location:login.php");
    } 
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/forget.css">

</head>
<body>

<h2 align="center">Forget Password</h2>
<form action="forgetpw.php" method="POST">
  

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" >

   <td><lable><b>Email Address</b></lable></td>
<td><input type="text" placeholder="Enter Your Email" name="email"><br></td>
 </tr>







    <button type="submit" name="submit">Sign Up</button>
    
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
   
  </div>
</form>



<hr>

  </body>
  </html>

    
  </nav>


</footer>
</body>
</html>


<?php
include_once("divs/footer.php");
?>











