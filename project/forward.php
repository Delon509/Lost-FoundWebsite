

       <!DOCTYPE html>
<!--	Author: Cheung Tin Long 19055971d
-->
<html>

<head>
	
</head>

<body>

<?php
    if(isset($_COOKIE["login"])){
      if(strcmp($_COOKIE["login"],"true")==0){
        if(strcmp($_COOKIE["role"],"Admin")==0){
          header("Location: http://localhost/project/admin.php"); 
        }
        else{
          header("Location: http://localhost/project/user.php");
        }
        exit();
     }
    }
    
?>

</body>
</html>