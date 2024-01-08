<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<?php 
function updateItemSuccess(){
    echo "<script>

    
        Swal.fire({
            title: 'Update Success',
            text: 'You will be redirected to product list page!',
            icon: 'warning',
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Confirm!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect to another page
                window.location.href = 'stableprod.php';
            }
        });
    
   
</script>
";
}


function addItemSuccess(){
    echo "<script>

    
        Swal.fire({
            title: 'Item Insertion Success',
            text: 'You will be redirected to product list page!',
            icon: 'warning',
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Confirm!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect to another page
                window.location.href = 'stableprod.php';
            }
        });
    
   
</script>
";
}


?>