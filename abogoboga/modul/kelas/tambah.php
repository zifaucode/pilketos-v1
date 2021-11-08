<?php include "atas.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <br>
    <br>
    
    <section class="content-header">
      <h1>
        Administrator 
        <small>Pemilihan Ketua OSIS</small>
      </h1>
      
    </section>
    <br>
    <br>
    <br>
    <!-- Main content -->
	<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Form Tambah Kelas</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			 <!--Mulai buat form-->
			 <form action="?m=kelas&s=simpan" method="post" enctype="multipart/form-data">
              <table id="pilkasis1" class="table table-bordered table-hover table-striped">
                <tbody>
					<tr>
						<td width=174>Nama Kelas*</td>
						<td><input type="text" name="kelas" placeholder="Kelas" size="30px" maxlength="15px" required /></td>
					</tr>
					<tr>
						<td>Jumlah Siswa</td>
						<td><input type="text" name="jumlah" placeholder="Jumlah" size="30px" maxlength="15px" /></td>
					</tr>
					<tr>
						<td colspan=3>
						<input type="submit" name="simpan" value="Save" class="btn btn-large btn-success" />&nbsp;&nbsp;&nbsp;
						
						<a href="?m=kelas" class="btn btn-large btn-primary"><i class="fa fa-times"></i> List</a></td>
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
    <br>
    <br>
    <!-- /.content -->
<?php include "bawah.php"; ?>
