<?php 
    include 'includes/header2.php';
    include 'config/functions.php';
?>
<link rel="stylesheet" type="text/css" href="assets/css/home.css">
<div class="container" id="shop-now">
        <div class="title">
            <h1 >STREETWEAR</h1><br>
            <h1>VOLUME 1</h1><br><br>
        </div>
            <div class="row">
            <?php foreach ($product->getProducts($_GET['id']) as $product): ?>
                <div class="col-4">
                    <img src="<?php dirname(__FILE__); ?>assets/uploads/<?php echo $product['image']; ?>" alt="">
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
                            <a href="add-to-cart.php?id=<?php echo $product['product_id']; ?>"><button><i  class="fa fa-shopping-cart"></i></button></a>
                        </div>
                </div>
                <?php endforeach; ?>
            
            </div>
    </div>

<!-- <div class="small-container">
    <div>
        <h1 class="title">FEAUTURED PRODUCTS</h1>
        <div class="row">
            
            <div class="col-4">
            <img src="<?php dirname(__FILE__); ?>assets/uploads/<?php echo $product['image']; ?>" alt="">
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
                            <a href="add-to-cart.php?id=<?php echo $product['product_id']; ?>"><button><i  class="fa fa-shopping-cart"></i></button></a>
                    </div>
            </div>
         
        </div>
    </div>
</div> -->