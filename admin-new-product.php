<?php ob_start(); include 'includes/sidebar.php';include 'config/functions.php';?>

        <div class="container-fluid">
                <body>
                    <div class ="container">
                        <form action="admin-new-product.php" method="POST">
                            <table  class="table table-striped table-hover table-dark">
                            <thead>
                            <th>Create New Product</th>
                                <tbody>
                                        <th scope="row"><label for="new-product">Product name</label></th>
                                        <td><input type="text" name="product_name" required></td>
                                        </tr>
                                        <tr>
                                        <th scope="row"><label for="category">Category</label></th>
                                        <td><input type="text" name="category_id" required></td>
                                        </tr>
                                        <tr>
                                        <th scope="row"><label for="price">Price</label></th>
                                        <td><input type="text" name="price"required></td>
                                        </tr>
                                        <tr>
                                        <th scope="row"><label for="quantity">Quantity</label></th>
                                        <td><input type="text" name="quantity"required></td>
                                        </tr>
                                        <tr>
                                        <th scope="row"><label for="description">Description</label></th>
                                        <td><textarea type="text" name="description"required></textarea></td>
                                        </tr>
                                        <tr>
                                        <th scope="row"><label for="image">Upload Image</label></th>
                                        <td><input type="file" name="image" id="image"></td>
                                        </tr>
                                        <tr>
                                        <th scope="row"></th>
                            
                                        <td><button type="submit" name="addProduct">Submit</button> </td>
                                        </tr>
                                        
                                </tbody>
                            </thead>
                            </table>
                        </form>
                    </div>
                </body>
                <?php
                    if (isset($_POST['addProduct'])) {
                        
                        $product_name = $_POST['product_name'];
                        $category_id = $_POST['category_id'];
                        $price = $_POST['price'];
                        $quantity = $_POST['quantity'];
                        $description = $_POST['description'];
                        // $image = $_POST['image'];


                        $data = [
                            'product_name' => $product_name,
                            'category_id' => $category_id,
                            'price' => $price,
                            'quantity' => $quantity,
                            'description' => $description,
                            // 'image' => $image,
                        ];

                        $product->addProduct($data);
                        $_SESSION['message'] = "Product added succesfully!";
                        $_SESSION['msg_type'] = "success";
                        header("location: admin-new-product.php");
                    }?>
                </div>
            </div>
        </div>
            <!-- Bootstrap core JS-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script>           window.addEventListener('DOMContentLoaded', event => {

            // Toggle the side navigation
            const sidebarToggle = document.body.querySelector('#sidebarToggle');
            if (sidebarToggle) {
                // Uncomment Below to persist sidebar toggle between refreshes
                // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
                //     document.body.classList.toggle('sb-sidenav-toggled');
                // }
                sidebarToggle.addEventListener('click', event => {
                    event.preventDefault();
                    document.body.classList.toggle('sb-sidenav-toggled');
                    localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
                });
            }
            
            });</script>
</body>
  


