<?php
include_once("divs/top.php");
?>




<html>
<head>

<link rel="stylesheet" type="text/css" href="css/contact.css">
</head>

<body>

<h2 align="center">Contact us</h2>

<form action="dula.php">
   <div class="imgcontainer">
    <img src="cotact us.gif" alt="Avatar" id="avatar">
  </div>
<table>
  <div class="container">
  <tr>
    <td><label><b>First Name</b></label></td>
    <td><input type="text" placeholder="Enter Yourname" name="fname" required></td><br>
</tr>
<tr>
    <td><label><b>Last Name</b></label></td>
    <td><input type="text" placeholder="Mid Name" name="lname" required><br></td>
    </tr>
    <tr>

    <td><label><b>Password</b></label></td>
    <td><input type="password" placeholder="Enter Password" name="psw" required></td><br>
    </tr>
    <tr>

    <td><label><b>Email Address</b></label></td>


    <td><input type="text" placeholder="abc@gmail.com" name="email" required><br></td>
    </tr>
<tr>
   <td> <label><b>Phone Number</b></label></td>
   <td><input type="text" placeholder="07*-*******" name="pn" required><br></td>
   </tr>
   <tr>
   <td><lable><b>Enter your Meesege</b></lable></td>
   <td><textarea rows="4" cols="50" >
Write here..........
</textarea>
</td>
</tr>


    

  
    </table>   
   
 
    <button type="submit">SUBMIT</button>
    
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    
  </div>
</form>

<hr>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
  

.footer-text {text-align: center;}
  footer{background: #aaa;color:white;border: 15px solid #dedede;


      }

    .navigation{ text-align: center;
    border:3px solid #E3E3E3;
    margin-top:0 auto;
    text-shadow: 0.1em 0.1em #333;}


    h1{font-size: 30px;font-family: cooper}
    h3{font size: 15px;font-style: :center;}
    #nav ul li{
      display: block;
      list-style-type: none;
      float: left;
      
      

    }
    #nav ul li a{

      display: block;
      float: left;
      color:black;
      font-family: Courier;
      font-style: oblique;
      background-color: gray;


      padding: 3px 25px;
      border: 10px #ccc solid;
      -webkit-border-radius:10px;
      margin: 3px 3px;
    
    }
    h3{
      text-align: center;
    }
    #fb{
      width: 50px;
      height: 50px
      border:3px #ccc solid;
    }
    #tw{
      width: 50px;
      height: 50px;
      
    }

  }
  </style>
</head>
<body>

</body>
</html>






</body>
</html>


<?php
include_once("divs/footer.php");
?>


