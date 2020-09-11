<?php 
include ('config.php');
header('Content-Type: text/xml');
echo'<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
echo'
<url><loc>'.$site.'</loc><changefreq>daily</changefreq><priority>1.0</priority></url>';

$dir = $dir_post;
if (is_dir($dir)){
if ($dh = opendir($dir)){
while (($file = readdir($dh)) !== false){
if($file != '.' && $file != '..'){
$nfile = str_replace('.txt','',$file);
echo '
<url><loc>'.$site.'/'.$nfile .'/</loc><changefreq>daily</changefreq><priority>0.6</priority></url>';
}
}
closedir($dh);

}
}
echo'</urlset>';
?> 
