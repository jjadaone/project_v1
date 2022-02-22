<?php 
    include 'includes/header.php';
    include 'config/functions.php';
?>




<div style="margin-top:500px;">
    <?php foreach ($category->getCategories() as $category): ?>
    <ul>
        <li><a href="category.php?id=<?php echo $category['category_id']; ?>"><?php echo $category['category_name']; ?></a></li>
    </ul>
    <?php endforeach; ?>
</div>


<div class="small-container">
    <div>
        <h1 class="title">FEAUTURED PRODUCTS</h1>
        <?php if ($_SESSION) echo $_SESSION['username']; ?>
        <div class="row">
            <?php foreach ($product->getProducts() as $product): ?>
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

<?php include 'includes/footer.php'; ?>


