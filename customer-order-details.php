<?php 
    include 'includes/header2.php';
    include 'config/functions.php';
?>
<!-- Page content wrapper-->

<!-- Page content-->
<div class="container-fluid">
    <table class="table table-striped table-dark">
        <h3>Billing Details</h3>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
                <th>City</th>
                <th>Zipcode</th>
                <th>Country</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php foreach ($order->getSingleOrder($_GET['order_id']) as $order_billing): ?>
            <td><?php echo $order_billing['first_name']; ?></td>
            <td><?php echo $order_billing['last_name']; ?></td>
            <td>09985216192</td>
            <td><?php echo $order_billing['email']; ?></td>
            <td><?php echo $order_billing['address']; ?></td>
            <td><?php echo $order_billing['city']; ?></td>
            <td><?php echo $order_billing['zipcode']; ?></td>
            <td>Philippines</td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <table class="table table-striped table-dark">
        <h3>Order Summary</h3>
        <thead>
            <tr>
                <th>Subtotal</th>
                <th>Shipping Fee</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php foreach ($order->getSingleOrder($_GET['order_id']) as $order_billing): ?>
            <td><?php echo $order_billing['total_price']-80; ?></td>
            <td>80</td>
            <td><?php echo $order_billing['total_price']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <table class="table table-striped table-dark">
        <h3>Order Details</h3>
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Order Date</th>
                <th>Status</th>
                <th>
                <?php 
                if ($_GET['status'] == 'delivered') {
                    echo 'Delivery Date';
                } else if ($_GET['status'] == 'canceled') {
                    echo 'Cancellation Date';
                }
                ?>
            </th>
            </tr>
        </thead>
        <tbody>
        <form>
            <tr>
            <?php foreach ($order->getSingleOrder($_GET['order_id']) as $order): ?>
            <th scope="row"><?php echo $order['order_id']; ?></th>
            <td><?php echo $order['order_date']; ?></td>
            <td><?php echo $order['order_status']; ?></td>
            <td>
                <?php echo $order['order_status'] == 'delivered' ? $order['delivery_date'] : $order['cancellation_date']; ?>
            </td>
            </tr>
            <?php endforeach; ?>
            </form>
        </tbody>
    </table>

    <table class="table table-striped table-dark">
        <h3>Ordered Items</h3>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php foreach ($orderDetails->getOrderDetails($_GET['order_id']) as $order_details): ?>
            <th scope="row"><?php echo $order_details['product_name']; ?></th>
            <td><?php echo $order_details['price']; ?></td>
            <td><?php echo $order_details['quantity']; ?></td>
            <td><?php echo $order_details['total_price']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table> 
</div>

<?php include 'includes/footer.php'; ?>

  