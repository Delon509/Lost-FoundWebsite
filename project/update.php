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
      <script src="register.js"></script>
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
      include "dbconfig.php";
        $query="SELECT * FROM user WHERE UserID=".$_COOKIE["loginID"].";" ;
        
         $result = dboperation($query);
         $row = mysqli_fetch_assoc($result);
         setcookie("userimage",$row["Image"],time() + (60 * 60 * 24));
        print "<br>";
        print "<br>";
        print "<br>";
        print "<br>";
            print("<form action=\"updateform.php\" method=\"post\" id = \"formid\" enctype=\"multipart/form-data\">");
            print("<div class=\"container\">");
            
            
        print("<label for=\"nickname\"><b>Nick name</b></label>");
        print("<input type=\"text\" placeholder=\"Enter Nick Name\" id=\"nickname\" name=\"nickname\" value=\"".$row['NickName']."\" required>");
        print("<label for=\"email\"><b>Email</b></label>");
        print("<input type=\"text\" placeholder=\"Enter Email\" value=\"".$row['Email']."\" id=\"email\" name=\"email\" required>");
        print("<div class=\"imgcontainer\">");
        print("<img src=\"".substr($row['Image'],21)."\" alt=\"User does not provide image\" class=\"avatar\">");
        print("</div>");
        print("<input type=\"file\" id=\"image\" name=\"image\" accept=\"image/*\" >");
        print("<br>");
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