<?php
include_once "sesi.php";

$modul=(isset($_GET['s']))?$_GET['s']:"awal";
switch($modul){
	case 'awal': default: include "modul/siswa/tampil.php"; break;
	case 'tambah': include "modul/siswa/tambah.php"; break;
	case 'simpan': include "modul/siswa/simpan.php"; break;
	case 'edit': include "modul/siswa/edit.php"; break;
	case 'update': include "modul/siswa/update.php"; break;
	case 'hapus': include "modul/siswa/hapus.php"; break;
	case 'detail': include "modul/siswa/detail.php"; break;
	case 'profil': include "modul/siswa/profil.php"; break;
	case 'cetak': include "modul/siswa/cetak.php"; break;
	case 'print': include "modul/siswa/cetakok.php"; break;
	case 'upload': include "modul/siswa/upload_ok.php"; break;
	case 'uploadsip': include "modul/siswa/upload_kuy.php"; break;
}
?>
