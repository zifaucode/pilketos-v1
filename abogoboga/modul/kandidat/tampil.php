<?php include "atas.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <br>
    <br>
    <br>
    <br>
    <!-- Main content -->
	<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
        <a href="?m=kandidat&s=tambah" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Tambah Kandidat</a>
        <br>
        <br>
              <h3 class="box-title">Daftar Kandidat</h3>
            </div>
           
            
            <!-- /.box-header -->
            <div class="box-body">
<?php
include "../sambungan.php";
$sql="SELECT * FROM kandidat ORDER BY idkandidat";
$query=mysqli_query($koneksi,$sql);
if(mysqli_num_rows($query)==0){
    echo'          <table class="table table-bordered table-hover table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Username</th>
                  <th>Nama</th>
                  <th>No K</th>
                  <th>Visi</th>
                  <th>Misi</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
         ';       
	echo "<td colspan='6'>Data Masih Kosong</td>";
}else{
    echo'          <table id="pilkasis1" class="table table-bordered table-hover table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Username</th>
                  <th>Nama</th>
                  <th>No K</th>
                  <th>Visi</th>
                  <th>Misi</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
        ';        
	$no=1;
	while($r=mysqli_fetch_assoc($query)){
	  echo "<tr>";
		echo "<td>$no</td>";
		echo "<td><a href='?m=kandidat&s=detail&idp=".$r['idkandidat']."'>".$r['username']."</a></td>";
		echo "<td>".$r['nama']."</td>";
		echo "<td>".$r['nokandidat']."</td>";
		echo "<td>".$r['visi']."</td>";
		echo "<td>".$r['misi']."</td>";
		echo '<td width=60><a href="index.php?m=kandidat&s=edit&idp='.$r['idkandidat'].'"><button type="button" class="btn btn-outline-warning btn-icon-text">Edit</button></a> | <a href="index.php?m=kandidat&s=hapus&idp='.$r['idkandidat'].'" onclick="return confirm(\'Yakin Akan dihapus?\')"><button type="button" class="btn btn-outline-danger btn-icon-text">Hapus</button></a></td>';
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
                  <th>Nama</th>
                  <th>No K</th>
                  <th>Visi</th>
                  <th>Misi</th>
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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- /.content -->
<?php include "bawah.php"; ?>
