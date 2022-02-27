<!DOCTYPE html>
<?php
    !isset($_SESSION) ? session_start() : null;
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href ='assets/css/styles.css' type ='text/css' rel='stylesheet'/>
    <link href ='assets/css/input.css' type ='text/css' rel='stylesheet'/>
    <link rel="stylesheet" type="text/css" href="assets/css/home.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
       
    <div>
        <nav>
        <div class="logo">
            <img src="/project_v1/assets/images/cc/cc-logo-white.png" height="60px">
        </div>
            <input type="checkbox" id="click">
            <label for="click" class="menu-btn"><i class="fas fa-bars"></i></label>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <!--<li><a href="#">Gallery</a></li>
                    <li><a href="#">Feedback</a></li>-->
                    <?php 
                    if ($_SESSION) {
                        if ($_SESSION['id']) {
                            echo '<li><a href="customer-orders.php">Orders</a></li>';
                            echo '<li><a href="?action=logout">Logout</a></li>';
                            
                            if (isset($_GET['action'])) {
                                session_destroy();
                                header("location:index.php");
                            }
                            echo '<div><li><a href="cart.php"class="fa fa-shopping-cart"></a></li></div>';
                        } 
                    }
                    else {
                        echo '<li><a href="login.php">Login</a></li>';
                        echo '<li><a href="register.php">Register</a></li>';
                        
                    }
                    
                    
                    ?>    
                  <li  class="item-numb"><a><?php //echo $_SESSION ? $cart->countCart($_SESSION['id'])[0]['sum_total'] : 0; ?></a></li>

               </ul>
        </nav>
    </div>  
