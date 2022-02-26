<?php 
    include 'includes/header2.php';
    include 'config/functions.php';
?>

<?php 

if (isset($_GET['order_id'], $_GET['status']))

    echo $_GET['order_id'], $_GET['status'];

    if ($_GET['status'] == 'delivered') {
        $data = [
            'order_id' => $_GET['order_id'],
            'status' => $_GET['status'],
            'delivery_date' => date('Y-m-d H:i:s'),
            'cancellation_date' => null
        ];
        $order->updateOrderStatus($data);
    } else if($_GET['status'] == 'canceled') {
        $data = [
            'order_id' => $_GET['order_id'],
            'status' => $_GET['status'],
            'delivery_date' => null,
            'cancellation_date' => date('Y-m-d H:i:s'),
        ];
        $order->updateOrderStatus($data);
    }

    header("Location: admin-orders.php");


?>