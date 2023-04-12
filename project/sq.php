<!DOCTYPE html>
<!--	Author: Cheung Tin Long 19055971d
-->
<html>

<head>
	<title></title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
<form action="resetpw.php" method="post">
  <div class="imgcontainer">
    <img src="images/forget.jpg" alt="Forget" class="avatar">
  </div>

  <div class="container">
<?php
if(isset($_COOKIE["sa"])){
    if(strcmp($_COOKIE["sa"],"false")==0){
      print "<h1> Wrong Answer</h1>"; 
    }
 }
include "dbconfig.php";

$uname = $_POST['uname'];
$query="SELECT UserID, Username,Question FROM user WHERE Username='".$uname."';" ;
$result = dboperation($query);
if (mysqli_num_rows($result) == 0){
    setcookie("forget", "false", time() + (60 * 60 * 24));
    header("Location: http://localhost/project/forget.php");
exit();
}
else{
    $row = mysqli_fetch_assoc($result);
    setcookie("loginID",$row['UserID'],time() + (60 * 60 * 24));
    setcookie("sq",$row['Question'],time() + (60 * 60 * 24));
    print("<label for=\"sq\"><b>Security Question: ".$row['Question']."</b></label>");
}
?>

      
    
    <input type="text" placeholder="Enter Answer" id="sa" name="sa" required>
    <button type="submit">Submit</button>
  </div>
  </form>


</body>
</html>