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
         <a href="admin.php">Home</a>
         <a href="listuser.php">View List of Registered Users</a>
         <a href="allnotices.php">View List of Pending/Completed Notices</a>
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
      echo"<div style=\"text-align:center;\" ><h1>Welcome back,".$_COOKIE["username"]."</h1></div>";
      ?>
      <br>
      <br>
      <div >
          <br>
          <br>
    <form action="usernandr.php" method="post" id = "formid">
      <input type="text" placeholder="To view that user's notices, Search by its Username" name="user" id="user">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
<div class="caption">List of Registered Users</div>	
<div id="table">
	<div class="header-row rows">
    <span class="cell primary">User ID</span>
    <span class="cell">Username</span>
     <span class="cell">Nickname</span>
    <span class="cell">Number of Notice</span>
    <span class="cell">Number of Respond</span>
  </div>
  <?php
  include "dbconfig.php";
  $query="SELECT UserID,Username,NickName,  (SELECT COUNT(notice.User_UserID) FROM notice WHERE notice.User_UserID = user.UserID) AS NumberofNotice,(SELECT COUNT(respond.User_UserID) FROM respond WHERE respond.User_UserID = user.UserID) AS NumberofRespond FROM user ORDER BY NickName ASC;";
  $result = dboperation($query);
  while ( $row = mysqli_fetch_assoc($result) ){
    print("<div class=\"rows\">");
    print("<input type=\"radio\" name=\"expand\">");
    print("<span class=\"cell primary\" data-label=\"UserID\">".$row['UserID']."</span>");
    print("<span class=\"cell \" data-label=\"Username\">".$row['Username']."</span>");
    print("<span class=\"cell \" data-label=\"NickName\">".$row['NickName']."</span>");
    print("<span class=\"cell \" data-label=\"NumberofNotice\">".$row['NumberofNotice']."</span>");
    print("<span class=\"cell \" data-label=\"NumberofRespond\">".$row['NumberofRespond']."</span>");
    print("</div>");
    }
  ?>
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

