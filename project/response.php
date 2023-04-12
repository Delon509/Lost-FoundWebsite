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
      <link rel="stylesheet" href="css/table.css">
   </head>
   
   <!-- body -->
   <body class="main-layout">
        
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <div id="mySidepanel" class="sidepanel">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
         <a href="user.php">Home</a>
         <a href="create.php">Create Notice</a>
         <a href="mynotice.php">View My Notices</a>
         <a href="update.php">Edit Profile</a>
         <a href="logout.php">Logout</a>
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
      $NoticeID = $_GET['responseID'];
      include "dbconfig.php";
        setcookie("NoticeID",$NoticeID, time() + (60 * 60 * 24));
            print("<br>");
            print("<br>");
            print("<br>");
            print("<form action=\"respondform.php\" method=\"post\">");
            print("<div class=\"container\">");
            print("<label for=\"text\"><b>Your Message To Notice ".$NoticeID."</b></label>");
            print("<input type=\"text\" placeholder=\"Enter Message\" name=\"textbox\" id=\"textbox\" required>");
            print("<button type=\"submit\">Submit</button>");
            print("</div>");
            print("</form>");
        
        print("<div class=\"container\" style=\"background-color:#f1f1f1\">");
        print("<button type=\"button\" class=\"cancelbtn\" onclick=\"window.location.href='http://localhost/project/user.php';\">Back</button>");
        print("</div>");
      ?>




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

