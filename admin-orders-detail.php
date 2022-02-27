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

