<?php
    include 'config/functions.php';

    if (isset($_GET['id'])) {
        echo $_GET['id'];        
        $product->deleteProduct($_GET['id']);
        $_SESSION['message'] = "Product deleted!";
        $_SESSION['msg_type'] = "danger";
        header("location: admin-show-product.php");
    } else {
        echo 'failed';
    }
?>