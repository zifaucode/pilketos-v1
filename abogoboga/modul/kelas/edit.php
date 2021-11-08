<?php include "atas.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Administrator 
        <small>Pemilihan Ketua OSIS</small>
      </h1>
      
    </section>


<br>




    <?php
$id=$_GET['id'];
include "../sambungan.php";
$sql="SELECT * FROM kelas WHERE idkelas='$id'";
$query=mysqli_query($koneksi,$sql);
$r=mysqli_fetch_assoc($query);
?>




    <!-- Main content -->
    <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Form edit Kelas</h4>
                    
                    <form action="?m=kelas&s=update" method="post" enctype="multipart/form-data">
                    
                      <div class="form-group">
                      <input type="hidden" name="id" value="<?php echo$r['idkelas'];?>" />
                        <label for="exampleInputUsername1">Nama Kelas</label>
                        <input type="text" name="kelas" class="form-control" id="pilkasis1" placeholder="Kelas" value="<?php echo$r['kelas'];?>" required />
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah Siswa</label>
                        <input type="text" name="jumlah" class="form-control" id="pilkasis1" placeholder="Jumlah" value="<?php echo$r['jumlah'];?>" />
                      </div>
                      
                      
                      
                      <button type="submit" name="simpan" value="Save" class="btn btn-success mr-2">Simpan</button>&nbsp;&nbsp;&nbsp;
                      
                      
                      <a href="?m=kelas"<button type="reset" name="reset" value="Reset" class="btn btn-primary mr-2">List</button></a>&nbsp;&nbsp;&nbsp;
                    </form>
                  </div>
                </div>
              </div>
    </div>
    <br>
    <br>

	
    <!-- /.content -->
<?php include "bawah.php"; ?>
