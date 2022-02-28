<?php 
    include 'config/functions.php';
    include 'includes/header.php';
    
?>

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

    <div class="wrapper">
        <h1 class="title">CATEGORIES</h1>
      
        <div class="categories">
            <div class="row">
            <?php foreach ($category->getCategories() as $category): ?>
                <div class ="col">
                    <div class="col-4">
                        
    
                    <a href="category.php?id=<?php echo $category['category_id']; ?>">
                    <img src="<?php dirname(__FILE__); ?>assets/categories/<?php echo $category['category_image']; ?>" alt="" style="width:500px; height:100%">
                    </a>
                    </div>
                </div>
                <?php endforeach; ?>
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