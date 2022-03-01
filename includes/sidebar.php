<!DOCTYPE html>
<?php
    !isset($_SESSION) ? session_start() : null;
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href ='assets/css/toastr.min.css' type ='text/css' rel='stylesheet'/>
    <link href ='assets/css/sidebar.css' type ='text/css' rel='stylesheet'/>
    <link href ='assets/css/input.css' type ='text/css' rel='stylesheet'/>
    <script src="assets/js/toastr.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
    <body>
    <?php
    if(isset($_SESSION['message'])): ?>
        <div class="alert alert-<?=$_SESSION['msg_type']?>">
        <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
        unset($_SESSION['msg_type']);
        ?>
    </div>
    <?php endif?>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div  class="border border-dark" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light"><img src="assets/images/cc/cc-logo-black.png" height="60px" alt="logo"></div>
                    <div class="list-group list-group-flush ">
                    <a class="list-group-item list-group-item-action list-group-item-dark p-4" href="admin-index.php"><i class="fa fa-dashboard" style="font-size:30px;"></i> Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-4" href="admin-show-orders.php"><i class='fas fa-shopping-bag' style='font-size:30px'></i></i>Orders</a>
                    <div class="list-group-item list-group-item-action list-group-item-dark p-4">
                        <div class="btn-group dropend">
                            <a class="btn dropdown-toggle" role="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                            <i class="fa fa-product-hunt" style="font-size:30px;" aria-hidden="true"></i>roduct</a>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                            <li><a class="dropdown-item" href="admin-show-product.php">Product Details</a></li>
                            <li><a class="dropdown-item" href="admin-new-product.php"><i class="fa fa-plus" style="font-size:30px;" aria-hidden="true"></i> Add Product</a></li>    
                        </ul>
                        </div>
                        </div>
                    <div class="list-group-item list-group-item-action list-group-item-light p-4">
                        <div class="btn-group dropend">
                            <a class="btn dropdown-toggle" role="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                            <i class="fas fa-list-alt" style="font-size:30px;"></i>Category</a>
                            </a>
                        <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                            <li><a class="dropdown-item" href="admin-show-category.php"></i> Categories</a></li>
                            <li><a class="dropdown-item" href="admin-new-category.php"><i class="fa fa-plus" style="font-size:30px;" aria-hidden="true"></i> Add Category</a></li>    
                        </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle"><i class="fas fa-bars"></i></button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="admin-index.php">Home</a></li>
                                <?php 
                                    if ($_SESSION) {
                                        if ($_SESSION['id']) {
                                            echo '<li  class="nav-item"><a class="nav-link" href="admin-index.php?action=logout">Logout</a></li>';
                                            if (isset($_GET['action'])) {
                                                session_destroy();
                                                header("location:index.php");
                                            }
                                        } 
                                    } else {
                                        echo '<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>';
                                        echo '<li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>';
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </nav>