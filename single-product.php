<?php 
    include 'config/functions.php';
    include 'includes/header2.php'; 
?>
<link rel="stylesheet" type="text/css" href="assets/css/singleproduct-style.css">

<body>
<div class="prod">
    <div class="container">
        <div class="small-container">
            <div class="row">
                <?php foreach ($product->getSingleProduct($_GET['id']) as $product): ?>
                
                    <div class="col-2">
                    <img src="<?php dirname(__FILE__); ?>assets/uploads/<?php echo $product['image']; ?>" alt="">
                    </div>
                    <div class="col-2">
                        <h1><?php echo $product['product_name']; ?></h1>
                        <div class="price">
                        <h2>₱<?php echo $product['price']; ?></h2>
                        </div>
                        <p><?php echo $product['description']; ?></p>
                          
                                    
                                    <div class="prod-buttons">
                                        <a href="add-to-cart.php?id=<?php echo $product['product_id']; ?>"><button class="cart-btn">ADD TO CART</button></a>
                                        <a href="index.php"><button>HOMEPAGE</button></a>
                                    </div>
                    </div>
            </div>
                <?php endforeach; ?>
                    
            </div>
        </div>
    </div>
    <hr>
    <div class="reviews">
        <div class="container2">
            <div class="small-container2">
                <div class="row">
                    <h2>CUSTOMER REVIEWS</h2>
                        <div class="create-btn">
                            <?php if($_SESSION): ?>
                                <?php if ($review->isReviewExists($_GET['id'], $_SESSION['id'])): ?>
                                    <button ><a href="update-review.php?id=<?php echo $_GET['id'] ?>">Change your review</a></button>
                                <?php else : ?> 
                                    <button ><a href="create-review.php?id=<?php echo $_GET['id'] ?>">Write a review</a></button>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                        
                        <?php foreach ($review->getReviews($_GET['id']) as $review): ?>
                        <div class="review">
                            <h5>
                            <div>
                                <?php for($i=0; $i < $review['rating']; $i++) { ?>
                                    <i class="fa fa-star" <?php echo $i; ?>></i>
                                <?php } ?>
                            </div>
                            </h5>
                            <strong><?php echo $review['username']; ?></strong>
                            <p><?php echo $review['review']; ?></p>
                            <p><?php echo $review['date_created']; ?></p>
                        </div>
                        <?php endforeach; ?>

                </div>
            </div>
        </div>           
    </div>   
</div>

</body>
<?php include 'includes/footer.php'; ?>