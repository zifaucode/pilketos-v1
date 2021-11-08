<?php

include "sambungan.php";
include "excel_reader2.php";

 
// koneksi ke mysql

$target = basename($_FILES['datasiswa']['name']) ; 

move_uploaded_file($_FILES['datasiswa']['tmp_name'], $target);
chmod($_FILES['datasiswa']['name'], 0777);

$data = new Spreadsheet_Excel_Reader($_FILES['datasiswa']['name'],false);
 
// membaca jumlah baris dari data excel
$jumlah_baris = $data->rowcount($sheet_index=0);
 
// nilai awal counter untuk jumlah data yang sukses dan yang gagal diimport
$sukses = 0;

 
// import data excel mulai baris ke-2 (karena baris pertama adalah nama kolom)
for ($i=2; $i<=$jumlah_baris; $i++)
{
  	$nis = $data->val($i, 1);
	$username = $data->val($i, 2);
	$password = $data->val($i, 3);
	$nama = $data->val($i, 4);
	$jk = $data->val($i, 5);
	$tempatlahir = $data->val($i, 6);
	$tanggallahir = $data->val($i, 7);
	$idkelas = $data->val($i, 8);
	$email = $data->val($i, 9);
	$hp = $data->val($i, 10);
	$aktif = $data->val($i, 11);

	
	{

		mysqli_query($koneksi,"INSERT INTO siswa VALUES ('$nis', '$username', '$password', '$nama', '$jk', '$tempatlahir', '$tanggallahir', '$idkelas', '$email', '$hp', '$aktif')");

		$success++;
	}
  
}

unlink($_FILES['datasiswa']['name']);
 
if($success > 0)
{
	header("location:?m=siswa?upload=success");
}




 
?>


