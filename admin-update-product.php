<?php 
    include 'includes/sidebar.php';
    include 'config/functions.php';
?>
<!-- Page content wrapper-->

                <!-- Page content-->
                <div class="container-fluid">
                      <div class ="container">
                        <form action="admin-update-process-product.php" method="POST" enctype="multipart/form-data">
                            <table  class="table table-striped table-hover table-dark">
                            <thead>
                            <th>Update Product</th>
                                <tbody>
                                <?php foreach ($product->getSingleProduct($_GET['id']) as $product): ?>
                                   
                                        <th scope="row" >Product ID</th>
                                        <td><input type="text"  readonly name="product_id" value="<?php echo $product['product_id']; ?>"></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">Image</th>
                                        <td><input type="file" name="image" id="image value="<?php echo $product['image']; ?>"><label><?php echo $product['image']; ?></label></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">Product Name</th>
                                        <td><input type="text" name="product_name" value="<?php echo $product['product_name']; ?>"></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">Category</th>
                                        <td><input type="text" name="category_id" value="<?php echo $product['category_id']; ?>"></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">Price</th>
                                        <td><input type="text" name="price" value="<?php echo $product['price']; ?>"></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">Quantity</th>
                                        <td><input type="text" name="quantity" value="<?php echo $product['quantity']; ?>"></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">Description</th>
                                        <td><textarea type="text" name="description"><?php echo $product['description']; ?></textarea> </td>
                                        </tr>
                                        <?php endforeach; ?>
                                        <td><button type="submit" name="updateProduct">Submit</button> </td>
                                </tbody>
                            </thead>
                            </table>
                        </form>
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
  
 



