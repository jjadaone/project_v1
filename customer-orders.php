<?php 
    include 'includes/header2.php';
    include 'config/functions.php';
?>
<div style="margin: 55px"></div>
  <div class="container">
    <table class="table table-striped table-dark">
      <thead>
        <tr>
            <th>Order ID</th>
            <!-- <th>Subtotal</th> -->
            <!-- <th>Shipping Fee</th> -->
            <th>Total</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>City</th>
            <th>Zipcode</th>
            <th>Status</th>
            <th>Order Date</th>
            <th>Action</th>
        </tr>
      </thead>
      <tbody>
      <form>
        <tr>
        <?php foreach ($order->getOrders($_SESSION['id']) as $order): ?>
          <th scope="row"><?php echo $order['order_id']; ?></th>
          <td><?php echo $order['total_price']; ?></td>
          <td><?php echo $order['first_name']; ?></td>
          <td><?php echo $order['last_name']; ?></td>
          <td><?php echo $order['address']; ?></td>
          <td><?php echo $order['city']; ?></td>
          <td><?php echo $order['zipcode']; ?></td>
          <td><?php echo $order['order_status']; ?></td>
          <td><?php echo $order['order_date']; ?></td>    
          <td>
            <a class="btn btn-secondary" href="admin-orders-detail.php?order_id=<?php echo $order['order_id']; ?>&status=delivered">Details</a>
            <?php if ($order['order_status'] != 'canceled' && $order['order_status'] != 'delivered'): ?>
                <a class="btn btn-danger" href="customer-order-cancellation.php?order_id=<?php echo $order['order_id']; ?>&status=canceled">Cancel Order</a>
            <?php endif; ?>
        </td>
        </tr>
        <?php endforeach; ?>
        </form>
      </tbody>
    </table>
    
  </div>

<?php include 'includes/footer.php'; ?>
