<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Register</title>
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="css/login.css">
      <script src="js/register.js"></script>
   </head>
   
   <!-- body -->
   <body class="main-layout">
       <?php include "checklogin.php";
        include "forward.php";
      ?> 
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <div id="mySidepanel" class="sidepanel">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
         <a href="index.html">Home</a>
         <a href="index.html#about">About</a>
         <a href="index.html#footer">Find Us</a>
         <a href="login.php">Login</a>
         <a href="register.php">Register</a>
         <a href="forget.php">Forget Password</a>
      </div>
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                     <div class="right_bottun">
                        <button class="openbtn" onclick="openNav()"><img src="images/menu_icon.png" alt="#"/> </button> 
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <form action="registerform.php" method="post" id = "formid" enctype="multipart/form-data" >
  <div class="imgcontainer">
    <img src="images/register.png" alt="Register" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" id="uname" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" id="psw" name="psw" required>

    <label for="nickname"><b>Nick name</b></label>
    <input type="text" placeholder="Enter Nick Name" id="nickname" name="nickname" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" id="email" name="email" required>
    <br>
    <label for="image"><b>Profile Image</b></label>
        <input type="file" id="image" name="image" accept="image/*" >
        <br>

    <label for="gender"><b>Gender</b></label>
    <input type="text" placeholder="Enter Gender" id="gender" name="gender" required>

    <label for="birthday">Birthday:</label>
    <input type="date" id="birthday" name="birthday" max=<?php echo date("Y-m-d"); ?> required> 
    <br>
    <label for="sq"><b>Security Question</b></label>
    <input type="text" placeholder="Enter Security Question" id="sq" name="sq" required>
    <label for="sa"><b>Security Answer</b></label>
    <input type="text" placeholder="Enter Security Answer" id="sa" name="sa" required>

    <input type = "button" value = "Register" onclick="check();">
  </div>
  </form>
  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn" onclick="window.location.href='http://localhost/project/index.html';">Cancel</button>
  </div>

      <!-- end header inner -->
      <!-- end header -->

      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
         function openNav() {
           document.getElementById("mySidepanel").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidepanel").style.width = "0";
         }
      </script>
   </body>
</html>

