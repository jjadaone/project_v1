<?php 
    include 'includes/header2.php';
    include 'config/functions.php';
?>

<?php 

    if (isset($_GET['order_id'], $_GET['status'], $_SESSION['id'])) {

        $orderData = [
            'order_id' => $_GET['order_id'],
            'status' => $_GET['status'],
            'delivery_date' => null,
            'cancellation_date' => date('Y-m-d H:i:s'),
        ];
        $order->updateOrderStatus($orderData);

        foreach ($orderDetails->getOrderDetails($_GET['order_id']) as $order_detail) {
            echo $order_detail['product_id'], $order_detail['quantity'];
            $product->increaseQuantity($order_detail['product_id'], $order_detail['quantity']);
        }

        header("Location: customer-orders.php");



    } else {
        echo 'cant cancel order';
    }



?>