<?php
include 'config.php'; 
session_start();
if(isset($_SESSION['username'])==$mimin && isset($_SESSION['password'])==$pmimin) {
if(isset($_GET['config'])){
$filenya = 'config.php';
$ket = 'Edit file '.$filenya.'. Semua setingan awal situs di file ini, jika merubah nama file <u>'.$post.'</u> dan <u>'.$robots.'</u>, rubah juga di file .htaccess';}
if(isset($_GET['login'])){
$filenya = $login;
$ket = 'Edit file '.$filenya.' dashbord login awal ke panel admin TOD';}
if(isset($_GET['logout'])){
$filenya = $logout;
$ket = 'Edit file '.$filenya.' dari admin TOD';}
if(isset($_GET['htaccess'])){
$filenya = $htaccess;
$ket = 'Edit file '.$filenya.' dari admin TOD';}
if(isset($_GET['dashbord'])){
$filenya = $dashbord;
$ket = 'Edit file '.$dashbord.' admin TOD';}
if(isset($_GET['edit'])){
$filenya = $edit;
$ket = 'Edit file '.$edit.' post di admin panel TOD';}
if(isset($_GET['hapus'])){
$filenya = $hapus;
$ket = 'Edit file '.$hapus.' post di admin panel TOD';}
if(isset($_GET['hapus_img'])){
$filenya = $hapus_img;
$ket = 'Edit file '.$hapus_img.' post di admin panel TOD';}
if(isset($_GET['head'])){
$filenya = $head;
$ket = 'Edit file '.$head.' kepala nya TOD';}
if(isset($_GET['foot'])){
$filenya = $foot;
$ket = 'Edit file '.$foot.' kaki nya TOD';}
if(isset($_GET['index'])){
$filenya = $index;
$ket = 'Edit file '.$index.' halaman index depan TOD';}
if(isset($_GET['post'])){
$filenya = $post;
$ket = 'Edit file '.$post.' admin TOD';}
if(isset($_GET['js'])){
$filenya = $safelink_js;
$ket = 'Edit file '.$filenya.' tambahkan url post baru yang sudah di buat ke baris kode seperti dibawah contohnya :<br>
if(x=="1"){xxx="url-barunya-disini-tod"}';}
if(isset($_GET['robots'])){
$filenya = $robots;
$ket = 'Edit file '.$robots.' dari panel admin TOD';}
if(isset($_GET['sitemap'])){
$filenya = $sitemap;
$ket = 'Edit file '.$filenya.' dari panel admin TOD';}
if(isset($_GET['txt'])){
$filenya = 'ads.txt';
$ket = 'Edit file '.$filenya.' tambahkan data '.$filenya.' adsense kalian TOD contohnya : google.com, pub-xxxxxxxxxxxxxx, DIRECT, f08c47fec0942fa0';}
if(isset($_GET['css'])){
$filenya = 'style.css';
$ket = 'Edit file '.$filenya.' edit style css safelink TOD';}
$title       = 'Edit file  '.$filenya.'';
include $head; 
echo'<body>
<div id="outer-wrapper">
<span class="fp"><a class="btn-cloud" href="'.$dashbord.'">Dashbord</a><a class="btn-cloud" href="'.$logout.'">Logout</a></span>
<div id="header-wrapper">
<h1><a href="'.$situs.'">'.$copyright.'</a></h1></div>
<div class="info">'.$ket.'</div>';
echo '<div class="menulist">';
echo '<a class="btn-cloud" href="?config">Config.php</a> <a class="btn-cloud" href="?css">'.$css.'</a> <a class="btn-cloud" href="?login">'.$login.'</a> <a class="btn-cloud" href="?logout">'.$logout.'</a> <a class="btn-cloud" href="?htaccess">'.$htaccess.'</a>  <a class="btn-cloud" href="?dashbord">'.$dashbord.'</a> <a class="btn-cloud" href="?hapus">'.$hapus.'</a> <a class="btn-cloud" href="?hapus_img">'.$hapus_img.'</a> <a class="btn-cloud" href="?head">'.$head.'</a> <a class="btn-cloud" href="?index">'.$index.'</a> <a class="btn-cloud" href="?foot">'.$foot.'</a> <a class="btn-cloud" href="?js">'.$safelink_js.'</a> <a class="btn-cloud" href="?robots">'.$robots.'</a> <a class="btn-cloud" href="?sitemap">'.$sitemap.'</a> <a class="btn-cloud" href="?txt">ADS.TXT</a>';
if(file_exists($filenya)){
$isi = file_get_contents($filenya);
echo'<form action="" enctype="multipart/form-data" method="POST">
<textarea class="text" name="text" style="height: 300px;">'.$isi.'</textarea><br/>
<input class="btn-submit" type="submit" name="enter" value="Save"/>
</form> ';
if(isset($_POST["enter"]))
{
$text=$_POST["text"];
$file = fopen($filenya,'w');    
if($file)
{
fputs($file,$text);
}
fclose($file); 
echo'<meta http-equiv="Refresh" content="1; URL=?config">';
}

if(isset($_GET['config'])){
if (isset($_POST['rename_css'])){
rename($css,$_POST['nama_baru_css']);
echo 'Pengubah nama file '.$css.' sukses menjadi '.$_POST['nama_baru_css'].' ubah juga variabelnya di file config.php di atas';
}
if (isset($_POST['rename_login'])){
rename($login,$_POST['nama_baru_login']);
echo 'Pengubah nama file '.$login.' sukses menjadi '.$_POST['nama_baru_login'].' ubah juga variabelnya di file config.php di atas';
}
if (isset($_POST['rename_logout'])){
rename($logout,$_POST['nama_baru_logout']);
echo 'Pengubah nama file '.$logout.' sukses menjadi '.$_POST['nama_baru_logout'].' ubah juga variabelnya di file config.php di atas';
}
if (isset($_POST['rename_dashbord'])){
rename($dashbord,$_POST['nama_baru_dashbord']);
echo 'Pengubah nama file '.$dashbord.' sukses menjadi '.$_POST['nama_baru_dashbord'].' ubah juga variabelnya di file config.php di atas';
}
if (isset($_POST['rename_edit'])){
rename($edit,$_POST['nama_baru_edit']);
echo 'Pengubah nama file '.$edit.' sukses menjadi '.$_POST['nama_baru_edit'].' ubah juga variabelnya di file config.php di atas';
}
if (isset($_POST['rename_hapus'])){
rename($hapus,$_POST['nama_baru_hapus']);
echo 'Pengubah nama file '.$hapus.' sukses menjadi '.$_POST['nama_baru_hapus'].' ubah juga variabelnya di file config.php di atas';
}
if (isset($_POST['rename_hapus_img'])){
rename($hapus_img,$_POST['nama_baru_hapus_img']);
echo 'Pengubah nama file '.$hapus_img.' sukses menjadi '.$_POST['nama_baru_hapus_img'].' ubah juga variabelnya di file config.php di atas';
}
if (isset($_POST['rename_safelink_js'])){
rename($safelink_js,$_POST['nama_baru_safelink_js']);
echo 'Pengubah nama file '.$safelink_js.' sukses menjadi '.$_POST['nama_baru_safelink_js'].' ubah juga variabelnya di file config.php di atas';
}
if (isset($_POST['rename_ubah'])){
rename($ubah,$_POST['nama_baru_ubah']);
echo 'Pengubah nama file '.$ubah.' sukses menjadi '.$_POST['nama_baru_ubah'].' ubah juga variabelnya di file config.php di atas';
}
if (isset($_POST['rename_head'])){
rename($head,$_POST['nama_baru_head']);
echo 'Pengubah nama file '.$head.' sukses menjadi '.$_POST['nama_baru_head'].' ubah juga variabelnya di file config.php di atas';
}
if (isset($_POST['rename_foot'])){
rename($foot,$_POST['nama_baru_foot']);
echo 'Pengubah nama file '.$foot.' sukses menjadi '.$_POST['nama_baru_foot'].' ubah juga variabelnya di file config.php di atas';
}
if (isset($_POST['rename_post'])){
rename($post,$_POST['nama_baru_post']);
echo 'Pengubah nama file '.$post.' sukses menjadi '.$_POST['nama_baru_post'].' ubah juga variabelnya di file config.php di atas';
}
if (isset($_POST['rename_robots'])){
rename($robots,$_POST['nama_baru_robots']);
echo 'Pengubah nama file '.$robots.' sukses menjadi '.$_POST['nama_baru_robots'].' ubah juga variabelnya di file config.php di atas';
}
if (isset($_POST['rename_sitemap'])){
rename($sitemap,$_POST['nama_baru_sitemap']);
echo 'Pengubah nama file '.$sitemap.' sukses menjadi '.$_POST['nama_baru_sitemap'].' ubah juga variabelnya di file config.php di atas';
}
if (isset($_POST['rename_dir_post'])){
rename($dir_post,$_POST['nama_baru_dir_post']);
echo 'Pengubah nama file '.$dir_post.' sukses menjadi '.$_POST['nama_baru_dir_post'].' ubah juga variabelnya di file config.php di atas';
}
if (isset($_POST['rename_dir_img'])){
rename($dir_img,$_POST['nama_baru_dir_img']);
echo 'Pengubah nama file '.$dir_img.' sukses menjadi '.$_POST['nama_baru_dir_img'].' ubah juga variabelnya di file config.php di atas';
}

echo '<form action="" enctype="multipart/form-data" method="post">
<input class="contect" type="text" placeholder="Rename file '.$css.'" value="'.$css.'" style="width: 50%;" name="nama_baru_css">
<input class="btn-submit" name="rename_css" type="submit" value="Rename">
</form>
<form action="" enctype="multipart/form-data" method="post">
<input class="contect" type="text" placeholder="Rename file '.$login.'" value="'.$login.'" style="width: 50%;" name="nama_baru_login">
<input class="btn-submit" name="rename_login" type="submit" value="Rename">
</form>
<form action="" enctype="multipart/form-data" method="post">
<input class="contect" type="text" placeholder="Rename file '.$logout.'" value="'.$logout.'" style="width: 50%;" name="nama_baru_logout">
<input class="btn-submit" name="rename_logout" type="submit" value="Rename" />
</form>
<form action="" enctype="multipart/form-data" method="post">
<input class="contect" type="text" placeholder="Rename file '.$dashbord.'" value="'.$dashbord.'" style="width: 50%;" name="nama_baru_dashbord">
<input class="btn-submit" name="rename_dashbord" type="submit" value="Rename" />
</form>
<form action="" enctype="multipart/form-data" method="post">
<input class="contect" type="text" placeholder="Rename file '.$edit.'" value="'.$edit.'" style="width: 50%;" name="nama_baru_edit">
<input class="btn-submit" name="rename_edit" type="submit" value="Rename" />
</form>
<form action="" enctype="multipart/form-data" method="post">
<input class="contect" type="text" placeholder="Rename file '.$hapus.'" value="'.$hapus.'" style="width: 50%;" name="nama_baru_hapus">
<input class="btn-submit" name="rename_hapus" type="submit" value="Rename" />
</form>
<form action="" enctype="multipart/form-data" method="post">
<input class="contect" type="text" placeholder="Rename file '.$hapus_img.'" value="'.$hapus_img.'" style="width: 50%;" name="nama_baru_hapus_img">
<input class="btn-submit" name="rename_hapus_img" type="submit" value="Rename" />
</form>
<form action="" enctype="multipart/form-data" method="post">
<input class="contect" type="text" placeholder="Rename file '.$safelink_js.'" value="'.$safelink_js.'" style="width: 50%;" name="nama_baru_safelink_js">
<input class="btn-submit" name="rename_safelink_js" type="submit" value="Rename" />
</form>
<form action="" enctype="multipart/form-data" method="post">
<input class="contect" type="text" placeholder="Rename file '.$ubah.'" value="'.$ubah.'" style="width: 50%;" name="nama_baru_ubah">
<input class="btn-submit" name="rename_ubah" type="submit" value="Rename" />
</form>
<form action="" enctype="multipart/form-data" method="post">
<input class="contect" type="text" placeholder="Rename file '.$head.'" value="'.$head.'" style="width: 50%;" name="nama_baru_head">
<input class="btn-submit" name="rename_head" type="submit" value="Rename" />
</form>
<form action="" enctype="multipart/form-data" method="post">
<input class="contect" type="text" placeholder="Rename file '.$foot.'" value="'.$foot.'" style="width: 50%;" name="nama_baru_foot">
<input class="btn-submit" name="rename_foot" type="submit" value="Rename" />
</form>
<form action="" enctype="multipart/form-data" method="post">
<input class="contect" type="text" placeholder="Rename file '.$post.'" value="'.$post.'" style="width: 50%;" name="nama_baru_post">
<input class="btn-submit" name="rename_post" type="submit" value="Rename" />
</form>
<form action="" enctype="multipart/form-data" method="post">
<input class="contect" type="text" placeholder="Rename file '.$robots.'" value="'.$robots.'" style="width: 50%;" name="nama_baru_robots">
<input class="btn-submit" name="rename_robots" type="submit" value="Rename" />
</form>
<form action="" enctype="multipart/form-data" method="post">
<input class="contect" type="text" placeholder="Rename file '.$sitemap.'" value="'.$sitemap.'" style="width: 50%;" name="nama_baru_sitemap">
<input class="btn-submit" name="rename_sitemap" type="submit" value="Rename" />
</form>
<form action="" enctype="multipart/form-data" method="post">
<input class="contect" type="text" placeholder="Rename file '.$dir_post.'" value="'.$dir_post.'" style="width: 50%;" name="nama_baru_dir_post">
<input class="btn-submit" name="rename_dir_post" type="submit" value="Rename" />
</form>
<form action="" enctype="multipart/form-data" method="post">
<input class="contect" type="text" placeholder="Rename file '.$dir_img.'" value="'.$dir_img.'" style="width: 50%;" name="nama_baru_dir_img">
<input class="btn-submit" name="rename_dir_img" type="submit" value="Rename" />
</form>
';

}

}
echo'</div>';
include $foot;
}else{
header('location:'.$login.'');
}
?>  