<?php 
    // require '/lib/Database.php';
    // require '/lib/User.php';
    // require '/lib/Product.php';

    $DIRECTORY = $_SERVER['DOCUMENT_ROOT'] . '/project_v1';
    define('HOME_DIR', $DIRECTORY);

    require $_SERVER['DOCUMENT_ROOT'] . '/project_v1' . '/lib/Database.php';
    require $_SERVER['DOCUMENT_ROOT'] . '/project_v1' . '/lib/User.php';
    require $_SERVER['DOCUMENT_ROOT'] . '/project_v1' . '/lib/Product.php';
    require $_SERVER['DOCUMENT_ROOT'] . '/project_v1' . '/lib/Cart.php';
    require $_SERVER['DOCUMENT_ROOT'] . '/project_v1' . '/lib/Category.php';
    require $_SERVER['DOCUMENT_ROOT'] . '/project_v1' . '/lib/Review.php';
    require $_SERVER['DOCUMENT_ROOT'] . '/project_v1' . '/lib/Order.php';
    require $_SERVER['DOCUMENT_ROOT'] . '/project_v1' . '/lib/OrderDetails.php';


    $db = new Database;
    $user = new User($db);
    $product = new Product($db);
    $cart = new Cart($db);
    $category = new Category($db);
    $review = new Review($db);
    $order = new Order($db);
    $orderDetails = new OrderDetails($db);
?>