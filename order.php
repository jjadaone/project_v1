<?php 
   
    include 'config/functions.php';
    include 'includes/header.php';
    //pre($_SESSION);
    // orders->infos->fetch-cart->orderdetails
    if(isset($_POST['submit']))
    {
        if(isset($_POST['address'],$_POST['city'],$_POST['zipcode']) && !empty($_POST['address']) && !empty($_POST['city']) && !empty($_POST['zipcode']))
        {
      
          $params = [
            'user_id' => $_SESSION['id'],
            'address' => $_POST['address'],
            'city' => $_POST['city'],
            'zipcode' => $_POST['zipcode'],
            'order_status' => 'ordered',
            'order_date'=> date('Y-m-d H:i:s'),
            // 'updated_at'=> date('Y-m-d H:i:s')
          ];

          $order->addOrder($params);

          if ($db->con->insert_id) {
               
            $order_id = $db->con->insert_id;
            $totalPrice = 0;

            foreach($cart->getUserCart($_SESSION['id']) as $cart_item) {
              
              $totalPrice += $cart_item['total'];

              $orderDetailsData = [
                'order_id' => $order_id,
                'product_id' => $cart_item['product_id'],
                'quantity' => $cart_item['quantity'],
                'total_price' => $cart_item['total'],
              ];

              $orderDetails->addOrderDetails($orderDetailsData);
            }

            $updateOrder = [
              'total' => $totalPrice,
              'order_id' => $order_id
            ];

            $order->updateOrder($updateOrder);

            $cart->clearUserCart($_SESSION['id']);
            header("Location: index.php");

          }              
        }
    }
?>
<div class="row mt-3">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill"><?php echo $cartItemCount;?></span>
          </h4>
          <ul class="list-group mb-3">
            <?php
                $total = 0;
                 foreach ($cart->getUserCart(1) as $cart):
                 $total+=$cart['total'];

  
                ?>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0"><?php echo $cart['product_name']; ?></h6>
                            <small class="text-muted">Quantity: <?php echo $cart['cart_quantity']; ?> X Price: <?php echo $cart['price']; ?></small>
                        </div>
                        <span class="text-muted">$<?php echo $cart['total']; ?></span>
                    </li>
            <?php
                endforeach;
            ?>
           
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (USD)</span>
              <strong>$<?php echo number_format($total,2);?></strong>
            </li>
          </ul>
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Billing address</h4>
          <?php 
            if(isset($errorMsg) && count($errorMsg) > 0)
            {
                foreach($errorMsg as $error)
                {
                    echo '<div class="alert alert-danger">'.$error.'</div>';
                }
            }
          ?>
          <form class="needs-validation" method="POST">
            <div class="row">
            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" value="<?php echo (isset($addressValue) && !empty($addressValue)) ? $addressValue:'' ?>">
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="city">city</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="city" value="<?php echo (isset($cityValue) && !empty($cityValue)) ? $cityValue:'' ?>">

              </div>
  
              <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" name="zipcode" placeholder="" value="<?php echo (isset($zipCodeValue) && !empty($zipCodeValue)) ? $zipCodeValue:'' ?>" >
              </div>
            </div>
            <hr class="mb-4">

            <h4 class="mb-3">Payment</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="cashOnDelivery" name="cashOnDelivery" type="radio" class="custom-control-input" checked="" >
                <label class="custom-control-label" for="cashOnDelivery">Cash on Delivery</label>
              </div>
            </div>
           
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit" value="submit">Continue to checkout</button>
          </form>
         
        </div>
        
      </div>
