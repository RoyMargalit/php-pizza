<?php 

//dev conn:
// $host= 'localhost';
// $user= 'roy margalit';
// $pw='bmwcool4499';
// $db='pizza-proj';

//Remote db conn:
$host= 'remotemysql.com';
$user= 'jFCT8z4Lsv';
$pw='yMJX4FSW2v';
$db='jFCT8z4Lsv';

$conn = mysqli_connect($host, $user, $pw, $db);
//check connection
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}
?>