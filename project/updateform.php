

       <!DOCTYPE html>
<!--	Author: Cheung Tin Long 19055971d
-->
<html>

<head>
	
</head>

<body>

<?php
include "dbconfig.php";
$nickname = $_POST['nickname'];
$email = $_POST['email'];
$image_file = $_FILES["image"];

if (!isset($image_file)) {
    $image_file= $_COOKIE["userimage"];
}
else{
    $image_type = exif_imagetype($image_file["tmp_name"]);
if (!$image_type) {
    die('Uploaded file is not an image.');
}
$image_extension = image_type_to_extension($image_type, true);
$image_name = generateRandomString() . $image_extension;
$location = __DIR__ . "/images/" . $image_name;
move_uploaded_file($image_file["tmp_name"], $location   
);
}
setcookie("userimage","reset",time() -3600);
// Exit if is not a valid image file

$userQuery="UPDATE user SET NickName='".$nickname."',Email='".$email."',Image='".$location."' WHERE UserID =".$_COOKIE["loginID"].";";
dboperation($userQuery);
header("Location: http://localhost/project/user.php");
exit();
?>

</body>
</html>