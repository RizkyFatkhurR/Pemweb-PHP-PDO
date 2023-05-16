<?php 
include('function.php');

deleteproduct($_GET["productCode"]);
    echo "
        <script>
        alert('selected customer data has been deleted');
        document.location.href = 'index.php';
        </script>
    ";
?>