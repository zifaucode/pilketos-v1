

  <!-- Content Wrapper. Contains page content -->
  
  <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $judul;?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <center>
  <body>
    
	
        
        
          <div class="box">
          <br>
      <br>
          
			  
              <h3 class="box-title">Daftar Siswa</h3><br>
              <h4 class="box-title">Pemilihan Osis Sman 1 Parung</h4>
              <br>
              
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
                  <th>Password</th>
                  <th>NIS</th>
                  <th>Nama</th>
                  
                  <th>Kelas</th>
                  
                  
                  
                </tr>
                </thead>
                <tbody>';
	$no=1;
	while($r=mysqli_fetch_assoc($query)){
	  echo "<tr>";
		echo "<td>$no</td>";
    echo "<td>".$r['username']."</td>";
    echo "<td> userakun17</td>";
		echo "<td>".$r['nis']."</td>";
		echo "<td>".$r['nama']."</td>";
		
		echo "<td>".$r['kelas']."</td>";
		
		
		
		
	  echo "</tr>";
		$no++;
	}
}
?>
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">SMAN 1 PARUNG © 2020 </a>. </span>
              <span class="text-muted float-none float-sm-right d-block mt-1 mt-sm-0 text-center">By <i class="mdi mdi-heart text-danger">Zifau</i></span>
            </div>
          </footer>
      
      <!-- /.row -->
   
</center>
<script>
		window.print();
	</script>
