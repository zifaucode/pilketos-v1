<?php include "atas.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
	<br>
	<br>
	<br>
    <!-- Main content -->
	<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
			  <h3 class="box-title">Detail Administrator</h3>
			  <br>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
<?php
$id=$_GET['idp'];
include "../sambungan.php";
$sql="SELECT * FROM pengguna WHERE idpengguna='$id'";
$query=mysqli_query($koneksi,$sql);
$r=mysqli_fetch_assoc($query);
?>
              <table id="pilkasis1" class="table table-bordered table-hover table-striped">
                <tbody>
					<tr>
						<td width=150>Nama Pengguna</td>
						<td><?php echo$r['username'];?></td>
					</tr>
					<tr>
						<td>Nama Lengkap</td>
						<td><?php echo$r['nama'];?></td>
					</tr>
					<tr>
						<td>Jabatan</td>
						<td><?php echo$r['jabatan'];?></td>
					</tr>
					<tr>
						<td>Handphone</td>
						<td><?php echo$r['hp'];?></td>
					</tr>
					<tr>
						<td>Surat Elektronik</td>
						<td><?php echo$r['email'];?></td>
					</tr>
					<tr>
						<td>Hak Akses</td>
						<td><?php echo $r['hakakses'];?></td>
					</tr>
					<tr>
						<td>Aktif</td>
						<td><?php echo $r['aktif'];?></td>
					</tr>
					<tr>
						<td>Foto</td>
						<td>
<?php 
						if ($r['foto']!=''){
						  echo "<img src=\"../gambar/pengguna/$r[foto]\" height=150 />";  
						}
						else{
						  echo "<img src=\"../gambar/pengguna/0.jpg\">";
						}
?>
					</tr>
					<tr>
						<td colspan=2>
						<a href="?m=admin&s=edit&idp=<?php echo$id;?>" class="btn btn-large btn-primary"><i class="fa fa-times"></i> Edit</a>
						<a href="?m=admin" class="btn btn-large btn-danger"><i class="fa fa-times"></i> List</a></td>
					</tr>
                </tbody>
              </table>
			 </form>
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
    <!-- /.content -->
<?php include "bawah.php"; ?>
