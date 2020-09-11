<?php
session_start();
include 'config.php';
if (isset($_POST['submit'])) {
if ($_POST['username'] == $mimin && $_POST['password'] == $pmimin){
$_SESSION['username'] = $_POST['username']; 
$_SESSION['password'] = $_POST['password']; 
header('location: '.$dashbord.'');
}else {
//echo 'Username Atau Password salah GOBLOG !!!';
}
}
	
if(isset($_SESSION['username']) == $mimin && isset($_SESSION['password']) == $pmimin) { 
header('location: '.$dashbord.'');
}else{
$title       = 'Login Admin Panel '.$copyright.'';
include 'head.php'; 
echo '<body>
<div class="sign-wrap">
<div class="sign">
<h1>Panel Admin '.$copyright.'</h1>
<form action="" method="post">
<input class="contect" type="text" placeholder="Username Admin Panel" name="username">
<input class="contect" type="password" placeholder="Password Admin Panel" name="password">
<input class="btn-submit" type="submit" name="submit" value="Login">
</form>   
</div></div>
</body></html>';
}

?>
