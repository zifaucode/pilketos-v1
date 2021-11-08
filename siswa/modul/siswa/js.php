<!-- jQuery 3 -->
<?php include "bawah.php"; ?>
<script src="jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="bootstrap2/js/bootstrap.bundle.min.js"></script>
<script>
    // scroll functions
    $(window).scroll(function(e) {

        // add/remove class to navbar when scrolling to hide/show
        var scroll = $(window).scrollTop();
        if (scroll >= 150) {
            $('.navbar').addClass("navbar-hide");
        } else {
            $('.navbar').removeClass("navbar-hide");
        }

    });

    // Modal functions
    $('#modal-danger').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var link = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        // modal.find('#saveChanges').val(link)
        var modal = document.getElementById("saveChanges")
        modal.setAttribute("href", link);
    })
</script>