<!DOCTYPE html>
<!--	Author: Cheung Tin Long 19055971d
-->
<html>

<head>
	<title></title>
</head>

<body>

<?php
include "dbconfig.php";
function nameandpw($username,$pw){
    $query="SELECT UserID, Role FROM user WHERE Username='".$username."' AND Password='".$pw. "';" ;
    $result = dboperation($query);
        if (mysqli_num_rows($result) == 0){
            setcookie("login", "false", time() + (60 * 60 * 24));
        }
        else{
            $row = mysqli_fetch_assoc($result);
            setcookie("loginID",$row['UserID'],time() + (60 * 60 * 24));
            setcookie("role",$row['Role'],time() + (60 * 60 * 24));
            setcookie("login", "true", time() + (60 * 60 * 24));
            setcookie("username", $username, time() + (60 * 60 * 24));
            setcookie("pw", $pw, time() + (60 * 60 * 24));
            echo "<h1>set cookie for username and pw</h1>";
        }
}
?>

</body>
</html>