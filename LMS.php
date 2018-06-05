<?php
    session_start();


?>
<html>
<head><title>
</title>


<link rel="stylesheet" type="text/css" href="css/lms.css">
</head>
<body>
</div>
  <?php

if(isset($_SESSION['message'])){

echo"<div>".$_SESSION['message']."</div>" ;
unset($_SESSION['message']);
}

  ?>

<div class="header">
        <img src="bgPicture.jpg">
    </div>
   


    <nav id="main_nav">

        <div class="logo_wrapper">
            <a href="LMS.php"><br>
            &nbsp;<br><img class="logo" src="e-learning-icon.png"></a>
        </div>






        <div class="nav_wrapper">
            <ul>
                <li><a class="active" href="LMS.php">HOME</a></li>
                <li><a href="About Us.php">ABOUT</a></li>
                <li><a href="http://nsbm.lk/programmes">PROGRAMMES</a></li>
                <li><a href="http://nsbm.lk/affiliated-universities">SUPPORT</a></li>
                <li><a href="contactus.php">CONTACT</a></li>
                <li><a href="http://nsbm.lk/news">NEWS</a></li>
		<li><a href="index.html">Uploads</a></li>
            </ul>
            <div class="sign_wrapper">
                <ul>
                    <li><a href="form.php"><i class="fa fa-user-plus fa-lg"></i>SIGN UP</a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-in fa-lg"></i>LOGOUT</a></li>

<div class="logininfo">You are  login
</div> 

                    </div>


                </ul>


<div class="dropdown">
<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</div>

</div>

<br>
<br>










            </div>
        </div>

    </nav>
 <div class="box">
        <div class="container-3">
            <span class="icon"><i class="fa fa-search"></i></span>
            <input type="search" id="search" placeholder="Search Courses..." />
        </div>
    </div>


   
<hr>
<?php
include_once("divs/footer.php");
?>
</body>
</html>
</body>
</html>

