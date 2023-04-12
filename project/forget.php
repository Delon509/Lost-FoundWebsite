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
      <title>Forget Password</title>
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
      <?php 
       if(isset($_COOKIE["forget"])){
          if(strcmp($_COOKIE["forget"],"false")==0){
            print "<h1> Username doesn't exist</h1>"; 
            
        setcookie("forget", "true", time() + (60 * 60 * 24));
        setcookie("login", "0", time() + (60 * 60 * 24));
          }
         }
          if(isset($_COOKIE["sa"])){
            if(strcmp($_COOKIE["sa"],"false")==0){
              print "<h1> Wrong Answer</h1>"; 
              setcookie("sa", "true", time() + (60 * 60 * 24));
          setcookie("login", "0", time() + (60 * 60 * 24));
            }   
       }
      
      ?> 
      <form action="sq.php" method="post">
  <div class="imgcontainer">
    <img src="images/forget.jpg" alt="Forget" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" id="uname" name="uname" required>
    <button type="submit">Submit</button>
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

