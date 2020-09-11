<?php
session_start();
include 'config.php'; 
if($_SESSION['username'] == $mimin and $_SESSION['password'] == $pmimin) {
$title = 'Admin Panel - '.$copyright.'';
include $head; 
echo '
<body>
<div id="outer-wrapper">
<span class="fp"><a class="btn-cloud" href="'.$ubah.'?config">Config</a> <a class="btn-cloud" href="'.$logout.'">Logout</a></span>
<div id="header-wrapper"><h1><a href="'.$situs.'">'.$copyright.'</a></h1>
'.$diskripsi.'
</div>
<form  method="get" action="'.$edit.'">
<input class="contect" type="text" name="txt" placeholder="Masukkan Judul Artikelnya Disini" style="width: 50%;"/>
<button class="btn-submit" type="submit">Buat</button>
</form>
<div id="content-wrapper">
<div class="info">Setelah membuat post silahkan edit file '.$safelink_js.' untuk menambahkan url post nya TOD !!!</div>
';
if (is_dir($dir_post)){
if ($dh = opendir($dir_post)){
while (($file = readdir($dh)) !== false){
if($file != '.' && $file != '..'){
$nfile = str_replace('.txt','',$file);
echo '<div class="menulist"><i>'.$nfile.'</i> <span class="fp"><a class="btn-cloud" target="_blank" href="/'.$nfile .'/">view</a> <a class="btn-cloud" href="'.$edit.'?txt='.$nfile .'">edit</a> <a class="btn-cloud" href="'.$hapus.'?txt='.$nfile .'">hapus</a></span></div>';
}
}
closedir($dh);
}
}
echo '<input class="contect" id="inputURL" placeholder="http://" style="width: 40%;"/>
<input class="contect" id="resultLink" placeholder="Result Safelink"  readonly="readonly" required="required" type="text" style="width: 55%;"/>
<div class="info">Test safelink dengan memasukkan url dengan http:// atau https:// pada form diatas. <br>
Untuk memasang safelink ke blog copykan script ini ke blog mu <a target="_blank" href="safetod.php">disini</a></div>
</div>
<script src="'.$site.'/safelink.js" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
var output = document.getElementById("resultLink"),
input = document.getElementById("inputURL");
input.onkeyup = function() {
if (input.value != "") {
var x=Math.floor((Math.random()*2)+ 1);
var xxx=null;
if(x=="1"){xxx="motorcycle-safety-checklist-items-for-your-long-distance-motorcycle-ride"}if(x=="2"){xxx="cara-masak-telur"}
output.value = "'.$site.'/'.$post.'?id="+xxx+"&url=" + Base64.encode(this.value); //change with your link
} else {
output.value = "";
}
}
//]]>
</script>
';
include $foot;
}else{
header('location:'.$login.'');}
?>

