

       <!DOCTYPE html>
<!--	Author: Cheung Tin Long 19055971d
-->
<html>

<head>
	
</head>

<body>

<?php
setcookie("loginID","reset",time() -3600);
setcookie("role","reset",time()-3600);
setcookie("login", "reset", time() -3600);
setcookie("username", "reset", time() -3600);
setcookie("pw", "reset", time() -3600);
setcookie("sq", "reset", time() -3600);
setcookie("sa", "reset", time() -3600);
header("Location: http://localhost/project/index.html");
exit();
?>

</body>
</html>