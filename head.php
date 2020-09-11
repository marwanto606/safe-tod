<?php
echo'<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="application/xhtml xml; charset=utf-8"/>
<meta http-equiv="cache-control" content="max-age=0"/>
<meta http-equiv="expires" content="0"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<link href="/favicon.ico" rel="icon" type="image/x-icon" />
<meta name="description" content="'.$sitename.' - '.$title.'"/>
<meta name="Distribution" content="Global"/>
<meta name="revisit-after" content="1 Days" />
<meta property="og:type" content="website" />
<meta property="og:title" content="'.$sitename.'" />
<meta property="og:description" content="'.$sitename.' - '.$title.'" />
<meta content="'.$sitename.'" property="og:site_name"/>
<meta property="og:url" content="'.$site.'" />
<meta content="en_US" property="og:locale"/>
<link rel="stylesheet" href="/'.$css.'" type="text/css"/>
<title>'.$title.'</title>';
if(isset($_GET['id']) && isset($_SESSION['url'])){
echo'
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>
<script language="JavaScript" type="text/javascript">
function safe(){window.open("'.base64_decode($_SESSION['url']).'","_self");}
</script>';
}
echo '</head>';
?>
