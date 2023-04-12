<?php
 $test = (4/9)*100;
 include "dbconfig.php";
        $query="SELECT COUNT(*) FROM( SELECT DATEDIFF(CURDATE(),Date) AS Difference  FROM notice HAVING Difference BETWEEN 0 AND 30) AS Result;" ;
         $result = dboperation($query);
         $row = mysqli_fetch_assoc($result);
         $below = $row['COUNT(*)'];

         $query="SELECT COUNT(*) FROM( SELECT DATEDIFF(CURDATE(),Date) AS Difference  FROM notice HAVING Difference BETWEEN 31 AND 60) AS Result;" ;
         $result = dboperation($query);
         $row = mysqli_fetch_assoc($result);
         $mid = $row['COUNT(*)'];

         $query="SELECT COUNT(*) FROM( SELECT DATEDIFF(CURDATE(),Date) AS Difference  FROM notice HAVING Difference BETWEEN 61 AND 9999) AS Result;" ;
         $result = dboperation($query);
         $row = mysqli_fetch_assoc($result);
         $above = $row['COUNT(*)'];
         $total = $below + $mid + $above;
$dataPoints = array( 
	array("label"=>"Below 30 days", "y"=>($below/$total)*100),
	array("label"=>"30-60days", "y"=>($mid/$total)*100),
	array("label"=>"above 60days", "y"=>($above/$total)*100),
)
 
?>
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
      <title>Admin Home Page</title>
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
      <script>
window.onload = function() {
 
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "Percentage of notices in different age ranges"
	},
	subtitles: [{
		text: new Date().toLocaleDateString()
	}],
	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
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
<div class="caption">System Statistics</div>	
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
  
      <!-- end header inner -->
      <!-- end header -->

      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
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

