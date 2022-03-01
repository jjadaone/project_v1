<?php 
    include 'config/functions.php';
    include 'includes/header.php';
    
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <div class ="col-3">
                    <a href="category.php?id=<?php echo $category['category_id']; ?>">
                    <img src="<?php dirname(__FILE__); ?>assets/categories/<?php echo $category['category_image']; ?>" alt="" style="width:500px; height:100%">
                    </a>

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
            <div class="row slider">
                <?php foreach ($product->getProducts() as $product): ?>
                <div class="col-4">
                    <div class="prod-pic">
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
                                <a id="w" href="add-to-cart.php?id=<?php echo $product['product_id']; ?>"><button><i  class="fa fa-shopping-cart"></i></button></a>
                                
                            </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    $('.slider').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 3,
        infinite: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
</script>

<script type="text/javascript">
    $(document).ready(function() {
        <?php if($_SESSION['msg'] == 'Added to cart'): ?>
        swal({
            title: "<?php echo $_SESSION['msg']; ?>",
            text: "...",
            icon: "success",
            button: "Ok",
            timer: 2000
        });
        <?php unset($_SESSION['msg']); ?>

        <?php elseif($_SESSION['msg'] == 'Quantity increased'): ?>
        swal({
            title: "<?php echo $_SESSION['msg']; ?>",
            text: "...",
            icon: "success",
            button: "Ok",
            timer: 2000
        });
        <?php unset($_SESSION['msg']); ?>
        <?php endif; ?>
        
        
    });
</script>

<?php include 'includes/footer.php'; ?>