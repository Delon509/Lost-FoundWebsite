<!DOCTYPE html>
<!--	Author: Cheung Tin Long 19055971d
-->
<html>

<head>
	
</head>

<body>

<?php
    if(!(isset($_COOKIE["username"])&& isset($_COOKIE["pw"]))){
        setcookie("login", "false", time() + (60 * 60 * 24));
    }
    else{
        include "dbfunction.php";
        nameandpw($_COOKIE["username"],$_COOKIE["pw"]);
    }
?>

</body>
</html>