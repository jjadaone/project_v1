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

<link rel="stylesheet" type="text/css" href="assets/css/home.css">
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

    <div class="container">
        <div class="aboutus_content-left">
            <img src="assets/images/cc/about.png" alt="about us photo">
        </div>
        <div class="aboutus_content-right">
            <h1>WHO ARE WE?</h1>
            <p>Cloth Chasing Clothing is a clothing line retailer that has a product line of streeetwear graphic shirts, techwear clothes and accessories. We aim to bring international designs to the Philippines and collaborate it with local designs. 
                Let’s chase trends together.</p>
            <button type="button">SHOP NOW</button>
        </div>
    </div>


    <div class="container">
        <h1 class="title">CATEGORIES</h1>
        <div class="categories">
            <div class ="row">
                <div class="col-3">
                    <img src="assets/images/category-1.jpg">
                </div>
                <div class="col-3">
                    <img src="assets/images/category-2.jpg" >
                </div>
                <div class="col-3">
                    <img src="assets/images/category-3.jpg" >
                </div>
            </div>
        </div>
    </div>



        
        
    <div class="container">
        <div class="title"><h1 >FEAUTURED PRODUCTS</h1></div>
            <div class="row">
                <?php foreach ($product->getProducts() as $product): ?>
                <div class="col-4">
                    <img src="assets/images/product-1.jpg" alt="">
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