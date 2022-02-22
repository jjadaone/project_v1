
<?php
    // if(!isset($_SESSION)) 
    // { 
    //     session_start(); 
    // } 

    !isset($_SESSION) ? session_start() : null;

?> 

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href ='assets/css/styles.css' type ='text/css' rel='stylesheet'/>
    <link href ='assets/css/input.css' type ='text/css' rel='stylesheet'/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div>
        <nav>
            <div class="logo">CloutChasingClothing</div>
            <input type="checkbox" id="click">
            <label for="click" class="menu-btn"><i class="fas fa-bars"></i></label>
                <ul>
                    <li><a class="active" href="index.php">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Feedback</a></li>
                    <?php 
                    if ($_SESSION) {
                        if ($_SESSION['id']) {
                            echo '<li><a href="?action=logout">Logout</a></li>';
                            if (isset($_GET['action'])) {
                                session_destroy();
                                header("location:index.php");
                            }
                        } 
                    } else {
                        echo '<li><a href="login.php">Login</a></li>';
                        echo '<li><a href="register.php">Register</a></li>';
                    }
                    
                    ?>    
                        <div><li><a href="cart.php"class="fa fa-shopping-cart"></a></li></div>
                        <div class="cart-nav">
                        <div class="item-numb"><li><a>0</a></li></div>
                        </div>
               </ul>
        </nav>
    </div>  


            <!-- Modal -->


    <!-- <div class="header">
        <div class="container">
            <div class="row">
            
                <div class="col-2">
                    <img src="assets/images/image1.png" alt="img" height="950px">

                </div>
            </div>
        </div>
    </div> -->

    <!-- <div>
        <h1 class="title">CATEGORIES</h1>
    </div>
        <div class="categories">
            <div>
                
                <div class ="row">
                    <div class="col-3">
                        <img src="assets/images/category-1.jpg" >
                    </div>
                    <div class="col-3">
                        <img src="assets/images/category-2.jpg" >
                    </div>
                    <div class="col-3">
                        <img src="assets/images/category-3.jpg" >
                    </div>
                </div>
            </div>
        </div> -->

    