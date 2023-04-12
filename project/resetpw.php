<!DOCTYPE html>
<!--	Author: Cheung Tin Long 19055971d
-->
<html>

<head>
	<title></title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

<?php
include "dbconfig.php";
$sa = $_POST['sa'];
$query="SELECT Answer FROM user WHERE UserID='".$_COOKIE["loginID"]."';" ;
$result = dboperation($query);
if (mysqli_num_rows($result) !== 0){
    $row = mysqli_fetch_assoc($result);
    if(strcmp($sa,$row["Answer"])!==0){
        setcookie("sa", "false", time() + (60 * 60 * 24));
        setcookie("forget", "true", time() + (60 * 60 * 24));
        setcookie("login", "0", time() + (60 * 60 * 24));
    header("Location: http://localhost/project/forget.php");
exit();
      }
}
?>
<form action="resetsuccess.php" method="post">
  <div class="imgcontainer">
    <img src="images/forget.jpg" alt="Forget" class="avatar">
  </div>

  <div class="container">
      
  <label for="newpw"><b>New Password</b></label>
    <input type="password" placeholder="Enter New Password" id="npw" name="npw" required>
    <button type="submit">Submit</button>
  </div>
  </form>
</body>
</html>