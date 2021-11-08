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
    <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
    
    
    <div class="container text-center" style="margin-top: 20vh">
        <div class="card border-success" class="container text-center">
  <div class="card-title text-success"">Terimakasih</div>
  <div class="card-body text-success">
    <h3 class="card-title"><strong>Anda Sudah melakukan voting</h3>
    <h4 class="card-title text-danger"><strong>Salam Hangat  Zifau</h4>
    <p class="card-text"></strong><br>Anda Akan di redirect ke Home <span id="time"></span></p>
  </div>
</div>

        
        <hr>
        <p class="lead">
            <a class="btn btn-primary btn-sm" href="logout.php" role="button">Kembali Ke Home</a>
        </p>
    </div>
    </div>
</div


    <!-- Javascript -->
    <?php include "js.php"; ?>

    <script>
        function startTimer(duration, display) {
            var start = Date.now(),
                diff,
                minutes,
                seconds;

            function timer() {
                // get the number of seconds that have elapsed since 
                // startTimer() was called
                diff = duration - (((Date.now() - start) / 1000) | 0);

                // does the same job as parseInt truncates the float
                minutes = (diff / 60) | 0;
                seconds = (diff % 60) | 0;

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = seconds;

                if (diff <= 0) {
                    // add one second so that the count down starts at the full duration
                    // example 05:00 not 04:59
                    start = Date.now() + 1000;
                    window.location.href = "logout.php";
                }
            };
            // we don't want to wait a full second before the timer starts
            timer();
            setInterval(timer, 1000);
        }

        window.onload = function() {
            var fiveSeconds = 5,
                display = document.querySelector('#time');
            startTimer(fiveSeconds, display);
        };
    </script>
    

</body>
    </center>

</html>