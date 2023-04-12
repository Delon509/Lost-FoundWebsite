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
      <br>
      <br>
<div class="caption">Create Notice</div>	
<form action="createform.php" method="post" id = "formid" enctype="multipart/form-data" >
  <div class="imgcontainer">
    <img src="images/create_notice.jpg" alt="Register" class="avatar">
  </div>

  <div class="container">
  <label for="type"><b>Type</b></label>
  <select name="type" id="type">
  <option value="Lost">Lost</option>
  <option value="Found">Found</option>
</select>

<br>
<label for="date">Date:</label>
    <input type="date" id="date" name="date" max=<?php echo date("Y-m-d"); ?> required> 
    <br>
    <br>
    <label for="image">Image about the notice:</label>
    <input type="file" id="image" name="image" accept="image/*" >
        <br>
        <br>
    <label for="venue"><b>Venue</b></label>
    <input type="text" placeholder="Enter Venue" id="venue" name="venue" required>

    <label for="Contact"><b>Contact</b></label>
    <input type="text" placeholder="Enter Contact Number" id="contact" name="contact" required>

    <label for="Description"><b>Description</b></label>
    <br>
    <textarea id="description" name="description" rows="10" cols="70"></textarea>

    <button type="submit">Submit</button>
  </div>
  </form>
  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn" onclick="window.location.href='http://localhost/project/user.php';">Cancel</button>
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

