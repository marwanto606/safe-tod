<?php
include 'config.php';
session_start();
if(isset($_SESSION['username']) == $mimin && isset($_SESSION['password']) == $pmimin) {
$ntxt=$_GET['txt'];
$txt = ''.$dir_post.''.$ntxt.'.txt';
$img = ''.$dir_img.''.$ntxt.'.jpg';
if (!unlink($txt))
{
echo 'Error deleting '.$ntxt.' <a href="'.$dashbord.'">kembali</a>';
}
else
{
unlink($img);
header('location:'.$dashbord.'');
}
}else{
header('location:'.$login.'');
}
?>