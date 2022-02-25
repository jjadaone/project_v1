<?php
    include 'config/functions.php';

    if (isset($_GET['id'])) {
        echo $_GET['id'];        
        $product->deleteProduct($_GET['id']);
        header("Location: admin-show-product.php");
    } else {
        echo 'failed';
    }
?>