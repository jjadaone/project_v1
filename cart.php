<?php 
    include 'includes/header2.php';
    include 'config/functions.php';
?>
<link rel="stylesheet" type="text/css" href="assets/css/cart-shop.css">

<div class="container">
    
    <div class="cart-contain">
    <h1>CART</h1><br>
    <form action="update-cart.php" method="POST">
        <table class="cart-table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
           
            <tbody>
                <tr>
                <?php foreach ($cart->getUserCart($_SESSION['id']) as $cart): ?>
                    <td><img style="width: 200px; height: 100px;" src="https://helpx.adobe.com/content/dam/help/en/photoshop/using/convert-color-image-black-white/jcr_content/main-pars/before_and_after/image-before/Landscape-Color.jpg" alt="no image"></td>
                    <td><?php echo $cart['product_name']; ?></td>
                    <td><?php echo $cart['price']; ?></td>
                    <td><input type="text" name="quantity[]" value="<?php echo $cart['cart_quantity']; ?>"></td>           
                    <td><?php echo $cart['total']; ?></td>
                    <td><a class="btn btn-danger" href="delete-cart.php?id=<?php echo $cart['cart_id']; ?>">Remove</a></td>
                </tr>
                <?php endforeach; ?>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                    <div class="update-cart" >
                    <input class="btn btn-info btn-lg float-right" type="submit" name="update" value="Update">
                    </div>
                </td>
                <td>

                </td>

            </tbody>  
        </table>
    </form>
                    <div class ="checkout">
                    <a href="order.php"><button class="btn btn-primary btn-lg float-right">Checkout</button></a>
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


<?php include 'includes/footer.php'; ?>