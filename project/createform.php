

       <!DOCTYPE html>
<!--	Author: Cheung Tin Long 19055971d
-->
<html>

<head>
	
</head>

<body>

<?php
include "dbconfig.php";
$date = $_POST['date'];
$venue= $_POST['venue'];
$contact = $_POST['contact'];
$description = $_POST['description'];
$image_file = $_FILES["image"];
$type = filter_input(INPUT_POST, 'type', FILTER_SANITIZE_STRING);

if (!isset($image_file)) {
    die('No file uploaded.');
}
// Exit if is not a valid image file
$image_type = exif_imagetype($image_file["tmp_name"]);
if (!$image_type) {
    die('Uploaded file is not an image.');
}
$image_extension = image_type_to_extension($image_type, true);
$image_name = generateRandomString() . $image_extension;
$location = __DIR__ . "/images/" . $image_name;
move_uploaded_file($image_file["tmp_name"], $location   
);


$userQuery="INSERT INTO notice (Type,Date,Venue,Contact,Description,Image,State,User_UserID) VALUES ('".$type."','".$date."','".$venue."','".$contact."','".$description."','".$location."','Pending',".$_COOKIE["loginID"].");";
dboperation($userQuery);
header("Location: http://localhost/project/user.php");
exit();
?>

</body>
</html>