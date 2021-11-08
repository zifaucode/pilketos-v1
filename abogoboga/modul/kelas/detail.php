<?php include "atas.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <?php
$id=$_GET['id'];
include "../sambungan.php";
$sql="SELECT * FROM kelas WHERE idkelas='$id'";
$query=mysqli_query($koneksi,$sql);
$r=mysqli_fetch_assoc($query);
?>

    <div class="main-panel">
          <div class="content-wrapper">
           
            <div class="row">
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Detail Kelas</h4>
                    
                    <div class="table-responsive">
                      <table id="pilkasis1" class="table table-bordered">
                        <thead>
                          <tr>
                            
                            <th>Nama kelas</th>
                            <th>Jumlah Siswa</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                          <td><?php echo$r['kelas'];?></td>
                          <td><?php echo$r['jumlah'];?></td>
                           
                            <td><a href="?m=kelas&s=edit&id=<?php echo$id;?>" class="btn btn-large btn-warning"><i class="fa fa-times"></i> Edit</a>
						<a href="?m=kelas" class="btn btn-large btn-primary"><i class="fa fa-times"></i> List</td>
                          </tr>
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>





            </div>
    <!-- /.content -->
<?php include "bawah.php"; ?>
