

       <!DOCTYPE html>
<!--	Author: Cheung Tin Long 19055971d
-->
<html>

<head>
	
</head>

<body>

<?php
$message = $_POST['textbox'];



include "dbconfig.php";
$userQuery="Update notice SET State='Completed' WHERE NoticeID=".$_COOKIE["NoticeID"].";";
dboperation($userQuery);
$userQuery="INSERT INTO respond (Message,Notice_NoticeID,User_UserID) VALUES ('".$message."',".$_COOKIE["NoticeID"].",".$_COOKIE["loginID"].");";
dboperation($userQuery);
header("Location: http://localhost/project/user.php");
exit();
?>

</body>
</html>