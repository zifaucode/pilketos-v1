<?php include "atas.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
      <br>
    <!-- Main content -->
	<section class="content">
      <div class="row">
        
        <div class="col-xs-12">
        
          <div class="box">
          <br>
      <br>
      <?php 
      
      if(isset($_GET['upload']))
      {
        if($_GET['upload']=="success"){
          echo "<h2>Data Berhasil Di import</h2>";
          
        }else
        {
          echo "<h2>Data Gagal Di import</h2>";
        }
        
      }
      
      
      
      ?>
			  
              <h3 class="box-title">Daftar Siswa</h3>
              
              <br>
              
              <br>
              
              <a href="?m=siswa&s=upload"> <button type="button" class="btn btn-danger btn-icon-text">
                            <i class="mdi mdi-upload btn-icon-prepend"></i> Upload
              </button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            
               <button type="button" class="btn btn-outline-secondary btn-icon-text"> Tempalte <i class="mdi mdi-file-check btn-icon-append"></i>
                          </button>
                            
              
              <br>
              <br>
              <a href="?m=siswa&s=tambah" class="btn btn-large btn-info"><i class="mdi mdi-file-check btn-icon-prepend"></i>Tambah Siswa</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="?m=siswa&s=cetak"><button type="button" class="btn btn-info btn-icon-text"> Print <i class="mdi mdi-printer btn-icon-append"></i></button></a>
             <br>
              
                            
            </div>
            <br>
            <!-- /.box-header -->
            <div class="card">
                  <div class="card-body">
                
<?php
include "../sambungan.php";
$sql="SELECT siswa.*, kelas.kelas FROM siswa,kelas WHERE kelas.idkelas=siswa.idkelas ORDER BY nis";
$query=mysqli_query($koneksi,$sql);
if(mysqli_num_rows($query)==0){
	echo '              <div class="table-responsive">
  <table id="pilkasis1" class="table table-bordered">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Username</th>
                  <th>NIS</th>
                  <th>Nama</th>
                  <th>JK</th>
                  <th>Kelas</th>
                  <th>Email</th>
                  <th>HP</th>
                  <th>Aktif</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>';
	echo "<td colspan='9'>Data Masih Kosong</td>";
}else{
	echo '              <div class="table-responsive">
  <table id="pilkasis1" class="table table-bordered">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Username</th>
                  <th>NIS</th>
                  <th>Nama</th>
                  <th>JK</th>
                  <th>Kelas</th>
                  <th>Email</th>
                  <th>HP</th>
                  <th>Aktif</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>';
	$no=1;
	while($r=mysqli_fetch_assoc($query)){
	  echo "<tr>";
		echo "<td>$no</td>";
		echo "<td><a href='?m=siswa&s=detail&nis=".$r['nis']."'>".$r['username']."</a></td>";
		echo "<td>".$r['nis']."</td>";
		echo "<td>".$r['nama']."</td>";
		echo "<td>".$r['jk']."</td>";
		echo "<td>".$r['kelas']."</td>";
		echo "<td>".$r['email']."</td>";
		echo "<td>".$r['hp']."</td>";
		echo "<td>".$r['aktif']."</td>";
		echo '<td><a href="index.php?m=siswa&s=edit&nis='.$r['nis'].'"><button type="button" class="btn btn-outline-warning btn-icon-text">Edit</button></a> | <a href="index.php?m=siswa&s=hapus&nis='.$r['nis'].'" onclick="return confirm(\'Yakin Akan dihapus?\')"><button type="button" class="btn btn-outline-danger btn-icon-text">Hapus</button></a></td>';
	  echo "</tr>";
		$no++;
	}
}
?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Username</th>
                  <th>NIS</th>
                  <th>Nama</th>
                  <th>JK</th>
                  <th>Kelas</th>
                  <th>Email</th>
                  <th>HP</th>
                  <th>Aktif</th>
                  <th>Opsi</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
<?php include "bawah.php"; ?>
