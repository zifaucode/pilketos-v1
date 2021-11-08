<?php include "atas.php"; ?>
  <!-- Content Wrapper. Contains page content -->
  
    





  <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                  <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                      <div class="col-4 col-sm-3 col-xl-2">
                        <img src="assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
                      </div>
                      <div class="col-5 col-sm-7 col-xl-8 p-0">
                        <h4 class="mb-1 mb-sm-0"> Pemilihan Ketua Osis<br> SMAN 1 PARUNG</h4>
                        
                      </div>
                      <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">
                          <?php
                          include_once "../sambungan.php";
                          $sql="SELECT count(idkelas) as jkelas FROM kelas";
                          $query=mysqli_query($koneksi,$sql);
                          $r=mysqli_fetch_assoc($query);
                          echo "<h3>".$r['jkelas']."</h3>";
                          ?>


                          </h3>
                          
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success ">
                          <span class="mdi mdi-camera-rear-variant"></span>
                        </div>
                      </div>
                    </div>
                    <a href="?m=kelas"<h6 class="text-muted font-weight-normal">Data Kelas</h6></a>
                  </div>
                </div>
              </div>




              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">
                          <?php
                          $sql="SELECT count(nis) as jumlah FROM siswa WHERE aktif='Y'";
                          $query=mysqli_query($koneksi,$sql);
                          $r=mysqli_fetch_assoc($query);
                          echo "<h3>".$r['jumlah']."</h3>";
                          ?>


                          </h3>
                          
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success">
                          <span class="mdi mdi-account-multiple"></span>
                        </div>
                      </div>
                    </div>
                   <a href="?m=siswa" <h6 class="text-muted font-weight-normal">Data Siswa</h6></a>
                  </div>
                </div>
              </div>






              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">
                          <?php
                          $sql="SELECT count(idkandidat) as jumlah FROM kandidat WHERE aktif='Y'";
                          $query=mysqli_query($koneksi,$sql);
                          $r=mysqli_fetch_assoc($query);
                          echo "<h3>".$r['jumlah']."</h3>";
                          ?>


                          </h3>
                          
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success">
                          <span class="mdi mdi-account-star"></span>
                        </div>
                      </div>
                    </div>
                    <a href="?m=kandidat"> <h6 class="text-muted font-weight-normal">Data Kandidat</h6></a>
                  </div>
                </div>
              </div>
     








              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">

                          <?php
                          $sql="SELECT count(nip) as jumlah FROM guru WHERE aktif='Y'";
                          $query=mysqli_query($koneksi,$sql);
                          $r=mysqli_fetch_assoc($query);
                          echo "<h3>".$r['jumlah']."</h3>";
                          ?>

                          </h3>
                          
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success ">
                          <span class="mdi mdi-account-card-details"></span>
                        </div>
                      </div>
                    </div>
                    <a href="?m=guru"> <h6 class="text-muted font-weight-normal">Guru Aktif</h6></a>
                  </div>
                </div>
              </div>
            </div>


           <br>
           <a href="?m=hasil"><button type="button" class="btn btn-outline-info btn-icon-text"> Lihat Hasil Perolehan Suara <i class="mdi mdi-printer btn-icon-append"></i>
                          </button></a>
              
            </div>













    <!-- Main content -->

    
            
    
    
       
        
        
        
        <!-- ./col -->

      
            


<?php include "bawah.php"; ?>
