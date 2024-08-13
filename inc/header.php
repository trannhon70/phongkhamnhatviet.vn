<?php
ob_start();
session_start();
include 'lib/session.php';
Session::init();
?>


<?php
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: max-age=2592000");

$local = '/newphongkhamdakhoanhatviet.vn';
// $local ='https://phongkhamdakhoanhatviet.vn'
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Phòng khám đa khoa chuyên điều trị bệnh nam khoa, bệnh xã hội, da liễu, hậu môn - trực tràng uy tính tại thành phố Hồ Chí Minh">
    <title>Phòng khám đa khoa</title>
    <link rel="icon" href="<?php echo $local ?>/images/icons/icon_logo.png" type="image/x-icon">
