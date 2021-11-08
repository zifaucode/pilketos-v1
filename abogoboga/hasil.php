
<?php 
include_once "atas.php"; 
include_once "../sambungan.php";
//$sql="SELECT kandidat.idkandidat,nama,nokandidat,foto,count(idpemilihan) as kandidat,datapemilihan.idkandidat FROM kandidat FULL OUTER JOIN datapemilihan ON kandidat.idkandidat=datapemilihan.idkandidat";
//$sql="SELECT kandidat.idkandidat as idk,nama,nokandidat,foto, datapemilihan.idpemilihan,count(datapemilihan.idkandidat) as kandidat,datapemilihan.idkandidat FROM kandidat LEFT OUTER JOIN datapemilihan ON kandidat.idkandidat=datapemilihan.idkandidat ORDER BY nokandidat";
$sql="SELECT * FROM kandidat ORDER BY nokandidat";
$query=mysqli_query($koneksi,$sql);

$sqljs="SELECT sum(jumlahsuara) as jsuara FROM kandidat";
$queryjs=mysqli_query($koneksi,$sqljs);
$rjs=mysqli_fetch_array($queryjs);



/*$sjumlah="SELECT count(idpemilihan) as kandidat,idkandidat FROM datapemilihan GROUP BY idkandidat ORDER BY idkandidat";
$qjumlah=mysqli_query($koneksi,$sjumlah);
$j=mysqli_fetch_assoc($qjumlah);
*/
?>

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
              
              <div class="col-md-6 grid-margin stretch-card">
                
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                
              </div>
              <div class="col-md-6 d-flex align-items-stretch">
                <div class="row">
                  
                  
                  
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  
                  <div class="card-body">
                    
                    <blockquote class="blockquote blockquote-danger">
                    <p>
                    <h4 class="card-title text-success">Realtime Hasil</h4>
                    </p>
                    </blockquote>
                  </div>
                  
                </div>
              </div>
              

<?php
//var_dump($sql);
while($r=mysqli_fetch_array($query)){	

  

   echo '  <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">';

                
                  echo "<center><h3 class='card-title'>".$r['nokandidat']."</h3></center>";
                  echo "<center><h2 class='card-title'>".$r['nama']."</h2></center>";
                    
        echo '<blockquote class="blockquote blockquote-warning">';
        echo ' <div class="icon">
              <img src="../gambar/kandidat/'.$r['foto'].'" height="130px"/>
            </div>';
            echo '</blockquote>';

    echo ' <br> <br>';
    echo '<blockquote class="blockquote blockquote-primary">';
   
    echo "<center><p class='card-title'>PERSENTASE:<br>".ceil($r['jumlahsuara']/$rjs['jsuara']*100)."%</p></center>";
    echo "<center><p class='card-title'>SUARA MASUK :<br>".$r['jumlahsuara']."</p></center>";
    echo '</blockquote>';

   


                    
                    
              echo '     </div>
                </div>
              </div> ';
            }
            ?> 

<?php include "bawah.php"; ?>
