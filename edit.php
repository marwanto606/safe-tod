<?php
include 'config.php'; 
session_start();
if(isset($_SESSION['username']) == $mimin && isset($_SESSION['password']) == $pmimin) {
$ntxt=$_GET['txt'];
$ntxt= permalink($ntxt);
$txt = ''.$dir_post.''.$ntxt.'.txt';
$gambar = ''.$dir_img.''.$ntxt.'.jpg';
$title       = 'Edit Post '.$sitename.'';
include $head; 
echo'<body>
<div id="outer-wrapper">
<span class="fp"><a class="btn-cloud" href="'.$dashbord.'">Dashbord</a><a class="btn-cloud" href="'.$logout.'">Logout</a></span>
<div id="header-wrapper">
<h1><a href="'.$situs.'">'.$copyright.'</a></h1></div>
<div class="info">
Edit file '.$ntxt.'.txt<br/>
disini menggunkan form edit HTML, jadi silahkan gunakan Tag HTML untuk membuat postnya seperti contoh :<br>
Bold (Tulisan Tebal) &lt;b&gt;text&lt;/b&gt; , Italic (Tulisan miring) &lt;i&gt;text&lt;/i&gt;  dll tod.
</div>';
echo '<div class="menulist">';
if(file_exists($txt) && !empty($ntxt)){
$content = file_get_contents($txt);
echo'<form action="" enctype="multipart/form-data" method="POST">
<textarea class="text" name="text">'.$content.'</textarea><br/>';
if(!file_exists($gambar)){
echo'<input class="btn-ku" type="file" name="file">';
}
echo'<input class="btn-submit" type="submit" name="enter" value="Save"/>
</form>';
if(isset($_POST["enter"]))
{
$nama = $ntxt;
$ukuran	= $_FILES['file']['size'];
$file_tmp = $_FILES['file']['tmp_name'];
if($ukuran < 1044070){			
move_uploaded_file($file_tmp, ''.$dir_img.''.$nama.'.jpg');
echo 'Buat post dan upload gambar sukses !!! <meta http-equiv="refresh" content="1">';
}else{
echo 'ukuran file terlalu besar tod gati gambarnya babi !!!';
}
$text=$_POST["text"];
$file = fopen($txt,'w');    
if($file)
{
fputs($file,$text);
}
fclose($file); 
}
echo '<div class="box">';

if(file_exists($gambar)){
echo '<img src="'.$gambar.'"/><br/><a class="btn-cloud" href="'.$hapus_img.'?img='.$ntxt.'">Hapus Gambar</a><a class="btn-cloud" target="_blank" href="/'.$ntxt.'/">View Post</a><br/>';}
$file = fopen($txt,'r');    
while(! feof($file))    
{    
echo ''.fgets($file).'<br />';    
}    
fclose($file); 
echo '</div>';
}elseif(empty($ntxt)){
header('location:'.$dashbord.'');
}else{
echo'<form enctype="multipart/form-data" action="" method="POST">
<textarea class="text"  name="text"></textarea><br/>';
if(!file_exists($gambar)){
echo'<input class="btn-ku" type="file" name="file">';
}
echo'<input class="btn-submit" type="submit" name="enter" value="Save" />
</form>';
$myfile = fopen($txt, 'w');
$tulis = '';
fwrite($myfile, $tulis );
fclose($myfile);
}
echo'</div>
</div>';
include $foot;
}else{
header('location:'.$dashbord.'');
}
?>  