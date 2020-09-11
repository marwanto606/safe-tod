<?php
include 'config.php';
session_start();
if(isset($_SESSION['username'])== $mimin && isset($_SESSION['password']) == $pmimin) {
$nimg=$_GET['img'];
$img = ''.$dir_img.''.$nimg.'.jpg';
if (!unlink($img))
{
echo 'Error deleting '.$nimg.' <a href="'.$dashbord.'">kembali</a>';
}
else
{
header('location:'.$edit.'?txt='.$nimg.'');
}
}else{
header('location:'.$login.'');
}
?>