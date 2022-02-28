<?php 
    include 'config/functions.php';
    include 'includes/header2.php';
    
?>
<div class="homepage">
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-2 header_container-image">
                    <h1 class="title">ACCOUNT DETAILS</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="container">
        <section style="background-color: #eee;">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-4">
                        <div class="card-body text-center">
                            <?php foreach ($user->getUserProfile($_SESSION['id']) as $user): ?>
                            <h5 class="my-3"><?php echo $user['username']; ?></h5>
                            <div class="d-flex justify-content-center mb-2">
                         
                            </div>
                        </div>
                        </div>
                        <div class="card mb-4 mb-lg-0">
                        <div class="card-body p-0">
                            <ul class="list-group list-group-flush rounded-3">
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fas fa-money-check-alt"></i>
                                <p class="mb-0"><a  class ="btn btn-dark" href="customer-orders.php">ORDERS</a></p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fas fa-shopping-cart"></i>
                                <p class="mb-0"><a  class ="btn btn-dark" href="cart.php">CART</a></p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <i class="fa fa-edit"></i>
                            <p class="mb-0"><a  class ="btn btn-dark" href="user-profile-edit.php">EDIT PROFILE</a></p>
                            </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                
                    <div class="col-lg-8">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Full Name</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?php echo $user['first_name']; ?> <?php echo $user['last_name']; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Email</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?php echo $user['email']; ?> </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Phone</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?php echo $user['contact']; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Gender</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?php echo $user['gender']; ?> </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Birthdate</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?php echo $user['birthdate']; ?> </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
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

