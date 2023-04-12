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
      <br>
      <br>
      <div >
         
          <br>
          <br>
<button id="completed">Completed</button>
<button id="pending">Pending</button>
<?php
         $username = $_POST['user'];
         print ("<h1>This is the notices of User <mark>".$username."</mark></h1>");
         ?>
<div id="completedtable">
<div class="caption">Completed notices</div>	
<div id="table">
	<div class="header-row rows">
    <span class="cell primary">Notice ID</span>
    <span class="cell">Type</span>
     <span class="cell">Date</span>
    <span class="cell">Venue</span>
    <span class="cell">State</span>
    <span class="cell">View</span>
  </div>
  <?php
  include "dbconfig.php";
  $username = $_POST['user'];
  $query="SELECT UserID FROM user WHERE Username='".$username."';" ;
  $result = dboperation($query);
  $row = mysqli_fetch_assoc($result);
  $UID = $row['UserID'];
  $query="SELECT * FROM notice WHERE State='Completed' AND User_UserID=".$UID.";" ;
  $result = dboperation($query);
  while ( $row = mysqli_fetch_assoc($result) ){
    print("<div class=\"rows\">");
    print("<input type=\"radio\" name=\"expand\">");
    print("<span class=\"cell primary\" data-label=\"NoticeID\">".$row['NoticeID']."</span>");
    print("<span class=\"cell \" data-label=\"Type\">".$row['Type']."</span>");
    print("<span class=\"cell \" data-label=\"Date\">".$row['Date']."</span>");
    print("<span class=\"cell \" data-label=\"Venue\">".$row['Venue']."</span>");
    print("<span class=\"cell \" data-label=\"State\">".$row['State']."</span>");
    print("<span class=\"cell\" data-label=\"View\"><a href=\"view.php?viewID={$row['NoticeID']}\">View</a></span>");
    print("</div>");
    }
  ?>
  </div>
</div>

  <div id="pendingtable">
  <div class="caption">Pending notices</div>	
<div id="table">
	<div class="header-row rows">
    <span class="cell primary">Notice ID</span>
    <span class="cell">Type</span>
     <span class="cell">Date</span>
    <span class="cell">Venue</span>
    <span class="cell">State</span>
    <span class="cell">View</span>
  </div>
  <?php
  $username = $_POST['user'];
  $query="SELECT UserID FROM user WHERE Username='".$username."';" ;
  $result = dboperation($query);
  $row = mysqli_fetch_assoc($result);
  $UID = $row['UserID'];
  $query="SELECT * FROM notice WHERE State='Pending' AND User_UserID=".$UID.";" ;
  $result = dboperation($query);
  while ( $row = mysqli_fetch_assoc($result) ){
    print("<div class=\"rows\">");
    print("<input type=\"radio\" name=\"expand\">");
    print("<span class=\"cell primary\" data-label=\"NoticeID\">".$row['NoticeID']."</span>");
    print("<span class=\"cell \" data-label=\"Type\">".$row['Type']."</span>");
    print("<span class=\"cell \" data-label=\"Date\">".$row['Date']."</span>");
    print("<span class=\"cell \" data-label=\"Venue\">".$row['Venue']."</span>");
    print("<span class=\"cell \" data-label=\"State\">".$row['State']."</span>");
    print("<span class=\"cell\" data-label=\"View\"><a href=\"view.php?viewID={$row['NoticeID']}\">View</a></span>");
    print("</div>");
    }
  ?>
  </div>
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
      <script>
$(document).ready(function(){
    $("#pendingtable").show();
    $("#completedtable").hide();
  $("#completed").click(function(){
    $("#pendingtable").hide();
    $("#completedtable").show();
  });
  $("#pending").click(function(){
    $("#pendingtable").show();
    $("#completedtable").hide();
  });
});
</script>
   </body>
</html>

