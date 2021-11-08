<?php include "atas.php"; ?>






<div class="main-panel">
          <div class="content-wrapper">
          <h1>
        Administrator
        <small>Pemilihan Ketua OSIS</small>
      </h1>
      <br>
      <br>
          <div class="box-header">
			  <a href="?m=kelas&s=tambah" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Tambah Kelas</a>
              
            </div>
            <br>
            <br>
            
            <div class="row">
              
              <div class="col-lg-6 grid-margin stretch-card">
                
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Daftar Kelas</h4>
                    
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>NO</th>
                            <th>Nama kelas</th>
                            <th>Jumlah Siswa</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
include "../sambungan.php";
$sql="SELECT * FROM kelas ORDER BY idkelas";
$query=mysqli_query($koneksi,$sql);
if(mysqli_num_rows($query)==0){
	echo "<td colspan='6'>Data Masih Kosong</td>";
}else{
	$no=1;
	while($r=mysqli_fetch_assoc($query)){
	  echo "<tr>";
		echo "<td>$no</td>";
		echo "<td><a href='?m=kelas&s=detail&id=".$r['idkelas']."'>".$r['kelas']."</a></td>";
    echo "<td>".$r['jumlah']."</td>";
   
		echo '<td><a href="index.php?m=kelas&s=edit&id='.$r['idkelas'].'"><button type="button" class="btn btn-outline-warning btn-icon-text">Edit</button></a> ||| <a href="index.php?m=kelas&s=hapus&id='.$r['idkelas'].'" onclick="return confirm(\'Yakin Akan dihapus?\')"><button type="button" class="btn btn-outline-danger btn-icon-text">Hapus</button></a> </td>';
	  echo "</tr>";
		$no++;
	}
}
?>
                          
                        </tbody>
                        <tfoot>
                          <tr>
                            <th>NO</th>
                            <th>Nama kelas</th>
                            <th>Jumlah Siswa</th>
                            <th>Aksi</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                </div>
              </div>









  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      
    </section>
    <!-- Main content -->
	<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            
            <!-- /.box-header -->
            
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
