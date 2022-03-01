<?php 
    include 'config/functions.php';
    include 'includes/header2.php';
    
?>

    
    <div class="wrapper">
        <div class="container">
        <section style="background-color: #eee;">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-4">
                        <div class="card-body text-center">
                            <?php foreach ($user->getUserProfile($_SESSION['id']) as $user): ?>
                            <h6 class="my-3"><a class="btn btn-dark" href="user-profile.php">ACCOUNT DETAILS</a></h6>
                            
                        </div>
                        </div>

                    </div>
                
                    <div class="col-lg-12">
                        <div class="card mb-4">
                            <div class="card-body">
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
                                          <a class="btn btn-secondary" href="customer-order-details.php?order_id=<?php echo $order['order_id']; ?>&status=<?php echo $order['order_status']; ?>">Details</a>
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
                            </div>
                        </div>

                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        </div>
    </div>


</div>
<script>
    //     function openMenu() {
    //   document.querySelector(".sidebar").classList.add("open");
    // }
    // function closeMenu() {
    //   document.querySelector(".sidebar").classList.remove("open")
    // }

    $(window).scroll(function(){
         if($(window).scrollTop()){
             $("nav").addClass("black");
         }
         else{
             $("nav").removeClass("black");
         }
     })
  </script>

