<!DOCTYPE html>
<!--	Author: Cheung Tin Long 19055971d
-->
<html>

<head>
	<title></title>
</head>

<body>

<?php
include "dbfunction.php";
$uname = $_POST['uname'];
$psw = $_POST['psw'];
nameandpw($uname,$psw);
include "forward.php";
header("Location: http://localhost/project/login.php");
exit();
?>

</body>
</html>