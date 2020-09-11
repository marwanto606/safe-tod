<?php 
include 'config.php';
$title = $sitename;
include $head;
echo '<body>
<div id="outer-wrapper">
<div id="header-wrapper"><h1><a href="'.$situs.'">'.$sitename.'</a></h1></div>
<div id="content-wrapper">';
echo '<div class="info"><b>'.$diskripsi.'</b> - diskripsi lainnya</div>';
$dir = $dir_post;
if (is_dir($dir)){
if ($dh = opendir($dir)){
while (($file = readdir($dh)) !== false){
if($file != '.' && $file != '..'){
$nfile = str_replace('.txt','',$file);
$title_file = str_replace('-',' ',$nfile);
echo '<div class="menulist"><a href="/'.$nfile .'/"><i>'.ucwords($title_file).'</i></a></div>';
}
}
closedir($dh);

}
}
echo '</div>';
include $foot;
?> 
