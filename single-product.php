<?php 
    include 'includes/header.php';
    include 'config/functions.php';
?>


<body>
<div>
    <?php foreach ($product->getSingleProduct($_GET['id']) as $product): ?>
    <div class="card" style="margin: 200px;">
        <h5><?php echo $product['product_name']; ?></h5>
        <div>image</div>
        <p>price</p>
        <p>description</p>
        <div>
        <a href="add-to-cart.php?id=<?php echo $product['product_id']; ?>"><button class="cart-btn">ADD TO CART</button></a>
        <a href="create-review.php?id=<?php echo $product['product_id']; ?>">Add a review</a>
        </div>
    </div>
    <?php endforeach; ?>
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