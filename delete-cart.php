<?php
    include 'config/functions.php';

    if (isset($_GET['id'])) {
        echo $_GET['id'];        
        $cart->deleteCart($_GET['id']);
        header("Location: cart.php");
    } else {
        echo 'failed';
    }
?>