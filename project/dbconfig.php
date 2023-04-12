<!DOCTYPE html>
<!--	Author: Cheung Tin Long 19055971d
-->
<html>

<head>
	<title></title>
</head>

<body>

<?php
function dboperation($userQuery){
    $server = "localhost";
$user = "root";
$pw = "root";
$db = "mydb";
    $connect = mysqli_connect($server, $user, $pw, $db);
    if(!$connect) {
        die("Connection failed: " . mysqli_connect_error());
        }
        $result = mysqli_query($connect, $userQuery);
        if (!$result) {
        die("Could not successfully run query.");
        }
        return $result;
}
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
?>

</body>
</html>