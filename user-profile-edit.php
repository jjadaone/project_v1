<?php 
    include 'config/functions.php';
    include 'includes/header2.php';
    
?>
<link rel="stylesheet" type="text/css" href="assets/css/profile-edit.css">
<div class="homepage">
    <div class="edit-box">
        <div class="edit-details">
                    <div class="text">
                        <h1 class="title">EDIT DETAILS</h1>
                    </div>
        </div>
        <div class="edit-details2">
            <form action="user-profile-update-process.php" method="POST">
            <div class="profile">
                
                <section>
                
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
                                    <!--<li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <i class="fa fa-edit"></i>
                                    <p class="mb-0"><a  class ="btn btn-dark" href="cart.php">EDIT PROFILE</a></p>
                                    </li>-->
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                        <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                                        <p class="mb-0">clothchasing</p>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                        <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                                        <p class="mb-0">clothchasing</p>
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
                                                <input name="first_name" value="<?php echo $user['first_name']; ?>"></input>
                                                <input  name="last_name"value="<?php echo $user['last_name']; ?>"></input>
                                                
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Email</p>
                                            </div>
                                            <div class="col-sm-9">
                                            <input name="email" value="<?php echo $user['email']; ?> " readonly></input>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Phone</p>
                                            </div>
                                            <div class="col-sm-9">
                                            <input name="contact" value="<?php echo $user['contact']; ?> "></input>
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
                                            <input name="birthdate" type ="date"value="<?php echo $user['birthdate']; ?>"></input>
                                            </div>
                                        
                                            
                                        </div>
                                        
                                    </div>
                                
                                </div>
                                <?php endforeach; ?>
                                <button type="submit" name="updateUser" class="float-end">Submit</button> 

                            </div>
                        
                    
                        </form>
                        </div>
                
                </section>
                </div>
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

<?php include 'includes/footer.php'; ?>