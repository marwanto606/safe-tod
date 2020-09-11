<?php
include 'config.php';
session_start();
$id = $_GET['id'];
$txt = ''.$dir_post.''.$id.'.txt';
$img = ''.$dir_img.''.$id.'.jpg';
if($_GET['url'])
{
$_SESSION['url'] = $_GET['url'];
header('location: '.$site.'/'.$id.'/');
}
$title = str_replace('-',' ', $id);
$title = ucwords($title);
include $head;
echo '
<body oncontextmenu="return false;" ondragstart="return false" onkeydown="return false;" onmousedown="return false;" onselectstart="return false">
<div id="outer-wrapper">
<div style="text-align:center;margin: 0px auto;overflow: hidden;">
'.$adsense_1.'
</div>
<div id="header-wrapper"><h1><a href="'.$situs.'">'.$title.'</a></h1></div>
<div id="content-wrapper">';
if(file_exists($img)){
echo'<img class="alignleft" title="'.$title.'" alt="'.$title.'" src="/'.$img.'" width="300"/> ';
}
if(isset($_SESSION['url'])){
echo '
<script>function show(){ $(".Visit_Link").show();}</script>
<center><a href="#todlink" onclick="show()"><button type="button" class="Visit_Link">Continue Click 2x </button></a>
</center>';}
echo '<div style="text-align:center;margin: 0px auto;overflow: hidden;">
<center>'.$adsense_1.'</center>
</div>';
echo'<b>'.$title.'</b> - ';
if($id) {
$file = fopen($txt,'r');    
while(! feof($file))    
{    
echo '<p>'.fgets($file).'</p>';    
}    
fclose($file); 
}
if(isset($_SESSION['url'])){
echo'<center><button style="display:none;" class="Visit_Link" onclick=safe();>Visit Link &raquo;</button></center>'
;}
echo '<div id="todlink">
<div style="text-align:center;margin: 0px auto;overflow: hidden;">
<center>'.$adsense_2.'</center>
</div>
</div>';
echo '</div>';
include $foot;
?>
