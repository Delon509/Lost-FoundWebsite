

       <!DOCTYPE html>
<!--	Author: Cheung Tin Long 19055971d
-->
<html>

<head>
	
</head>

<body>

<?php
$uname = $_POST['uname'];
$psw = $_POST['psw'];
$nickname = $_POST['nickname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$birthday = $_POST['birthday'];
$sq = $_POST['sq'];
$sa = $_POST['sa'];
$image_file = $_FILES["image"];

if (!isset($image_file)) {
    die('No file uploaded.');
}
// Exit if is not a valid image file
$image_type = exif_imagetype($image_file["tmp_name"]);
if (!$image_type) {
    die('Uploaded file is not an image.');
}
$image_extension = image_type_to_extension($image_type, true);
$image_name = $nickname . $image_extension;
$location = __DIR__ . "/images/" . $image_name;
move_uploaded_file($image_file["tmp_name"], $location   
);

include "dbconfig.php";
$userQuery= "INSERT INTO user (Username,NickName,Email,Password,Role,Image,Gender,Birthday,Question,Answer) VALUES ('".$uname."','".$nickname."','".$email."','".$psw."','"."User"."','".$location."','".$gender."','".$birthday."','".$sq."','".$sa."');";
dboperation($userQuery);
header("Location: http://localhost/project/login.php");
setcookie("login","reset", time() + (60 * 60 * 24));
exit();
?>

</body>
</html>