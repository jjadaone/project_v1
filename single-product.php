<?php 
    include 'includes/header2.php';
    include 'config/functions.php';
?>

<div class="header">
        <div class="container">
            <div class="row">
            
                <div class="col-2">
                </div>
            </div>
        </div>
</div>
<body>
<div class="container">
    <div class="small-container">
        <div class="row">
            <?php foreach ($product->getSingleProduct($_GET['id']) as $product): ?>
                <div class="col-2">
                <img src="assets/images/product-1.jpg"></img>
                    <?php echo $product['image']; ?>
                </div>
                <div class="col-2">
                    <h1><?php echo $product['product_name']; ?></h1>
                    <h2><?php echo $product['description']; ?></h2>
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
                                    <a href="add-to-cart.php?id=<?php echo $product['product_id']; ?>"><button class="cart-btn">ADD TO CART</button></a>
                                    <a href="index.php"><button>Back to Homepage</button></a>
                                </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<hr>

<div>
    <?php foreach ($review->getReviews($_GET['id']) as $review): ?>
    <div class="review">
        <h5>Rating: <?php echo $review['rating']; ?></h5>
        <strong><?php echo $review['username']; ?></strong>
        <p><?php echo $review['review']; ?></p>
        <p><?php echo $review['date_created']; ?></p>
    </div>
    <?php endforeach; ?>
</div>



</body>
<?php include 'includes/footer.php'; ?>