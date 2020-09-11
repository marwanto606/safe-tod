<?php
header('Content-Type: text/plain');
include 'config.php';
echo"User-agent: *\r
Allow: /\r
Sitemap:$site/sitemap.xml\r";
?>
