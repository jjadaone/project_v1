<?php 
    include 'includes/header.php';
    include 'config/functions.php';
?>


<?php


    if (isset($_GET['id'])) {
        echo 'category.php';
        echo $_GET['id'];

    }

?>

<div class="small-container">
    <div>
        <h1 class="title">FEAUTURED PRODUCTS</h1>
        <div class="row">
            <?php foreach ($product->getProducts($_GET['id']) as $product): ?>
            <div class="col-4">
                <img src="images/product-1.jpg" alt="">
                <h4><?php echo $product['product_name']; ?></h4>
                <div class ="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                    <div class="price">
                    <p>₱<?php echo $product['price']; ?></p>
                    </div>
                    <div>
                        <a href="single-product.php?id=<?php echo $product['product_id']; ?>"><button >VIEW</button></a>
                        <a href="add-to-cart.php?id=<?php echo $product['product_id']; ?>"><button class="cart-btn">ADD TO CART</button></a>
                    </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>