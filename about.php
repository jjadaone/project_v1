<?php 
    include 'config/functions.php';
    include 'includes/header2.php';
    
?>

<div class="homepage">
    <div class="header">
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
