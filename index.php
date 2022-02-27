<?php 
    include 'config/functions.php';
    include 'includes/header.php';
    
?>

<!-- <div>
    <div class ="burger-sidebar">
        <button onclick="openMenu()">
                &#9776;
                </button>
    </div>
    <aside class="sidebar">

        <button class="sidebar-close-button" onclick="closeMenu()">x</button>
        <ul>
        <h3>Categories</h3>
        <?php foreach ($category->getCategories() as $category): ?>
        <ul>
            <li><a href="category.php?id=<?php echo $category['category_id']; ?>"><?php echo $category['category_name']; ?></a></li>
        </ul>
        <?php endforeach; ?>
        </ul>
    </aside>
</div> -->

<div class="homepage">
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-2 header_container-image">
                    <img src="assets/images/cc/home-cover.png" alt="img-cover">
                </div>
            </div>
        </div>
    </div>

    <div class="container-1">
        <div class="aboutus_content-left">
            <img src="assets/images/cc/about.png" alt="about us photo">
        </div>
        <div class="aboutus_content-right">
            <h1>WHO ARE WE?</h1>
            <p>Cloth Chasing Clothing is a clothing line retailer that has a product line of streeetwear graphic shirts, techwear clothes and accessories. We aim to bring international designs to the Philippines and collaborate it with local designs. 
                Let’s chase trends together.</p>
            <button type="button"><a href="#shop-now">SHOP NOW</a></button>
        </div>"
    </div>



    <div class="wrapper">
        <h1 class="title">CATEGORIES</h1>
        <div class="categories">
            <div class ="row">
                <div class="col-3">
                    <img src="assets/images/cc/category-1.jpg" alt="pants">
                </div>
                <div class="col-3">
                    <img src="assets/images/cc/category-2.jpg" alt="shirts">
                </div>
                <div class="col-3">
                    <img src="assets/images/cc/category-3.jpg" alt="shoes">
                </div>
            </div>
            
        </div>
    </div>
    <div class="container" id="shop-now">
        <div class="title">
            <h1 >STREETWEAR</h1><br>
            <h1>VOLUME 1</h1><br><br>
            <p>GRAPHIC SHIRTS</p>
        </div>
            <div class="row">
                <?php foreach ($product->getProducts() as $product): ?>
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