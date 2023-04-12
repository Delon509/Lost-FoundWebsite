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
$npw = $_POST['npw'];
$query="UPDATE user SET Password='".$npw."' WHERE UserID ='".$_COOKIE["loginID"]."';";
$result = dboperation($query);
setcookie("forget","reset",time() + (60 * 60 * 24));
setcookie("sa", "reset", time() + (60 * 60 * 24));
setcookie("loginID","reset",time() + (60 * 60 * 24));
setcookie("login","reset",time() + (60 * 60 * 24));
header("Location: http://localhost/project/login.php");
exit();

?>
</body>
</html>