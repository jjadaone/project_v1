<?php 
    require 'includes/header.php';
    require 'config/functions.php';
    
    if (!$_SESSION) header("Location: login.php");
    if (isset($_GET['id']) && !empty($_GET['id'] && $_SESSION)) {

        if ($cart->isCartItemExists($_SESSION['id'], $_GET['id'])) {
            $currentQuantity = $cart->getSingleCart($_SESSION['id'], $_GET['id'])[0]['cart_quantity'] + 1;
            $cart->updateQuantities($_GET['id'], $currentQuantity, $_SESSION['id']);
            echo $currentQuantity;
            header("Location: index.php");
        } else {
            echo 'ssss';
            foreach ($product->getSingleProduct($_GET['id']) as $product) {
                $data = [
                    'user_id' => $_SESSION['id'],
                    'product_id' => $product['product_id'],
                    'price' => $product['price'],
                    'cart_quantity' => 1,
                    'order_date' => date("Y-m-d"),
                ];

                // print_r($data);
                $cart->addCart($data);
                header("Location: index.php");
            }
        }
        
    }

?>