<?php 
 
$server = "sql106.liveblog365.com";
$user = "lblog_32126115";
$pass = "ixh580i2lq7";
$database = "lblog_32126115_pweb";
 
$conn = mysqli_connect($server, $user, $pass, $database);
 
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 
?>