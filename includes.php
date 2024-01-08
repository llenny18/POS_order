<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<?php 
function updateItemSuccess(){
    echo "<script>

    function showConfirmation() {
        Swal.fire({
            title: 'Are you sure?',
            text: 'You will be redirected to another page!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, redirect me!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect to another page
                window.location.href = 'product.php';
            }
        });
    }
   
</script>
";
}

?>