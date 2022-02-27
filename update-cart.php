<?php
    include 'config/functions.php';
    include 'includes/header.php';


    if (isset($_POST['update'])) {

        // get the quantity in each input box
        $newQuantities = $_POST['quantity'];

        // update the cart quantities
        foreach ($cart->getUserCart($_SESSION['id']) as $index => $cart_item) {
            // $cart->updateQuantities($cart_item['cart_id'], $newQuantities[$x], 1);
            $cart->updateQuantities($cart_item['product_id'], $newQuantities[$index], $_SESSION['id']);
            header("Location: cart.php");   
        }


    }
?>