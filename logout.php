<?php
include 'config.php';
session_start(); // memulai session
unset($_SESSION['username']);
unset($_SESSION['password']);
session_destroy(); // menghapus session
header('location:'.$login.''); // mengambalikan ke index.php
?>
